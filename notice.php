<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="logo/PWH_logo.png"/></head>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            line-height: 1.6;
            background-color: #f8f9fa;
        }

        .container {
            width: 100%;
            margin: auto;
            overflow: hidden;
        }

        .notice-section {
            margin: 20px 0;
        }

        .notice-section h1 {
            text-align: center;
            color: #d4af37;
            background: linear-gradient(to right, #f7e1b5, #d4af37);
            padding: 10px 0;
            font-size: 2em;
            font-weight: bold;
        }

        .notice-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .notice-item p {
            font-size: 1em;
        }

        .view-btn {
            background-color: black;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 1em;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
<?php include 'navbar.php'; ?>

    <div class="container">
            
        <div class="notice-section">
            <h1>Notice</h1>
            <div class="notice-item">
                <p>1. Appointment of Mess Managers for January and February 2024</p>
                <button class="view-btn">View</button>
            </div>
            <div class="notice-item">
                <p>2. Internal No Dues Certificate</p>
                <button class="view-btn">View</button>
            </div>
            <div class="notice-item">
                <p>3. Apply for Mess Manager in the Month of December</p>
                <button class="view-btn">View</button>
            </div>
            <div class="notice-item">
                <p>4. Apply for the Wing Representative for Session (2023-2024)</p>
                <button class="view-btn">View</button>
            </div>
        </div>
 
    </div>
    <!-- Footer -->
<?php include 'bottom_nav.php'; ?>
</body>
</html>
