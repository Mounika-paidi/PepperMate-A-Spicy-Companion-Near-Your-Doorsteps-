<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];
    $item_quantity = $_POST['item_quantity'];
    $item_image = $_POST['item_image'];
    $item_discount = $_POST['item_discount'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = []; 
    }

    $item_found = false;
    foreach ($_SESSION['cart'] as $index => $cart_item) {
        if ($cart_item['name'] == $item_name) {
            $_SESSION['cart'][$index]['quantity'] += $item_quantity;
            $item_found = true;
            break;
        }
    }

    if (!$item_found) {
        $_SESSION['cart'][] = [
            'name' => $item_name,
            'price' => $item_price,
            'quantity' => $item_quantity,
            'image' => $item_image,
            'discount' => $item_discount,
        ];
    }

    header('Location: cart.php');
    exit();
}
?>
