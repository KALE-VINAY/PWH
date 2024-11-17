<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Facilities</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/PWH_logo.png"/></head>

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
                    <img src="image/single_room.jpg" alt="Facility 1">
                    <div class="facility-card-body">
                        <h5>Single sharing room</h5>
                        <p>Comfortable private accommodation featuring a single bed, study desk, and storage space. Each room is well-ventilated and equipped with basic amenities to ensure a peaceful stay and productive study environment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/double_sharing_room.jpg" alt="Facility 1">
                    <div class="facility-card-body">
                        <h5>Double sharing rooms</h5>
                        <p>Well-designed rooms shared between two occupants, featuring individual beds, study spaces, and adequate storage. These rooms balance privacy with companionship, creating an ideal environment for academic and personal growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/mess1.jpg" alt="Facility 2">
                    <div class="facility-card-body">
                        <h5>Spacious Dining Hall</h5>
                        <p>Large, air-conditioned dining area with comfortable seating arrangements. The hall serves nutritious meals in a clean, welcoming environment, accommodating multiple students while maintaining a pleasant dining experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/pantry.jpg" alt="Facility 2">
                    <div class="facility-card-body">
                        <h5>Spacious pantry</h5>
                        <p>Clean and well-maintained pantry space equipped with basic cooking facilities and storage options. Perfect for preparing light meals and storing personal food items in a hygienic environment.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/wifi_facility.jpg" alt="Facility 3">
                    <div class="facility-card-body">
                        <h5>High-Speed Wi-Fi</h5>
                        <p>Reliable, high-speed internet connectivity available throughout the hostel premises. Stay connected for your studies, entertainment, and communication needs with our robust Wi-Fi infrastructure.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/canteen.jpg" alt="Facility 3">
                    <div class="facility-card-body">
                        <h5>Canteen</h5>
                        <p>A well-stocked canteen offering a variety of snacks, beverages, and daily essentials. Enjoy quick bites and refreshments without leaving the premises, with options to suit different tastes and budgets.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/CCTV2.jpg" alt="Facility 4">
                    <div class="facility-card-body">
                        <h5>24/7 Security</h5>
                        <p>Round-the-clock security personnel and surveillance systems ensure your safety and peace of mind. Our dedicated security team maintains strict access control and regular patrols throughout the premises.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/cycle_stand2.jpg" alt="Facility 5">
                    <div class="facility-card-body">
                        <h5>Cycle stand</h5>
                        <p>Secure and covered bicycle parking facility available for residents. Our designated cycle stand offers protection from weather elements and features sturdy racks for safe storage of your bicycles. Keep your eco-friendly mode of transport protected while promoting sustainable commuting.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="facility-card">
                    <img src="image/laundry.jpg" alt="Facility 6">
                    <div class="facility-card-body">
                        <h5>Laundry Service</h5>
                        <p>Convenient on-site laundry facilities with washing machines and dryers, making it easy to maintain your wardrobe. Professional washing and ironing services are also available at nominal charges.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
