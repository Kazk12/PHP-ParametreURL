<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    if (isset($_GET['language'], $_GET['server'])) {
        $language = $_GET['language'];
        $server = $_GET['server'];
        echo "<p>bienvenue {$language}  {$server} </p>";
    }


    ?>


</body>
</html>