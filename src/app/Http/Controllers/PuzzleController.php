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
        return view('puzzles.question1');
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
        return view('puzzles.question2');
    }

    public function answer2(Request $request)
    {
        $enteredPuzzleCode = strtolower($request->input('puzzle-answer'));

        if ($enteredPuzzleCode === '221551') {
            // Unlock a puzzle for the user.
            $request->session()->put('question-1', true);
            $request->session()->put('question-2', true);
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Puzzle code not recognized.');
    }

    public function question3(Request $request)
    {
        return view('puzzles.question3');
    }

    public function answer3(Request $request)
    {
        $enteredPuzzleCode = strtolower($request->input('puzzle-answer'));

        if ($enteredPuzzleCode === '4446') {
            // Unlock a puzzle for the user.
            $request->session()->put('question-1', true);
            $request->session()->put('question-2', true);
            $request->session()->put('question-3', true);
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Puzzle code not recognized.');
    }

    public function question4(Request $request)
    {
        return view('puzzles.question4');
    }

    public function answer4(Request $request)
    {
        $enteredPuzzleCode = strtolower($request->input('puzzle-answer'));

        if ($enteredPuzzleCode === '00574971') {
            // Unlock a puzzle for the user.
            $request->session()->put('question-1', true);
            $request->session()->put('question-2', true);
            $request->session()->put('question-3', true);
            $request->session()->put('question-4', true);
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Puzzle code not recognized.');
    }

    public function question5(Request $request)
    {
        return view('puzzles.question5');
    }

    public function answer5(Request $request)
    {
        $enteredPuzzleCode = strtolower($request->input('puzzle-answer'));

        if ($enteredPuzzleCode === '445143443678') {
            // Unlock a puzzle for the user.
            $request->session()->put('question-1', true);
            $request->session()->put('question-2', true);
            $request->session()->put('question-3', true);
            $request->session()->put('question-4', true);
            $request->session()->put('question-5', true);
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Puzzle code not recognized.');
    }

    public function congratulations(Request $request)
    {
        return view('congratulations');
    }

}
