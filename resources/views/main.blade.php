@extends('layouts.default')

@section('content')

    <h1 class="text-4xl ml-10 mt-10">Enter your task here:</h1>
    

    <form action="/logout" method="POST">
        @csrf

        <button>Logout</button>
    </form>

@endsection