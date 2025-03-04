@extends('student.master')

@section('title')
    Cart Page
@endsection

@section('body')


    <div class="font-sans max-w-4xl max-md:max-w-xl mx-auto p-4">
        <h1 class="text-2xl font-bold text-gray-800">Your Cart</h1>
        <div class="grid md:grid-cols-3 gap-4 mt-8">
            <h1 class="font-bold text-center text-green-400 mb-4">{{session('message')}}</h1>
            <h1 class="font-bold text-center text-red-400 mb-4">{{session('delete-message')}}</h1>
            <div class="md:col-span-2 space-y-4">
                @foreach($cart_items as $cart_item)
                <div class="flex gap-4 bg-white px-4 py-6 rounded-md shadow-[0_2px_12px_-3px_rgba(61,63,68,0.3)]">
                    <div class="flex gap-4">
                        <div class="w-28 h-28 max-sm:w-24 max-sm:h-24 shrink-0">
                            <img src='{{asset($cart_item->options->image)}}' class="w-full h-full object-contain" />
                        </div>

                        <div class="flex flex-col gap-4">
                            <div>
                                <h3 class="text-sm sm:text-base font-bold text-gray-800">{{$cart_item->name}}</h3>
                                <p class="text-sm font-semibold text-gray-500 mt-2 flex items-center gap-2">Author: {{$cart_item->options->author}}</p>
                            </div>

                            <div class="mt-auto flex items-center gap-3">
                                <button type="button"
                                        class="flex items-center justify-center w-5 h-5 bg-gray-400 outline-none rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 124 124">
                                        <path d="M112 50H12C5.4 50 0 55.4 0 62s5.4 12 12 12h100c6.6 0 12-5.4 12-12s-5.4-12-12-12z" data-original="#000000"></path>
                                    </svg>
                                </button>
                                <span class="font-bold text-sm leading-[18px]">{{$cart_item->qty}}</span>
                                <button type="button"
                                        class="flex items-center justify-center w-5 h-5 bg-gray-800 outline-none rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-2 fill-white" viewBox="0 0 42 42">
                                        <path d="M37.059 16H26V4.941C26 2.224 23.718 0 21 0s-5 2.224-5 4.941V16H4.941C2.224 16 0 18.282 0 21s2.224 5 4.941 5H16v11.059C16 39.776 18.282 42 21 42s5-2.224 5-4.941V26h11.059C39.776 26 42 23.718 42 21s-2.224-5-4.941-5z" data-original="#000000"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto flex flex-col">
                        <div class="flex items-start gap-4 justify-end">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill-gray-400 hover:fill-pink-600 inline-block" viewBox="0 0 64 64">
                                    <path d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z" data-original="#000000"></path>
                                </svg>
                            </a>

                            <a href="{{route('cart.delete', ['id' => $cart_item->rowId])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 cursor-pointer fill-gray-400 hover:fill-red-600 inline-block" viewBox="0 0 24 24">
                                    <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" data-original="#000000"></path>
                                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000"></path>
                                </svg>
                            </a>
                        </div>
                        <h3 class="text-sm sm:text-base font-bold text-gray-800 mt-auto">TK {{$cart_item->price}}</h3>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="bg-white rounded-md px-4 py-6 h-max shadow-[0_2px_12px_-3px_rgba(61,63,68,0.3)]">


                <div class="mt-8 space-y-2">
                    <a href="{{route('student-book-issue')}}" class="block text-center text-sm px-4 py-2.5 w-full font-semibold tracking-wide bg-gray-800 hover:bg-gray-900 text-white rounded-md">Apply To Brrow</a>
                    <a href="{{route('student-dashboard')}}" class="block text-center text-sm px-4 py-2.5 w-full font-semibold tracking-wide bg-transparent hover:bg-gray-100 text-gray-800 border border-gray-300 rounded-md">Continue Select Book </a>
                </div>

            </div>
        </div>
    </div>

@endsection
