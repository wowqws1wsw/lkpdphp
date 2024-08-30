<?php
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];


echo "hasil :";

$combined = array_unique(array_merge($bill1, $bill2));


rsort($combined);


$output = implode(', ', $combined);


echo $output;
?>
