@extends('layouts.default')

@section('content')

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-1 text-center text-2xl/9 font-bold tracking-tight text-white">Sign in to your account</h2>
    </div>
    
    <form action="register" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Enter name..."  class="">
        <input type="text" name="email" placeholder="Enter email..."  class="">
        <input type="password" name="password" placeholder="Enter password..."  class="">
    </form>


@endsection