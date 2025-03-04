<?php

namespace App\Http\Controllers;

use App\Models\BookIssue;
use Illuminate\Http\Request;

class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.book-issue.index', [
            'book_issues' => BookIssue::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookIssue $bookIssue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookIssue $bookIssue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookIssue $bookIssue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookIssue $bookIssue)
    {
        //
    }
}
