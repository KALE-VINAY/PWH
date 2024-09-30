<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transit Men's Hostel Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-custom {
            border-radius: 10px;
            width: 60%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #fff;
        }

        .card-custom img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            margin-top: 12px;
        }

        .card-header-custom {
            background-color: #002855;
            color: white;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .nav-tabs-custom {
            /* background-color: #002855; */
            background-image: url("image/c2.jpg");
            color: white;
            margin-bottom: 20px;
            margin: 28px;
            padding: 10px;
            text-align: center;
        }

        .nav-tabs-custom button {
            background-color: #f39422;
            color: white;
            border: none;
            margin: 0 10px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .nav-tabs-custom button.active {
            background-color: #343a40;
        }

        .nav-tabs-custom button:hover {
            background-color: #343a40;
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }
        .table-responsive {
    margin-top: 20px;
}
.contact_details{
    background-color: #002855;
    color: white;
}
.contact_details p{
    margin-bottom: 1px;
}

.table th, .table td {
    vertical-align: middle;
    text-align: center;
}

.table img {
    border-radius: 5px;
}

    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<!-- Navbar -->
<div class="nav-tabs-custom">
    <h4>Administration of Transit Men's Hostel-2</h4>
    <button class="tab-btn active" data-target="warden">Warden</button>
    <button class="tab-btn" data-target="prefects">Prefect(s)</button>
    <button class="tab-btn" data-target="former-warden">Assistant Prefect</button>
    <button class="tab-btn" data-target="office-staff">Office Staff</button>
    <button class="tab-btn" data-target="hostel-admin">Hostel Admin(s)</button>
</div>

<!-- Content Sections -->
<div class="container">
<div id="warden" class="content-section active">
    <!-- Current Wardens -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">SENIOR WARDEN</div>
                <img src="image/c1.jpg" alt="Senior Warden">
                <h5>Dr. Akash Ranjan</h5>
                <p>Associate Professor<br>Department of Education, Tezpur University</p>
                <div class="contact_details">
                  <p>Phone: +919804173515</p>
                  <p>Email: aranjan@tezu.ernet.in</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">WARDEN</div>
                <img src="image/c2.jpg" alt="Warden">
                <h5>Dr. Biswajit Ghose</h5>
                <p>Assistant Professor<br>Department of Commerce, Tezpur University</p>
                <div class="contact_details">
                  <p>Phone: +919804173515</p>
                  <p>Email: aranjan@tezu.ernet.in</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Former Wardens -->
    <h3 class="mt-4">Former Wardens</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="image/fw1.jpg" alt="Former Warden 1" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td>Dr. John Doe</td>
                    <td>Department of History</td>
                    <td>2015-2018</td>
                </tr>
                <tr>
                    <td><img src="image/fw2.jpg" alt="Former Warden 2" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td>Dr. Jane Smith</td>
                    <td>Department of Physics</td>
                    <td>2012-2015</td>
                </tr>
                <tr>
                    <td><img src="image/fw3.jpg" alt="Former Warden 3" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td>Dr. Richard Roe</td>
                    <td>Department of Chemistry</td>
                    <td>2008-2012</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    <div id="former-warden" class="content-section">
        <!-- Add content for Former Warden -->
        <p>Former Warden content goes here...</p>
    </div>

    <div id="prefects" class="content-section">
        <!-- Add content for Prefects -->
        <p>Prefect(s) content goes here...</p>
    </div>

    <div id="office-staff" class="content-section">
        <!-- Add content for Office Staff -->
        <p>Office Staff content goes here...</p>
    </div>

    <div id="hostel-admin" class="content-section">
        <!-- Add content for Hostel Admin -->
        <p>Hostel Admin content goes here...</p>
    </div>
</div>

<script>
    const tabButtons = document.querySelectorAll('.tab-btn');
    const contentSections = document.querySelectorAll('.content-section');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));

            // Add active class to the clicked button
            button.classList.add('active');

            // Hide all content sections
            contentSections.forEach(section => section.classList.remove('active'));

            // Show the targeted content section
            const target = button.getAttribute('data-target');
            document.getElementById(target).classList.add('active');
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
