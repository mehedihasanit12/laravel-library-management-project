@extends('admin.master')

@section('title')
    Edit Book
@endsection

@section('body')


    <div class="bg-white shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full py-10 rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-10">
        <h1 class="font-bold text-center text-green-400 mb-4">{{session('message')}}</h1>
        <h1 class="font-bold text-center text-xl">Edit Book Form</h1>
        <form action="{{route('book.update', $book->id)}}" method="POST" enctype="multipart/form-data" class="space-y-4  font-[sans-serif] text-[#333] max-w-[754px] mx-auto mt-10">
            @csrf
            @method('PUT')
            <label for="" class="font-bold">Book Category</label>
            <div class="relative flex items-center">
                <select   name="category_id"
                          class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all">
                    <option value="">--Select Book Category--</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @selected($book->category_id == $category->id) >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Author</label>
            </div>
            <div class="relative flex items-center">
                <select   name="author_id"
                          class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all">
                    <option value="">--Select Book Author--</option>
                    @foreach($authors as $author)
                        <option value="{{$author->id}}" @selected($book->author_id == $author->id)>{{$author->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Name</label>
            </div>
            <div class="relative flex items-center">
                <input type="text" placeholder="Book Name" name="name" value="{{$book->name}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Publisher</label>
            </div>
            <div class="relative flex items-center">
                <input type="text" placeholder="Book Publisher" name="publisher" value="{{$book->publisher}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Regular Price</label>
            </div>
            <div class="relative flex items-center">
                <input type="number" placeholder="Book Price" name="regular_price" value="{{$book->regular_price}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Selling Price</label>
            </div>
            <div class="relative flex items-center">
                <input type="number" placeholder="Book Price" name="selling_price" value="{{$book->selling_price}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Stock</label>
            </div>
            <div class="relative flex items-center">
                <input type="number" placeholder="Stock Amount" name="stock" value="{{$book->stock}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book ISBN</label>
            </div>
            <div class="relative flex items-center">
                <input type="text" placeholder="Book ISBN" name="isbn" value="{{$book->isbn}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Pages</label>
            </div>
            <div class="relative flex items-center">
                <input type="number" placeholder="Book Pages" name="pages" value="{{$book->pages}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Feature Status</label>
            </div>
            <div class="relative flex items-center">
                <input type="number" placeholder="Book Feature Status" name="feature_status" value="{{$book->feature_status}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>


            <div class="space-y-6">
                <div class="flex items-center">
                    <h1 class="font-bold">Status:-</h1>
                    <label class="text-sm text-black ml-4"><input type="radio" value="1" name="status" class="w-5 h-5"
                                                                  {{$book->status==1 ? 'checked' : ''}}/> Published</label>
                    <label class="text-sm text-black ml-4"><input type="radio" value="0" name="status" class="w-5 h-5" {{$book->status==0 ? 'checked' : ''}}  /> Unpublished</label>
                </div>
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Image</label>
            </div>
            <div class="relative flex items-center">
                <input type="file" name="image"
                       class="border w-full text-gray-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded" />
            </div>

            <div class="relative flex items-center">
                <img src="{{asset($book->image)}}" height="50" width="50" alt="">
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Short Description</label>
            </div>
            <div class="relative flex items-center">
                <textarea name="short_description" placeholder="Book Short Description"
                          class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all">{{$book->short_description}}</textarea>

            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Book Long Description</label>
            </div>
            <div class="relative flex items-center">
                <textarea name="long_description" placeholder="Book Long Description"
                          class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all">{{$book->long_description}}</textarea>

            </div>

            <button type="submit"
                    class="px-6 py-2.5 w-full !mt-8 text-sm bg-[#007bff] hover:bg-blue-600 text-white rounded active:bg-[#006bff]">Update Book</button>
        </form>
    </div>


@endsection
