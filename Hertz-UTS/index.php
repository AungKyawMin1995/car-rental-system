<?php
if (substr($_SERVER['REQUEST_URI'], -strlen("index.php")) != "index.php") {
    header('Location: '.$_SERVER['PHP_SELF'], 301);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hertz-UTC</title>

    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
</head>
<body>
    <nav>
    <h2><a href="./">Hertz-uts</a></h2>
    <p>Car Rental Center</p>
    <a href="./reservation.php">Car Reservation</a>
    </nav>
    <main id="main"></main>
    <script src="scripts/main.js"></script>
    <script src="scripts/index.js"></script>
</body>
</html>