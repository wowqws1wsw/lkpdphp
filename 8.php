<?php
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));
print_r($uniqueJurusan);
?>