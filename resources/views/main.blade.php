@extends('layouts.default')

@section('content')

    @auth
        <p>Congrats, you have logged in: {{$user->name}}</p>
    @endauth

    <h1 class="text-4xl ml-10 mt-10">Enter your task here:</h1>

    <form action="/logout" method="POST">
        @csrf

        <button>Logout</button>
    </form>

@endsection