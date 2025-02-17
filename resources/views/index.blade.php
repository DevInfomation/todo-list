@extends('layouts.default')

@section('content')

    <div class="flex justify-center text-2xl">Welcome to the Todo List</div>

    <div class="flex justify-center text-1xl pt-2">
        <div class="mr-2">
            <button class="p-2 text-lg cursor-pointer bg-blue-500 rounded-md w-md">Login</button>
        </div>
        <div>
            <button class="p-2 text-lg cursor-pointer bg-blue-500 rounded-md w-md">Register</button>
        </div>
    </div>

@endsection