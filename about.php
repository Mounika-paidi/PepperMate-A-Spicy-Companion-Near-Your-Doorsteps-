<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PepperMate</title>
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

        .logo {
            width: 50px;
            height: 50px;
            background-color: white;
            border-radius: 50%;
            margin-right: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
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

        .call-to-action {
            text-align: center;
            background: #ff5733;
            padding: 50px 20px;
            color: white;
            border-radius: 10px;
            margin: 30px 0;
        }

        .call-to-action h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .call-to-action button {
            padding: 15px 30px;
            background-color: white;
            color: #ff5733; 
            border: none;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .call-to-action button:hover {
            background-color: #e74c3c; 
            color: white;
        }

        @keyframes slideIn {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(0); }
        }

        @keyframes fallDown {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(0); }
        }

        .about-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ff5733; 
            padding: 20px;
            margin: 50px auto;
            border-radius: 10px;
            width: 80%;
            position: relative;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about-heading {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: white;
            margin: 0 30px;
        }

        .about-text {
            text-align: center;
            font-size: 18px;
            color: white;
            margin-top: 10px;
            line-height: 1.6;
        }

        .caption {
            text-align: center;
            font-size: 16px;
            color: white;
            margin-top: 10px; 
        }

        .image-container {
            width: 400px;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: none;
            transition: transform 0.3s;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s;
 animation: fallDown 1s ease-in-out;
        }

        .image-container:hover img {
            transform: scale(1.05);
        }

        .services-section, .contacts-section {
            max-width: 80%;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
            border: 2px solid #ff5733; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0; 
            transform: translateY(20px); 
            transition: opacity 0.5s, transform 0.5s; 
        }

        .services-section h2, .contacts-section h2 {
            font-size: 28px; 
            color: #ff5733; 
            margin-bottom: 10px; 
        }

        .services-section p, .contacts-section p {
            font-size: 18px;
            color: #333; 
            line-height: 1.6; 
        }

        .contact-info {
            font-size: 18px;
            margin: 5px 0;
            transition: color 0.3s;
        }

        .contact-info a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-info a:hover {
            text-decoration: underline; 
            color: #ff5733; 
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 30px;
        }

        .footer .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 15px;
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

        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .loading-overlay img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

<div class="top-div">
    <div class="logo" onclick="window.location.href='firstpage.php';">
        <img src="images/logo.png" alt="Logo" style="width: 40px; height: 40px; border-radius: 50%;">
    </div>
    <div class="nav-item" onclick="showLoading(); window.location.href='signin.html';">Sign In</div>
    <div class="nav-item" onclick="showAboutUs()">About Us</div>
</div>

<div class="call-to-action">
    <h2>Join PepperMate Today!</h2>
    <p>Sign up now to explore a world of recipes and culinary delights, curated just for you.</p>
    <button onclick="window.location.href='signin.php';">Sign Up Now</button>
</div>

<div class="about-section" id="aboutSection">
    <div class="image-container" id="imageLeft">
        <img src="images/about.png" alt="Image Left">
    </div>
    <div class="about-heading">
        <div>About PepperMate</div>
        <div class="about-text">PepperMate is your ultimate destination for culinary inspiration. Whether you're a home cook or a professional chef, we provide hand-picked recipes, cooking techniques, and meal plans tailored to suit your lifestyle and taste preferences.</div>
        <div class="caption">" Your go-to destination for delicious recipes and culinary inspiration! "</div>
    </div>
    <div class="image-container" id="imageRight">
        <img src="images/about1.png" alt="Image Right">
    </div>
</div>

<div class="services-section" id="servicesSection">
    <h2 >Our Services</h2>
    <p>From recipe discovery to personalized meal plans, PepperMate offers a wide range of services to make cooking easy, fun, and rewarding. Our team of culinary experts curates the best recipes, meal kits, and cooking tips, all tailored to fit your unique taste.</p>
</div>

<div class="contacts-section" id="contactsSection">
    <h2>Contact Us</h2>
    <p>We'd love to hear from you! If you have any questions, feedback, or need assistance with your culinary journey, feel free to reach out to us at any time. Our support team is available 24/7 to ensure you have the best experience possible.</p>
    <div class="contact-info">
        Email: <a href="mailto:support@peppermate.com">support@peppermate.com</a>
    </div>
    <div class="contact-info">
        Phone: +1 234 567 890
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

<div class="loading-overlay" id="loadingOverlay">
    <img src="images/loading.gif" alt="Loading">
</div>

<script>
    function showAboutUs() {
        document.getElementById('aboutSection').scrollIntoView({ behavior: 'smooth' });
    }

    function showLoading() {
        document.getElementById('loadingOverlay').style.display = 'flex';
        setTimeout(function () {
            document.getElementById('loadingOverlay').style.display = 'none';
        }, 2000);
    }

    window.addEventListener('scroll', function() {
        var servicesSection = document.getElementById('servicesSection');
        var contactsSection = document.getElementById('contactsSection');
        var windowHeight = window.innerHeight;
        var servicesPosition = servicesSection.getBoundingClientRect().top;
        var contactsPosition = contactsSection.getBoundingClientRect().top;

        if (servicesPosition < windowHeight - 100) {
            servicesSection.style.opacity = '1';
            servicesSection.style.transform = 'translateY(0)';
        }

        if (contactsPosition < windowHeight - 100) {
            contactsSection.style.opacity = '1';
            contactsSection.style.transform = 'translateY(0)';
        }
    });
</script>

</body>
</html>