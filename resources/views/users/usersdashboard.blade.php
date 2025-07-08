<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background: #fff;
            height: 100vh;
            padding: 20px 0;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }

        .sidebar h2 {
            text-align: center;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .sidebar ul li.active, .sidebar ul li:hover {
            background: #ff5a00;
            color: white;
        }

        .sidebar ul li.active a, .sidebar ul li:hover a {
            color: white;
        }

        .main-content {
            flex: 1;
            padding: 40px;
        }

        .main-content h1 {
            margin-bottom: 30px;
        }

        .property-options {
            display: flex;
            gap: 30px;
            justify-content: center;
        }

        .property-card {
            border: 1px solid #ccc;
            padding: 20px;
            width: 200px;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
        }

        .property-card:hover {
            border-color: #ff5a00;
        }

        .property-card img {
            width: 100px;
            height: 100px;
        }

        .property-card p {
            margin-top: 10px;
            color: #ff5a00;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="sidebar">
        <h2>Hello {{ Auth::user()->name ?? 'User' }}</h2>
        <ul>
            <li><a href="#">🏠 Dashboard</a></li>
            <li class="active"><a href="#">🏡 POST FOR FREE</a></li>
            <li><a href="#">❤️ Wishlist</a></li>
            <li><a href="#">👤 Profile</a></li>
            <li><a href="#">📝 Write Review</a></li>
            <li><a href="#">🔑 Change Password</a></li>
            <li><a href="#">🔓 Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Choose Your Property</h1>
        <div class="property-options">
            <div class="property-card">
                <img src="{{ asset('images/house.png') }}" alt="Residential Property">
                <p>Residential Property</p>
            </div>
            <div class="property-card">
                <img src="{{ asset('images/building.png') }}" alt="Commercial Property">
                <p>Commercial Property</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
