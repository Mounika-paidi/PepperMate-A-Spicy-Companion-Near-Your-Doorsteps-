<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEPPER MATE - Menu</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background: url('images/bannner3.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            align-items: center;
            position: relative;
        }

        .choice-section {
            margin-top: 60px;
            text-align: center;
            font-size: 24px;
            color: rgba(255, 87, 51, 0.9);
            font-weight: bold;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
        }

        .pincode-section {
            margin-top: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 600px;
        }
        .pincode-section input {
            padding: 10px;
            font-size: 16px;
            width: 70%;
            max-width: 300px;
            border: 1px solid rgba(255, 87, 51, 0.9);
            border-radius: 5px;
            margin-top: 10px;
        }
        .pincode-section button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 10px;
            background-color: rgba(255, 87, 51, 0.9);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .pincode-section button:hover {
            background-color: rgba(255, 87, 51, 1);
        }
        .pincode-message {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
        }
        .pincode-message.success {
            color: green;
        }
        .pincode-message.error {
            color: red;
        }

        .category-icons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
            gap: 20px;
            padding-bottom: 60px;
        }
        .category {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100px;
            height: 130px;
            cursor: pointer;
            transition: transform 0.2s;
        }
        .category img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .category:hover {
            transform: scale(1.1);
        }
        .category-label {
            margin-top: 8px;
            color: black;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        footer {
            background-color: rgba(255, 87, 51, 0.8);
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        footer a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            text-align: center;
        }
        footer a:hover {
            background-color: #ddd;
            color: black;
        }

        .alert-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 10000;
        }
        .alert-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 300px;
            font-size: 18px;
        }
        .alert-options {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            align-items: center;
            margin-top: 15px;
        }
        .alert-options button {
            padding: 10px 20px;
            background-color: rgba(255, 87, 51, 0.9);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .alert-options button:hover {
            background-color: rgba(255, 87, 51, 1);
        }
        .alert-options img {
            width: 20px;
            height: 20px;
        }

        .warning-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 10001;
        }
        .warning-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 300px;
            font-size: 18px;
        }
        .warning-box button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: rgba(255, 87, 51, 0.9);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .warning-box button:hover {
            background-color: rgba(255, 87, 51, 1);
        }
    </style>
</head>
<body>

    <div class="choice-section">
        Craving something delicious? Choose your favorite below!
    </div>

    <div class="pincode-section">
        <label for="pincodeInput">Enter Your Pincode:</label><br>
        <input type="text" id="pincodeInput" placeholder="e.g., 144401">
        <button onclick="checkPincode()">Submit</button>
        <p id="pincodeMessage" class="pincode-message"></p>
    </div>

    <div class="category-icons">
        <div class="category">
            <a href="beverages.html" title="Beverages">
                <img src="images/beverages.jpg" alt="Beverages">
            </a>
            <div class="category-label">Beverages</div>
        </div>
        <div class="category">
            <a href="snacks.html" title="Snacks" onclick="showAlert(event)">
                <img src="images/snacks.jpg" alt="Snacks">
            </a>
            <div class="category-label">Snacks</div>
        </div>
        <div class="category">
            <a href="starters.html" title="Starters" onclick="showAlert(event)">
                <img src="images/starters.jpg" alt="Starters">
            </a>
            <div class="category-label">Starters</div>
        </div>
        <div class="category">
            <a href="main-course.html" title="Main Course" onclick="showAlert(event)">
                <img src="images/maincourse.jpg" alt="Main Course">
            </a>
            <div class="category-label">Main Course</div>
        </div>
        <div class="category">
            <a href="desserts.html" title="Desserts">
                <img src="images/desserts.jpg" alt="Desserts">
            </a>
            <div class="category-label">Desserts</div>
        </div>
        <div class="category">
            <a href="salads.html" title="Salads">
                <img src="images/salads.jpg" alt="Salads">
            </a>
            <div class="category-label">Salads</div>
        </div>
        <div class="category">
            <a href="soups.html" title="Soups" onclick="showAlert(event)">
                <img src="images/soups.jpg" alt="Soups">
            </a>
            <div class="category-label">Soups</div>
        </div>
    </div>

    <div class="alert-overlay" id="alertOverlay">
        <div class="alert-box">
            <p>Please choose an option:</p>
            <div class="alert-options">
                <button onclick="redirectTo('veg')">
                    <img src="images/veglogo.jpg" alt="Veg"> Veg
                </button>
                <button onclick="redirectTo('nonveg')">
                    <img src="images/nonveg.png" alt="Non-Veg"> Non-Veg
                </button>
            </div>
            <button class="close-button" onclick="closeAlert()">Close</button>
        </div>
    </div>

    <div class="warning-overlay" id="warningOverlay">
        <div class="warning-box">
            <p>Please enter your pincode to check delivery availability.</p>
            <button onclick="closeWarning()">OK</button>
        </div>
    </div>

    <footer>
        <a href="firstpage.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="cart.php">Cart</a>
    </footer>

    <script>
        let isPincodeValid = false;

        const pincodes = {
            "144401": "Phagwara",
            "110001": "New Delhi",
            "400001": "Mumbai",
            "600001": "Chennai",
            "560001": "Bangalore",
        };

        function checkPincode() {
            const pincode = document.getElementById('pincodeInput').value.trim();
            const pincodeMessage = document.getElementById('pincodeMessage');

            if (pincode === "") {
                pincodeMessage.textContent = "Please enter a pincode.";
                pincodeMessage.className = "pincode-message error";
                isPincodeValid = false;
                return;
            }

            if (!/^\d{6}$/.test(pincode)) {
                pincodeMessage.textContent = "Invalid pincode. Please enter a 6-digit pincode.";
                pincodeMessage.className = "pincode-message error";
                isPincodeValid = false;
                return;
            }

            if (pincodes.hasOwnProperty(pincode)) {
                pincodeMessage.textContent = `Delivery is available in ${pincodes[pincode]} area.`;
                pincodeMessage.className = "pincode-message success";
                isPincodeValid = true;
            } else {
                pincodeMessage.textContent = "Sorry, delivery is not available in your area.";
                pincodeMessage.className = "pincode-message error";
                isPincodeValid = false;
            }
        }

        function showAlert(event) {
            event.preventDefault();
            if (isPincodeValid) {
                document.getElementById('alertOverlay').style.display = 'flex';
            } else {
                document.getElementById('warningOverlay').style.display = 'flex';
            }
        }

        function closeAlert() {
            document.getElementById('alertOverlay').style.display = 'none';
        }

        function closeWarning() {
            document.getElementById('warningOverlay').style.display = 'none';
        }

        function redirectTo(type) {
            closeAlert(); 
            if (type === 'veg') {
                window.location.href = 'veg.html'; 
            } else if (type === 'nonveg') {
                window.location.href = 'nonveg.html'; 
            }
        }
    </script>

</body>
</html>
