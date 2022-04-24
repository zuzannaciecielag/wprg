<?php
session_start();
?>
<BODY>
<FORM action="game.php" method="GET">
<?php

$oppositeChoice = "";

$choice = $_SESSION['choice'];
if ($choice == "o") {
    $oppositeChoice = "x";
}
if ($choice == "x") {
    $oppositeChoice = "o";
}

$_SESSION['oppositeChoice'] = $oppositeChoice;

$temp = array();
$temp1 = array();
$won = false;

if ($fop = fopen("table.csv", "r+")) {
    $i = 1;
    while (($get = fgetcsv($fop, 1000, ",")) !== FALSE) {
        $temp[$i] = $get;
        $i++;
    }
    for ($i = 1; $i < 4; $i++) {
            $_SESSION['table'][$i] = $temp[$i];
    }
}

if(isset($_SESSION['started'])) {
    if (isset($_SESSION['choice'])) {
            echo "<TABLE><TR>";
            for ($i = 1; $i < 4; $i++) {
                for ($j = 0; $j < 3; $j++) {
                        if (isset($_GET["$i$j"])) {
                            $_SESSION['corners'][] = "$i$j$choice";
                            $_SESSION['table'][$i][$j] = $choice;
                            $_SESSION['choice'] = $_SESSION['oppositeChoice'];
                            $_SESSION["row$choice"][] = $i;
                            $_SESSION["column$choice"][] = $j;
                            $_SESSION['count']++;
                        }
                        $current = $_SESSION['table'][$i][$j];

                        echo "<TD><INPUT name='$i$j' type='submit' value='$current'></TD>";

                }
                $temp1[] = implode($_SESSION['table'][$i], ",");
                echo "</TR>";
            }

           foreach($temp1 as $element) {
               fputcsv($fop, $element);
           }
           echo "</TABLE>";
    } else {
        echo "<TD>Nie wybrales kolka ani krzyzyka.</TD>";
    }
} else {
    echo "<TD>Nie zaczales gry.</TD>";
}

//checks if won horizontally

$duplicateRows = array_count_values($_SESSION["row$choice"]);
foreach ($duplicateRows as $item => $value) {
    if ($value == 3) {
        echo "Wygrało <b>" . $choice . "</b>!";
        echo '<a href="zd3.php">Powrot</a>';
        $won = true;
        unset($_SESSION['started']);
        session_destroy();
    }
}

//checks if won vertically

$duplicateColumns = array_count_values($_SESSION["column$choice"]);
    foreach ($duplicateColumns as $item => $value) {
        if ($value == 3) {
            echo "Wygrało <b>" . $choice . "</b>!";
            echo '<a href="zd3.php">Powrot</a>';
            $won = true;
            unset($_SESSION['started']);
            session_destroy();
        }
    }

//checks if won across

$cornerCheck = false;
for ($i = 0; $i < count($_SESSION['corners']); $i++) {
    for ($j = 0; $j < count($_SESSION['corners']); $j++) {
        if (($_SESSION['corners'][$i] == "10$choice" && $_SESSION['corners'][$j] == "32$choice") ||
            ($_SESSION['corners'][$i] == "30$choice" && $_SESSION['corners'][$j] == "12$choice")
        ) {
            $cornerCheck = true;
        }
    }
}

$middleCheck = false;
for ($i = 0; $i < count($_SESSION['corners']); $i++) {
    if ($_SESSION['corners'][$i] == "21$choice") {
        $middleCheck = true;
    }
}


$uniqueRows = array_unique($_SESSION["row$choice"]);
    $uniqueColumns = array_unique($_SESSION["column$choice"]);
    if (count($uniqueRows) == 3 && count($uniqueColumns) == 3) {
        if ($middleCheck && $cornerCheck) {
            echo "Wygrało <b>" . $choice . "</b>!";
            echo '<a href="zd3.php">Powrot</a>';
            $won = true;
            unset($_SESSION['started']);
            session_destroy();
        }
    }

   echo "<br>";

    if ($_SESSION['count'] == 9 && !$won) {
    echo "Niestety, nikt nie wygrał.";
    echo '<a href="zd3.php">Powrot</a>';
    unset($_SESSION['started']);
    session_destroy();
    }

    if (isset($_SESSION['started'])) {
        echo "<TD>Zrób ruch jako <b>" . $_SESSION['choice'] . "</b> !</TD>";
        echo "<br>";
    }


?>