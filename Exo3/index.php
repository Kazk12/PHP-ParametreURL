<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    if (isset($_GET['startDate'], $_GET['endDate'])) {
        $startDate = $_GET['startDate'];
        $endDate = $_GET['endDate'];
        echo "<p>bienvenue {$startDate}  {$endDate} </p>";
    }


    ?>


</body>
</html>