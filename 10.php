<?php

$jawabanBenar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];


$namaSiswa = '';
$jawabanSiswa = [];
$jumlahBenar = 0;
$jumlahSalah = 0;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $namaSiswa = htmlspecialchars($_POST['name']);
    $jawabanSiswa = explode(',', htmlspecialchars($_POST['answers']));


    if (count($jawabanSiswa) != count($jawabanBenar)) {
        die('Jumlah jawaban tidak sesuai dengan jumlah soal.');
    }

    for ($i = 0; $i < count($jawabanBenar); $i++) {
        if (trim($jawabanSiswa[$i]) === $jawabanBenar[$i]) {
            $jumlahBenar++;
        } else {
            $jumlahSalah++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluasi Jawaban</title>
</head>
<body>
    <h1>Evaluasi Jawaban</h1>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <h2>Hasil Evaluasi Jawaban</h2>
        <p>Nama Siswa: <?php echo $namaSiswa; ?></p>
        <p>Jumlah Jawaban Benar: <?php echo $jumlahBenar; ?></p>
        <p>Jumlah Jawaban Salah: <?php echo $jumlahSalah; ?></p>
        <a href="">Kembali</a>
    <?php else: ?>
        <form action="" method="post">
            <label for="name">Nama Siswa:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="answers">Jawaban (pisahkan dengan koma):</label>
            <input type="text" id="answers" name="answers" required><br><br>
            
            <input type="submit" value="Evaluasi Jawaban">
        </form>
    <?php endif; ?>
</body>
</html>
