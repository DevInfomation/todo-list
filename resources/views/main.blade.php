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
        
        @foreach ($tasks as $task)
            <div class="border-4 border-solid rounded-md border-sky-500 mt-5 p-5">
                @php $timeOfCreatedTask = $task->created_at->format('H:i'); @endphp
                <p>This is the id: {{$task->id}}</p> 
                <p>This is the title: {{$task->title}}</p> 
                <p>This is the description: {{$task->description}}</p> 
                <p>This is the user_id: {{$task->user_id}}</p> 
                <p>The time the task was created was at: {{$timeOfCreatedTask}}</p>
                <button class="mt-2 border rounded p-2 bg-blue-900 hover:bg-sky-700 transition duration-300 text-xl"><a href="/edit-task/{{$task->id}}">Edit</a></button>
                <form action="/delete-task/{{$task->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="mt-2 border rounded p-2 bg-blue-900 hover:bg-sky-700 transition duration-300 text-xl">Delete</button>
                </form>
            </div>
        @endforeach

    
        <form action="/logout" method="POST">
            @csrf
    
            <button class="mt-7 border rounded p-2 bg-blue-900 hover:bg-sky-700 transition duration-300 text-xl">Logout</button>
        </form>
    </div>

@endsection