<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentAuthController extends Controller
{
    public function login()
    {
        return view('student.auth.login');
    }

    public function register()
    {
        return view('student.auth.register');
    }
}
