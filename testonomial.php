<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Experience</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f6eae2;
        }
        .carousel-item {
            text-align: center;
            padding: 50px 0;
        }
        .carousel-caption {
            position: relative;;
            color: #333;
            background: aliceblue;
            width: 70%;
            text-align: center;
        }
        .carousel-caption h5 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .carousel-caption p {
            font-size: 1.2rem;
            color: #666;
        }
        .carousel-caption .stars {
            color: #ffc107;
            margin-top: 15px;
        }
        .carousel-caption .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 20px 0;
        }
    </style>
</head>
<body>

<div id="residentCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <h5>Resident Experience</h5>
        <!-- First Carousel Item -->
        <div class="carousel-item active">
            <div class="carousel-caption">
               
                <p>“Staying at TAPMI's hostel is an unforgettable experience. The facilities are top-notch, providing a comfortable and conducive environment for both studying and relaxation. The hostel staff were friendly and accommodating, ensuring a hassle-free stay.”</p>
                <div class="stars">
                    <span>★ ★ ★ ★ ★</span>
                </div>
                <img src="https://via.placeholder.com/80" alt="Ravi Sahu" class="profile-img">
                <h6>Mr Ravi Sahu, Resident</h6>
            </div>
        </div>
        <!-- Second Carousel Item -->
        <div class="carousel-item">
            <div class="carousel-caption">
                <p>“Living at the hostel was a fantastic experience. The environment was perfect for both academic pursuits and personal growth. The hostel facilities were excellent, and the staff made me feel at home.”</p>
                <div class="stars">
                    <span>★ ★ ★ ★ ★</span>
                </div>
                <img src="https://via.placeholder.com/80" alt="John Doe" class="profile-img">
                <h6>Mr John Doe, Resident</h6>
            </div>
        </div>
    </div>
    <!-- Carousel Controls -->
    <a class="carousel-control-prev" href="#residentCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#residentCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
