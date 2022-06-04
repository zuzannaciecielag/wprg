<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

/*$dbuser = 'root';
$dbpass = '';
$dsn = "mysql:host=localhost;dbname=db";
$db = new PDO($dsn, $dbuser, $dbpass);*/

$connection = mysqli_connect("localhost", "s25093",
    "Zuz.Ciec", "s25093");

if (!$connection) {
    echo "Couldn't connect to the database.";
    echo mysqli_connect_error();
}

$q = "SELECT COUNT(*) FROM samochody";
$res = mysqli_query($connection, $q);
if (!$res) {
        echo "Couldn't process query.";
}
$count = mysqli_fetch_row($res)[0];

function getData(&$connection) {
    $query = "SELECT * FROM samochody";
    $result = mysqli_query($connection, $query);
    $dataArray = array();
    if (!$result) {
        echo "Couldn't process query.";
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $dataArray[] = $row;
    }

    return $dataArray;
}

function getOneCar(&$connection, $id) {
	$query = "SELECT * FROM samochody WHERE id=$id";
	$result = mysqli_query($connection, $query);
    if (!$result) {
        echo "Couldn't process query.";
    }
	$row = mysqli_fetch_assoc($result);

    return $row;
}