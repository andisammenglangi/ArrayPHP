<?php 
// Membuat Array Associative
    $arrHewan = [
        [
            "nama" => "Buaya",
            "Kelompok Hewan" => "Reptil",
            "Cara Berkembang Biak" => "Bertelur (Ovipar)",
            "Jenis Makanan" => "Karnivora",
            "Habitat" => "Sungai, rawa, danau",
            "Usia Hidup (Rata-rata)" => "50-70 tahun"
        ],

        [
            "nama" => "Burung",
            "Kelompok Hewan" => "Aves (Unggas)",
            "Cara Berkembang Biak" => "Bertelur (Ovipar)",
            "Jenis Makanan" => "Bervariasi (Omnivora/Herbivora/Karnivora)",
            "Habitat" => "Darat (pohon, tanah, langit)",
            "Usia Hidup (Rata-rata)" => "2-100 tahun (tergantung spesies)"
        ],

        [
            "nama" => "Ikan",
            "Kelompok Hewan" => "Pisces",
            "Cara Berkembang Biak" => "Bertelur (Ovipar), beberapa melahirkan (Vivipar)",
            "Jenis Makanan" => "Omnivora/Herbivora/Karnivora",
            "Habitat" => "Perairan (laut/tawar)",
            "Usia Hidup (Rata-rata)" => "1-100 tahun (tergantung spesies)"
        ],

        [
            "nama" => "Kucing",
            "Kelompok Hewan" => "Mamalia",
            "Cara Berkembang Biak" => "Melahirkan (Vivipar)",
            "Jenis Makanan" => "Karnivora",
            "Habitat" => "Darat (domestik/liar)",
            "Usia Hidup (Rata-rata)" => "12-16 tahun (domestik)"
        ],

        [
            "nama" => "Ular",
            "Kelompok Hewan" => "Reptil",
            "Cara Berkembang Biak" => "Bertelur (Ovipar), beberapa melahirkan (Vivipar)",
            "Jenis Makanan" => "Karnivora",
            "Habitat" => "Darat/perairan (tergantung spesies)",
            "Usia Hidup (Rata-rata)" => "10-30 tahun"
        ]
    ];



// Membuat Array Multidimensi
// Nama Bunga,	Cara Berkembang Biak,	Cara Tumbuh,	Habitat,	Siklus Hidup,	Kegunaan
    $arrTumbuhan = [
        ["Anggrek", "Biji/anakan", "Epifit (menempel pohon)", "Lembap, teduh", "Tahunan/perennial", "Hiasan, obat tradisional"],
        ["lavender", "Biji/stek", "Perdu aromatik", "Kering, berpasir", "Tahunan", "Aromaterapi, pengusir serangga"],
        ["Matahari", "Matahari	Biji", 	"Tumbuhan tegak", 	"Sinar matahari penuh",	"Semusim",	"Biji pangan, minyak, hiasan"],
        ["Mawar", "Stek batang/biji", "Semak berduri", "Iklim sedang/tropis", "Tahunan", "Hiasan, parfum, simbol cinta"],
        ["Melati", "Stek batang", "Merambat/semak",	"Iklim tropis",	"Tahunan", "Hiasan, bunga tabur, teh"]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Membuat Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .idc{
        margin: auto;
        margin-top: 10px;
        padding: 5px;
        border:1px solid green;
        border-radius: 10px ;
        width: 300px;
    }
</style>
<body>

    <div class="idc">
        <P>Nama : <span>A.SAMMENGLANGI</span></P>
        <p>Nim : <span>1123100273</span></p>
        <p>Prodi : <span>Teknik Informatika</span></p>
        <p>Dosen Pengampu : <span>MAYA UTAMI DEWI, S.Kom, M.Kom</span></p>
        <p>Tugas : <span>Pert 7 Membuat Array</span></p>
    </div>

    
    <div class="container">
        <h1 class="title">Hewan</h1>
        <div class="data">
            <?php foreach($arrHewan as $hewan): ?>
                <div class="card">
                    <img class="gambar" src="assets/images/hewan/<?= htmlspecialchars($hewan['nama']) ?>.jpg" alt="<?= htmlspecialchars($hewan['nama']) ?> " >
                    <p class="nama"><?= $hewan['nama'] ?></p>
                    <p>Kelompok Hewan : <span><?= $hewan['Kelompok Hewan'] ?></span></p>
                    <p>Cara Berkembang Biak : <span><?= $hewan['Cara Berkembang Biak'] ?></span></p>
                    <p>Jenis Makanan : <span><?= $hewan['Jenis Makanan'] ?></span></p>
                    <p>Habitat : <span><?= $hewan['Habitat'] ?></span></p>
                    <p>Usia Hidup (Rata-rata) : <span><?= $hewan['Usia Hidup (Rata-rata)'] ?></span></p>
                </div>
            <?php endforeach ?>
        </div>

        <h1 class="title">Tumbuhan</h1>
        <div class="data">
            <?php foreach($arrTumbuhan as $tumbuhan): ?>
                <div class="card">
                    <?php for($i = 0; $i < count($tumbuhan); $i++): ?>
                        <?php if( $i == 0 ):?>
                            <img class="gambar" src="assets/images/tumbuhan/<?= $tumbuhan[$i] ?>.jpg" alt="<?= $tumbuhan[$i] ?>">
                            <p class="nama"><?= $tumbuhan[$i] ?></p>
                        <?php elseif ($i == 1): ?>
                            <p>Cara Berkembang Biak : <span><?= $tumbuhan[$i] ?></span></p>
                        <?php elseif ($i == 2): ?>
                            <p>Cara Tumbuh : <span><?= $tumbuhan[$i] ?></span></p>
                        <?php elseif ($i == 3): ?>
                            <p>Habitat : <span><?= $tumbuhan[$i] ?></span></p>
                        <?php elseif ($i == 4): ?>
                            <p>Siklus Hidup : <span><?= $tumbuhan[$i] ?></span></p>
                        <?php elseif ($i == 5): ?>
                            <p>Kegunaan : <span><?= $tumbuhan[$i] ?></span></p>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
</body>
</html>