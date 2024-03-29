<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{

    public function update(Task $task) {

        if (request()->has('completed')) {
            $task->complete();
        }
        else {
            $task->incomplete();
        }
        return back();
    }

    public function store(Project $project) {

        $project->addTask(request()->validate(['description' => 'required']));

        return back();
    }
    public function destroy(Task $task) {
        $task->delete();
        return back();
    }
}
