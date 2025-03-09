<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookIssue;
use App\Models\IssuDetail;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.book-issue.index', [
            'book_issues' => BookIssue::latest()->get()
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
        return view('admin.book-issue.edit', [
            'book_issue' => $bookIssue
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public $issue_details;
    public function update(Request $request, BookIssue $bookIssue)
    {
        BookIssue::updateIssue($request, $bookIssue->id);

        if ($request->issue_status == 'Issued')
        {
            $this->issue_details = IssuDetail::where('book_issue_id', $bookIssue->id)->get();
            foreach ($this->issue_details as $issue_detail)
            {
                $book = Book::find($issue_detail->book_id);

                $book->stock = max(0, $book->stock-1);
                $book->save();
            }
        }

        if ($request->issue_status == 'Returned')
        {

            $return_date = Carbon::parse($request->return_date);
            $today = Carbon::today();


            $fine = 0;

            if ($today->greaterThan($return_date)) {

                $days_late = $return_date->diffInDays($today);
                $fine = $days_late * 50;
                $student = Student::find($bookIssue->student_id);
                $student->fine = max(0, $fine);
                $student->save();
            }

            $this->issue_details = IssuDetail::where('book_issue_id', $bookIssue->id)->get();
            foreach ($this->issue_details as $issue_detail)
            {
                $book = Book::find($issue_detail->book_id);

                $book->stock = $book->stock+1;
                $book->save();
            }
        }


        return redirect('/book-issue')->with('message', 'Book Issue Update Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookIssue $bookIssue)
    {
        //
    }
}
