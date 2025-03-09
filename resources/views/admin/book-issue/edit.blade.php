@extends('admin.master')

@section('title')
    Edit Borrow Request
@endsection

@section('body')


    <div class="bg-white shadow-[0_4px_12px_-5px_rgba(0,0,0,0.4)] w-full py-10 rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-10">
        <h1 class="font-bold text-center text-green-400 mb-4">{{session('message')}}</h1>
        <h1 class="font-bold text-center text-xl">Edit Borrow Form</h1>
        <form action="{{route('book-issue.update', $book_issue->id)}}" method="POST" enctype="multipart/form-data" class="space-y-4  font-[sans-serif] text-[#333] max-w-[754px] mx-auto mt-10">
            @csrf
            @method('PUT')
            <label for="" class="font-bold">Borrow Status</label>
            <div class="relative flex items-center">
                <select   name="issue_status"
                          class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all">
                    <option value="">--Select Borrow Status--</option>
                        <option value="Pending" @selected($book_issue->issue_status == 'Pending' ) >Pending</option>
                        <option value="Issued" @selected($book_issue->issue_status == 'Issued' ) >Issued</option>
                        <option value="Returned" @selected($book_issue->issue_status == 'Returned' ) >Returned</option>
                        <option value="Cancel" @selected($book_issue->issue_status == 'Cancel' ) >Cancel</option>
                </select>
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Borrow Date</label>
            </div>
            <div class="relative flex items-center">
                <input type="date" placeholder="" name="issue_date" value="{{date('Y-m-d', $book_issue->issue_timestamp)}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Return Date</label>
            </div>
            <div class="relative flex items-center">
                <input type="date" placeholder="" name="return_date" value="{{date('Y-m-d', $book_issue->return_timestamp)}}"
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <div class="relative flex items-center">
                <label for="" class="font-bold">Fine</label>
            </div>
            <div class="relative flex items-center">
                <input type="number" name="fine" value="{{$book_issue->student->fine}}" readonly
                       class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent w-full text-sm border outline-[#007bff] rounded transition-all" />
            </div>

            <button type="submit"
                    class="px-6 py-2.5 w-full !mt-8 text-sm bg-[#007bff] hover:bg-blue-600 text-white rounded active:bg-[#006bff]">Update Borrow</button>
        </form>
    </div>


@endsection
