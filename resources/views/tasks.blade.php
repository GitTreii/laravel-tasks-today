<!DOCTYPE html>
<html>
<head>
    <title>All Tasks - Tasks for Today</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>All Tasks</h1>

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
            <td colspan="3">No tasks available.</td>
        </tr>
    @endforelse

</table>

</body>
</html>
