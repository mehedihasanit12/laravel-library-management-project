<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Session;
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

    private $student;
    public function studentLogin(Request $request)
    {
        $this->student = Student::where('email', $request->email)->first();

        if ($this->student)
        {
            if (password_verify($request->password, $this->student->password))
            {
                Session::put('id', $this->student->id);
                Session::put('name', $this->student->name);
                Session::put('email', $this->student->email);
                Session::put('image', $this->student->image);

                return redirect('/student/dashboard');
            }
            else
            {
                return back()->with('message', 'Password is invalid.');
            }
        }
        else
        {
            return back()->with('message', 'Email address is invalid.');
        }
    }

    public function studentLogout()
    {
        Session::forget('id');
        Session::forget('name');
        Session::forget('email');
        Session::forget('image');

        return redirect('/');
    }
}
