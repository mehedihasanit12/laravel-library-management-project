<?php

namespace App\Models;

use Cart;
use Illuminate\Database\Eloquent\Model;

class IssuDetail extends Model
{
    public static $issue_detail;

    public static function newIssueDetail($book_issue_id)
    {
        foreach (Cart::content() as $item)
        {
            self::$issue_detail = new IssuDetail();

            self::$issue_detail->book_issue_id = $book_issue_id;
            self::$issue_detail->book_id = $item->id;
            self::$issue_detail->book_name = $item->name;
            self::$issue_detail->book_price = $item->price;

            self::$issue_detail->save();
        }

    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
