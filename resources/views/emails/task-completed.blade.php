<!DOCTYPE html>
<html>
<head>
    <title>Task Completed</title>
</head>
<body>

<h1>Task Completed!</h1>

<p>A task has been successfully marked as done.</p>

<p><strong>Task Title:</strong> {{ $task->title }}</p>

<p><strong>Status:</strong> {{ ucfirst($task->status) }}</p>

<p><strong>Task Date:</strong> {{ $task->task_date->format('F d, Y') }}</p>

<p>This is an automatic notification from the Tasks for Today Management System.</p>

</body>
</html>
