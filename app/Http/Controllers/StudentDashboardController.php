<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        return view('student.dashboard.index');
    }

    public function book()
    {
        return view('student.book.index');
    }
}
