<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function show() 
    {
        $id = Auth::user()->id;
        $tasks = Task::where('user_id', $id)->get();
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request) 
    {
        $this->validate(request(), [
            'task' => 'required'
        ]);
        $task = new Task;
        $task->user_id = Auth::user()->id;
        $task->task = $request->task;
        $task->save();

        $id = Auth::user()->id;
        $tasks = Task::where('user_id', $id)->get();

        // return view('tasks', compact('tasks'));
        return redirect()->route('task.show');
    }

    public function edit($id, Request $request)
    {
        // $this->validate(request(), [
        //     'task' => 'required'
        // ]); 
        $task = Task::find($id);
        
        $task->task = $request->input($id);
        $task->save();
        $id = Auth::user()->id;
        $tasks = Task::where('user_id', $id)->get();
        return view('tasks', compact('tasks'));
    }

    public function delete($id) 
    {
        $task = Task::findOrFail($id);
        $task->delete();
        $id = Auth::user()->id;
        $tasks = Task::where('user_id', $id)->get();
        return view('tasks', compact('tasks'));
    }
}
