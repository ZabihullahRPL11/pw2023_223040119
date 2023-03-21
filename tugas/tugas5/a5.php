<?php

$mahasiswa = [
    [
        "nama" => "Zabihullah Achmad Afghiansyah",
        "npm" => "223040119",
        "email" => "zabihullah.223040119@mail.unpas.co.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/afghi.jpg"
    ],

    [
        "nama" => "Muhammad Daffa Riyadi",
        "npm" => "223040120",
        "email" => "daffa.223040120@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/daffa.jpg"
    ],

    [
        "nama" => "Rizal Fahla",
        "npm" => "223040125",
        "email" => "rizal.223040125@mail.unpas.co.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/rizal.jpg"
    ],

    [
        "nama" => "Moch Zuhdi Maulana Nabilah",
        "npm" => "223040101",
        "email" => "zuhdimaulana11@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/zuhdi.jpg"
    ],

    [
        "nama" => "Meutuah Dicco Linge",
        "npm" => "223040098",
        "email" => "meutuah.223040098@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/dicco.jpg"
    ],

    [
        "nama" => "Dzikri Setiawan",
        "npm" => "223040072",
        "email" => "dzikrisetiawannn@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/dzikri.jpg"
    ],

    [
        "nama" => "Kaka Paraditha",
        "npm" => "223040087",
        "email" => "kakaparaditha87@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/kaka.jpg"
    ],

    [
        "nama" => "Muhamad Alfath Septian",
        "npm" => "223040014",
        "email" => "muhamadafattt@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/afat.jpeg"
    ],

    [
        "nama" => "Angga Nugraha",
        "npm" => "223040056",
        "email" => "anggans56@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/angga.jpg"
    ],
    
    [
        "nama" => "Muhammad Rifki Ramadhani",
        "npm" => "223040046",
        "email" => "rifki.223040046@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/iki.jpg"
        
    ],

];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <div class="row p-3">
                <div class="card mb-2" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $mhs["gambar"]; ?>" width ="120" height="200">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">Nama : <?= $mhs["nama"]; ?></p>
                                <p class="card-text">NRP : <?= $mhs["npm"]; ?></p>
                                <p class="card-text">Jurusan : <?= $mhs["jurusan"]; ?></p>
                                <p class="card-text">Email : <?= $mhs["email"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

</body>
</html>