<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TaskResourceController extends Controller
{
    public function index(): View
    {
        $tasks = Task::all();
        return view('main', compact('tasks'));
    }

    public function store(StoreTaskRequest $request): RedirectResponse
    {
        $name = $request->input('name');

        $newTask = new Task();

        $newTask->name = $name;
        $newTask->save();

        return redirect(route('tasks.index'));
    }

    public function update(Task $task): RedirectResponse
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
