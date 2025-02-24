@extends('layouts.default')

@section('content')

    <div class="ml-[15%] mr-[15%]">
        <div class="border-4 border-solid rounded-md border-sky-500 mt-5">
            <h1 class="text-4xl ml-10 mt-10">Enter your task here:</h1>
            <form action="{{ route('create-task') }}" method="POST">
                <div class="flex flex-col items-center justify-content">
                    @csrf
                    <input name="title" type="text" placeholder="Enter your title here" class="mt-4 mb-4 border rounded p-2">
                    <textarea name="description" placeholder="Enter your description..." class="mt-4 mb-4 border rounded p-2"></textarea>
                    <button class="mt-7 mb-7 border rounded p-2 bg-blue-900 hover:bg-sky-700 transition duration-300 text-xl">Create Task</button>
                </div>
            </form>
                
        </div>
    
        <form action="/logout" method="POST">
            @csrf
    
            <button class="mt-7 border rounded p-2 bg-blue-900 hover:bg-sky-700 transition duration-300 text-xl">Logout</button>
        </form>
    </div>

@endsection