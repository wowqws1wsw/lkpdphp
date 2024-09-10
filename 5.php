<?php
//$bill1 dan $bill2 adalah dua array yang masing-masing berisi sekumpulan angka.
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

//echo digunakan untuk mencetak string "hasil :" sebelum hasil array digabungkan dan diproses.
echo "hasil :";
//array_merge($bill1, $bill2) menggabungkan kedua array $bill1 dan $bill2 menjadi satu array baru.
//array_unique() kemudian digunakan untuk menghapus elemen-elemen yang duplikat di dalam array yang telah digabungkan.
$combined = array_unique(array_merge($bill1, $bill2));

//rsort($combined) mengurutkan elemen-elemen di dalam array $combined dari yang terbesar ke terkecil
//rsort: mengurutkan array secara descending (dari nilai terbesar ke nilai terkecil) berdasarkan nilai-nilai elemen pada array tersebut.
rsort($combined);

//menggabungkan semua elemen di dalam array $combined menjadi sebuah string. Setiap elemen dipisahkan oleh koma dan spasi.
$output = implode(', ', $combined);

// echo $output digunakan untuk mencetak string hasil penggabungan elemen-elemen array yang sudah diurutkan
echo $output;
?>
