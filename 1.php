

<?php
$string = 'awojdoa oinawifnokawn oawjfoiawnf 12 as j) awhf+ awfni! eafew# srknv$';

echo "Teks : $string<br>";

$specialCharacters = preg_match_all('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string, $matches);


echo "<br>";

if ($specialCharacters > 0) {
    echo "Karakter yang mengandung simbol: " . implode(", ", $matches[0]);
} else {
    echo "Tidak terdapat simbol dalam kalimat.";
}
?>