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
        <button class="btn btn-primary" onclick="showBlock('blockA')">Block A</button>
        <button class="btn btn-secondary" onclick="showBlock('blockB')">Block B</button>
    </div>

    <div id="loading" class="loading">Fetching data, please wait...</div>

    <div id="blockA" class="block-section">
        <h2 class="text-center">Block A - Transit Men's Hostel</h2>
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
                // Fetch data from block_a.csv
                if (($handle = fopen("block_a.csv", "r")) !== FALSE) {
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

    <div id="blockB" class="block-section">
        <h2 class="text-center">Block B - Boarders</h2>
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
                // Fetch data from block_b.csv
                if (($handle = fopen("block_b.csv", "r")) !== FALSE) {
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
    function showBlock(block) {
        document.getElementById('loading').style.display = 'block';
        document.getElementById('blockA').classList.remove('active');
        document.getElementById('blockB').classList.remove('active');

        setTimeout(() => {
            document.getElementById('loading').style.display = 'none';
            document.getElementById(block).classList.add('active');
        }, 1000);
    }
</script>

</body>
</html>