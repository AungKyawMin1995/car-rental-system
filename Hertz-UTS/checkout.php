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
    <h1>Check Out</h1>
    <main id="main">
        <div class="caption">
            <h2>Customer Details and Payment</h2>
            <p><b>Please fill in your details. *indicates required fields.</b></p>
            <p style="font-size:30px">You are required to Pay: $<span id="toPay">0</span></p>
        </div>
        <form method="POST" id="bookingForm" action="backend/sendmail.php">
            <div class="inputContainer">
                <label>Name *</label>
                <input name="name" required/>
            </div>
            <div class="inputContainer">
                <label>Email *</label>
                <input type="email" name="email" required/>
            </div>
            <div class="inputContainer">
                <label>Address *</label>
                <input name="address" required/>
            </div>
            <div class="inputContainer">
                <label>City *</label>
                <input name="city" required/>
            </div>
            <div class="inputContainer">
                <label>State *</label>
                <input name="state" required/>
            </div>
            <div class="inputContainer">
                <label>Post Code *</label>
                <input name="post_code" required/>
            </div>
            <div class="inputContainer">
                <label>Payment Type *</label>
                <input name="payment_type" required/>
            </div>
            <input name="carts" hidden/>
            <br/><br/>
            <div>
                <a href="./">Continue Session</a>
                <button type="submit">Booking</button>
            </div>
        </form>
    </main>
    <script src="scripts/main.js"></script>
    <script src="scripts/checkout.js"></script>
</body>
</html>