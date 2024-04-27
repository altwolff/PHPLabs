<?php
function addNumbers($n)
{
    $sum = 0;
    $n_str = (string)$n;
    for ($i = 0; $i < strlen($n_str); $i++) {
        $sum += intval($n_str[$i]);
    }
    return $sum;
}

$N = fgets(STDIN);
echo addNumbers($N);