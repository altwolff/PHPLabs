<?php
$list = explode(' ', fgets(STDIN));
$num = fgets(STDIN);
if (!in_array($num, $list))
    echo "Liczba nie znajduje się w liście";
else
    echo "Liczba znajduje się w liście";