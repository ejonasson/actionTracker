<?php

namespace App\Models;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask()
    {
        return $this->tasks()->create([
            'index' => $this->getNextIndex()
        ]);
    }

    protected function getNextIndex()
    {
        return $this->tasks()->count();
    }
}
