<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Courses</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/maincoursebanner2.jpg') center/cover no-repeat;
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

        .maincourse-card {
            background-color: white;
            width: 280px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .maincourse-card:hover {
            transform: scale(1.05);
        }

        .maincourse-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .maincourse-info {
            padding: 15px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .maincourse-info h3 {
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
            margin-top: 10px;
        }
        .add-to-cart:hover {
            background-color: #2980b9;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .quantity-btn {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        .quantity-btn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .quantity-display {
            margin: 0 10px;
            font-size: 1rem;
            color: #333;
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
            z-index: 1000;
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
            transition: background-color 0.3s;
        }
        .modal-content button:hover {
            background-color: #2980b9;
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
            z-index: 100;
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

        @media (max-width: 768px) {
            .maincourse-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="banner">"Savor the rich, aromatic flavors of our signature biryanis, crafted to perfection!"</div>

    <div class="container">
        <?php
            $main_courses = [
                [
                    "image" => "images/maincourse1.jpg",
                    "name" => "Paneer Butter Masala",
                    "restaurant" => "Spice Villa",
                    "price" => "349.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.8"
                ],
                [
                    "image" => "images/maincourse2.jpg",
                    "name" => "Chicken Biryani",
                    "restaurant" => "Biryani House",
                    "price" => "399.00",
                    "discount" => "15% OFF",
                    "rating" => "⭐ 4.7"
                ],
                
                    [
                        "image" => "images/maincourse16.jpg",
                        "name" => "Hyderabadi Dum Biryani",
                        "restaurant" => "Nizam's Delight",
                        "price" => "₹429.00",
                        "discount" => "15% OFF",
                        "rating" => "⭐ 4.9"
                    ],
                    [
                        "image" => "images/maincourse17.jpg",
                        "name" => "Kolkata Biryani",
                        "restaurant" => "Bengal Bites",
                        "price" => "₹399.00",
                        "discount" => "10% OFF",
                        "rating" => "⭐ 4.8"
                    ],
                    [
                        "image" => "images/maincourse18.jpg",
                        "name" => "Lucknowi Biryani",
                        "restaurant" => "Awadhi Kitchens",
                        "price" => "₹449.00",
                        "discount" => "12% OFF",
                        "rating" => "⭐ 4.8"
                    ],
                    [
                        "image" => "images/maincourse19.jpg",
                        "name" => "Malabar Biryani",
                        "restaurant" => "Kerala Spice",
                        "price" => "₹469.00",
                        "discount" => "10% OFF",
                        "rating" => "⭐ 4.7"
                    ],
                
                
                [
                    "image" => "images/maincourse3.jpg",
                    "name" => "Dal Makhani",
                    "restaurant" => "Punjabi Tadka",
                    "price" => "299.00",
                    "discount" => "12% OFF",
                    "rating" => "⭐ 4.6"
                ],
                [
                    "image" => "images/maincourse4.jpg",
                    "name" => "Grilled Salmon",
                    "restaurant" => "Ocean's Delight",
                    "price" => "549.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.9"
                ],
                [
                    "image" => "images/maincourse5.jpg",
                    "name" => "Paneer Tikka Masala",
                    "restaurant" => "Veggie Treats",
                    "price" => "349.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.7"
                ],
                [
                    "image" => "images/maincourse6.jpg",
                    "name" => "Butter Chicken",
                    "restaurant" => "Royal Kitchen",
                    "price" => "399.00",
                    "discount" => "8% OFF",
                    "rating" => "⭐ 4.8"
                ],
                [
                    "image" => "images/maincourse7.jpg",
                    "name" => "Veggie Lasagna",
                    "restaurant" => "Italiano Bistro",
                    "price" => "459.00",
                    "discount" => "12% OFF",
                    "rating" => "⭐ 4.5"
                ],
                [
                    "image" => "images/maincourse8.jpg",
                    "name" => "Mutton Rogan Josh",
                    "restaurant" => "Kashmir Flavors",
                    "price" => "499.00",
                    "discount" => "15% OFF",
                    "rating" => "⭐ 4.7"
                ],
                [
                    "image" => "images/maincourse9.jpg",
                    "name" => "Aloo Gobi Masala",
                    "restaurant" => "Curry Delight",
                    "price" => "279.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.4"
                ],
                [
                    "image" => "images/maincourse10.jpg",
                    "name" => "Tandoori Chicken",
                    "restaurant" => "Grill Palace",
                    "price" => "429.00",
                    "discount" => "12% OFF",
                    "rating" => "⭐ 4.7"
                ],
                [
                    "image" => "images/maincourse11.jpg",
                    "name" => "Palak Paneer",
                    "restaurant" => "Green Cuisine",
                    "price" => "329.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.6"
                ],
                [
                    "image" => "images/maincourse12.jpg",
                    "name" => "Prawn Curry",
                    "restaurant" => "Coastal Bites",
                    "price" => "469.00",
                    "discount" => "15% OFF",
                    "rating" => "⭐ 4.8"
                ],
                [
                    "image" => "images/maincourse13.jpg",
                    "name" => "Mushroom Masala",
                    "restaurant" => "Veggie Villa",
                    "price" => "319.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.5"
                ],
                [
                    "image" => "images/maincourse14.jpg",
                    "name" => "Lamb Kebab Platter",
                    "restaurant" => "Mediterranean Grill",
                    "price" => "499.00",
                    "discount" => "8% OFF",
                    "rating" => "⭐ 4.7"
                ],
                [
                    "image" => "images/maincourse15.jpg",
                    "name" => "Vegetable Biryani",
                    "restaurant" => "Spice Aroma",
                    "price" => "299.00",
                    "discount" => "12% OFF",
                    "rating" => "⭐ 4.6"
                ]
            ];

            foreach ($main_courses as $index => $main_course) {
                echo "<div class='maincourse-card'>
                        <img src='{$main_course['image']}' alt='{$main_course['name']}'>
                        <div class='maincourse-info'>
                            <h3>{$main_course['name']}</h3>
                            <p class='restaurant-name'>{$main_course['restaurant']}</p>
                            <p class='price'>₹{$main_course['price']} <span class='discount'>{$main_course['discount']}</span></p>
                            <p class='rating'>{$main_course['rating']}</p>
                            <button class='add-to-cart' onclick='confirmAddToCart($index)'>Add to Cart</button>
                            <div class='quantity-controls' id='quantity-controls-$index' style='display: none;'>
                                <button class='quantity-btn' onclick='updateQuantity($index, -1)'>-</button>
                                <span class='quantity-display' id='quantity-$index'>1</span>
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
            <button onclick="goToCart()">Go to Cart</button>
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
            if (cart[index]) {
                cart[index] += 1;
            } else {
                cart[index] = 1;
                document.querySelector(`#quantity-controls-${index}`).style.display = 'flex';
            }
            cartItemCount++;
            updateCartBadge();
            updateQuantityDisplay(index);
            openModal();
        }

        function updateQuantity(index, change) {
            if (cart[index] !== undefined) {
                cart[index] += change;
                if (cart[index] <= 0) {
                    cartItemCount -= cart[index] + change; 
                    delete cart[index];
                    document.querySelector(`#quantity-controls-${index}`).style.display = 'none';
                } else {
                    cartItemCount += change;
                }
                updateCartBadge();
                updateQuantityDisplay(index);
            }
        }

        function updateQuantityDisplay(index) {
            if (cart[index] !== undefined) {
                document.getElementById(`quantity-${index}`).textContent = cart[index];
            }
        }

        function updateCartBadge() {
            cartItemCount = Object.values(cart).reduce((acc, qty) => acc + qty, 0);
            document.getElementById('cart-badge').textContent = cartItemCount;
        }

        function openModal() {
            document.getElementById("confirmationModal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("confirmationModal").style.display = "none";
        }

        function goToCart() {
            window.location.href = 'cart.php';
        }
    </script>

</body>
</html>
