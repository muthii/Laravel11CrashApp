<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources\css\app.css','resources\js\app.js'])
</head>
<body class="bg-slate-100 text-slate-900">
    <header class="bg-slate-800 shadow-lg">
        <nav>
            <a href="{{route('home')}}" class="nav-link">Home</a>
        </nav>
        <div class="flex items-right gap-4">
            <a href="#" class="nav-link">Login</a>
            <a href="{{route('register')}}" class="nav-link">Register</a>
        </div>
    </header>
    <main class="py-8 px-4 mx-auto max-w-sreen-lg">
    {{$slot}}
    </main>
</body>
</html>