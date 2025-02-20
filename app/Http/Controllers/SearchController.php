<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('student.search.index');
    }
    public function search(Request $request)
    {
        $books = Book::search($request->search)->get();
        return view('student.search.index', [
            'books' => $books,
            'search' => $request->search
        ]);
    }
}
