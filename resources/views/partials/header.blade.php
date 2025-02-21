<!-- resources/views/partials/header.blade.php -->

<div class="mx-auto text-7xl text-center text-white">
    <h1>Todo List</h1>
</div>

<div>
    @if (!Auth::user()) 
        <p>You're currently not signed in</p> 
    @endif


</div>