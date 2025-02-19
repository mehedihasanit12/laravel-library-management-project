<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        return view('student.dashboard.index', [
            'categories' => Category::all()
        ]);
    }

    public function book()
    {
        return view('student.book.index');
    }
}
