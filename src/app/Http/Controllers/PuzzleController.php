<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuzzleController extends Controller
{

    public function rules(Request $request)
    {
        return view('rules-index');
    }

    public function question1(Request $request)
    {
        return view('puzzles.1.question');
    }

    public function answer1(Request $request)
    {
        $enteredPuzzleCode = strtolower($request->input('puzzle-answer'));

        if ($enteredPuzzleCode === 'ben is a bad friend') {
            // Unlock a puzzle for the user.
            $request->session()->put('question-1', true);
            return redirect('/');
        }

        if ($enteredPuzzleCode === '714423') {
            return redirect()->back()->with('error', 'No it isn\'t quite that easy.');
        }

        return redirect()->back()->with('error', 'Puzzle code not recognized.');
    }

    
    public function question2(Request $request)
    {
        return view('puzzles.2.question');
    }

    public function answer2(Request $request)
    {
        $enteredPuzzleCode = strtolower($request->input('puzzle-answer'));

        if ($enteredPuzzleCode === 'ben is a bad friend') {
            // Unlock a puzzle for the user.
            $request->session()->put('question-2', true);
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Puzzle code not recognized.');
    }


}
