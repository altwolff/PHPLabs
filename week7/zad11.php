<?php
function checkPangram($phrase)
{
    $letters = [];
    for ($i = 0; $i < strlen($phrase); $i++) {
        $char = $phrase[$i];
        if (ctype_alpha($char)) {
            $letters[strtolower($char)] = true;
        }
    }
    return count($letters) == 26;
}
$input = fgets(STDIN);
echo checkPangram($input) ? 'true' : 'false';