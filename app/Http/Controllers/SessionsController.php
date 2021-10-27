<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Logged out, Goodbye!');
    }

    public function create()
    {
        return view('session.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required:email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($attributes)) {
            return redirect('/')->with('success', 'Welcome back!');
        }
        return back()
            ->withInput()
            ->withErrors(['email' => 'Your email could not be verified']);

    }
}
