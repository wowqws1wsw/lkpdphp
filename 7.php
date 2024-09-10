<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Karakter Kalimat</title>
</head>
<body>
    <h1>Hitung Karakter Kalimat</h1>
    <form method="post">
        <label for="kalimat">Masukkan Kalimat:</label><br>
        <textarea id="kalimat" name="kalimat" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Hitung">
    </form>
    <?php
    //Formulir HTML (<form>) dengan method post dibuat untuk mengambil input kalimat dari pengguna. Pengguna memasukkan kalimat dalam textarea dengan atribut name="kalimat", yang akan dikirim ke server saat tombol "Hitung" ditekan.
    function formatKalimat($kalimat) {
        //Fungsi formatKalimat($kalimat) bertanggung jawab untuk memproses kalimat yang dimasukkan.
        //strlen($kalimat) menghitung panjang karakter kalimat. jika lebih dari 50 karakter maka akan menambahkan ... jika tidak maka tidak akan ditambahkan
        //strtoupper: membuat semua karakter dalam string menjadi huruf besar/kapital.
        //substr: untuk memotong string, atau untuk mengambil beberapa sebagian nilai dari string.
        // return: instruksi kepada program untuk keluar dari fungsi terpanggil dan mengembalikan suatu nilai ke fungsi pemanggil.
        if (strlen($kalimat) > 50) {
            return substr($kalimat, 0, 50) . '...';
        } else {
            return $kalimat;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$_SERVER["REQUEST_METHOD"] == "POST" memastikan bahwa kode hanya dijalankan ketika formulir dikirim menggunakan metode POST
        $kalimat = htmlspecialchars($_POST['kalimat']);
        $hasil = formatKalimat($kalimat);
        //Kalimat yang telah dimasukkan pengguna dikirimkan ke fungsi formatKalimat(), kemudian hasilnya ditampilkan dalam variabel $hasil.
        echo "<h2>Kalimat yang Diformat:</h2>";
        echo "<p>" . $hasil . "</p>";
    }
    ?>
</body>
</html>
