<?php
// Variable Scope / lingkup variabel
$x = 20;

function tampilX() {
    global $x;
    echo $x;
}

tampilX();
echo "<br>";
// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
var_dump($_GET);
echo "<br>";
// $_GET
$mahasiswa = [
    [
        "nama" => "Tubagus Muhammad Wildan",
        "nrp" => "233040099",
        "email" => "tubagus.233040099@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "tubagus.jpg",
    ],
    [
        "nama" => "Muhammad Fauzan Nur",
        "nrp" => "233040081",
        "email" => "fauzan.233040081@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fauzan.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs['nrp']; ?>&email=<?= $mhs['email']; ?>&jurusan=<?= $mhs['jurusan']; ?>&gambar=<?= $mhs['gambar']; ?>"><?= $mhs['nama']; ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>