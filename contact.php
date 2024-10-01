<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f3; /* Soft background to complement the dark green theme */
        }

        .container {
            background-color: #f0f4f3; /* Adjusting background color for the container */
        }

        .breadcrumb-section {
            padding: 20px;
            background-color: #eaf0ee; /* Light greenish-gray background */
        }

        .breadcrumb-section h2 {
            color: #00674F; /* Updated to match the desired green color */
        }

        .breadcrumb .breadcrumb-item a {
            color: #00674F; /* Breadcrumb link color */
        }

        .breadcrumb .breadcrumb-item.active {
            color: #004d3d; /* Darker shade for the active breadcrumb */
        }

        .info-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 20px;
            flex-wrap: wrap; /* Flex-wrap to ensure boxes stack on smaller screens */
        }

        .info-box {
            background-color: white;
            margin-top: 50px;
            margin-left:30px;
            
            height: 200px;
            max-width: 350px; /* Flexible width for responsiveness */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Slightly enhanced shadow */
            border-radius: 10px; /* More rounded corners */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
 

        .info-box img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }

        .info-box h5 {
            color: #00674F; /* Title color */
            margin-top: 10px;
        }

        .info-box p a {
            color: #00674F; /* Link color within info-box */
            text-decoration: none;
        }

        .info-box p a:hover {
            text-decoration: underline; /* Underline on hover for better accessibility */
        }

        .contact-form {
            margin-top: 40px;
            margin-bottom: 40px;
            padding: 30px;
            background-color: white;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Enhanced shadow */
            border-radius: 10px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"] {
            height: 45px; /* Uniform height */
        }

        .contact-form button {
            background-color: #00674F;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #004d3d; /* Darker green on hover */
        }

        .social-media-links {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .social-media-links a img {
            width: 30px;
            height: 30px;
            margin: 0 10px;
        }

        .map-container {
            margin-top: 20px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Enhanced shadow */
        }

        iframe {
            width: 100%;
            height: 400px;
            border: 0;
        }

        @media (max-width: 768px) {
            .breadcrumb-section h2 {
                text-align: center; /* Center heading on smaller screens */
            }

            .info-section {
                flex-direction: column; /* Stack info boxes vertically */
            }

            /* .info-box {
                width: 90%; /* Take up most of the screen width on small devices */
            } */

            .contact-form {
                padding: 20px;
            }

            iframe {
                height: 300px; /* Adjust map height for smaller screens */
            }

            .social-media-links a img {
                width: 25px;
                height: 25px; /* Reduce icon size on smaller screens */
            }
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container">
    <!-- Breadcrumb and Heading -->
    <div class="row breadcrumb-section">
        <div class="col-md-12">
            <h2>Contact</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Map Section -->
    <div class="row justify-content-center map-container">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d634.4907487560389!2d92.83204872949777!3d26.702727269030767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3744eb0012a8f1c1%3A0x680381046662346!2sPragjyotika%20Women's%20Hostel!5e0!3m2!1sen!2sin!4v1727548462036!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- Information section -->
    <div class="row info-section text-center">
        <div class="col-md-4">
            <div class="info-box">
                <img src="image/email_icon.png" alt="Email Icon">
                <h5>Have any questions?</h5>
                <p><a href="mailto:director@lic.du.ac.in">director@tezu.ac.in</a></p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box">
                <img src="image/phone_icon.png" alt="Phone Icon">
                <h5>Call us</h5>
                <p>+91-11-23711222</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="info-box">
                <img src="image/map_icon.png" alt="Map Icon">
                <h5>Reach Us</h5>
                <p>Pragjyotika Women's Hostel,<br>Tezpur University,<br>Tezpur – 784028</p>
            </div>
        </div>
    </div>

    <!-- Contact form section -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="contact-form">
                <h4>Write a message</h4>
                <p>If you have any questions, please do not hesitate to send us a message. We reply within 24 hours!</p>

                <form action="contact.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email">E-mail address:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </form>

                <!-- Social media links

                <!-- Social media links -->
                <div class="social-media-links">
                    <a href="#"><img src="image\facebook_icon.png" alt="Facebook"></a>
                    <a href="#"><img src="image\youtube_icon.png" alt="YouTube"></a>
                    <a href="#"><img src="image\linkedin.png" alt="LinkedIn"></a>
                </div>
            </div>
        </div>
    </div>

    

</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
