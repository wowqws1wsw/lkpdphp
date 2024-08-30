<?php

$barang = [
    [
        'nama_barang' => 'pasta gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'sabun mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];


$total_harga = 0;


echo "Daftar Belanjaan:<br>";
$index = 1;
foreach ($barang as $item) {
    $subtotal = $item['harga_barang'] * $item['jumlah_beli'];
    $total_harga += $subtotal;
    echo $index . ". " . ucfirst($item['nama_barang']) . " (" . $item['jumlah_beli'] . ") : Rp " . number_format($subtotal, 0, ',', '.') . "<br>";
    $index++;
}


echo "<br>Total harga yang harus dibayar adalah: Rp " . number_format($total_harga, 0, ',', '.') . "<br>";
?>
