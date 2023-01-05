@extends('layouts.master')

@section('content')
    
    <h2 class="text-center mt-5">Register</h2>
    <form  class="d-flex-col justify-content-center mt-5" method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group text-center mt-5">
            <button style="cursor:pointer" type="submit" class="btn btn-outline-primary btn-block mt-5">Submit</button>
        </div>
        {{-- @include('partials.formerrors') --}}
    </form>

@endsection