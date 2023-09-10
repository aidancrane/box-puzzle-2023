<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuzzleController extends Controller
{

    public function question1(Request $request)
    {
        return view('question1.question');
    }

    public function answer1(Request $request)
    {
        //return view('question1.question');
    }


}
