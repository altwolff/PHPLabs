<?php
fscanf(STDIN, "%f %f %f", $a, $b, $c);
if (is_float($a) && is_float($b) && is_float($c) && $a > 0 && $b > 0 && $c > 0) {
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a)
        echo "TAK";
    else
        echo "NIE";
} else {
    echo "BŁĄD";
}