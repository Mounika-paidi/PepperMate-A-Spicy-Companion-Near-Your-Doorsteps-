
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEPPER MATE</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background: url('images/banner.png') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: rgba(255, 87, 51, 0.8);
                        padding: 10px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        nav .logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        nav img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            height: 100%;
            margin-top: 80px;
            width: 100%;
            padding: 20px;
        }
        .quote-section {
            border-radius: 10px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .quote-section h2 {
            margin: 0 0 20px;
            font-size: 36px;
        }
        .sign-in-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none; 
        }
        .sign-in-button:hover {
            background-color: #45a049;
        }
        .search-bar {
            display: none;
            position: fixed;
            top: 60px;
            right: 20px;
            z-index: 1000;
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .search-bar input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-bar button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function toggleSearchBar() {
            const searchBar = document.getElementById('searchBar');
            searchBar.style.display = searchBar.style.display === 'none' || searchBar.style.display === '' ? 'block' : 'none';
        }
    </script>
</head>
<body>

    <nav>
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>
        <div>
            <a href="#cart">Cart</a>
            <a href="#user">User </a>
            <a href="#search" onclick="toggleSearchBar()">Search</a>
        </div>
    </nav>

    <div class="search-bar" id="searchBar">
        <input type="text" placeholder="Search...">
        <button type="button" onclick="alert('Search functionality not implemented yet!')">Go</button>
    </div>

    <div class="content">
        <div class="quote-section">
            <h2>"Dive into Delicious Deals and Discounts with<br>PepperMate...!"</h2>
            <a href="signin.html" class="sign-in-button">Sign In</a>
        </div>
    </div>

</body>
</html>