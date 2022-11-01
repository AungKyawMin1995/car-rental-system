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
    <h1>Car Reservation</h1>
    <main id="main">
        <form method="POST" id="checkoutForm">
            <table>
            <thead>
                <tr>
                    <th>Thumbnail</th>
                    <th>Vehicle</th>
                    <th>Price Per Day</th>
                    <th>Rental Days</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                
                
                </tbody>
            </table>
            <button type="submit">Proceeding to CheckOut</button>
        </form>
    </main>
    <script src="scripts/main.js"></script>
    <script src="scripts/reservation.js"></script>
</body>
</html>