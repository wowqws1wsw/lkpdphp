<?php
//Array $barang berisi tiga sub-array, masing-masing mewakili satu jenis barang yang dibeli
$barang = [
    [
        'nama' => 'Pasta Gigi',
        'harga' => 18000,
        'jumlahBeli' => 1,
    ],
    [
        'nama' => 'Sabun Mandi',
        'harga' => 5000,
        'jumlahBeli' => 3,
    ],
    [
        'nama' => 'Aloe Vera Sheet Mask',
        'harga' => 15000,
        'jumlahBeli' => 4,
    ],
];
//Variabel $totalHar diinisialisasi dengan nilai 0. Ini akan digunakan untuk menyimpan total harga seluruh belanjaan.
$totalHar = 0;
//echo digunakan untuk menampilkan teks "Daftar Belanjaan :" diikuti dengan tag HTML <ol>, yang memulai daftar terurut
echo "Daftar Belanjaan :";
echo "<ol>";
//foreach ($barang as $item) melakukan iterasi terhadap setiap barang di dalam array $barang.
//foreach: mengulang setiap elemen dalam array dan menjalankan fungsi callback untuk setiap elemen.
foreach ($barang as $item) {
    //$subTot menghitung subtotal untuk setiap barang dengan mengalikan harga satuan dengan jumlah yang dibeli 
    $subTot = $item['harga'] * $item['jumlahBeli'];
    //$totalHar += $subTot menambahkan subtotal barang tersebut ke dalam total keseluruhan harga belanjaan
    $totalHar += $subTot;
    // memformat subtotal ke dalam format Rupiah dengan pemisah ribuan berupa titik (.) dan tanpa desimal.
    $formatSub = number_format($subTot, 0, ',', '.');
    //echo menampilkan setiap barang dalam bentuk list item , mencakup nama barang, jumlah yang dibeli, dan subtotalnya.
    echo "<li>{$item['nama']} ({$item['jumlahBeli']}) : {$formatSub}</li>";
}
//echo "</ol>"; menutup tag <ol> untuk mengakhiri daftar terurut.
echo "</ol>";
//number_format($totalHar, 0, ',', '.') memformat total harga keseluruhan ($totalHar) ke dalam format Rupiah.
//number_format: untuk membuat format penulisan bilangan angka. seperti ribuan, ratusan dan lainnya.
$formatTot = number_format($totalHar, 0, ',', '.');
//echo menampilkan total harga yang harus dibayar.
echo "Total harga yang harus Anda bayar adalah Rp. {$formatTot}\n";
?>