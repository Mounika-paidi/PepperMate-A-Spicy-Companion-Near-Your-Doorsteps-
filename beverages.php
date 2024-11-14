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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/beverages1.jpg') center/cover;
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

    <div class="banner">"Refreshing sips, perfect picks!"</div>

    <div class="container">
        <?php
         $beverages = [
            [
                "image" => "images/beverages2.png",
                "name" => "Frosty Berry Bliss",
                "restaurant" => "Berry Café",
                "price" => "₹259.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ],
            [
                "image" => "images/beverages3.jpg",
                "name" => "Citrus Sparkler",
                "restaurant" => "Citrus House",
                "price" => "₹249.00",
                "discount" => "15% OFF",
                "rating" => "⭐ 4.4"
            ],
            [
                "image" => "images/beverages4.webp",
                "name" => "Tropical Sunset Punch",
                "restaurant" => "Tropical Treats",
                "price" => "₹279.00",
                "discount" => "12% OFF",
                "rating" => "⭐ 4.7"
            ],
            [
                "image" => "images/beverages5.jpg",
                "name" => "Mango Mint Cooler",
                "restaurant" => "Mint Café",
                "price" => "₹259.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.5"
            ],
            [
                "image" => "images/beverages6.webp",
                "name" => "Lavender Lemonade",
                "restaurant" => "Lavender Lounge",
                "price" => "₹299.00",
                "discount" => "8% OFF",
                "rating" => "⭐ 4.8"
            ],
            [
                "image" => "images/beverages7.jpg",
                "name" => "Berry Basil Fizz",
                "restaurant" => "Fizz Factory",
                "price" => "₹239.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ],
            [
                "image" => "images/beverages8.webp",
                "name" => "Coconut Breeze",
                "restaurant" => "Island Café",
                "price" => "₹259.00",
                "discount" => "12% OFF",
                "rating" => "⭐ 4.7"
            ],
            [
                "image" => "images/beverages9.webp",
                "name" => "Passionfruit Elixir",
                "restaurant" => "Exotic Drinks",
                "price" => "₹269.00",
                "discount" => "15% OFF",
                "rating" => "⭐ 4.5"
            ],
            [
                "image" => "images/beverages10.jpg",
                "name" => "Spiced Apple Splash",
                "restaurant" => "Apple Orchard Café",
                "price" => "₹239.00",
                "discount" => "18% OFF",
                "rating" => "⭐ 4.4"
            ],
            [
                "image" => "images/beverages11.jpg",
                "name" => "Minted Melon Mojito",
                "restaurant" => "Mint Melon Bar",
                "price" => "₹279.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ],
           
            [
                "image" => "images/beverages12.jpg",
                "name" => "Rosemary Grapefruit Twist",
                "restaurant" => "Herbal Twist",
                "price" => "₹259.00",
                "discount" => "12% OFF",
                "rating" => "⭐ 4.7"
            ],
            [
                "image" => "images/beverages13.jpg",
                "name" => "Choco Chai Delight",
                "restaurant" => "Choco Chai House",
                "price" => "₹299.00",
                "discount" => "5% OFF",
                "rating" => "⭐ 4.8"
            ],
            [
                "image" => "images/beverages14.jpg",
                "name" => "Blueberry Bliss Mocktail",
                "restaurant" => "Berry Blast Bar",
                "price" => "₹269.00",
                "discount" => "15% OFF",
                "rating" => "⭐ 4.5"
            ],
            [
                "image" => "images/beverages15.jpg",
                "name" => "Pineapple Paradise Smoothie",
                "restaurant" => "Paradise Smoothies",
                "price" => "₹259.00",
                "discount" => "10% OFF",
                "rating" => "⭐ 4.6"
            ]
        ];
    
    
        foreach ($beverages as $index => $beverage) {
            echo "<div class='beverage-card'>
                    <img src='{$beverage['image']}' alt='{$beverage['name']}'>
                    <div class='beverage-info'>
                        <h3>{$beverage['name']}</h3>
                        <p class='restaurant-name'>{$beverage['restaurant']}</p>
                        <p class='price'>₹{$beverage['price']} <span class='discount'>{$beverage['discount']}</span></p>
                        <p class='rating'>{$beverage['rating']}</p>
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
            cart[index] = (cart[index] || 0) + 1;
            cartItemCount++;
            updateCartBadge();
            document.querySelector(`#quantity-controls-${index}`).style.display = 'flex';
            document.querySelector(`button[onclick="confirmAddToCart(${index})"]`).style.display = 'none';
            openModal();
        }

        function updateQuantity(index, change) {
            const quantity = (cart[index] || 0) + change;
            if (quantity <= 0) {
                cartItemCount -= cart[index];
                delete cart[index];
                document.querySelector(`#quantity-controls-${index}`).style.display = 'none';
                document.querySelector(`button[onclick="confirmAddToCart(${index})"]`).style.display = 'block';
            } else {
                cart[index] = quantity;
                cartItemCount += change;
            }
            document.querySelector(`#quantity-${index}`).textContent = cart[index];
            updateCartBadge();
        }

        function updateCartBadge() {
            document.getElementById("cart-badge").textContent = cartItemCount;
        }

        function openModal() {
            document.getElementById("confirmationModal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("confirmationModal").style.display = "none";
        }
    </script>

</body>
</html>