@extends('admin.master')

@section('title')
    Add Student
@endsection

@section('body')

    <div class="bg-white shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full py-10 rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-10">
        <h1 class="font-bold text-center text-green-400 mb-4">{{session('message')}}</h1>
        <h1 class="font-bold text-center text-xl">Edit Student Form</h1>
        <form action="{{route('admin-student.update', $student->id)}}" method="POST" enctype="multipart/form-data" class="space-y-4  font-[sans-serif] text-[#333] max-w-[754px] mx-auto mt-10">
            @csrf
            @method('PUT')
            <div class="relative flex items-center">
                <input type="text" placeholder="Student Name" name="name" value="{{$student->name}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <input type="email" placeholder="Student Email" name="email" value="{{$student->email}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <input type="password" placeholder="Student Password" name="password"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <input type="number" placeholder="Student Mobile" name="mobile" value="{{$student->mobile}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <input type="file" name="image"
                       class="border w-full text-gray-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded" />

            </div>

            <div class="relative flex items-center">
                <img src="{{asset($student->image)}}" height="50" width="50" alt="">
            </div>


            <div class="relative flex items-center">
                <textarea name="address" placeholder="Student Address"
                          class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all">{{$student->address}}</textarea>

            </div>



            <button type="submit"
                    class="px-6 py-2.5 w-full !mt-8 text-sm bg-[#007bff] hover:bg-blue-600 text-white rounded active:bg-[#006bff]">Update Student</button>
        </form>
    </div>


@endsection
