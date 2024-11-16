<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prajyotika women's Hostel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="home.css">
</head>
<body>

<!-- Navbar -->
<?php include 'navbar.php'; ?>

<div style="display: flex; justify-content: space-between; width: 100%;">
    <!-- Image Carousel (60% width) -->
    <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" style="width: 60%;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image\PWH_5.png" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="image\PWH_6.png" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="image\PWH_4.png" class="d-block w-100" alt="Image 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Awards & Accolades (30% width) -->
    <div id="awardsCarousel" class="carousel slide" data-bs-ride="carousel" style="width: 30%;">
        <h3>Awards & Accolades</h3>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/c1.jpg" class="d-block w-100" alt="Award 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Award Title 1</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c2.jpg" class="d-block w-100" alt="Award 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Award Title 2</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c3.jpg" class="d-block w-100" alt="Award 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Award Title 3</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#awardsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#awardsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Content Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <!-- Latest News Section -->
        <div class="col-md-4">
            <div class="latest-news">
                <div class="news-title">Latest News</div>
                <div class="notice"><a href="#" class="notice-link">Notice from Tezpur University</a></div>
                <div class="news-section">
                    <div class="scrolling-news">
                        <div class="news-item">
                            <a href="#" class="news-link">Application Form 2024-25</a>
                            <span class="news-date">22.07.2024</span>
                        </div>
                        <div class="news-item">
                            <a href="#" class="news-link">Online Fee Payment</a>
                        </div>
                        <div class="news-item">
                            <a href="#" class="news-link">Hostel Rules Update</a>
                        </div>
                        <div class="news-item">
                            <a href="#" class="news-link">New Mess Menu Announced</a>
                        </div>
                        <div class="news-item">
                            <a href="#" class="news-link">Upcoming Event</a>
                        </div>
                    </div>
                </div>
                <div class="view-all text-end">
                    <a href="#" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="col-md-8">
            <div class="text-center mb-4">
                <h4>What's Happening @ Prajyotika women's Hostel, Tezpur University</h4>
               <h1>সকলোতকৈ জিলিকা </h1>
                   <h1> আমাৰ প্ৰাগজ্যোতিকা ।
                    </h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="image/c2.jpg" class="img-fluid" alt="Hostel Image 1">
                </div>
                <div class="col-md-4">
                    <img src="image/c1.jpg" class="img-fluid" alt="Hostel Image 2">
                </div>
                <div class="col-md-4">
                    <img src="image/c3.jpg" class="img-fluid" alt="Hostel Image 3">
                </div>
            </div>
            <div class="row text-center mt-4 stats-section">
                <div class="col-md-3">
                    <div class="stat-item">
                        <h1>8</h1>
                        <p>Wings</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h1>4</h1>
                        <p>Floors per Cluster</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h1>130+</h1>
                        <p>Boarders</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h1>1</h1>
                        <p>Mess</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-section">
    <h2 class="about-heading">About the Prajyotika Women's Hostel</h2>
    <p class="about-content">
        Prajyotika Women's Hostel is one of the premier hostels in Tezpur University, Assam, offering a safe and vibrant living space for female students. 
        The hostel provides modern facilities and a friendly environment, ensuring comfort and a sense of community. 
        Located within the serene campus of Tezpur University, the hostel offers a balanced atmosphere where students can focus on academics and enjoy various extracurricular activities. 
        With a strong commitment to the well-being of its residents, Prajyotika Women's Hostel emphasizes cleanliness, security, and a supportive environment that nurtures personal and academic growth.
    </p>
    <div class="about-image-container">
        <img src="image\PWH_6.png" alt="Prajyotika Women's Hostel" class="about-image">
    </div>
</div>

<div class="facility-container my-5">
    <div class="facility-title-section">
        <h2 class="facility-title">Facilities</h2>
    </div>
    <div class="facility-row">
        <!-- Card for Facility 1 -->
        <div class="facility-card">
            <div class="facility-card-inner">
                <div class="facility-card-front">
                    <img src="image/c3.jpg" alt="Library" class="facility-card-img">
                    <div class="facility-card-label">Library</div>
                </div>
                <div class="facility-card-back">
                    <a href="#" class="facility-read-more">Read More</a>
                </div>
            </div>
        </div>
        <div class="facility-card">
            <div class="facility-card-inner">
                <div class="facility-card-front">
                    <img src="image/c1.jpg" alt="Library" class="facility-card-img">
                    <div class="facility-card-label">Library</div>
                </div>
                <div class="facility-card-back">
                    <a href="#" class="facility-read-more">Read More</a>
                </div>
            </div>
        </div>
        <div class="facility-card">
            <div class="facility-card-inner">
                <div class="facility-card-front">
                    <img src="image/c2.jpg" alt="Library" class="facility-card-img">
                    <div class="facility-card-label">Library</div>
                </div>
                <div class="facility-card-back">
                    <a href="#" class="facility-read-more">Read More</a>
                </div>
            </div>
        </div>
        <div class="facility-card">
            <div class="facility-card-inner">
                <div class="facility-card-front">
                    <img src="image/c3.jpg" alt="Library" class="facility-card-img">
                    <div class="facility-card-label">Library</div>
                </div>
                <div class="facility-card-back">
                    <a href="#" class="facility-read-more">Read More</a>
                </div>
            </div>
        </div>
        <!-- Additional cards would follow with similar structure -->
    </div>
</div>


<!-- Testimonial Section -->
<div class="testimonial-section">
    <div id="residentCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <h2>Boarders Experience</h2>
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
        <a class="carousel-control-prev" href="#residentCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#residentCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
<!-- Hostel Tour Section -->
<div class="hostel-tour-section text-center">
    <h2>Hostel Tour</h2>
    <p>Take a virtual tour of our hostel facilities and get a glimpse of the comfortable living spaces we offer.</p>
    <div class="video-container">
    <iframe width="560" height="200" src="https://www.youtube.com/embed/KnTtqdUsSWg?si=nVhbczIxpOspbUjc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<!-- Footer -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>