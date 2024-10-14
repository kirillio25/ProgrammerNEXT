<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

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
}
