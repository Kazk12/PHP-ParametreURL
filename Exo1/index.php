<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php

    if (isset($_GET['lastname'], $_GET['firstname'])) {
        $lastName = $_GET['lastname'];
        $firstName = $_GET['firstname'];
        echo "<p>bienvenue {$firstName}  {$lastName} </p>";
    }


    ?>
    
</body>
</html>