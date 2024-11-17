<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Carousel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/PWH_logo.png"/></head>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container{
            box-shadow: 0 0 20px grey;
            padding: 20px;
            margin-bottom: 40px;
        }

        .carousel-item img {
            width: 100%; /* Full width */
            height: 400px; /* Fixed height */
            object-fit: cover; /* Ensures image covers the area */
        }

        .event-header {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-size: 1.5rem;
            margin: 28px 0px;
        }

        .carousel-inner{
            border: 2px solid black;
            padding: 5px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }

        .carousel:hover .carousel-control-prev,
        .carousel:hover .carousel-control-next {
            display: block;
        }

        .carousel-indicators button {
            background-color: black;
            border-radius: 50%; /* Make indicators round */
            width: 12px;
            height: 12px;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container my-4">
    <!-- First Event Carousel -->
    <div class="event-header">Upcoming Events 2024</div>
    
    <div id="eventCarousel1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#eventCarousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#eventCarousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#eventCarousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/c1.jpg" class="d-block w-100" alt="Security Staff Training">
            </div>
            <div class="carousel-item">
                <img src="image/c2.jpg" class="d-block w-100" alt="Independence Day">
            </div>
            <div class="carousel-item">
                <img src="image/c3.jpg" class="d-block w-100" alt="Cultural Fest">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Second Event Carousel -->
<div class="container my-4">
    <div class="event-header">Upcoming Events 2024</div>
    
    <div id="eventCarousel2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#eventCarousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#eventCarousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#eventCarousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/c1.jpg" class="d-block w-100" alt="Security Staff Training">
            </div>
            <div class="carousel-item">
                <img src="image/c2.jpg" class="d-block w-100" alt="Independence Day">
            </div>
            <div class="carousel-item">
                <img src="image/c3.jpg" class="d-block w-100" alt="Cultural Fest">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
