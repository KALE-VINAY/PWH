<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Boarders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="logo/PWH_logo.png"/></head>

    <style>
        .container h4 {
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
            display: none;
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

    <!-- Sections for Wing 1 to Dormitory -->
    <?php 
        $wings = ['wing1', 'wing2', 'wing3', 'wing4', 'wing5', 'wing6', 'dormitary'];
        foreach ($wings as $wing) { 
    ?>
    <div id="<?php echo $wing; ?>" class="block-section">
        <h2 class="text-center"><?php echo ucfirst($wing); ?> - Boarders</h2>
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
                $filePath = $wing . ".csv";
                if (file_exists($filePath) && ($handle = fopen($filePath, "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[1]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[2]) . "</td>";
                        echo "<td>" . htmlspecialchars($data[3]) . "</td>";
                        echo "</tr>";
                    }
                    fclose($handle);
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php } ?>
</div>

<script>
    function showBlock(block, button) {
        // Show loading indicator
        document.getElementById('loading').style.display = 'block';

        // Hide all block sections and remove the active class
        const sections = document.querySelectorAll('.block-section');
        sections.forEach(section => section.classList.remove('active'));

        // Reset all buttons to secondary
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(btn => {
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-secondary');
        });

        // Highlight the clicked button
        button.classList.remove('btn-secondary');
        button.classList.add('btn-primary');

        // Show the selected block after loading delay
        setTimeout(() => {
            document.getElementById('loading').style.display = 'none';
            document.getElementById(block).classList.add('active');
        }, 1000);
    }
     // Ensure Wing 1 is displayed by default
     document.addEventListener("DOMContentLoaded", () => {
        document.getElementById('wing1').classList.add('active'); // Show Wing 1 block
        document.getElementById('loading').style.display = 'none'; // Hide loading indicator
        document.getElementById('btn-wing1').classList.remove('btn-secondary'); // Style Wing 1 button
        document.getElementById('btn-wing1').classList.add('btn-primary'); 
    });
</script>

</body>
</html>
