<?php

namespace App\Http\Controllers;

use App\Models\BookIssue;
use App\Models\Category;
use App\Models\IssuDetail;
use Illuminate\Http\Request;

class StudentBookIssueController extends Controller
{

    public function successPage()
    {
        return view('student.cart.success');
    }

    private $book_issue_id;
    public function IssueBook()
    {
        $this->book_issue_id = BookIssue::newIssue();
        IssuDetail::newIssueDetail($this->book_issue_id);
        return redirect('/student/success');
    }
}
