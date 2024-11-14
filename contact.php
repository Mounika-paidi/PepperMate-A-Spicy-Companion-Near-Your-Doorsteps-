<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PepperMate</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #fff, #f9f9f9);
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .top-div {
            background: linear-gradient(to right, #ff5733, #ff6700);
            color: white;
            height: 70px; 
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-item {
            margin: 0 15px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            font-weight: bold;
        }

        .nav-item:hover {
            background-color: white;
            color: #ff5733;
            border-radius: 5px;
        }

        .contact-section {
            max-width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 2px solid #ff5733;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }

        .contact-info a {
            color: #ff5733;
            text-decoration: none;
        }

        .contact-form {
            margin-top: 30px;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #ff5733;
            border-radius: 5px;
            font-size: 16px;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #ff5733;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #e74c3c;
        }

        .gif-container {
            margin-top: 30px;
            text-align: center;
        }

        .gif-container img {
            width: 100%; 
            max-width: 600px; 
            border-radius: 10px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }

 .footer .social-icons a {
            margin: 0 10px;
            color: white;
            font-size: 24px;
            transition: color 0.3s;
        }

        .footer .social-icons a:hover {
            color: #ff5733;
        }

        .confirmation-message {
            display: none;
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-top: 20px;
        }

        .bottom-photo {
            margin-top: 30px;
            text-align: center;
        }

        .bottom-photo img {
            width: 100%; 
            max-width: 600px; 
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="top-div">
    <div class="logo" onclick="window.location.href='firstpage.php';">
        <img src="images/logo.png" alt="Logo" style="width: 40px; height: 40px; border-radius: 50%;">
    </div>
    <div class="nav-item" onclick=" window.location.href='signin.html';">Sign In</div>
    <div class="nav-item" onclick="window.location.href='about.php';">About Us</div>
</div>

<div class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-info">
        <p>Email: <a href="mailto:support@peppermate.com">support@peppermate.com</a></p>
        <p>Phone: +1 234 567 890</p>
        <p>Address: 123 Culinary St, Food City, FC 12345</p>
    </div>

    <div class="contact-form">
        <h3>Send Us a Message</h3>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <input type="text" placeholder="Subject" required>
        <textarea rows="5" placeholder="Your Message" required></textarea>
        <button type="submit" onclick="submitForm()">Submit</button>
    </div>

    <div class="confirmation-message" id="confirmationMessage">
        Thank you for your message! We will get back to you shortly.
    </div>

    <div class="gif-container">
        <img src="images/support.gif" alt="Animated GIF">
    </div>

</div>

<div class="footer">
    <p>&copy; 2024 PepperMate. All rights reserved.</p>
    <div class="social-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
</div>

<script>
    function submitForm() {
        const name = document.querySelector('input[placeholder="Your Name"]').value;
        const email = document.querySelector('input[placeholder="Your Email"]').value;
        const subject = document.querySelector('input[placeholder="Subject"]').value;
        const message = document.querySelector('textarea[placeholder="Your Message"]').value;

        if (!name || !email || !subject || !message) {
            alert("Please fill in all required fields.");
            return; 
        }

        document.getElementById('confirmationMessage').style.display = 'block';

        document.querySelector('.contact-form').reset();
    }
</script>

</body>
</html>