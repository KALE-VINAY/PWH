<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Navbar</title>
    <style>
        .footer {
            background-color: #ceecd0;
            color: black;
            padding: 20px ;
        }
        .footer-row {
            display: flex;
            justify-content: space-between;
        }
        .footer a {
            color: blue;
            text-decoration: none;
        }
        .footer a:hover {
            color: #ccc;
        }
        .footer .footer-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .footer .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer .footer-links p {
            margin-bottom: 10px;
        }
        .footer .footer-links p:not(:last-child) {
            border-bottom: 1px dotted black;
            padding-bottom: 5px;
            margin-bottom: 5px;
        }
        .footer-row p {
            border-top: 1px dotted black;
        }
        .footer .footer-contact, .footer .footer-hours {
            margin-bottom: 20px;
        }
        .footer-contact{
            margin-right:20px;
        }
        .footer .social-icons a {
            margin-right: 10px;
            font-size: 1.5rem;
            color: black;
        }
        .footer .social-icons a:hover {
            color: #ccc;
        }
        @media screen and (max-width: 590px) {
            .footer-row {
                display: block;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="col-md-3 footer-contact">
                    <h5 class="footer-title">Prajyotika women's Hostel</h5>
                    <p>Tezpur University, Napaam, Assam - 784028</p>
                    <p><i class="fa fa-phone"></i> xxxxx xxxxx</p>
                    <p><i class="fa fa-envelope"></i> pwh.tezu@gmail.com</p>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">University Links</h5>
                    <ul class="footer-links">
                        <li><a href="https://www.tezu.ernet.in/">Tezpur University</a></li>
                        <li><a href="https://www.tezu.ernet.in/newsfeeds.html">TU News & Notifications</a></li>
                        <li><a href="https://www.tezu.ernet.in/Library/index.php">Central Library</a></li>
                        <li><a href="https://www.tezu.ernet.in/bus_time/Bus_Timing_8_2_2023.pdf">Bus Timings</a></li>
                        <li><a href="https://www.tezu.ernet.in/notice/2023/December/HOLIDAY_LIST_2024.pdf">Holiday List</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">Download Links</h5>
                    <ul class="footer-links">
                        <li><a href="https://www.tezu.ernet.in/hostels/cmh/cmh_accomodation_form.pdf">Hostel Accommodation Form</a></li>
                        <li><a href="https://www.tezu.ernet.in/hostels/cmh/Hostel-Accommodation-Guest.pdf">Guest Accommodation Form</a></li>
                        <li><a href="https://www.tezu.ernet.in/hostels/cmh/pdf/cmh%20Hostel_Rules_2019.pdf">Hostel Rules</a></li>
                        <li><a href="pdf/guest_form.pdf">Guest form</a></li>
                        <li><a href="#">No Dues Certificate</a></li>
                        <li><a href="#">Hostel Clearance Form</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">Address</h5>
                    <ul class="footer-links">
                        <p>Prajyotika women's Hostel<br>Tezpur University, Napaam, Tezpur - 784028</p>
                        <p>Email: pwh.tezu@gmail.com</p>
                        <p>Phone: +91 xxxxx xxxxx</p>
                    </ul>
                    <h5 class="footer-title">Follow Us</h5>
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-row">
                <div class="col-12 text-center">
                    <p class="mt-4 mb-0">Copyright &copy; 2024.#Nitish Priyadarshi All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
