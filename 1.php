<?php
//Di sini, variabel $string diinisialisasi dengan sebuah string yang berisi gabungan karakter huruf, angka, dan simbol khusus.
$string = 'awojdoa oinawifnokawn oawjfoiawnf 12 as j) awhf+ awfni! eafew# srknv$';

// kode ini digunakan untuk menampilkan teks asli yang tersimpan dalam variabel $string.
echo "Teks : $string<br>";

//Fungsi preg_match_all() digunakan untuk mencari semua karakter khusus dalam string yang sesuai dengan pola reguler yang diberikan.
// 2. mendefinisikan sekumpulan karakter simbol atau spesial yang akan dicari dalam string.
// Hasil pencarian disimpan dalam variabel $matches, sementara jumlah karakter yang cocok disimpan dalam variabel $specialCharacters.
//implode: menggabungkan semua elemen array bersama-sama dalam urutan yang sama seperti di dalam array 

$specialCharacters = preg_match_all('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string, $matches);


echo "<br>";

//Kode ini mengecek apakah ada karakter khusus yang ditemukan dalam string.
if ($specialCharacters > 0) {
    //Jika ada maka karakter-karakter khusus tersebut akan ditampilkan dalam bentuk list menggunakan implode().
    echo "Karakter yang mengandung simbol: " . implode(", ", $matches[0]);
} else {
       //Jika tidak ada karakter khusus yang ditemukan, maka pesan yang menyatakan bahwa tidak terdapat simbol dalam string akan ditampilkan.
    echo "Tidak terdapat simbol dalam kalimat.";
}
?>