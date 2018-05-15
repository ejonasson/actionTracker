<?php

namespace Tests\Unit;

use App\Models\Task;
use App\Models\TaskList;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class TaskListTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;
    /**
     * @test
     * @group taskList
     */
    function task_lists_can_be_created_for_user()
    {
        $user = factory(User::class)->create();

        $list = $user->addTaskList();

        $this->assertInstanceOf(TaskList::class, $list);
        $this->assertEquals($user->id, $list->user_id);
        $this->assertEquals(1, $user->taskLists()->count());
    }

    /**
     * @test
     * @group taskList
     */
    function tasks_can_be_created_for_list()
    {
        $list = factory(TaskList::class)->create();

        $task = $list->addTask();

        $this->assertInstanceOf(Task::class, $task);
        $this->assertEquals(1, $list->tasks()->count());
        $this->assertEquals(0, $task->index);
    }
}
