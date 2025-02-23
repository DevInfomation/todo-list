@extends('layouts.default')

@section('content')

    <div class="ml-[15%] mr-[15%]">
        <h1 class="text-4xl ml-10 mt-10">Enter your task here:</h1>
        
        <div class="border-4 border-solid rounded-md border-sky-500 mt-5">
            <form action="#">
                @csrf
                <input name="title" type="text" placeholder="Enter your title here" class="mt-4 mb-4 border rounded p-2">
                <input name="description" type="text" placeholder="Enter your description here" class="mt-4 mb-4 border rounded p-2">
                <button class="text-lg cursor-pointer bg-blue-500 rounded-md w-md">Create Task</button>
            </form>
        </div>
    
        <form action="/logout" method="POST">
            @csrf
    
            <button>Logout</button>
        </form>

    </div>

@endsection