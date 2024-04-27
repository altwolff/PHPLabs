<?php
function checkBrackets($text)
{
    $phrase = [];
    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] == '(') {
            $phrase[] = '(';
        } elseif ($text[$i] == ')') {
            if (empty($phrase)) {
                return "NO";
            } else {
                array_pop($phrase);
            }
        }
    }
    if (empty($phrase)) {
        return "YES";
    } else {
        return "NO";
    }
}

$input = fgets(STDIN);
echo checkBrackets($input);