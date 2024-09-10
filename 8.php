<?php
//Array $dataJurusan berisi daftar jurusan dengan beberapa elemen yang menggunakan huruf kecil serta huruf besar untuk yang lainnya.
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
//Fungsi array_map() digunakan untuk menerapkan fungsi strtoupper() pada setiap elemen dari array $dataJurusan.
//strtoupper() mengubah setiap elemen menjadi huruf kapital.
//array_map:mengubah nilai di dalam array berdasarkan fungsi callback.
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
//menampilkan hasil
print_r($uniqueJurusan);
?>