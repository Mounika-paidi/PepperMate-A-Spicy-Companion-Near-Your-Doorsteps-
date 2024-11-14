

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desserts Menu</title>
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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/dessertbanner.jpg') center/cover no-repeat;
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

        .dessert-card {
            background-color: white;
            width: 280px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        .dessert-card:hover {
            transform: scale(1.05);
        }

        .dessert-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .dessert-info {
            padding: 15px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .dessert-info h3 {
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
            border-radius: 8 ```html
px;
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
    </style>
</head>
<body>

    <div class="banner">"A perfect end to every meal."</div>

    <div class="container">
        <?php
            $desserts = [
                [
                    "image" => "images/dessert1.jpg",
                    "name" => "Choco Lava Cake",
                    "restaurant" => "Sweet Cravings",
                    "price" => "₹199.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.8"
                ],
                [
                    "image" => "images/dessert2.jpg",
                    "name" => "Strawberry Cheesecake",
                    "restaurant" => "Cheesecake Corner",
                    "price" => "₹249.00",
                    "discount" => "15% OFF",
                    "rating" => "⭐ 4.7"
                ],
                [
                    "image" => "images/dessert3.jpg",
                    "name" => "Tiramisu Delight",
                    "restaurant" => "Cafe Italia",
                    "price" => "₹279.00",
                    "discount" => "12% OFF",
                    "rating" => "⭐ 4.9"
                ],
                [
                    "image" => "images/dessert4.jpg",
                    "name" => "Mango Mousse",
                    "restaurant" => "Tropical Desserts",
                    "price" => "₹229.00",
                    "discount" => "8% OFF",
                    "rating" => "⭐ 4.6"
                ],
                [
                    "image" => "images/dessert5.jpg",
                    "name" => "Red Velvet Cake",
                    "restaurant" => "Cake Bliss",
                    "price" => "₹299.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.8"
                ],
                [
                    "image" => "images/dessert6.jpg",
                    "name" => "Nutella Brownie",
                    "restaurant" => "Brownie Heaven",
                    "price" => "₹199.00",
                    "discount" => "15% OFF",
                    "rating" => "⭐ 4.7"
                ],
                [
                    "image" => "images/dessert7.jpg",
                    "name" => "Blueberry Tart",
                    "restaurant" => "Berry Delights",
                    "price" => "₹259.00",
                    "discount" => "12% OFF",
                    "rating" => "⭐ 4.6"
                ],
                [
                    "image" => "images/dessert8.jpg",
                    "name" => "Classic Apple Pie",
                    "restaurant" => "Pie Stop",
                    "price" => "₹239.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.5"
                ],
                [
                    "image" => "images/dessert9.jpg",
                    "name" => "Lemon Tart",
                    "restaurant" => "Tart House",
                    "price" => "₹219.00",
                    "discount" => "18% OFF",
                    "rating" => "⭐ 4.4"
                ],
                [
                    "image" => "images/dessert10.jpg",
                    "name" => "Pistachio Gelato",
                    "restaurant" => "Gelato Dreams",
                    "price" => "₹269.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.7"
                ],
                [
                    "image" => "images/dessert11.jpg",
                    "name" => "Chocolate Éclair",
                    "restaurant" => "Pastry Place",
                    "price" => "₹249.00",
                    "discount" => "12% OFF",
                    "rating" => "⭐ 4.5"
                ],
                [
                    "image" => "images/dessert12.jpg",
                    "name" => "Caramel Flan",
                    "restaurant" => "Flan & Co.",
                    "price" => "₹239.00",
                    "discount" => "15% OFF",
                    "rating" => "⭐ 4.4"
                ],
                [
                    "image" => "images/dessert13.jpg",
                    "name" => "Pecan Pie",
                    "restaurant" => "Nuts & Bites",
                    "price" => "₹299.00",
                    "discount" => "5% OFF",
                    "rating" => "⭐ 4.6"
                ],
                [
                    "image" => "images/dessert14.jpg",
                    "name" => "Churros with Chocolate",
                    "restaurant" => "Choco Fiesta",
                    "price" => "₹189.00",
                    "discount" => "15% OFF",
                    "rating" => "⭐ 4.8"
                ],
                [
                    "image" => "images/dessert15.jpg",
                    "name" => "Fruit Pavlova",
                    "restaurant" => "Pavlova Paradise",
                    "price" => "₹259.00",
                    "discount" => "10% OFF",
                    "rating" => "⭐ 4.7"
                ]

            ];

            foreach ($desserts as $index => $dessert) {
                echo "<div class='dessert-card'>
                        <img src='{$dessert['image']}' alt='{$dessert['name']}'>
                        <div class='dessert-info'>
                            <h3>{$dessert['name']}</h3>
                            <p class='restaurant-name'>{$dessert['restaurant']}</p>
                            <p class='price'>₹{$dessert['price']} <span class='discount'>{$dessert['discount']}</span></p>
                            <p class='rating'>{$dessert['rating']}</p>
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
        </div>
    </div>

    <div class="navbar">
        <div class="navbar-item" onclick="window.location.href='menu.php';">Home</div>
        <div class="navbar-item" onclick="window.location.href='cart.php';">
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



<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['add_to_cart'])) {
    $item_id = $_POST['item_id'];
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    $item_found = false;
    foreach ($_SESSION['cart'] as &$cart_item) {
        if ($cart_item['id'] == $item_id) {
            $cart_item['quantity'] += 1;
            $item_found = true;
            break;
        }
    }

    if (!$item_found) {
        $_SESSION['cart'][] = [
            'id' => $item_id,
            'name' => $item_name,
            'price' => $item_price,
            'quantity' => 1
        ];
    }
}
?>
