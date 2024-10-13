<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class LearningController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        $vars = [
            "courses" => $courses,
        ];
        return view('learning.learning_list_view', $vars);
    }

    public function coursDetailed($id)
    {

        $course = Course::find($id);

        if (!$course) {
            abort(404);
        }

        $vars = [
            "course" => $course,
        ];
        
        return view('learning.learning_detailed', $vars);
    }
}
