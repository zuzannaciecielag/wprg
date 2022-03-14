<?php


echo "Zadanie 1";
echo '<br />';
function dice() {
    return rand(1,6);
}

$wynik = dice();

echo $wynik;

echo '<br />';
echo "Zadanie 2";
echo '<br />';

function diameter($radius) {
    return $radius*2;
}

$diam = diameter(2);
echo $diam;

echo '<br />';
echo "Zadanie 3";
echo '<br />';

function censorship($sentence) {
    $array = explode(" ", $sentence);
    $bad_words = ["fuck", "shit"];
    foreach($array as &$element) {
        foreach($bad_words as &$element1) {
            if($element == $element1) {
                $length = strlen($element);
                $element = "";
                for($i=0;$i<$length;$i++) {
                    $element .= "*";
                }
            }
        }
    }
    $sentenceCensored = implode(" ", $array);
    return $sentenceCensored;
}

$censor = censorship("fuck this");
echo $censor;

echo "<br />";
echo "Zadanie 4";
echo "<br />";

//032[80 jesli 1800-1899, 0 jesli 1900-1999, 20 jesli po 2000] 218 0872 9

function peselBirthDate($pesel) {
    $arr = str_split($pesel);
    $birthDate = "";
    for($i = 4; $i < 6; $i++) {
        $temp = (string) $arr[$i];
        $birthDate .= $temp;
    }
    $birthDate .= "-";

    if($arr[2] == 2) {
        $birthDate .= "0";
    }
    if($arr[2] == 3) {
        $birthDate .= "1";
    }
    $temp = (string) $arr[3];
    $birthDate .= $temp;
    $birthDate .= "-";
    $birthDate .= "20";

    for ($i = 0; $i < 2; $i++) {
        $temp = (string) $arr[$i];
        $birthDate .= $temp;
    }

    return $birthDate;
}

$psl = peselBirthDate("03221808729");
echo $psl;

echo "<br />";
echo "Zadanie 5";
echo "<br />";

function areaCalculator($figure, $par1, $par2, $par3){
    switch ($figure) {
        case "triangle": triangleArea($par1, $par2); break;
        case "rectangle": rectangleArea($par1, $par2); break;
        case "trapezoid": trapezoidArea($par1, $par2, $par3); break;
    }
}

function triangleArea($height, $base) {
    echo (1/2) * $height * $base;
}

function rectangleArea($width, $height) {
    echo $width * $height;
}

function trapezoidArea($longBase, $shortBase, $height) {
    echo (1/2) * ($longBase + $shortBase) * $height;
}

areaCalculator("trapezoid", 1, 2, 3);


