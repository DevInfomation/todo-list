@extends('layouts.default')

@section('content')

    <div class="flex justify-center text-2xl">Welcome to the Todo List</div>

    <div class="flex justify-center text-1xl pt-2">
        <div class="mr-2">
            <a href="login">
                <button class="p-2 text-lg cursor-pointer bg-blue-500 rounded-md w-md">Login</button>
            </a>
        </div>
        <div>
            <a href="register">
                <button class="p-2 text-lg cursor-pointer bg-blue-500 rounded-md w-md">Register</button>
            </a>
        </div>
    </div>

@endsection