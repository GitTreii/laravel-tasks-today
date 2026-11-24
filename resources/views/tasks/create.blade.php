<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>Create New Task</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <label>Task Title:</label><br>
    <input type="text" name="title" value="{{ old('title') }}"><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="pending" {{ old('status', 'pending') === 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="done" {{ old('status') === 'done' ? 'selected' : '' }}>Done</option>
    </select><br><br>

    <label>Task Date:</label><br>
    <input type="date" name="task_date" value="{{ old('task_date', date('Y-m-d')) }}"><br><br>

    <button type="submit">Save Task</button>
</form>

<p><a href="/tasks">Back to Task List</a></p>

</body>
</html>
