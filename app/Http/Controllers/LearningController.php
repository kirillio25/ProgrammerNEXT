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

class LearningController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('learning.learning_list_view', ["courses" => $courses]);
    }

    public function courseDetail(Course $course)
    {        
        return view('learning.learning_detailed', ["course" => $course]);
    }

    public function moduleDetail($course_id)
    {        
        $modules = Module::where('course_id', $course_id)->get();

        return view('learning.learning_course_modules', ["modules" => $modules]);
    }

    public function submoduleDetail($module_id)
    {        
        $submodules = Submodule::where('module_id', $module_id)->get();
        $materials = Lesson::where('module_id', $module_id)->get();
        $homeWorks = HomeworkFile::where('module_id', $module_id)->get();

        return view('learning.learning_course_module_submodules', [
            'submodules' => $submodules,
            'materials' => $materials,
            'homeWorks' => $homeWorks,
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
        
        $user_id = 1;
        $homework_file_id = 1;
        // Валидация запроса
        $request->validate([
            'file' => 'required|file|mimes:zip|mimes:rar|max:2048', // Ограничиваем тип и размер файла
        ], [
            'file.required' => 'Пожалуйста, выберите файл для загрузки',
            'file.mimes' => 'Допустимые форматы: zip,rar',
            'file.max' => 'Максимальный размер файла: 2MB',
        ]);
    
        // Получаем файл из запроса
        $file = $request->file('file');
    
        // Генерируем уникальное имя для файла
        $fileName = time() . '_' . $file->getClientOriginalName();
        Log::info('uploadHomework ');
        // Сохраняем файл в указанную директорию
        $filePath = $file->storeAs('homeworkSubmissions', $fileName, 'public');
    
        Log::info('File path: ' . $request->submodule_id);
        Log::info('File path: ' . $filePath);
        // Создаем запись в базе данных
        HomeworkSubmission::create([
            'user_id' => $user_id,
            'submodule_id' => $request->submodule_id, // Укажите ID подмодуля
            'homework_file_id' => $homework_file_id,
            'path_url' => $filePath, //$fileName

        ]);
    
        return redirect()->back()->with('success', 'Homework uploaded successfully.');
    }
}
