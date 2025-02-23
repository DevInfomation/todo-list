@extends('layouts.default')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-1 text-center text-2xl/9 font-bold tracking-tight text-white mb-4">Sign in to your account</h2>
    </div>
    
    <form action="{{route('register')}}" method="POST">
        @csrf

        <div class="flex flex-col items-center justify-content min-h-screen">
            <input type="text" name="name" placeholder="Enter name..."  class="mt-4 mb-4 border rounded p-2">
            <input type="text" name="email" placeholder="Enter email..."  class="mb-4 border rounded p-2">
            <input type="password" name="password" placeholder="Enter password..."  class="border rounded p-2">
            <button class="mt-7 border rounded p-2 bg-blue-900 hover:bg-sky-700 transition duration-300 text-xl">Submit</button>
        </div>
    </form>


@endsection