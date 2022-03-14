<?php

echo "Zadanie ";
echo "<br />";

$array = [];
for($i = 0; $i < 15; $i++) {
    $array[$i] = rand(1, 15);
}
$arrLength = count($array);

foreach($array as $element) {
    echo $element;
    echo "<br />";
}
echo "<br />";
echo "<br />";

function maxElementOfArray(&$array, $loopChoice) {
    switch($loopChoice) {
        case "for": echo forMax($array); break;
        case "while": echo whileMax($array); break;
        case "doWhile": echo doWhileMax($array); break;
        case "forEach": echo forEachMax($array); break;
    }
}

maxElementOfArray($array,"for");
maxElementOfArray($array, "while");
maxElementOfArray($array, "doWhile");
maxElementOfArray($array, "forEach");

function forMax(&$array) {
    $max = 0;
    for($i = 0; $i < count($array); $i++) {
        if($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    return $max;
}

function whileMax(&$array) {
    $max = 0;
    $count = 0;
    while($count < 15) {
        if ($array[$count] > $max) {
            $max = $array[$count];
        }
        $count++;
    }
    return $max;
}

function doWhileMax(&$array) {
    $max = 0;
    $count = 0;
    do {
        if ($count > 0) {
            $count++;
        }
        if ($array[$count] > $max) {
            $max = $array[$count];
        }
        if ($count == 0) {
            $count++;
        }
    } while ($count < 14);

    return $max;
}

function forEachMax(&$array) {
    $max = 0;
    foreach($array as $element) {
        if($element > $max) {
            $max = $element;
        }
    }

    return $max;
}


