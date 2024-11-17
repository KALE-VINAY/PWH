<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/PWH_logo.png"/></head>

    <style>
        .card {
            margin-top: 28px;
        }
        .container h2 {
            background-image: url("image/c2.jpg");
            color: white;
            margin-bottom: 20px;
            margin: 28px;
            padding: 10px;
            text-align: center;
        }
        .nav-pills .nav-link-achievements {
            display: inline-block;
            color: #fff;
            background-color: #0066cc;
            border: none;
            border-radius: 5px;
            padding: 8px 20px;
            font-size: 16px;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .nav-pills .nav-link-achievements:hover {
            background-color: #004b99;
        }
        .nav-pills .nav-link-achievements.active {
            background-color: #002855;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-custom {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-custom img {
            height: 200px;
            object-fit: cover;
            transition: transform 0.2s;
        }
        .card-custom img:hover {
            transform: scale(1.05);
        }
        .card-custom h5 {
            margin-top: 15px;
            font-size: 1.25rem;
        }
        .card-custom p {
            color: #666;
        }
        .year-section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container my-5">
    <h2 class="text-center mb-4">Achievements</h2>

    <!-- Year Selection Navigation -->
    <ul class="nav nav-pills justify-content-center year-section">
        <li class="nav-item">
            <a class="nav-link-achievements active" href="#" data-year="2024">2024</a>
        </li>
        <li class="nav-item">
            <a class="nav-link-achievements" href="#" data-year="2023">2023</a>
        </li>
        <li class="nav-item">
            <a class="nav-link-achievements" href="#" data-year="2022">2022</a>
        </li>
    </ul>

    <!-- Achievements Cards -->
    <div id="achievements-container">
        <div class="row" id="year-2024">
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <img src="image/c1.jpg" class="card-img-top" alt="Achievement 1">
                    <div class="card-body">
                        <h5 class="card-title">Achievement Title 1</h5>
                        <p class="card-text">Description of the achievement for the year 2024.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <img src="image/c2.jpg" class="card-img-top" alt="Achievement 2">
                    <div class="card-body">
                        <h5 class="card-title">Achievement Title 2</h5>
                        <p class="card-text">Description of the achievement for the year 2024.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-none" id="year-2023">
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <img src="image/c3.jpg" class="card-img-top" alt="Achievement 3">
                    <div class="card-body">
                        <h5 class="card-title">Achievement Title 3</h5>
                        <p class="card-text">Description of the achievement for the year 2023.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <img src="image/c4.jpg" class="card-img-top" alt="Achievement 4">
                    <div class="card-body">
                        <h5 class="card-title">Achievement Title 4</h5>
                        <p class="card-text">Description of the achievement for the year 2023.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-none" id="year-2022">
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <img src="image/c5.jpg" class="card-img-top" alt="Achievement 5">
                    <div class="card-body">
                        <h5 class="card-title">Achievement Title 5</h5>
                        <p class="card-text">Description of the achievement for the year 2022.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card card-custom">
                    <img src="image/c1.jpg" class="card-img-top" alt="Achievement 6">
                    <div class="card-body">
                        <h5 class="card-title">Achievement Title 6</h5>
                        <p class="card-text">Description of the achievement for the year 2022.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.nav-link-achievements').forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.nav-link-achievements.active').classList.remove('active');
            this.classList.add('active');
            
            const selectedYear = this.getAttribute('data-year');
            document.querySelectorAll('.row').forEach(function(row) {
                row.classList.add('d-none');
            });
            document.getElementById('year-' + selectedYear).classList.remove('d-none');
        });
    });
</script>

</body>
</html>
