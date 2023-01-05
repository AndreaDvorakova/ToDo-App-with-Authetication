@extends('layouts.master')

@section('content')

    <h2 class="text-center mt-5">Log In</h2>
    
    <form class="d-flex-col justify-content-center mt-5" method="POST" action="/login">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group text-center mt-5">
            <button style="cursor:pointer" type="submit" class="btn btn-outline-primary btn-block mt-5">Login</button>
        </div>
        {{-- @include('partials.formerrors') --}}
    </form>

@endsection