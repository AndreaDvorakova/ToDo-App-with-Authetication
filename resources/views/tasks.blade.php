@extends('layouts.master')

@section('content')

    <h2 class="text-center mt-5">To-Do List</h2>
 
       
    @foreach ($tasks as $task)
    <div class="d-flex justify-content-center mt-5">
    <form class="d-flex justify-content-center" method="POST" action="{{ route('task.edit', ['id'=>$task->id]) }}">
    {{ csrf_field() }}
    @method('PUT')
        <div class="form-group">
            <input type="text" class="form-control" value={{$task->task}} id={{$task->id}} name={{$task->id}}>
            {{-- <textarea cols="40" rows="1" id={{$task->id}} type="text" class="form-control" name={{$task->name}}>{{$task->task}}</textarea> --}}

        </div>
         
        <div class="form-group">
            <button style="cursor: pointer" type="submit" class="btn btn-outline-success">Save</button>
        </div>
    </form> 
    <form method="post" class="pull-right" action="{{ route('task.delete', ['id'=>$task->id]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
        <div class="form-group">
            <button style="cursor: pointer" type="submit" class="btn btn-outline-danger">Delete</button>
        </div> 
    </form>
    </div>
    @endforeach


    <form class="d-flex justify-content-center mt-5" method="POST" action="/tasks">
        {{ csrf_field() }}
        <div class="form-group">
            
            <input type="text" class="form-control" name="task" id="task">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-outline-secondary">Add</button>
        </div>

    </form> 
    
@endsection