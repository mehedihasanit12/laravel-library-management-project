<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static $student, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/student-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newStudent($request)
    {
        self::$student = new Student();

        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->password = bcrypt($request->password);
        if (file_exists($request->file('image')))
        {
            self::$student->image = Student::getImageUrl($request);
        }
        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->save();
    }

    public static function updateStudent($request, $id)
    {
        self::$student = Student::find($id);

        self::$student->name = $request->name;
        self::$student->email = $request->email;
        if ($request->password)
        {
            self::$student->password = bcrypt($request->password);
        }

        if (file_exists($request->file('image')))
        {
            self::$student->image = Student::getImageUrl($request);
        }

        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->save();

    }
}
