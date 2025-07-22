<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f4f4;
        }
        .sidebar {
            width: 200px;
            background: #2c3e50;
            height: 100vh;
            position: fixed;
            color: white;
            padding-top: 20px;
        }
        .sidebar h2 {
            text-align: center;
        }
        .sidebar ul {
            list-style: none;
            padding-left: 0;
        }
        .sidebar ul li {
            padding: 10px;
            text-align: center;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
        }
        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Admin</h2>
    <ul>
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li><a href="{{route('users')}}">Users</a></li>
        <li><a href="{{route('rooms')}}">Rooms</a></li>
        <li><a href="{{route('messages')}}">Messages</a></li>
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
</div>

<div class="main-content">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is the admin area where you can manage your app.</p>
</div>

</body>
</html>
