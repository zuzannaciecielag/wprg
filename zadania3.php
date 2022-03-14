<?php

echo "Zadanie 1";
echo "<br />";

function randomNumberArray($index) {
    $randomArr = [];
    for($i = 0; $i < 200; $i++) {
        $randomArr[] = rand(0, 1000);
    }
    return $randomArr[$index];
}

echo randomNumberArray(56);

echo "<br />";
echo "Zadanie 2";
echo "<br />";

function whatIsMyNationality($country) {
    $countries = array("China"=> "Chinese", "Poland"=> "Polish",
        "Japan"=>"Japanese", "France"=>"French", "Germany"=> "German",
        "Korea"=> "Korean", "USA"=> "American", "India"=> "Indian",
        "Spain"=> "Spanish");

    return "You are " . $countries[$country] . ".";
}

echo whatIsMyNationality("Poland");
