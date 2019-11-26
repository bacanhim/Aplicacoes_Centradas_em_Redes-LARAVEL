<?php namespace App;
use Illuminate\ Database\ Eloquent\ Model;

class Task extends Model {
    protected $guarded=[];

    public function project() {
        return $this ->belongsTo(Project::class);
    }

    public function addTask($task) {
        $this->tasks()->create($task);
        // adiciona o project_id automaticamente
    }
}
