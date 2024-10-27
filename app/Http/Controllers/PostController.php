<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{ 
    public function __invoke()
    {

        $persons = [
            [
                'id' => 1,
                'name' => 'ivan',
                'age' => 25,
            ],
            [
                'id' => 2,
                'name' => 'ivan2',
                'age' => 25,
            ],
            [
                'id' => 3,
                'name' => 'ivan3',
                'age' => 25,
            ],
        ];

        return $persons;
    }
}
