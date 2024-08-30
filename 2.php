<?php
$hariIni = date("l");

$totalPembelian = 130000;

$diskon = 0;


if ($hariIni === "Tuesday") {

    $diskon = 0.05;
}

if ($totalPembelian > 100000) {

    $diskon = 0.07;
}


$totalSetelahDiskon = $totalPembelian - ($totalPembelian * $diskon);


echo "Total pembelian: " . number_format($totalPembelian, 0, ',', '.') . " IDR<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total yang harus dibayar: " . number_format($totalSetelahDiskon, 0, ',', '.') . " IDR";
?>