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
        .footer .footer-links li {
            margin-bottom: 10px;
        }
        .footer .footer-links li:not(:last-child) {
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
                    <h5 class="footer-title">Department of Social Work</h5>
                    <p>Tezpur University, Napaam, Assam - 784028</p>
                    <p><i class="fa fa-phone"></i> 03712275831</p>
                    <p><i class="fa fa-envelope"></i> hod_sw@tezu.ernet.in</p>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">Useful Links</h5>
                    <ul class="footer-links">
                        <li><a href="faculty.php">Faculty</a></li>
                        <li><a href="staff.php">Staff</a></li>
                        <li><a href="visitors.php">Visitors</a></li>
                        <li><a href="old/index.php">Old website</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">Useful Links</h5>
                    <ul class="footer-links">
                        <li><a href="research_area.php">Research Area</a></li>
                        <li><a href="trust_area.php">Thrust Area</a></li>
                        <li><a href="ongoing_projects.php">Ongoing Project</a></li>
                        <li><a href="completed_projects.php">Completed Project</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="footer-title">Opening Hours</h5>
                    <ul class="footer-links">
                        <li>Mon - Friday: 9.00 am - 5.30 pm</li>
                        <li>Sat & Sun: Closed</li>
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
