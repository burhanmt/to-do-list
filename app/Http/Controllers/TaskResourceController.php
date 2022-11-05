<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TaskResourceController extends Controller
{
    public function index(): View
    {
        $tasks = Task::all();
        return view('main', compact('tasks'));
    }

    public function store(CreateTaskRequest $request): RedirectResponse
    {
        $name = $request->input('name');

        $newTask = new Task();

        $newTask->name = $name;
        $newTask->save();

        return redirect(route('tasks.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task): RedirectResponse
    {
        $task->is_done = true;
        $task->save();

        return redirect(route('tasks.index'));
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect(route('tasks.index'));
    }
}
