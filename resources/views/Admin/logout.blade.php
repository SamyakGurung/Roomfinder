<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .logout-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .btn-logout {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="logout-container">
    <h3>Admin Logout</h3>
    <p>Are you sure you want to log out?</p>
    
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger btn-logout">Logout</button>
    </form>

    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary btn-logout">Cancel</a>
</div>

</body>
</html>
