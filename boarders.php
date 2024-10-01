<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Boarders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container h4{
            background-image: url("image/c2.jpg");
            color: white;
            margin-bottom: 20px;
            margin: 28px;
            padding: 10px;
            text-align: center;
        }
        .block-section {
            display: none;
        }
        .active {
            display: block;
        }
        .loading {
            text-align: center;
            padding: 20px;
        }


    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
    <h4>Boarders</h4>
    <div class="text-center mb-4">
    <button class="btn btn-primary" onclick="showBlock('wing1', this)">Wing 1</button>
    <button class="btn btn-secondary" onclick="showBlock('wing2', this)">Wing 2</button>
    <button class="btn btn-secondary" onclick="showBlock('wing3', this)">Wing 3</button>
    <button class="btn btn-secondary" onclick="showBlock('wing4', this)">Wing 4</button>
    <button class="btn btn-secondary" onclick="showBlock('wing5', this)">Wing 5</button>
    <button class="btn btn-secondary" onclick="showBlock('wing6', this)">Wing 6</button>
    <button class="btn btn-secondary" onclick="showBlock('dormitary', this)">DORMITORY/COMMON ROOM</button>
</div>


    <div id="loading" class="loading">Fetching data, please wait...</div>

    <div id="wing1" class="block-section">
        <h2 class="text-center">Wing 1 - Boarders</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Room No</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                if (($handle = fopen("wing1.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
    </div>

    <div id="wing2" class="block-section">
        <h2 class="text-center">Wing 2 - Boarders</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Room No</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
             
                if (($handle = fopen("wing2.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
    </div>


    <div id="wing3" class="block-section">
        <h2 class="text-center">Wing 3 - Boarders</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Room No</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
           
                if (($handle = fopen("wing3.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <div id="wing4" class="block-section">
        <h2 class="text-center">Wing 4 - Boarders</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Room No</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
              
                if (($handle = fopen("wing4.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
    </div>


    <div id="wing5" class="block-section">
        <h2 class="text-center">Wing 5 - Boarders</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Room No</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
              
                if (($handle = fopen("wing5.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
    </div>

    <div id="wing6" class="block-section">
        <h2 class="text-center">Wing 6 - Boarders</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Room No</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
              
                if (($handle = fopen("wing6.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
    </div>

    <div id="dormitary" class="block-section">
        <h2 class="text-center">dormitary/common room - Boarders</h2>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Sl. No</th>
                    <th>Name</th>
                    <th>Room No</th>
                    <th>Roll No</th>
                </tr>
            </thead>
            <tbody>
                <?php
            
                if (($handle = fopen("dormitary.csv", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tbody>
        </table>
    </div>




</div>






<script>
    function showBlock(block, button) {
        document.getElementById('loading').style.display = 'block';

        // Remove 'active' class from all block sections
        document.getElementById('wing1').classList.remove('active');
        document.getElementById('wing2').classList.remove('active');
        document.getElementById('wing3').classList.remove('active');
        document.getElementById('wing4').classList.remove('active');
        document.getElementById('wing5').classList.remove('active');
        document.getElementById('wing6').classList.remove('active');
        document.getElementById('dormitary').classList.remove('active');

        // Change the button styles back to secondary (gray) for all buttons
        var buttons = document.querySelectorAll('button');
        buttons.forEach(btn => {
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-secondary');
        });

        // Set the clicked button to blue (primary)
        button.classList.remove('btn-secondary');
        button.classList.add('btn-primary');

        setTimeout(() => {
            document.getElementById('loading').style.display = 'none';
            document.getElementById(block).classList.add('active');
        }, 1000);
    }
</script>


</body>
</html>