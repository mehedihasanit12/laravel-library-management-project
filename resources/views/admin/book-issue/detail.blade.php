@extends('admin.master')

@section('title')
    Detail Borrow Book
@endsection

@section('body')
    <div class="font-[sans-serif] overflow-x-auto mt-10">
        <h1 class="font-bold text-center text-green-400 mb-4">{{session('message')}}</h1>
        <h1 class="font-bold text-center text-red-400 mb-4">{{session('delete-message')}}</h1>
        <table class="min-w-full bg-white border-collapse border border-gray-400 text-left">
            <tr class="bg-gray-50">
                <td class="border border-gray-300 p-4 text-sm text-black">
                    Issue ID
                </td>
                <td class="border border-gray-300 p-4 text-sm text-black">
                    {{$book_issue_detail->id}}
                </td>
            </tr>
            <tr class="bg-gray-50">
                <td class="border border-gray-300 p-4 text-sm text-black">
                    Student Name
                </td>
                <td class="border border-gray-300 p-4 text-sm text-black">
                    {{$book_issue_detail->student->name}}
                </td>
            </tr>
            <tr class="bg-gray-50">
                <td class="border border-gray-300 p-4 text-sm text-black">
                    Borrow Date
                </td>
                <td class="border border-gray-300 p-4 text-sm text-black">
                    {{ date("F j, Y, g:i a", $book_issue_detail->issue_timestamp)}}
                </td>
            </tr>
            <tr class="bg-gray-50">
                <td class="border border-gray-300 p-4 text-sm text-black">
                    Return Date
                </td>
                <td class=" p-4 text-sm text-black flex justify-center">
                    {{$book_issue_detail->return_date}}
                </td>
            </tr>
            <tr class="bg-gray-50">
                <td class="border border-gray-300 p-4 text-sm text-black">
                    Borrow Status
                </td>
                <td class="border border-gray-300 p-4 text-sm text-black">
                    <span class="bg-orange-500 px-2 py-1 text-xs text-white rounded">{{$book_issue_detail->issue_status}}</span>
                </td>
            </tr>
            <tr class="bg-gray-50">
                <td class="border border-gray-300 p-4 text-sm text-black">
                    Borrow Book Count
                </td>
                <td class="border border-gray-300 p-4 text-sm text-black">
                    {{$book_issue_detail->issue_book_count}}
                </td>
            </tr>

        </table>

        <table class="min-w-full bg-white border-collapse border border-gray-400 text-center mt-10">
            <thead class="bg-gray-800 whitespace-nowrap">
            <tr>
                <th class="border border-gray-300 p-4 text-sm font-medium text-white">
                    SL
                </th>
                <th class="border border-gray-300 p-4  text-sm font-medium text-white">
                    Book Name
                </th>
                <th class="border border-gray-300 p-4  text-sm font-medium text-white">
                    Book Stock
                </th>
            </tr>
            </thead>
            <tbody class="whitespace-nowrap">
            @foreach($book_issue_books as $book_issue_book)
                <tr class="even:bg-blue-50">
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        {{$loop->iteration}}
                    </td>
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        {{$book_issue_book->book_name}}
                    </td>
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        {{$book_issue_book->book->stock}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
