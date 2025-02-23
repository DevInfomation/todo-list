<!-- resources/views/partials/header.blade.php -->

<div class="mx-auto text-7xl text-center text-white">
    <h1>Todo List</h1>
    <div>
        @unless (Auth::user()) 
            <p class="text-xl mt-5">You're currently not signed in</p> 
        
        @else
            <p>Welcome: {{Auth::user()->name}}</p>
        @endunless
    
    
    </div>
</div>
