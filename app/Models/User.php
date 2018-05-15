<?php

namespace App\Models;

use App\Models\TaskList;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function taskLists()
    {
        return $this->hasMany(TaskList::class);
    }

    public function addTaskList()
    {
        return $this->taskLists()->create();
    }

    public function getTaskList(string $id)
    {
        return $this->taskLists()->whereId($id)->get();
    }
}
