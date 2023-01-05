<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>To-Do App</title>
    

</head>
<body >
    <nav class="col-12 d-flex justify-content-end p-4 bg-dark">
        @if (auth()->check()) 
                    <a href="/logout"><button class="btn btn-outline-primary mr-3">Logout</button></a>
                    <a href="/tasks"><button class="btn btn-outline-secondary">Tasks</button></a>
                @else
                <a href="/login"><button class="btn btn-outline-primary mr-3">Login</button></a>
                <a href="/register"><button class="btn btn-outline-secondary">Register</button></a>
        @endif
    </nav>
    <main class="col-6 mx-auto">
        @yield('content')
    </main>
</body>
</html>