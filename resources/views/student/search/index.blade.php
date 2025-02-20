@extends('student.master')

@section('title')
    Search Page
@endsection

@section('body')

        <div class="font-[sans-serif] bg-gray-100 mt-10 mb-10">
            <div class="p-4 mx-auto lg:max-w-7xl md:max-w-4xl sm:max-w-xl max-sm:max-w-sm">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mb-6 sm:mb-10">Search For : "{{$search}}"</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6">

                        @foreach($books as $book)
                            <div class="bg-white rounded p-4 cursor-pointer hover:-translate-y-1 transition-all relative">
                                <div class="mb-4 bg-gray-100 rounded p-2">
                                    <img src="{{asset($book->image)}}" alt="Product 1"
                                         class="aspect-[33/35] w-full object-contain" />
                                </div>

                                <div>
                                    <div class="flex gap-2">
                                        <h5 class="text-base text-xl font-bold text-gray-800">{{$book->name}}</h5>
                                        <h6 class="text-base text-sm {{$book->stock==0 ? 'text-red-800' : 'text-green-800'}} font-bold ml-auto">{{$book->stock==0 ? 'Not Available' : 'Available'}}</h6>
                                    </div>
                                    <p class="text-gray-500 text-[13px] mt-2">{{$book->author->name}}</p>
                                    <div class="flex items-center gap-2 mt-4">
                                        <div
                                            class="{{$book->stock==0 ? 'hidden' : ''}} bg-pink-100 hover:bg-pink-200 w-12 h-9 flex items-center justify-center rounded cursor-pointer" title="Wishlist">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16px" class="fill-pink-600 inline-block" viewBox="0 0 64 64">
                                                <path
                                                    d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                                    data-original="#000000"></path>
                                            </svg>
                                        </div>
                                        <a href="{{route('cart.add', ['id' => $book->id])}}" class="flex items-center justify-center text-sm px-2 h-9 font-semibold w-full bg-blue-600 hover:bg-blue-700 text-white tracking-wide ml-auto outline-none border-none rounded" {{$book->stock==0 ? 'hidden' : ''}}>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>

            </div>
        </div>






@endsection
