<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: #f1f1f1;
            font-family: Arial, sans-serif;
        }

        .signup-container {
            max-width: 400px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
        }

        label {
            display: block;
            margin: 15px 0 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            border: none;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .login-link {
            text-align: center;
            margin-top: 15px;
        }

        .login-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h2>Create Account</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Full Name</label>
        <input type="text" name="name" required>

        <label for="email">Email Address</label>
        <input type="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Sign Up</button>
    </form>

    <div class="login-link">
        Already have an account? <a href="{{ route('login') }}">Log In</a>
    </div>
</div>

</body>
</html>

