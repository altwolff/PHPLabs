<?php
fscanf(STDIN, "%f %f %f", $a, $b, $c);
if (is_float($a) && is_float($b) && is_float($c)) {
    if ($a <= $c && $c <= $b)
        printf("%.6f %.6f %.6f\n%.6f %.6f %.6f", $a, $c, $b, $b, $c, $a);
    elseif ($b <= $c && $c <= $a)
        printf("%.6f %.6f %.6f\n%.6f %.6f %.6f", $b, $c, $a, $a, $c, $b);
    elseif ($b <= $a && $a <= $c)
        printf("%.6f %.6f %.6f\n%.6f %.6f %.6f", $b, $a, $c, $c, $a, $b);
    elseif ($c <= $a && $a <= $b)
        printf("%.6f %.6f %.6f\n%.6f %.6f %.6f", $c, $a, $b, $b, $a, $c);
    elseif ($c <= $b && $b <= $a)
        printf("%.6f %.6f %.6f\n%.6f %.6f %.6f", $c, $b, $a, $a, $b, $c);
    else
        printf("%.6f %.6f %.6f\n%.6f %.6f %.6f", $a, $b, $c, $c, $b, $a);
} else echo "BŁĄD";
?>