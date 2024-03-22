<?php
    $nama_anda = $_POST['nama-anda'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME, <?= $nama_anda ?></title>
</head>
<body>
    <h2>
        Welcome to the Jungle, <?= $nama_anda ?>!
    </h2>
</body>
</html>