<?php
$mahasiswa = [
    [
        "nama" => "adrian",
        "nrp" => "243040067",
        "email" => "aadrian@gmai;.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "adrian.jpg"
    ],
    [
        "nama" => "ali fauzi",
        "nrp" => "243040002",
        "jurusan" => "Teknik Industri",
        "email" => "alii@gmail.com",
        "gambar" => "ali.jpg"
    ],
    [
        "nama" => "egi",
        "nrp" => "243040008",
        "jurusan" => "Teknik Sipil",
        "email" => "egiiiiii@gmail.com",
        "gambar" => "egi.jpg"
    ],
    [
        "nama" => "shaka",
        "nrp" => "243040029",
        "jurusan" => "Tekniknologi Pangan",
        "email" => "shaka@gmail.com",
        "gambar" => "shaka.jpg"
    ],
    [
        "nama" => "salwa",
        "nrp" => "243040077",
        "jurusan" => "Teknik informatika",
        "email" => "salwa@gmail.com",
        "gambar" => "salwa.jpg"
    ],
    [
        "nama" => "audi",
        "nrp" => "243040018",
        "jurusan" => "Teknik Informatika",
        "email" => "audi@gmail.com",
        "gambar" => "audi.jpg"
    ],
    [
        "nama" => "arneu",
        "nrp" => "243040004",
        "jurusan" => "Teknik Lingkungan",
        "email" => "arneu@gmail.com",
        "gambar" => "arneu.jpg"
    ],
    [
        "nama" => "areva",
        "nrp" => "243040085",
        "jurusan" => "Teknik Informatika",
        "email" => "areva08@gmail.com",
        "gambar" => "areva.jpg"
    ],
    [
        "nama" => "almira",
        "nrp" => "243040017",
        "jurusan" => "Teknik Sipil",
        "email" => "almira@gmail.com",
        "gambar" => "almira.jpg"
    ],
    [
        "nama" => "reri octa",
        "nrp" => "243040021",
        "jurusan" => "Teknik Informatika",
        "email" => "reriocta@gmail.com",
        "gambar" => "alam.jpg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>