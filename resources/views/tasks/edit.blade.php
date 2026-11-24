<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>Edit Task</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Task Title:</label><br>
    <input type="text" name="title" value="{{ old('title', $task->title) }}"><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="pending" {{ old('status', $task->status) === 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="done" {{ old('status', $task->status) === 'done' ? 'selected' : '' }}>Done</option>
    </select><br><br>

    <label>Task Date:</label><br>
    <input type="date" name="task_date" value="{{ old('task_date', $task->task_date->format('Y-m-d')) }}"><br><br>

    <button type="submit">Update Task</button>
</form>

<p><a href="{{ route('tasks.list') }}">Back to Task List</a></p>

</body>
</html>
