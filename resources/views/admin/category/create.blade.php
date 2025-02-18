@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')


    <div class="bg-white shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full py-10 rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-10">
        <h1 class="font-bold text-center text-green-400 mb-4">{{session('message')}}</h1>
        <h1 class="font-bold text-center text-xl">Add Category Form</h1>
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" class="space-y-4  font-[sans-serif] text-[#333] max-w-[754px] mx-auto mt-10">
            @csrf
            <div class="relative flex items-center">
                <input type="text" placeholder="Category Name" name="name"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="space-y-6">
                <div class="flex items-center">
                    <h1 class="font-bold">Status:-</h1>
                    <label class="text-sm text-black ml-4"><input type="radio" value="1" name="status" class="w-5 h-5" checked/> Published</label>
                    <label class="text-sm text-black ml-4"><input type="radio" value="0" name="status" class="w-5 h-5"  /> Unpublished</label>
                </div>



            </div>

            <div class="relative flex items-center">
                    <input type="file" name="image"
                           class="border w-full text-gray-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded" />

            </div>


            <div class="relative flex items-center">
                <textarea name="description" placeholder="Category Description"
                          class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all"></textarea>

            </div>



            <button type="submit"
                    class="px-6 py-2.5 w-full !mt-8 text-sm bg-[#007bff] hover:bg-blue-600 text-white rounded active:bg-[#006bff]">Submit</button>
        </form>
    </div>


@endsection
