<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller {
    public function update(Task$task) {
        $task->update([ 'completed'=> request()->has('completed')]);
        returnback();
    }

    public function store(Project $project) {
        $attributes=request()->validate(['description'=> 'required|min:3']);
        $project->addTask($attributes);
        /*
        Task::create([
        'project_id' => $project->id,
        'description' => request('description')
        ]);
        */
        return back();
    }
}
