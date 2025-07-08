<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Room Finder</title>
  <link rel="stylesheet" href="{{asset('Frontend/style.css')}}" />
   <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color:rgb(8, 113, 218);
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .container {
            max-width: 1500px;
            margin: 50px auto;
            padding: 0 20px;
         /* For Laravel public/images/room.jpg */
        
        }
        h1, h2 {
            color: #2c3e50;
             /* For Laravel public/images/room.jpg */
        
        }
        p {
            line-height: 1.7;
            margin-bottom: 15px;
             /* For Laravel public/images/room.jpg */
        
        }
        .highlight {
            color: #3498db;
            font-weight: bold;
             /* For Laravel public/images/room.jpg */
        
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 50px;
        }
    </style>

    <style>
      
        header {
           
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .room-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .room-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .room-card:hover {
            transform: scale(1.02);
        }

        .room-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .room-details {
            padding: 15px;
        }

        .room-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .room-location {
            color: #888;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .room-price {
            color: #27ae60;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .room-description {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .view-btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .view-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>