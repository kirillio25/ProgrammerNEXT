<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log; // Log::info('File path: ' . $fullPath);

use App\Models\Course;
use App\Models\Module;
use App\Models\Submodule;
use App\Models\Lesson;
use App\Models\HomeworkFile;
use App\Models\HomeworkSubmission;
use App\Models\HomeworkStatuse;
use App\Models\Comment;


class LearningController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('learning.learning_list_view', ["courses" => $courses]);
    }

    public function courseDetail(Course $course)
    {
        // $comments = Comment::where('course_id', $course->id)->get();
        $comments = Comment::with('user:id,name') // Получаем только id и name пользователя
    ->where('course_id', $course->id)
    ->get();
    
        return view('learning.learning_detailed', 
        ["course" => $course,
        'comments' => $comments]);
    }

    public function moduleDetail($course_id)
    {
        $modules = Module::where('course_id', $course_id)->get();

        return view('learning.learning_course_modules', ["modules" => $modules]);
    }

    public function submoduleDetail($module_id)
    {
        $user_id = 1;

        $submissions = [];
        $submodules = Submodule::where('module_id', $module_id)->get();
        $materials = Lesson::where('module_id', $module_id)->get();

        $homeWorks = HomeworkFile::where('module_id', $module_id)->get();

        $homeWorkStatuses = HomeworkStatuse::pluck('name', 'id');
        
        // Загрузил пользовать задание или нет
        foreach ($submodules as $submodule) {
            $submissionRecord = HomeworkSubmission::where('user_id', $user_id)
                ->where('submodule_id', $submodule->id)
                ->first();
            
            // Если запись найдена, добавляем её и статус в массив


            if ($submissionRecord) {

                $submissions[$submodule->id] = [
                    'record' => $submissionRecord,
                    'status_id' => $submissionRecord->status_id,
                ];
            } else {
                $submissions[$submodule->id] = [
                    'record' => null,
                    'status_id' => null,
                ];
            }
        }

        
        return view('learning.learning_course_module_submodules', [
            'submodules' => $submodules,
            'materials' => $materials,
            'homeWorks' => $homeWorks,
            'submissions' => $submissions,
        ]);
    }

    public function downloadFile($id)
    {
        $homeworkFile = HomeworkFile::findOrFail($id);

        $filePath = 'homeworkFiles/' . $homeworkFile->path_url;
        $fullPath = storage_path('app/public/' . $filePath);

        if (Storage::disk('public')->exists($filePath)) {
            return response()->download($fullPath);
        }

        return redirect()->back()->with('error', 'Файл не найден');
    }

    public function uploadHomework(Request $request)
    {
        // Log::info(json_encode($request->all()));
        // Log::info('uploadHomework: submodule_id=' . $request->input('submodule_id'));

        $user_id = 1;
        $status_id = 1;

        $request->validate([
            'file' => 'required|file|mimes:zip,rar|max:2048', // Ограничиваем тип и размер файла
        ], [
            'file.required' => 'Пожалуйста, выберите файл для загрузки',
            'file.mimes' => 'Допустимые форматы: zip,rar',
            'file.max' => 'Максимальный размер файла: 2MB',
        ]);

        // Получаем файл из запроса
        $file = $request->file('file');
        $lastId_homeworksudmission = HomeworkSubmission::latest('id')->first()->id + 1;


        $fileName = implode('_', [
            $lastId_homeworksudmission,
            $user_id,
            $request->submodule_id,
            time()
        ]) . '.' . $file->getClientOriginalExtension();

        $filePath = $file->storeAs('homeworkSubmissions', $fileName, 'public');

        $isHomeWork = HomeworkSubmission::where('user_id', $user_id)
            ->where('submodule_id', $request->submodule_id)
            ->exists();

        if($isHomeWork){
            Log::info($request->submodule_id);

            HomeworkSubmission::where('user_id', $user_id)
            ->where('submodule_id', $request->submodule_id)
            ->update([
                'path_url' => $filePath, 
                'deadline' => 0,  
                'status_id' => 1,  
                'updated_at' => now(), 
            ]);
        }
        else{
            HomeworkSubmission::create([
                'user_id' => $user_id,
                'submodule_id' => $request->submodule_id, // Укажите ID подмодуля
                'path_url' => $filePath, //$fileName
                'status_id' => $status_id,
    
            ]);
        }
       

        return redirect()->back()->with('success', 'Файл не загружен.');
    }
}
