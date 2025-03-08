<?php

namespace App\Http\Controllers;

use App\Models\BookIssue;
use App\Models\IssuDetail;
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
        return view('admin.book-issue.detail', [
            'book_issue_detail' => BookIssue::find($bookIssue->id),
            'book_issue_books' => IssuDetail::where('book_issue_id', $bookIssue->id)->get()
        ]);
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
