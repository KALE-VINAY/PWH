<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transit Men's Hostel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container_navbar {
            text-align: center;
            display: contents;
        }
        .top-header {
            background-color: #f8f9fa;
            padding: 28px 0;
            text-align: center;
        }
        .top-header img {
            height: 80px;
            margin-right: 20px;
            margin-left: 20px;
            border-radius: 100%;
        }
        .navbar-brand {
            font-family: Poppins;
            font-size: 28px;
            font-weight: bold;
        }
        .navbar {
            margin-top: 10px;
            background: #00674F;
        }
        .navbar-nav {
            gap: 28px;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            padding-left: 20px;
            padding-right: 20px;
        }
        /* Language selector and search icon */
        .top-header-controls {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 20px;
            position: absolute;
            top: 0;
            right: 30px;
            margin-top: 10px;
        }
        .language-select {
            padding: 8px;
            font-size: 14px;
        }
        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }
        .search-bar input {
            border: none;
            border-bottom: 1px solid #333;
            padding: 6px 30px 6px 10px;
            outline: none;
        }
        .search-bar i {
            position: absolute;
            right: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <header class="top-header">
        <div class="container_navbar d-flex justify-content-center align-items-center">
            <img src="logo/tmh2.png" alt="Logo">
            <div>
                <h1 class="navbar-brand">Pragjyotika Women's Hostel<br> Tezpur University</h1>
            </div>
            <img src="logo/tulogo.png" alt="Logo">
        </div>
        <!-- Language Select and Search Bar -->
        <div class="top-header-controls">
            <div class="language-select">
                <select class="form-select" onchange="changeLanguage(this.value)">
                    <option value="en">English</option>
                    <option value="hi">हिन्दी (Hindi)</option>
                    <!-- Add more languages as needed -->
                </select>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search...">
                <i class="bi bi-search"></i> <!-- Bootstrap search icon -->
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container_navbar">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="adminstration.php">Adminstration</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilities.php">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="boarders.php">Boarders</a></li>
                    <li class="nav-item"><a class="nav-link" href="achievement.php">Events & Achievements</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function changeLanguage(lang) {
            // Example logic: You can load different language content dynamically here
            if (lang === 'hi') {
                document.documentElement.lang = 'hi';
                alert('Website language changed to Hindi!');
                // You can also load localized content dynamically via JavaScript here
            } else if (lang === 'en') {
                document.documentElement.lang = 'en';
                alert('Website language changed to English!');
            }
        }
    </script>
</body>
</html>
