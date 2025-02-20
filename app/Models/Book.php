<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static $image, $imageName, $directory, $imageUrl, $book;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/book-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newBook($request)
    {
        self::$book = new Book();
        self::$book->category_id = $request->category_id;
        self::$book->publisher = $request->publisher;
        self::$book->author_id = $request->author_id;
        self::$book->name = $request->name;
        self::$book->regular_price = $request->regular_price;
        self::$book->selling_price = $request->selling_price;
        self::$book->stock = $request->stock;
        self::$book->status = $request->status;
        self::$book->short_description = $request->short_description;
        self::$book->long_description = $request->long_description;
        self::$book->pages = $request->pages;
        self::$book->isbn = $request->isbn;
        self::$book->image = self::getImageUrl($request);
        self::$book->feature_status = $request->feature_status;

        self::$book->save();

    }

    public static function updateBook($request, $id)
    {
        self::$book = Book::find($id);

        if ($request->file('image'))
        {
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$book->image;
        }

        self::$book->category_id = $request->category_id;
        self::$book->publisher = $request->publisher;
        self::$book->author_id = $request->author_id;
        self::$book->name = $request->name;
        self::$book->regular_price = $request->regular_price;
        self::$book->selling_price = $request->selling_price;
        self::$book->stock = $request->stock;
        self::$book->status = $request->status;
        self::$book->short_description = $request->short_description;
        self::$book->long_description = $request->long_description;
        self::$book->pages = $request->pages;
        self::$book->isbn = $request->isbn;
        self::$book->image = self::$imageUrl;
        self::$book->feature_status = $request->feature_status;

        self::$book->save();
    }

    public static function deleteBook($id)
    {
        self::$book = Book::find($id);

        if (self::$book->image)
        {
            unlink(self::$book->image);
        }
        self::$book->delete();
    }

    public static function search($query)
    {
        return self::where('name', 'LIKE', "%{$query}%")
            ->orWhere('short_description', 'LIKE', "%{$query}%");
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
