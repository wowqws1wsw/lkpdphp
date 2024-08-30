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
    function formatKalimat($kalimat) {
        if (strlen($kalimat) > 50) {
            return substr($kalimat, 0, 50) . '...';
        } else {
            return $kalimat;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kalimat = htmlspecialchars($_POST['kalimat']);
        $hasil = formatKalimat($kalimat);
        echo "<h2>Kalimat yang Diformat:</h2>";
        echo "<p>" . $hasil . "</p>";
    }
    ?>
</body>
</html>
