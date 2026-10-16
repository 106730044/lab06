<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    
    <?php

    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    } else {
        $firstname = "Unknown";
    }

    if (isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
    } else {
        $lastname = "Unknown";
    }


    echo "<p>Thank you for your booking, <strong>$firstname $lastname</strong>!</p>";
    
    
    if (isset($_POST["age"])) {
        echo "<p>Age: " . $_POST["age"] . "</p>";
    }
    if (isset($_POST["food"])) {
        echo "<p>Food Preference: " . $_POST["food"] . "</p>";
    }
    ?>

</body>
</html>