<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transit Men's Hostel Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .card-custom {
            border-radius: 15px;
            width: 100%;
            /* height:410px; */
            max-width: 350px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            text-align: center;
            background-color: #fff;
            margin: 20px auto;
            padding: 15px;
            transition: transform 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-10px);
        }

        .card-custom img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            margin-top: 12px;
            border: 4px solid #00674F;
        }

        .card-header-custom {
            background-color: #00674F;
            color: white;
            font-weight: bold;
            padding: 15px;
            text-align: center;
            font-size: 1.2rem;
            border-radius: 10px 10px 0 0;
        }
        .card-header-custom h6{
            font-family: emoji;
            margin-top: 5px; 
        }
        
        .card-body-custom {
            background-color: white;
            color: #333;
            padding: 15px;
        }

        .contact_details {
            background-color: #00674F;
            color: white;
            padding: 10px;
            border-radius: 0 0 10px 10px;
        }

        .contact_details p {
            margin-bottom: 5px;
            font-size: 14px;
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


        /* .nav-tabs-custom button:hover {
            background-color: #004c3a;
        } */

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        h3 {
            color: #00674F;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
            background-color: white;
        }

        .table img {
            border-radius: 5px;
            object-fit: cover;
            width: 80px;
            height: 80px;
        }

        .footer {
            background-color: #00674F;
            color: white;
            padding: 15px;
            text-align: center;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .card-custom {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Navbar -->
<div class="nav-tabs-custom">
    <h4>Administration of Prajyotika Women's Hostel</h4>
    <button class="tab-btn active" data-target="warden">Warden</button>
    <button class="tab-btn" data-target="prefects">Prefects</button>
    <button class="tab-btn" data-target="assistant-prefects">Assistant Prefects</button>
    <button class="tab-btn" data-target="office-staff">Office Staff</button>
    <button class="tab-btn" data-target="hostel-admin">Hostel Admin</button>
</div>

<!-- Content Sections -->
<div class="container">
    <div id="warden" class="content-section active">
        <div class="row">
            <div class="col-md-6">
                <div class="card-custom">
                    <div class="card-header-custom">SENIOR WARDEN</div>
                    <img src="image\Pamidi_warden.jpeg" alt="Senior Warden">
                    <h5>Dr. Pamidi Hagjer</h5>
                    <p>Associate Professor<br>Department of Sociology, Tezpur University</p>
                    <div class="contact_details">
                        <p>Phone: +919804173515</p>
                        <p>Email: pamidi@tezu.ernet.in</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-custom">
                    <div class="card-header-custom">WARDEN</div>
                    <img src="image\Sanghamitra_Das.jpeg" alt="Warden">
                    <h5>Dr. Sanghamitra Das</h5>
                    <p>Assistant Professor<br>Department of Education, Tezpur University</p>
                    <div class="contact_details">
                        <p>Phone: +919804173515</p>
                        <p>Email: sdas19@tezu.ernet.in</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Former Senior Wardens -->
        <h3>Former Senior Wardens</h3>
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
                        <td><img src="image/fw1.jpg" alt="Former Warden 1"></td>
                        <td>Dr. Junali Deka</td>
                        <td>Department of History</td>
                        <td>2019-2021</td>
                    </tr>
                    <tr>
                        <td><img src="image/fw2.jpg" alt="Former Warden 2"></td>
                        <td>Juri Dutta</td>
                        <td>Department of Physics</td>
                        <td>2019-2020</td>
                    </tr>
                    <tr>
                        <td><img src="image/fw3.jpg" alt="Former Warden 3"></td>
                        <td>Dr. Sanghamitra Nath</td>
                        <td>Department of Chemistry</td>
                        <td>2017-2019</td>
                    </tr>
                </tbody>
            </table>
        </div>
          <!-- Former  Wardens -->
          <h3>Former Wardens</h3>
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
                        <td><img src="image/fw1.jpg" alt="Former Warden 1"></td>
                        <td>Dr. Pamidi Hagjer</td>
                        <td>Department of Sociology</td>
                        <td>2019-2021</td>
                    </tr>
                    <tr>
                        <td><img src="image/fw3.jpg" alt="Former Warden 3"></td>
                        <td>Juri Dutta</td>
                        <td>Department of </td>
                        <td>2017-2019</td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>

    <!-- Other sections (Prefects, Assistant Prefects, etc.) can follow the same structure -->


    <div id="assistant-prefects" class="content-section">
<!-- Add content for asistant Prefects -->    
         <!-- Current Wardens -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">ASSISTANT PREFECT
                    <h6>(General Administration)</h6>
                </div>
                <img src="image\Muskan_Borgohain.jpg" alt="Senior Warden">
                <h5>Muskan Borgohain (MEB21013)</h5>
                <p>Department of Mechanical Engineering, Tezpur University</p>
                
                <div class="contact_details">
                  <p>Phone: +91 8486449330</p>
                  <p>Email: muskanborgohain2102@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">ASSISTANT PREFECT
                     <h6>(Discipline and Maintenance)</h6>
                </div>
                <img src="image\Shruti_Roy1.jpg" alt="Warden">
                <h5>Shruti Roy</h5>
                <p>Department of ECE, Tezpur University</p>
                <div class="contact_details">
                  <p>Phone:+91 9395607096</p>
                  <p>Email: royshruti631@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">ASSISTANT PREFECT
                 <h6>(Finance and Audit)</h6>
                </div>
                <img src="image\Farhin_Inteza_Ahmed.jpg" alt="Warden">
                <h5>Farhin Inteza Ahmed</h5>
                <p>Department of FET, Tezpur University</p>
                <div class="contact_details">
                  <p>Phone: +91 6001339402</p>
                  <p>Email: farhininteza@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 ">
            <div class="card-custom">
                <div class="card-header-custom">ASSISTANT PREFECT
                  <h6>(Mess Operations)</h6>
                </div>
                <img src="image\Amandiva_Bordoloi.jpg" alt="Warden">
                <h5>Amandiva Priyam Bordoloi</h5>
                <p>Department of FET, Tezpur University</p>
                <div class="contact_details">
                  <p>Phone: +91 8486267939</p>
                  <p>Email: amandivabordoloi@gmail.com</p>
                </div>
            </div>
        </div>

    </div>

    
   
    </div>


    <div id="prefects" class="content-section">
        <!-- Add content for Prefects -->
          <!-- Current Wardens -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">PREFECT</div>
                <img src="image/c1.jpg" alt="Senior Warden">
                <h5>Kasturi Kashyap (EGI21014)</h5>
                <p>Department of English, Tezpur University</p>
                <div class="contact_details">
                  <p>Phone: +919864965671
                  </p>
                  <p>Email: kasturi8k@gmail.com</p>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Former Wardens -->
    <h3 class="mt-4">Former prefects</h3>
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
                    <td>Vaishanavi Singh </td>
                    <td>Department of Commerce</td>
                    <td>2023-2024</td>
                </tr>
                <tr>
                    <td><img src="image/fw2.jpg" alt="Former Warden 2" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td>Hrishitaa Chetia</td>
                    <td>Department of </td>
                    <td>2012-2023</td>
                </tr>
                <tr>
                    <td><img src="image/fw3.jpg" alt="Former Warden 3" class="img-fluid" style="width: 100px; height: 100px; object-fit: cover;"></td>
                    <td>Sanobar Arafat </td>
                    <td>Department of </td>
                    <td>2021-2022</td>
                </tr>
            </tbody>
        </table>
    </div>

    

    </div>

    <div id="office-staff" class="content-section">
        <!-- Add content for Office Staff -->
    
         <!-- Current Wardens -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">OFFICE STAFF</div>
                <img src="image/Poli_Sarkar.jpg" alt="Senior Warden">
                <h5>Poli Sarkar</h5>
                <p>Pragjyotika women's hostel<br>Tezpur University</p>
                <div class="contact_details">
                  <p>Phone: +919804173515</p>
                  <p>Email: abc@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">OFFICE STAFF</div>
                <img src="image/Sangita_Devi.jpg" alt="Warden">
                <h5>Sangita Devi</h5>
                <p>Pragjyotika women's hostel<br>Tezpur University</p>
                <div class="contact_details">
                  <p>Phone: +919804173515</p>
                  <p>Email: abc@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="hostel-admin" class="content-section">
        <!-- Add content for Hostel Admin -->
    
         <!-- Current Wardens -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-custom">
                <div class="card-header-custom">Web Master</div>
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
                <div class="card-header-custom">HOSTEL ADMIN</div>
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
    </div>

     
</div>
<?php include 'bottom_nav.php'; ?>

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
