@extends('layouts.default')

@section('content')

    <form action="/edit-task/{{$task->id}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="text-4xl ml-10 mt-10">Edit Post</h1>
    
        <div class="border-4 border-solid rounded-md border-sky-500 mt-5 pt-3 pb-3">
            <div class="flex flex-col items-center justify-content">
                <input type="text" name="title" value="{{$task->title}}" class="mt-4 mb-4 border rounded p-2">
                <textarea name="description" class="mt-4 mb-4 border rounded p-2">{{$task->description}}</textarea>
                <button class="mt-2 border rounded p-2 bg-blue-900 hover:bg-sky-700 transition duration-300 text-xl">Save Changes</button>
            </div>
        </div>
    </form>

@endsection