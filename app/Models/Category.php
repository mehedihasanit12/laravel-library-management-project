<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $category, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newCategory($request)
    {
        self::$category = new Category();

        self::$category->name = $request->name;
        self::$category->status = $request->status;
        self::$category->image = Category::getImageUrl($request);
        self::$category->description = $request->description;
        self::$category->save();
    }
}
