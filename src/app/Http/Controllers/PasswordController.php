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

        return view('welcome')->with('welcomeMessage', $welcomeMessage);
    }

    public function checkPassword(Request $request)
    {
        $password = '741142';
        $enteredPassword = $request->input('password');

        dd($enteredPassword);

        if ($enteredPassword === $password) {
            // Password is correct, set a session or cookie to remember the user
            $request->session()->put('authenticated', true);

            return redirect('/index');
        }

        return redirect()->back()->with('error', 'Incorrect password.');
    }
}
