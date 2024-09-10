<?php
//Fungsi date_default_timezone_set() digunakan untuk mengatur zona waktu yang akan digunakan oleh fungsi-fungsi tanggal dan waktu dalam kode. 
date_default_timezone_set('Asia/Jakarta');
//Fungsi date("l") digunakan untuk mendapatkan nama hari dalam seminggu berdasarkan zona waktu yang telah diatur..
$hariIni = date("l");

//Variabel $totalPembelian diinisialisasi dengan nilai 130,000 yang merepresentasikan total pembelian dalam mata uang IDR.
$totalPembelian = 130000;

//Variabel $diskon diinisialisasi dengan nilai 0, yang nantinya akan digunakan untuk menyimpan persentase diskon yang diberikan.
$diskon = 0;

//Blok ini memeriksa apakah hari ini adalah hari Selasa ("Tuesday").
if ($hariIni === "Tuesday") {

    //Jika ya, maka nilai diskon diatur menjadi 5% (0.05)
    $diskon = 0.05;
}

//Kode ini memeriksa apakah total pembelian lebih besar dari 100,000 IDR.
if ($totalPembelian > 100000) {
    //Jika ya, maka diskon diatur menjadi 7% (0.07).
    $diskon = 0.07;
}

//Total yang harus dibayar dihitung dengan mengurangi total pembelian dengan jumlah diskon yang diperoleh.
$totalSetelahDiskon = $totalPembelian - ($totalPembelian * $diskon);

// hari ini
echo "hari ini adalah: " . $hariIni . "<br>";
//Total pembelian dalam format IDR yang diformat dengan number_format() untuk menambahkan titik pemisah ribuan.
//number_format: untuk membuat format penulisan bilangan angka. seperti ribuan, ratusan dan lainnya.
echo "Total pembelian: " . number_format($totalPembelian, 0, ',', '.') . " IDR<br>";
//presentase diskon
echo "Diskon: " . ($diskon * 100) . "%<br>";
//total yang harus dibayar
echo "Total yang harus dibayar: " . number_format($totalSetelahDiskon, 0, ',', '.') . " IDR";
?>