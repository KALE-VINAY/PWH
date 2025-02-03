<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Pragjyotika Girls Hostel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="logo/PWH_logo.png"/></head>

    <style>
        :root {
            --primary-green: #2E8B57;
            --accent-yellow: #FFD700;
        }
        
        .hero-section {
            background: linear-gradient(rgba(46, 139, 87, 0.9), rgba(46, 139, 87, 0.8)),
                        url('image/PWH_6.png') center/cover;
            height: 30vh;
            color: white;
            margin-top:20px;
        }

        .value-card {
            border: none;
            transition: transform 0.3s ease;
            background: #f8f9fa;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .value-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .value-icon.diamond {
            /* color: #D1D1D1; Diamond - silvery white */
            /* color: #ADD8E6; Light blue */
            color: #87CEFA; 
        }
        
        .value-icon.star {
            color: #FFD700; /* Star - golden yellow */
        }
        
        .value-icon.emerald {
            color: #50C878; /* Emerald - vibrant green */
        }
        
        .value-icon.ruby {
            color: #E0115F; /* Ruby - deep red */
        }

        .section-title {
            position: relative;
            margin-bottom: 4rem;
        }
        .section-titles{
            margin-bottom :4rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-yellow);
        }

        .mission-section {
            background-color: #f8f9fa;
        }

        .symbol-item {
            padding: 2rem;
            border-radius: 10px;
            margin: 1rem 0;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .salogon {
            margin: 20px 0;
            text-align: center;
        }

        .salogon h1 {
            font-size: 2.5rem;
            line-height: 1.4;
            color: #2E8B57; /* Using your primary green color */
        }

        /* Media queries for responsiveness */
        @media (max-width: 1200px) {
            .salogon h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 992px) {
            .salogon h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .salogon h1 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .salogon h1 {
                font-size: 1.5rem;
                line-height: 1.3;
            }
            
            .salogon {
                margin: 15px 0;
            }
        }

        @media (max-width: 400px) {
            .salogon h1 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <!-- Hero Section -->
    <div class="hero-section d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <h6 class="display-3 fw-bold mb-4">Welcome to Pragjyotika</h6>
            <p class="lead">Where the first rays of light illuminate paths to excellence</p>
        </div>
    </div>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Our Story</h2>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="logo/PWH_logo.png" alt="Hostel Building" class="img-fluid ">
                </div>
                <div class="col-lg-6">
                    <div class="salogon">
                        <h1>সকলোতকৈ জিলিকা <br>আমাৰ প্ৰাগজ্যোতিকা । </h1>
                    </div> 
                    <p class="lead"><br>Pragjyotika, meaning "the first ray of light," is more than just a hostel - it's a nurturing community where young women are empowered to shine bright and achieve their dreams. Our heritage of excellence is built on the foundational values of strength, grace, wisdom, and eternal growth.</p>
                    <p>Just as our logo symbolizes the rising morning sun radiating positivity and renewal, we strive to create an environment that fosters personal growth, academic excellence, and lifelong friendships.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-titles">Crown Jewels: Embodying Our Core Principles</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="value-card card h-100 text-center p-4">
                        <div class="card-body">
                            <i class="fas fa-gem value-icon diamond"></i>
                            <h4 class="card-title">Resilience</h4>
                            <p class="card-text">Like our diamond crown, we nurture strength and unbreakable spirit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="value-card card h-100 text-center p-4">
                        <div class="card-body">
                            <i class="fas fa-star value-icon star"></i>
                            <h4 class="card-title">Wisdom</h4>
                            <p class="card-text">Guiding our residents towards knowledge and enlightenment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="value-card card h-100 text-center p-4">
                        <div class="card-body">
                            <i class="fas fa-seedling value-icon emerald"></i>
                            <h4 class="card-title">Growth</h4>
                            <p class="card-text">Fostering continuous personal and academic development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="value-card card h-100 text-center p-4">
                        <div class="card-body">
                            <i class="fas fa-shield-alt value-icon ruby"></i>
                            <h4 class="card-title">Protection</h4>
                            <p class="card-text">Ensuring safety and security in our nurturing environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section py-5">
        <div class="container">
            <h2 class="text-center section-title">Our Mission</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="lead mb-5">To provide a safe, nurturing, and empowering environment where young women can pursue their academic goals while developing into confident, well-rounded individuals ready to make their mark on the world.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="symbol-item text-center">
                        <i class="fas fa-home mb-3 value-icon"></i>
                        <h4>Safe Haven</h4>
                        <p>A secure and comfortable living space that feels like home</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="symbol-item text-center">
                        <i class="fas fa-users mb-3 value-icon"></i>
                        <h4>Community</h4>
                        <p>A supportive network of peers, mentors and friends</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="symbol-item text-center">
                        <i class="fas fa-graduation-cap mb-3 value-icon"></i>
                        <h4>Excellence</h4>
                        <p>Commitment to academic and personal achievement</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title">What Our Residents Say</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <p class="mb-3"><i class="fas fa-quote-left text-muted me-2"></i>Pragjyotika has become my second home. The supportive environment and wonderful community have helped me grow both academically and personally.<i class="fas fa-quote-right text-muted ms-2"></i></p>
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Student" class="rounded-circle me-3">
                            <div>
                                <h5 class="mb-0">Priyadarshini</h5>
                                <small class="text-muted">Ex-Student</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <p class="mb-3"><i class="fas fa-quote-left text-muted me-2"></i>The facilities and care provided here are exceptional. I've made lifelong friends and created memories that I'll cherish forever.<i class="fas fa-quote-right text-muted ms-2"></i></p>
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/50" alt="Student" class="rounded-circle me-3">
                            <div>
                                <h5 class="mb-0">Anjali Patel</h5>
                                <small class="text-muted">Ex-Student</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'bottom_nav.php'; ?>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>