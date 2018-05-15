<?php

namespace App\Models;

use App\Models\TaskList;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'index'];

    public function taskList()
    {
        return $this->belongsTo(TaskList::class);
    }
}
