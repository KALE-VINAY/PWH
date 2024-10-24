<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Facilities</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
        }
        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .container h4{
            background-image: url("image/c2.jpg");
            color: white;
            margin-bottom: 20px;
            margin: 28px;
            padding: 10px;
            text-align: center;
        }
        .facility-card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: 0.3s;
            /* border-radius: 10px; */
            overflow: hidden;
            margin-bottom: 30px;
        }
        .facility-card img {
            border-radius: 10px 10px 0 0;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .facility-card-body {
            padding: 20px;
            background-color: #fff;
            border-radius: 0 0 10px 10px;
        }
        .facility-card-body h5 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        .facility-card-body p {
            font-size: 1rem;
            color: #555;
        }
        .facility-card:hover {
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <!-- Container -->
    <div class="container">
        <h4>Facilities Of Prajyotika women's Hostel</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/c1.jpg" alt="Facility 1">
                    <div class="facility-card-body">
                        <h5>Modern Gym</h5>
                        <p>Our hostel features a modern gym equipped with the latest machines and equipment to help residents stay fit and healthy.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/c2.jpg" alt="Facility 2">
                    <div class="facility-card-body">
                        <h5>Spacious Dining Hall</h5>
                        <p>The dining hall is spacious, offering a variety of cuisines and ensuring hygiene and comfort for all residents.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/c3.jpg" alt="Facility 3">
                    <div class="facility-card-body">
                        <h5>High-Speed Wi-Fi</h5>
                        <p>Stay connected with our high-speed Wi-Fi available throughout the hostel premises, making it easy to study and stay in touch.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/c4.jpg" alt="Facility 4">
                    <div class="facility-card-body">
                        <h5>24/7 Security</h5>
                        <p>Security is our top priority. The hostel is monitored by CCTV cameras and has 24/7 security personnel.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/c5.jpg" alt="Facility 5">
                    <div class="facility-card-body">
                        <h5>Recreational Area</h5>
                        <p>Enjoy your leisure time in our recreational area, equipped with games, TV, and comfortable seating.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/facility6.jpg" alt="Facility 6">
                    <div class="facility-card-body">
                        <h5>Laundry Service</h5>
                        <p>We offer an on-site laundry service for residents, ensuring you always have clean clothes with minimal hassle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
