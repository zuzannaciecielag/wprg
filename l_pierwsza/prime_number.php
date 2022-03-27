<BODY>
<FORM action="prime_number.php" method="POST">
    <TABLE>
        <TR>
            <TD>Liczba:</TD>
            <TD><INPUT name="liczba"></TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT name="check" type="submit" value="sprawdź, czy jest pierwsza"></TD>
        </TR>
    </TABLE>
</FORM>
<HR>
<?php

if (isset($_POST['check'])) {
    if (isset($_POST['liczba'])) {
        if (is_numeric($_POST['liczba'])) {
            echo primeNumber($_POST['liczba']);
        } else {
            echo "Nie podano prawidłowej liczby.";
        }
    } else {
        echo "Nie podano żadnej liczby.";
    }
} else {
    echo "";
}


function primeNumber($number) {
    $count = 0;
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $count++;
            echo "Liczba razy wykonania pętli: " . $count;
            echo "<br />";
            return "Liczba złożona.";
        }
    }
    $count++;
    echo "Liczba razy wykonania pętli:" . $count;
    echo "<br />";
    echo "Liczba pierwsza.";
    return "";
}

?>
<BR>
<A href="prime_number.php">Powrót</A>
</BODY>
