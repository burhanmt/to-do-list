<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TaskResourceController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $tasks = Task::all();
        return view('main', compact('tasks'));
    }

    /**
     * @param StoreTaskRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTaskRequest $request): RedirectResponse
    {
        $name = $request->input('name');

        $newTask = new Task();

        $newTask->name = $name;
        $newTask->save();

        return redirect(route('tasks.index'));
    }

    /**
     * @param Task $task
     * @return RedirectResponse
     */
    public function update(Task $task): RedirectResponse
    {
        $task->is_done = true;
        $task->save();

        return redirect(route('tasks.index'));
    }

    /**
     * @param Task $task
     * @return RedirectResponse
     */
    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();

        return redirect(route('tasks.index'));
    }
}
