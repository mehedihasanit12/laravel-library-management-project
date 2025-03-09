<?php

namespace App\Models;

use Carbon\Carbon;
use Cart;
use Illuminate\Database\Eloquent\Model;
use Session;

class BookIssue extends Model
{
    public static $bookissue;
    public static function newIssue()
    {
        self::$bookissue = new BookIssue();

        self::$bookissue->student_id = Session::get('id');
        self::$bookissue->issue_date = Carbon::now();
        self::$bookissue->issue_timestamp = Carbon::now()->timestamp;
        self::$bookissue->issue_book_count = Cart::content()->count();
        self::$bookissue->save();

        return self::$bookissue->id;

    }

    public static function updateIssue($request, $id)
    {
        self::$bookissue = BookIssue::find($id);

        self::$bookissue->issue_date = $request->issue_date;
        self::$bookissue->issue_timestamp = Carbon::parse($request->issue_date)->timestamp;
        self::$bookissue->return_date = $request->return_date;
        self::$bookissue->return_timestamp = Carbon::parse($request->return_date)->timestamp;
        self::$bookissue->issue_status = $request->issue_status;

        self::$bookissue->save();
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
