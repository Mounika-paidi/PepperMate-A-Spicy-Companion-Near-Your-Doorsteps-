<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Your Order</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 1100px;
            margin: 60px auto;
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 40px;
            color: #333;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 24px;
            color: #ff9800;
            margin-bottom: 40px;
        }

        .order-gif {
            margin-bottom: 40px;
        }

        .order-gif img {
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .continue-shopping-btn {
            background-color: #4caf50;
            color: white;
            padding: 16px 32px;
            font-size: 20px;
            font-weight: 500;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .continue-shopping-btn:hover {
            background-color: #388e3c;
            transform: scale(1.05);
        }

        .continue-shopping-btn:active {
            transform: scale(1);
        }

        .footer {
            text-align: center;
            margin-top: 60px;
            font-size: 14px;
            color: #888;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }

            h1 {
                font-size: 32px;
            }

            h3 {
                font-size: 20px;
            }

            .continue-shopping-btn {
                font-size: 18px;
                padding: 12px 25px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Food Being Prepared</h1>
        <h3>Your order is on the way!</h3>

        <div class="order-gif">
            <img src="images/last.gif" alt="Food Being Prepared GIF">
        </div>

        <a href="menu.php">
            <button class="continue-shopping-btn">Continue Shopping</button>
        </a>
    </div>

    <div class="footer">
        <p>&copy; 2024 Food Cart - All Rights Reserved</p>
    </div>

</body>
</html>
