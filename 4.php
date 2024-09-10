<!DOCTYPE html>
<html>
<head>
    <title>Bintang Persegi</title>
</head>
<body>
    <?php
   //Loop pertama ($k) bertugas untuk mengulangi proses pencetakan persegi bintang sebanyak dua kali. Loop ini berjalan dari nilai 0 hingga kurang dari 2 (yaitu 0 dan 1).
    for ($k = 0; $k < 2; $k++) {
        //Loop kedua ($i) bertugas untuk mencetak baris bintang sebanyak 4 kali, sesuai dengan jumlah baris pada setiap persegi.
        for ($i = 0; $i < 4; $i++) {
           //Loop ketiga ($j) bertugas untuk mencetak karakter bintang (*) di setiap baris sebanyak 8 kali, membentuk kolom.
            for ($j = 0; $j < 8; $j++) {
                //Mencetak karakter bintang (*) di setiap baris dan kolom.
                echo "* ";
            }
            //Mencetak enter untuk memisahkan setiap baris.
            echo "<br>";
        }
        //Mencetak enter untuk memisahkan setiap baris.
        echo "<br>"; 
    }
    ?>
</body>
</html>
