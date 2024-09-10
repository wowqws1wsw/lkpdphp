
<?php
//Fungsi cariJenisKoin() menerima satu parameter $jumlahUang, yang merupakan nilai uang yang akan dicari jenis koinnya.
//Di dalam fungsi, array $jenisKoin diinisialisasi untuk menyimpan jenis koin yang dapat digunakan.
function cariJenisKoin($jumlahUang) {
    $jenisKoin = [];
//Tiga blok kondisi if digunakan untuk memeriksa apakah $jumlahUang cukup besar untuk menggunakan koin 1.000, 500, atau 200 Rupiah.
    if ($jumlahUang >= 1000) {
        $jenisKoin[] = '1.000';
        $jumlahUang -= 1000;
    }
    if ($jumlahUang >= 500) {
        $jenisKoin[] = '500';
        $jumlahUang -= 500;
    }
    if ($jumlahUang >= 200) {
        $jenisKoin[] = '200';
        $jumlahUang -= 200;
    }

    return $jenisKoin;
    //Setelah selesai memeriksa semua jenis koin, fungsi mengembalikan array $jenisKoin yang berisi koin-koin yang bisa digunakan untuk nilai uang yang diberikan.
}

$uang = 1750;
$hasil = cariJenisKoin($uang);

echo "Jenis koin yang bisa digunakan untuk Rp{$uang}: <br>";
//foreach: mengulang setiap elemen dalam array dan menjalankan fungsi callback untuk setiap elemen.
//Kode foreach digunakan untuk menampilkan setiap koin di dalam array $hasil dalam bentuk daftar terurut (<ul>), di mana setiap jenis koin ditampilkan di dalam elemen <li>.
foreach ($hasil as $koin) {
    echo "<ul>";
    echo "<li>Rp. {$koin} </li>";
    echo "</ul>";
}
?>
