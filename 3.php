<?php
$a = 30;
$b = 90;
for ($i = 1; $i <= 30; $i++) {
    if ($b % $i === 0) {
        $c = $b / $i;
        echo "$b : $i = $c<br> ";
    }
}
?>