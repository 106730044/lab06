<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, array and operators</title>
</head>
<body>
    <h1>Using PHP Variables, array and operators</h1>
<?php
    $marks = array(85, 85, 95); // Declare and initialize array 
    $marks[1] = 90; // modify second element
    $ave = ($marks[0] + $marks[1] + $marks[2]) / 3; // compute average
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average score is $ave.You $status</p>";
?>
</body>
</html>
