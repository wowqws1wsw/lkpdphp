<?php

$jawabanBenar = ['A', 'D', 'C', 'C', 'B', 'A', 'E', 'B', 'A', 'E'];

//$namaSiswa: Digunakan untuk menyimpan dan menampilkan nama siswa.
$namaSiswa = '';
//$jawabanSiswa: Array yang akan menyimpan jawaban siswa setelah diinputkan dari form dan dipecah berdasarkan koma.
$jawabanSiswa = [];
//$jumlahBenar: Array yang menyimpan jawaban benar dari soal.
$jumlahBenar = 0;
//jumlahsalah array yang menyimpan jawaban salah dari soal
$jumlahSalah = 0;


//$_SERVER['REQUEST_METHOD']: Memeriksa apakah metode pengiriman data yang digunakan adalah POST, yang menandakan bahwa data form sudah dikirim.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//htmlspecialchars(): Digunakan untuk membersihkan input dari siswa agar tidak terinjeksi kode yang berbahaya.
//($_POST['name']); nama siswa di form
//($_POST['answers'])); jawaban siswa di form
//explode: memecah string menjadi array berdasarkan pemisah (separator) tertentu. 
    $namaSiswa = htmlspecialchars($_POST['name']);
    $jawabanSiswa = explode(',', htmlspecialchars($_POST['answers']));

// count menghitung jumlah salah dan benar
// trim Digunakan untuk menghilangkan spasi tambahan pada jawaban siswa, sehingga kesalahan karena spasi bisa dihindari.
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
