<?php

namespace App\Models;

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
        self::$bookissue->issue_date = date('Y-m-d H:i:s');;
        self::$bookissue->issue_timestamp = strtotime(date('Y-m-d H:i:s'));
        self::$bookissue->issue_book_count = Cart::content()->count();
        self::$bookissue->save();

        return self::$bookissue->id;

    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
