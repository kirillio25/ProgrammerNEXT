<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\Module;
use App\Models\Submodule;
use App\Models\Lesson;

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

        return view('learning.learning_course_module_submodules', ["submodules" => $submodules]);
    }
}
