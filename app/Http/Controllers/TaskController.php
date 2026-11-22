<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::whereDate('task_date', Carbon::today())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('home', compact('tasks'));
    }

    public function list()
    {
        $tasks = Task::orderBy('task_date', 'asc')->get();

        return view('tasks', compact('tasks'));
    }
}
