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

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

@auth
    <p>
        <a href="{{ route('tasks.create') }}">New Task</a>
    </p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
@else
    <p><a href="{{ route('login') }}">Login</a></p>
@endauth

<table border="1" cellpadding="10">
    <tr>
        <th>Task Title</th>
        <th>Status</th>
        <th>Task Date</th>
        @auth
            <th>Actions</th>
        @endauth
    </tr>

    @forelse ($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ ucfirst($task->status) }}</td>
            <td>{{ $task->task_date->format('Y-m-d') }}</td>

            @auth
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>

                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Archive this task?')">Archive</button>
                    </form>
                </td>
            @endauth
        </tr>
    @empty
        <tr>
            <td colspan="4">No tasks available.</td>
        </tr>
    @endforelse
</table>

</body>
</html>
