@extends('student.master')

@section('title')
    Student | Home
@endsection

@section('body')

{{--    Hero section --}}

    <div class="relative font-sans before:absolute before:w-full before:h-full before:inset-0 before:bg-black before:opacity-50 before:z-10">
        <img src="https://img.freepik.com/free-photo/abundant-collection-antique-books-wooden-shelves-generated-by-ai_188544-29660.jpg?t=st=1739981578~exp=1739985178~hmac=60d05372252fedc16ffe6f24f0be5814003082e0eeed744a97017151414fe7c1&w=996" alt="Banner Image" class="absolute inset-0 w-full h-full object-cover" />

        <div class="min-h-[350px] relative z-20 h-full max-w-6xl mx-auto flex flex-col justify-center items-center text-center text-white p-6">
            <h2 class="sm:text-4xl text-2xl font-bold mb-6">Unlock a World of Knowledge at Your Fingertips</h2>
            <p class="sm:text-lg text-base text-center text-gray-200">Discover a vast collection of books, research papers, and digital resources tailored to fuel your curiosity and academic growth. Whether you're a student, a researcher, or an avid reader, our library provides a seamless experience to explore, learn, and expand your knowledge. Start your journey today!</p>

            <button
                type="button"
                class="mt-12 bg-transparent text-white text-base py-3 px-6 border border-white rounded-lg hover:bg-white hover:text-black transition duration-300">
                See All Book
            </button>
        </div>
    </div>

@foreach($categories as $category)

<div class="font-[sans-serif] bg-gray-100 mt-10 mb-10">
    <div class="p-4 mx-auto lg:max-w-7xl md:max-w-4xl sm:max-w-xl max-sm:max-w-sm">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-gray-800 mb-6 sm:mb-10">{{$category->name}}</h2>

        <div class="owl-carousel owl-theme">
            @foreach($category->books as $book)
            <div class="item bg-white rounded p-4 cursor-pointer hover:-translate-y-1 transition-all relative">
                <div class="mb-4 bg-gray-100 rounded p-2">
                    <img src="{{asset($book->image)}}" alt="Product 1"
                         class="aspect-[33/35] w-full object-contain" />
                </div>

                <div>
                    <div class="flex gap-2">
                        <h5 class="text-base text-xl font-bold text-gray-800">{{$book->name}}</h5>
                        <h6 class="text-base text-sm font-bold ml-auto"><span class="{{$book->stock==0 ? 'bg-red-600' : 'bg-green-600'}} px-2 py-1 text-xs text-white rounded">{{$book->stock==0 ? 'Not Available' : 'Available'}}</span></h6>
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
                        <a href="{{route('cart.add', ['id' => $book->id])}}" class="flex items-center justify-center text-sm px-2 h-9 font-semibold w-full bg-blue-600  text-white tracking-wide ml-auto outline-none border-none rounded {{$book->stock==0 ? 'hover:bg-red-700' : 'hover:bg-blue-700'}} {{$book->stock==0 ? 'bg-red-600' : ''}}" >{{$book->stock==0 ? 'Not Available' : 'Add To Cart'}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endforeach




@endsection
