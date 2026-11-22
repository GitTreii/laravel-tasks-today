<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>Tasks for Today</h1>

<p>Date: {{ now()->format('F d, Y') }}</p>

<table border="1" cellpadding="10">
    <tr>
        <th>Task Title</th>
        <th>Status</th>
        <th>Task Date</th>
    </tr>

    @forelse ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ ucfirst($task->status) }}</td>
            <td>{{ $task->task_date->format('Y-m-d') }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="3">No tasks scheduled for today.</td>
        </tr>
    @endforelse

</table>

</body>
</html>
