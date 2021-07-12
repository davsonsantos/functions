<?php

function multiexplode($delimiters, $string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$text = "an example of (explosion) of several [characters]";
$exploded = multiexplode(array("(", ")","[","]"), $text);

print_r($exploded);
