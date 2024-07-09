<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            color: white;
        }
        .menu {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .menu a {
            margin: 0 15px;
            padding: 10px 20px;
            text-decoration: none;
            color: #4CAF50;
            border: 2px solid #4CAF50;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .menu a:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Welcome to Our Tour Website</h1>
</div>

<div class="menu">
    <a href="booking.php">Booking</a>
    <a href="activities.php">Activities</a>
    <a href="more.php">More</a>
</div>

</body>
</html>
