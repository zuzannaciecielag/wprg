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
