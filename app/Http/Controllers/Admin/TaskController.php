<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Sentinel;

class TaskController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TaskRequest $request)
    {
        $request->merge(['user_id' => Sentinel::getUser()->id]);
        $task = new Task($request->except('_token'));
        $task->save();

        return $task->id;
    }

    /**
     * @param  Task    $task
     * @param  Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Task $task, Request $request)
    {
        $request->merge(['user_id' => Sentinel::getUser()->id]);
        $task->update($request->except('_method', '_token'));
    }

    /**
     * Delete the given Driver.
     *
     * @param Task $task
     */
    public function delete(Task $task)
    {
        $task->delete();
    }

    /**
     * Ajax Data
     *
     * @return array;
     */
    public function data()
    {
        return Task::where('user_id', Sentinel::getUser()->id)
            ->orderBy('finished', 'ASC')
            ->orderBy('task_deadline', 'DESC')
            ->get()
            ->toArray();
    }
}
