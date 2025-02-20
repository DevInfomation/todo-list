<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/app.css">
    @vite('resources/css/app.css')
    <title>Todo List</title>
</head>
<body>

    <header class="p-[2rem] font-sans tracking-[0.25em]">
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>