<?php

echo "Zadanie 1";
echo '<br />';

$a = 20;
$b = 12;
$c = 16;

$temp = 0;

if ($a>$c) {
    $temp = $c;
    $c = $a;
    $a = $temp;
    echo '<br />';
}
if ($b > $c) {
    $temp = $c;
    $c = $b;
    $b = $temp;
    echo '<br />';
}

if (($a**2 + $b**2) == $c**2) {
    echo "spelnia pitagorasa";
} else {
    echo "nie spelnia pitagorasa";
}


echo '<br />';
echo '<br />';

echo "Zadanie 2";
echo '<br />';
echo '<br />';

$variable = 2;
switch ($variable) {
    case 1:
        echo "jan";
        break;
    case 2:
        echo "feb";
        break;
    case 3:
        echo "mar";
        break;
    case 4:
        echo "apr";
        break;
    case 5:
        echo "may";
        break;
    case 6:
        echo "jun";
        break;
    case 7:
        echo "july";
        break;
    case 8:
        echo "aug";
        break;
    case 9:
        echo "sept";
        break;
    case 10:
        echo "oct";
        break;
    case 11:
        echo "nov";
        break;
    case 12:
        echo "dec";
        break;
}
echo '<br />';
echo '<br />';
echo "Zadanie 3";
echo '<br />';
echo '<br />';

$month = 2;
$year = 1900;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    if ($month == 2) {
        echo "29 dni";
    }
} else if ($month == 2) {
    echo "28 dni";
} else if ($month != 2 && $month % 2 == 0) {
    echo "30 dni";
} else {
    echo "31 dni";
}
