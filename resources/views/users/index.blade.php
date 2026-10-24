<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>User List</h1>

    <a href="/customers">View Customers</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Full Name</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>