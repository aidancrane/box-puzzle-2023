<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    

    public function welcome(Request $request)
    {
        $welcomeMessage = array(
            "Please familiarize yourself with the rules",
            "murder mystery 2.0",
            "Take a look at the documentation", 
            "You need the password to continue...", 
            "Its a bit boxy", 
            "I've seen better"
            );

        $welcomeMessage = $welcomeMessage[array_rand($welcomeMessage, 1)];

        if ($request->session()->has('authenticated')) {
            return view('puzzle-index');
        }

        return view('welcome')->with('welcomeMessage', $welcomeMessage);


    }

    public function checkPassword(Request $request)
    {
        $password = '714423';
        $enteredPassword = $request->input('password');

        if ($enteredPassword === $password) {
            // Password is correct, set a session or cookie to remember the user
            $request->session()->put('authenticated', true);
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Incorrect password.');
    }

    public function advancePuzzle(Request $request)
    {
        $enteredPuzzleCode = $request->input('puzzle-code');

        // Question 1
        if ($enteredPuzzleCode === '714423') {
            return redirect('/')->with('error', 'Yeah you\'ve already put that code in don\'t get too excited...');
        }

         // Question 2
         if ($enteredPuzzleCode === '396437') { 
            // Unlock the previous puzzle for the user.
            $request->session()->put('question-1', true);
            return redirect('/');
        }

        // Question 3
        if ($enteredPuzzleCode === '104920') { 
            // Unlock the previous puzzle for the user.
            $request->session()->put('question-1', true);
            $request->session()->put('question-2', true);
            return redirect('/');
        }

        // Question 4
        if ($enteredPuzzleCode === '001149') { 
            // Unlock the previous puzzle for the user.
            $request->session()->put('question-1', true);
            $request->session()->put('question-2', true);
            $request->session()->put('question-3', true);
            return redirect('/');
        }

        // Question 5
        if ($enteredPuzzleCode === '990914') { 
            // Unlock the previous puzzle for the user.
            $request->session()->put('question-1', true);
            $request->session()->put('question-2', true);
            $request->session()->put('question-3', true);
            $request->session()->put('question-4', true);
            return redirect('/');
        }


        

        return redirect()->back()->with('error', 'Puzzle code not recognized.');
    }

}
