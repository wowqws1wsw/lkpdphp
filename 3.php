<?php
//$a dan $b adalah variabel yang diinisialisasi dengan nilai 30 dan 90, masing-masing.
$a = 30;
$b = 90;

//Pengulangan for dimulai dari nilai $i = 1 hingga $i = 30, yang berarti loop ini akan dieksekusi 30 kali.
for ($i = 1; $i <= 30; $i++) {
    //Kondisi if memeriksa apakah $b habis dibagi oleh $i. Operator % adalah operator modulus yang memberikan sisa hasil pembagian. Jika hasil modulus adalah 0, itu berarti $b dapat dibagi secara sempurna oleh $i.
    if ($b % $i === 0) {
        $c = $b / $i;
        //Jika kondisi terpenuhi, maka $b dibagi dengan $i, dan hasilnya disimpan dalam variabel $c.
        echo "$b : $i = $c<br> ";
        //Hasil pembagian ini kemudian dicetak dalam format: "$b : $i = $c", diikuti dengan tag <br> untuk memberikan baris baru setelah setiap output.
    }
}
?>