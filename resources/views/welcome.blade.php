@extends('layouts.master')

@section('content')
    {{-- <body class="antialiased"> --}}
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> --}}
        <div class="d-flex flex-column justify-content-center align-items-center text-center align-center sm:items-center py-4 sm:pt-0" style="height: 100vh">
            <h1>To-Do List App</h1>
            <p>Welcome to the to-do list app! If you are already registered in please log in otherwise continue to registration form.</p>
            <div>
                @if (auth()->check()) 
                    <a href="/logout"><button class="btn btn-outline-primary">Logout</button></a>
                @else
                <a href="/login"><button class="btn btn-outline-primary">Login</button></a>
                <a href="/register"><button class="btn btn-outline-secondary">Register</button></a>
                @endif
            </div>
        </div>

    {{-- </body> --}}

@endsection
    