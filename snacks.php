<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beverages</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            color: #333;
            padding-bottom: 60px; 
        }

        .banner {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/snacksbanner.jpg') center/cover;
            color: orange;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            text-shadow: 0px 2px 5px rgba(0,0,0,0.5);
            text-align: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            gap: 20px;
        }

        .beverage-card {
            background-color: white;
            width: 280px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .beverage-card:hover {
            transform: scale(1.05);
        }

        .beverage-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .beverage-info {
            padding: 15px;
            text-align: center;
        }
        .beverage-info h3 {
            font-size: 1.25rem;
            color: #444;
            margin-bottom: 10px;
        }
        .restaurant-name, .rating {
            font-size: 0.9rem;
            color: #777;
        }
        .price {
            font-size: 1.1rem;
            color: #333;
            margin-top: 8px;
        }
        .discount {
            color: #e74c3c;
            font-weight: bold;
        }

        .add-to-cart {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .add-to-cart:hover {
            background-color: #2980b9;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-top: 10px;
        }
        .quantity-btn {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .quantity-btn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 90%;
            max-width: 400px;
        }
        .modal-content h3 {
            margin-bottom: 10px;
        }
        .modal-content button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .navbar {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: orange;
            display: flex;
            justify-content: space-around;
            align-items: center;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            border-top: 1px solid #ddd;
        }
        .navbar-item {
            text-align: center;
            color: #333;
            font-size: 0.9rem;
            flex: 1;
            cursor: pointer;
            position: relative;
        }
        .navbar-item .cart-badge {
            position: absolute;
            top: -5px;
            right: 20px;
            background-color: #e74c3c;
            color: white;
            font-size: 0.8rem;
            padding: 2px 5px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <div class="banner">"Grab a bite, fuel your vibe!"</div>

    <div class="container">
        <?php
         $snacks = [
            [
                "image" => "images/snacks2.jpg",
                "name" => "Cheesy Nachos",
                "restaurant" => "Nacho Delight",
                "price" => "₹199.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ],
            [
                "image" => "images/snacks3.jpg",
                "name" => "Veggie Spring Rolls",
                "restaurant" => "Asian Bites",
                "price" => "₹149.00",
                "discount" => "12% OFF",
                "rating" => "⭐ 4.5"
            ],
            [
                "image" => "images/snacks4.jpg",
                "name" => "Chicken Seekh Kebabs",
                "restaurant" => "Grill Hub",
                "price" => "₹279.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.7"
            ],
            [
                "image" => "images/snacks5.jpg",
                "name" => "Paneer Tikka",
                "restaurant" => "Tandoor Treats",
                "price" => "₹229.00",
                "discount" => "8% OFF",
                "rating" => "⭐ 4.8"
            ],
            [
                "image" => "images/snacks6.jpg",
                "name" => "Shrimp Tempura",
                "restaurant" => "Seafood Shack",
                "price" => "₹399.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ],
            [
                "image" => "images/snacks7.jpg",
                "name" => "Samosa Chaat",
                "restaurant" => "Chaat Corner",
                "price" => "₹129.00",
                "discount" => "15% OFF",
                "rating" => "⭐ 4.5"
            ],
            [
                "image" => "images/snacks8.jpg",
                "name" => "BBQ Meatballs",
                "restaurant" => "BBQ Bliss",
                "price" => "₹299.00",
                "discount" => "12% OFF",
                "rating" => "⭐ 4.7"
            ],
            [
                "image" => "images/snacks9.jpg",
                "name" => "Stuffed Mushroom Caps",
                "restaurant" => "Veggie Vault",
                "price" => "₹199.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ],
            [
                "image" => "images/snacks10.jpg",
                "name" => "Loaded Potato Skins",
                "restaurant" => "Spud Spot",
                "price" => "₹179.00",
                "discount" => "18% OFF",
                "rating" => "⭐ 4.4"
            ],
            [
                "image" => "images/snacks11.jpg",
                "name" => "Honey Chili Cauliflower",
                "restaurant" => "Fusion Feast",
                "price" => "₹169.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ],
            [
                "image" => "images/snacks12.jpg",
                "name" => "Mini Tacos",
                "restaurant" => "Taco Town",
                "price" => "₹259.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.7"
            ],
            [
                "image" => "images/snacks13.jpg",
                "name" => "Chicken Popcorn",
                "restaurant" => "Crunchy Bites",
                "price" => "₹249.00",
                "discount" => "15% OFF",
                "rating" => "⭐ 4.5"
            ],
            [
                "image" => "images/snacks14.jpg",
                "name" => "Fish Fingers",
                "restaurant" => "Catch of the Day",
                "price" => "₹349.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.7"
            ],
            [
                "image" => "images/snacks15.jpg",
                "name" => "Vegetable Quesadilla",
                "restaurant" => "Mexi Delight",
                "price" => "₹229.00",
                "discount" => "12% OFF",
                "rating" => "⭐ 4.6"
            ]
        
        ];
    
        foreach ($snacks as $index => $snack) {
            echo "<div class='beverage-card'>
                    <img src='{$snack['image']}' alt='{$snack['name']}'>
                    <div class='beverage-info'>
                        <h3>{$snack['name']}</h3>
                        <p class='restaurant-name'>{$snack['restaurant']}</p>
                        <p class='price'>₹{$snack['price']} <span class='discount'>{$snack['discount']}</span></p>
                        <p class='rating'>{$snack['rating']}</p>
                        <button class='add-to-cart' onclick='confirmAddToCart($index)'>Add to Cart</button>
                        <div class='quantity-controls' id='quantity-controls-$index' style='display: none;'>
                            <button class='quantity-btn' onclick='updateQuantity($index, -1)'>-</button>
                            <span id='quantity-$index'>1</span>
                            <button class='quantity-btn' onclick='updateQuantity($index, 1)'>+</button>
                        </div>
                    </div>
                </div>";
        }
        ?>
    </div>

    <div class="modal" id="confirmationModal">
        <div class="modal-content">
            <h3>Item added to cart!</h3>
            <p>Do you want to go to the cart or continue shopping?</p>
            <button onclick="closeModal()">Continue Shopping</button>
        </div>
    </div>

    <div class="navbar">
        <div class="navbar-item" onclick="window.location.href='menu.php';">Home</div>
        <div class="navbar-item" onclick="window.location.href='loading1.php';">
            Cart
            <span id="cart-badge" class="cart-badge">0</span>
        </div>
        <div class="navbar-item" onclick="window.location.href='about.php';">About</div>
        <div class="navbar-item" onclick="window.location.href='contact.php';">Contact</div>
    </div>

    <script>
        const cart = {};
        let cartItemCount = 0;

        function confirmAddToCart(index) {
            cart[index] = cart[index] ? cart[index] + 1 : 1;
            document.querySelector(`#quantity-controls-${index}`).style.display = 'flex';
            document.getElementById('confirmationModal').style.display = 'flex';
            updateCartBadge();
        }

        function updateQuantity(index, change) {
            if (cart[index] !== undefined) {
                cart[index] += change;
                if (cart[index] < 1) {
                    cart[index] = 1;
                }
                document.querySelector(`#quantity-${index}`).textContent = cart[index];
                updateCartBadge();
            }
        }

        function updateCartBadge() {
            cartItemCount = Object.values(cart).reduce((acc, qty) => acc + qty, 0);
            document.getElementById('cart-badge').textContent = cartItemCount;
        }

        function closeModal() {
            document.getElementById('confirmationModal').style.display = 'none';
        }
    </script>

</body>
</html>
