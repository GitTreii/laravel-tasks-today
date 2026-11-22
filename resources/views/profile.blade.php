<!DOCTYPE html>
<html>
<head>
    <title>Profile - Tasks for Today</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>User Profile</h1>

@if ($user)
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Full Name:</strong> {{ $user->full_name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}</p>
@else
    <p>No user profile found.</p>
@endif

</body>
</html>
