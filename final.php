<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            width: 90%;
            margin: 80px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            text-align: center;
            background: linear-gradient(135deg, #ffffff, #f3f4f6);
        }

        h1 {
            font-size: 48px;
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }

        h3 {
            font-size: 26px;
            color: #28a745;
            font-weight: 500;
            margin-bottom: 40px;
        }

        .order-gif {
            margin-bottom: 40px;
        }

        .order-gif img {
            width: 100%;
            max-width: 650px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .continue-shopping-btn {
            background-color: #28a745;
            color: white;
            padding: 20px 40px;
            font-size: 24px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s ease;
            text-decoration: none;
            margin-top: 30px;
        }

        .continue-shopping-btn:hover {
            background-color: #218838;
            transform: scale(1.05);
        }

        .continue-shopping-btn:active {
            transform: scale(1);
        }

        .tracking-section {
            margin-top: 50px;
            padding: 30px;
            background-color: #f0f8ff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tracking-section:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        .tracking-section a {
            font-size: 20px;
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
            padding: 15px 35px;
            border: 2px solid #007bff;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }

        .tracking-section a:hover {
            background-color: #007bff;
            color: white;
        }

        .footer {
            text-align: center;
            margin-top: 60px;
            font-size: 14px;
            color: #888;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 25px;
            }

            h1 {
                font-size: 36px;
            }

            h3 {
                font-size: 22px;
            }

            .continue-shopping-btn {
                font-size: 20px;
                padding: 16px 32px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Order Confirmed!</h1>
        <h3>Congrats! You unlocked a new coupon!</h3>

        <div class="order-gif">
            <img src="images/order.gif" alt="Order Confirmed GIF">
        </div>

        <a href="menu.php">
            <button class="continue-shopping-btn">Continue Shopping</button>
        </a>
    </div>

    <div class="tracking-section">
        <a href="track.php">Track Your Order</a>
    </div>

    <div class="footer">
        <p>&copy; 2024 Food Cart - All Rights Reserved</p>
    </div>

</body>
</html>
