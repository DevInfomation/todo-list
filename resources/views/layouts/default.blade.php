<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Todo List</title>
</head>
<body>

    <header class="p-[3rem] bg-blue-300 font-sans tracking-[0.25em]">
        @include('partials.header')
    </header>

    <main class="bg-gray-300">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>