<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //fillable ensures that the only inputs accepted by this model are whatever is stored in the fillable array.
    protected $fillable = [
        'title',
        'description',
        'owner_id'
    ];

    public function tasks() {
        return $this->hasMany(Task::class);
    }
    public function addTask($task) {
        $this->tasks()->create($task);
    }
}
