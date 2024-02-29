<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminFunctionsController extends Controller
{
    /*
    public function delete($task){
        dd('hi');
        Task::find($task)->delete();
        return 'deleted';
    }
    public function editTask($task){

    }
       */
    public function viewAddedTasks(){
        $userId = Auth::user()->id;
        $task = Task::getPostByUserId($userId);

        return view('tasks.added-tasks', compact('task'));
    }

 
    public function createTask(Request $request) {
        $incomingFields = $request->validate([
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
        
   
        return redirect("/admin/dashboard");
    }
    
    public function addTask(){
        return view('auth\add-task-form');
    }


    
}
