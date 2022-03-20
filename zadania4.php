<?php

echo "Zadanie 1";
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

echo "<br />";
echo "<br />";
echo "Zadanie 2";
echo "<br />";

function dice($numberOfThrows) {
    $scores = [];
    for ($i = 0; $i < $numberOfThrows; $i++) {
        $scores[$i] = rand(1, 6);
    }
    foreach($scores as $element) {
        echo $element;
        echo "<br />";
    }
}

dice(6);

echo "<br />";
echo "<br />";
echo "Zadanie 3";
echo "<br />";

function multiplicationTable($sideParameter) {
    //$i = numbers in first row horizontally
    for ($i = 1; $i <= $sideParameter; $i++) {
        echo $i;
    }
    echo "<br />";
    //$i - counter for numbers on first row horizontally
    $i = 2;
    //$j = numbers in vertical side row
    for ($j = 2; $j <= $sideParameter; $j++) {
        //ONE HORIZONTAL ROW GETS CREATED HERE \/\/\/
        multiplicationTableRow($j, $i, $sideParameter);
        echo "<br />";

    }
}

function multiplicationTableRow($parameter, $secondParameter, $sideParameter) {
    for($i = $secondParameter; $i <= $sideParameter; $i++) {
        if ($i == $secondParameter) {
            echo $parameter;
        }
        echo $parameter * $i;
    }
}

multiplicationTable(4);


