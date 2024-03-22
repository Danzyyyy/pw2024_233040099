<?php
$nama_presiden = $_GET['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salam, Pak <?= $nama_presiden; ?></title>
</head>
<body>
    <h1><?= $nama_presiden; ?> adalah salah satu mantan Presiden Indonesia.</h1>
</body>
</html>