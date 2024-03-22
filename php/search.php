<?php
    print_r($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    
    <h3>Keyword yang dimasukkan: <?= $_GET["keyword"]; ?></h3>
</body>
</html>