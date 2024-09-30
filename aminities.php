<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amenities Carousel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f3ef;
        }
        .container_aminities{
            background: #eee3d4;
            margin: 28px 45px;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        h2 {
            text-align: center;
            font-family: 'Georgia', serif;
            margin: 40px 0;
        }
        .carousel-item {
            transition: transform 6.5s ease; /* Slows down the transition */
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5); /* Adds a background to make arrows visible */
            padding: 10px;
            border-radius: 50%;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%; /* Ensures the side arrows are not too close to the cards */
        }
    </style>
</head>
<body>

<div class="container_aminities">
    <h2>Amenities</h2>
    <div id="amenitiesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="image/c1.jpg" class="card-img-top" alt="Cafeteria">
                            <div class="card-body">
                                <h5 class="card-title">Cafeteria</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="image/c2.jpg" class="card-img-top" alt="Recreational Area">
                            <div class="card-body">
                                <h5 class="card-title">Recreational Area</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="image/c3.jpg" class="card-img-top" alt="Medical Center">
                            <div class="card-body">
                                <h5 class="card-title">Medical Center</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="image/c4.jpg" class="card-img-top" alt="Library">
                            <div class="card-body">
                                <h5 class="card-title">Library</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="image/c5.jpg" class="card-img-top" alt="Gym">
                            <div class="card-body">
                                <h5 class="card-title">Gym</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="image/c1.jpg" class="card-img-top" alt="Swimming Pool">
                            <div class="card-body">
                                <h5 class="card-title">Swimming Pool</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#amenitiesCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#amenitiesCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
