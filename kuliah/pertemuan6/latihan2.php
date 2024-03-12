<?php
// $mahasiswa = [
//     ["Tubagus Muhammad Wildan", "233040099", "tubagus.233040099@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "033040001","doddy@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Tubagus Muhammad Wildan",
        "nrp" => "233040099",
        "email" => "tubagus.233040099@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "spiderman.jpeg",
    ],
    [
        "nama" => "Muhammad Fauzan Nur",
        "nrp" => "233040081",
        "email" => "fauzan.233040081@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "spiderman.jpeg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>
