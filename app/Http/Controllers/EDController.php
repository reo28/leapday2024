<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class EDController extends Controller
{
    public function editTask($task){

        $task = Task::find($task);
        return view('tasks.edit-task', compact('task'));
    }

    public function updateTask(Request $request, $task){

        $incomingFields = $request->all();
        $task = Task::find($incomingFields['id']);
        $task->title = $incomingFields['title'];
        $task->body = $incomingFields['body'];
        $task->start_date = $incomingFields['start_date'];
        $task->end_date = $incomingFields['end_date'];

        $task->save();
        return redirect("/admin/dashboard");
    }

    public function deleteTask(Request $request, Task $task){

        $task->delete();
        return redirect()->back();
    }
}



/*        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $incomingFields['user_id'] =auth()->id();
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['start_date'] = strip_tags($incomingFields['start_date']);
        $incomingFields['end_date'] = strip_tags($incomingFields['end_date']);
        $newPost = Task::create($incomingFields);
*/