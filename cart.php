<?php
session_start();

$main_courses = [
    [
        "image" => "images/maincourse1.jpg",
        "name" => "Paneer Butter Masala",
        "price" => 349.00, 
        "discount" => "10% OFF",
        "rating" => "⭐ 4.8"
    ],
    [
        "image" => "images/maincourse2.jpg",
        "name" => "Chicken Biryani",
        "price" => 399.00, 
        "discount" => "15% OFF",
        "rating" => "⭐ 4.7"
    ],
    [
        "image" => "images/maincourse16.jpg",
        "name" => "Hyderabadi Dum Biryani",
        "price" => 429.00,
        "discount" => "15% OFF",
        "rating" => "⭐ 4.9"
    ]
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (empty($_SESSION['cart'])) {
    foreach ($main_courses as $item) {
        $_SESSION['cart'][] = [
            'name' => $item['name'],
            'image' => $item['image'],
            'price' => $item['price'],
            'quantity' => 2, 
            'total' => $item['price'] * 2 
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .cart-container {
            width: 85%;
            max-width: 1200px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .cart-header h1 {
            font-size: 36px;
            color: #e91e63;
        }

        .cart-header .cart-actions button {
            padding: 12px 30px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cart-header .checkout-btn {
            background-color: #4caf50;
            color: white;
        }

        .cart-header .continue-shopping-btn {
            background-color: #2196f3;
            color: white;
        }

        .cart-header .checkout-btn:hover {
            background-color: #45a049;
        }

        .cart-header .continue-shopping-btn:hover {
            background-color: #1976d2;
        }

        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th,
        .cart-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .cart-table th {
            background-color: #f9f9f9;
            font-size: 16px;
        }

        .cart-item-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .cart-table tr:hover {
            background-color: #f1f1f1;
        }

        .cart-total {
            font-size: 18px;
            text-align: right;
            margin-top: 20px;
        }

        .cart-total strong {
            color: #e91e63;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #888;
        }

        .payment-modal {
            position: fixed;
            bottom: -100%;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            transition: bottom 0.3s ease;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .payment-modal h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .payment-modal .payment-options {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            max-width: 400px;
        }

        .payment-modal .payment-options label {
            display: flex;
            align-items: center;
            font-size: 18px;
            margin: 10px 0;
            cursor: pointer;
        }

        .payment-modal .payment-options input[type="radio"] {
            margin-right: 10px;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }

        .payment-modal .payment-options button {
            background-color: #e91e63;
            padding: 12px 30px;
            margin-top: 20px;
            border: none;
            color: white;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            width: 200px;
        }

        .payment-modal .payment-options button:hover {
            background-color: #d81b60;
        }

        @media (max-width: 768px) {
            .cart-container {
                width: 95%;
            }

            .cart-header h1 {
                font-size: 28px;
            }

            .cart-header .checkout-btn,
            .cart-header .continue-shopping-btn {
                font-size: 14px;
                padding: 10px 20px;
            }

            .cart-table th, .cart-table td {
                padding: 10px;
            }

            .cart-item-img {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body>

    <div class="cart-container">
        <div class="cart-header">
            <h1>Your Cart</h1>
            <div class="cart-actions">
                <button class="checkout-btn" id="checkoutBtn">Proceed to Checkout</button>
                <button class="continue-shopping-btn">Continue Shopping</button>
            </div>
        </div>
        
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $grand_total = 0;
                foreach ($_SESSION['cart'] as $item) {
                    $grand_total += $item['total'];
                ?>
                <tr>
                    <td><img src="<?php echo $item['image']; ?>" alt="Item Image" class="cart-item-img"></td>
                    <td><?php echo $item['name']; ?></td>
                    <td>₹<?php echo number_format($item['price'], 2); ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>₹<?php echo number_format($item['total'], 2); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="cart-total">
            <p><strong>Grand Total: ₹<?php echo number_format($grand_total, 2); ?></strong></p>
        </div>

        <div class="footer">
            <p>&copy; 2024 Food Cart - All Rights Reserved</p>
        </div>
    </div>

    <div class="payment-modal" id="paymentModal">
        <h2>Select Payment Method</h2>
        <div class="payment-options">
            <label>
                <input type="radio" name="payment-method" id="cod" checked>
                Cash on Delivery (COD)
            </label>
            <label>
                <input type="radio" name="payment-method" id="upi" disabled>
                UPI Payment (Temporarily Disabled)
            </label>
            <button id="confirmPaymentBtn">Confirm Payment</button>
        </div>
    </div>

    <script>
        document.getElementById("checkoutBtn").addEventListener("click", function() {
            document.getElementById("paymentModal").style.bottom = "0";
        });

        document.getElementById("confirmPaymentBtn").addEventListener("click", function() {
            window.location.href = "loading3.php";
        });
    </script>

</body>
</html>
