@extends('admin.master')

@section('title')
    Manage Borrow Book
@endsection

@section('body')
    <div class="font-[sans-serif] overflow-x-auto mt-10">
        <h1 class="font-bold text-center text-green-400 mb-4">{{session('message')}}</h1>
        <h1 class="font-bold text-center text-red-400 mb-4">{{session('delete-message')}}</h1>
        <table class="min-w-full bg-white border-collapse border border-gray-400 text-center">
            <thead class="bg-gray-800 whitespace-nowrap">
            <tr>
                <th class="border border-gray-300 p-4 text-sm font-medium text-white">
                    SL
                </th>
                <th class="border border-gray-300 p-4  text-sm font-medium text-white">
                    Student Name
                </th>
                <th class="border border-gray-300 p-4  text-sm font-medium text-white">
                    Student Image
                </th>
                <th class="border border-gray-300 p-4 text-sm font-medium text-white">
                    Borrow Date
                </th>
                <th class="border border-gray-300 p-4 text-sm font-medium text-white">
                    Return Date
                </th>
                <th class="border border-gray-300 p-4 text-sm font-medium text-white">
                    Borrow Status
                </th>
                <th class="border border-gray-300 p-4 text-sm font-medium text-white">
                    Borrow Book Count
                </th>
                <th class="border border-gray-300 p-4 text-sm font-medium text-white">
                    Actions
                </th>
            </tr>
            </thead>

            <tbody class="whitespace-nowrap">
            @foreach($book_issues as $book_issue)
                <tr class="even:bg-blue-50">
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        {{$loop->iteration}}
                    </td>
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        {{$book_issue->student->name}}
                    </td>
                    <td class=" p-4 text-sm text-black flex justify-center">
                        <img src="{{asset($book_issue->student->image)}}" height="50" width="50" alt="">
                    </td>
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        {{ date("F j, Y, g:i a", $book_issue->issue_timestamp)}}
                    </td>
                    <td class=" p-4 text-sm text-black flex justify-center">
                        {{$book_issue->return_date}}
                    </td>
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        <span class="bg-orange-500 px-2 py-1 text-xs text-white rounded">{{$book_issue->issue_status}}</span>
                    </td>
                    <td class="border border-gray-300 p-4 text-sm text-black">
                        {{$book_issue->issue_book_count}}
                    </td>
                    <td class="p-4 flex justify-center items-center">
                        <a href="{{route('book-issue.show', $book_issue->id)}}" class="mr-4" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-blue-500 hover:fill-blue-700"
                                 viewBox="0 0 24 24">
                                <path d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 12c-3.313 0-6-2.686-6-6s2.687-6 6-6 6 2.686 6 6-2.687 6-6 6zm0-10c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4zm-7-3h2v-2h2v2h2v2h-2v2h-2v-2h-2v-2z"/>
                            </svg>

                        </a>
                        <a href="{{route('book-issue.edit', $book_issue->id)}}" class="mr-4" title="Edit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
                                 viewBox="0 0 348.882 348.882">
                                <path
                                    d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                    data-original="#000000" />
                                <path
                                    d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                        <form action="{{route('book-issue.destroy', $book_issue->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are You Sure?')" class="mr-4" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                                    <path
                                        d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                        data-original="#000000" />
                                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                          data-original="#000000" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
