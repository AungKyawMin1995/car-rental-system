<?php

include_once('./helpers.php');

$carts = json_decode($_POST['carts'], true);
unset($_POST['carts']);

$total_cost = array_sum(array_map(function ($cart) {
    return  $cart['price_per_day'] * $cart['rental_days'];
}, $carts));


$from = 'admin@HertzUTS.com';
$to = $_POST['email'];
$subject = 'Rental Details';

$message = "<h3>Thanks for renting cars from Hertz-UTS, the total cost is \${$total_cost}</h3> <br /><br />";
$message .= "<h4>Details are as follows</h4> <br /><br />";

foreach ($carts as $cart) {
    $message .= "<div>";
    $message .= "<p>model: {$cart['model']}</p>";
    $message .= "<p>mileage: {$cart['mileage']}</p>";
    $message .= "<p>fuel_type: {$cart['fuel_type']}</p>";
    $message .= "<p>seats: {$cart['seats']}</p>";
    $message .= "<p>price_per_day: {$cart['price_per_day']}</p>";
    $message .= "<p>rental_days: {$cart['rental_days']}</p>";
    $message .= "<p>description: {$cart['description']}</p>";
    $message .= "</div> <br /><br />";
}


if (mail($to, $subject, $message)) {
    echo 'Your mail has been sent successfully.';
} else {
    echo 'Unable to send email. Please try again.';
}

header('Location: ../index.php');
exit();
