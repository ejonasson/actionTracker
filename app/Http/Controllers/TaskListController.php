<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskListController extends Controller
{
    public function index()
    {
        $taskLists = Auth::user()->taskLists()->get();

        return view('taskList.index', compact('taskLists'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taskList = Auth::user()->addTaskList();

        return redirect("/task-list/{$taskList->id}");
    }
}
