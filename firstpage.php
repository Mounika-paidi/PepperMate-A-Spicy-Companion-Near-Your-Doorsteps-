<?php

$logo = "images/logo.png"; 
$tagline = ["Welcome","to"," PepperMate", "A Spicy Companion"," to"," Your Doorstep...!"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="firstpage.css">
</head>
<body>
    <div class="container">
        <div class="logo-container">
           
            <img src="<?php echo $logo; ?>" alt="Logo" class="logo">
        </div>

       
        <div class="tagline-container">
            <h1 class="tagline">
                <?php
                foreach ($tagline as $index => $word) {
                    echo "<span class='word' id='word$index'>$word </span>";
                }
                ?>
            </h1>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
