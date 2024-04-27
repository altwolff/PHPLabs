<?php
fscanf(STDIN, "%d", $n);
while ($n <= 0) {
    fscanf(STDIN, "%d", $n);
}
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
for ($i = $n; $i > 0; $i--) {
    for ($j = $i; $j > 0; $j--) {
        echo "*";
    }
    echo "\n";
}
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo " ";
    }
    for ($k = $n; $k > $i - 1; $k--) {
        echo "*";
    }
    echo "\n";
}
for ($i = 1; $i <= $n; $i++) {
    for ($j = $n; $j > $i; $j--) {
        echo " ";
    }
    for ($k = $i; $k <= $i + $j - 1; $k++) {
        echo "*";
    }
    echo "\n";
}