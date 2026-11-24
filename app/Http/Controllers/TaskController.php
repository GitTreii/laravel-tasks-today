<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Mail\TaskCompletedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::active()
            ->today()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('tasks'));
    }

    public function list()
    {
        $tasks = Task::active()
            ->orderBy('task_date', 'asc')
            ->get();

        return view('tasks', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:pending,done',
            'task_date' => 'required|date'
        ]);

        Task::create($validated);

        return redirect('/tasks')
            ->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        abort_if($task->is_archived, 404);

        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        abort_if($task->is_archived, 404);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:pending,done',
            'task_date' => 'required|date'
        ]);

        $wasDone = $task->status === 'done';

        $task->update($validated);

        if (!$wasDone && $task->status === 'done') {
            $recipient = config('mail.task_recipient');

            if ($recipient) {
                Mail::to($recipient)->send(
                    new TaskCompletedMail($task)
                );
            }
        }

        return redirect('/tasks')
            ->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        abort_if($task->is_archived, 404);

        $task->update([
            'is_archived' => true
        ]);

        return redirect('/tasks')
            ->with('success', 'Task archived successfully.');
    }
}
