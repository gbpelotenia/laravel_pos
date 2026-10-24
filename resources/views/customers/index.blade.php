<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
</head>
<body>
    <h1>Customer List</h1>

    <a href="/users">View Users</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->full_name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>