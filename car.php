<?php
include "dbConnect.php";

$current = $_GET['carID'];

$carArr = getOneCar($connection, $current);
?>

<BODY>

<TABLE>
    <TR>Wybrany samochod:</TR>
    <?php

    echo "<br>";
    echo "<br>";
    foreach($carArr as $key => $value) {
        echo "<TR>";
        echo "$key" . ": " . $value;
        echo "</TR>";
        echo "<br>";
    }

    echo "<br>";
    echo "<a href='index.php?page=1'>Powrot</a>";
    ?>

</TABLE>

</BODY>
