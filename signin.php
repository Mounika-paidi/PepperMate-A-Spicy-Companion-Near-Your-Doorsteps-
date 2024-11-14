<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $default_email = "abc@gmail.com";
    $default_password = "bujji"; 

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == $default_email && $password == $default_password) {
        header("Location: menu.php"); 
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>

<form action="signin.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Sign In</button>
</form>
