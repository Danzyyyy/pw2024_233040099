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
        "gambar" => "tubagus.jpg",
    ],
    [
        "nama" => "Muhammad Fauzan Nur",
        "nrp" => "233040081",
        "email" => "fauzan.233040081@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "fauzan.jpg",
    ],
    [
        "nama" => "Murod Fikri Fadlurohman",
        "nrp" => "233040090",
        "email" => "murod.233040090@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "murod.jpg",
    ],
    [
        "nama" => "Athaillah Sulthan Firasyal Ilmi",
        "nrp" => "233040102",
        "email" => "athaillah.233040102g@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "atha.jpg",
    ],
    [
        "nama" => "Valdric Abirama Pranaja Dandi",
        "nrp" => "233040163",
        "email" => "valdric.233040163@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "valdric.jpg",
    ],
    [
        "nama" => "La Ode Muh. Ikhsan",
        "nrp" => "233040080",
        "email" => "ikhsan.233040080@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ikhsan.jpg",
    ],
    [
        "nama" => "Ahmad Dzaki",
        "nrp" => "233040111",
        "email" => "dzaki.233040111@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "dzaki.jpg",
    ],
    [
        "nama" => "Bintang Marfika Walid Pratama",
        "nrp" => "231000237",
        "email" => "marfikabintang366@gmail.com",
        "jurusan" => "Hukum",
        "gambar" => "bintang.jpg",
    ],
    [
        "nama" => "Akbar Maku",
        "nrp" => "233040104",
        "email" => "akbar.233040104@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "akbar.jpg",
    ],
    [
        "nama" => "Muhammad Rianda Rafqi",
        "nrp" => "233040092",
        "email" => "rafqi.233040092@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rafqi.jpg",
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
