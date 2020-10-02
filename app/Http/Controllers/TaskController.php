<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    //
    public function index() {
        // DB access
        $tasks = Task::all();
        return view('task.index')->with('tasks',  $tasks);

    }

    public function show( $task) {
        $task = Task::find($task);
        return view('task.show')->with('task', $task);
    }

    public function create()
    {
        return view('task.create');
    }


    // TaskStoreRequest permet la validation sur les champs, ici champ nom (voir Http/Requests/)
    public function store (TaskStoreRequest $request)
    {

         //$request->name;
         // dd($request->all());  // afficher le contenu du formulaire qui a été posté

         $task = Task::create($request->all());
         return view('task.show')->with('task', $task);
    }


    public function destroy($task)
    {
        $task = Task::find($task);
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
