<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Session;

class StudentDashboardController extends Controller
{
    public function index()
    {
        if (Session::get('id'))
        {
            return view('student.dashboard.index', [
                'categories' => Category::all()
            ]);
        }
        else
            return redirect('/student-login')->with('message', 'Please Login First');
    }

    public function book()
    {
        return view('student.book.index');
    }
}
