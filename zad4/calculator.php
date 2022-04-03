<BODY>
<FORM action="calculator.php" method="GET">
    <TABLE>
        <TR>
            <TD>Liczba 1:</TD>
            <TD><INPUT name="liczba1"></TD>
        </TR>
        <TR>
            <TD>Liczba 2:</TD>
            <TD><INPUT name="liczba2"></TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT name="dodaj" type="submit" value="dodaj"></TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT name="odejmij" type="submit" value="odejmij"</TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT name="pomnoz" type="submit" value="pomnóż"</TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT name="podziel" type="submit" value="podziel"</TD>
        </TR>
    </TABLE>
</FORM>
<HR>
<?php

if (isset($_GET['dodaj'])) {
    if (isset($_GET['liczba1']) && isset($_GET['liczba2'])) {
        if (is_numeric($_GET['liczba1']) && is_numeric($_GET['liczba2'])) {
            echo "W formularzu podano liczby {$_GET['liczba1']} oraz
                    {$_GET['liczba2']}.<BR>";
            echo "Wynik dodawania: " . ($_GET['liczba1'] + $_GET['liczba2']);
        } else {
            echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
        }
    } else {
        echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
    }
} else if (isset($_GET['odejmij'])) {
    if (isset($_GET['liczba1']) && isset($_GET['liczba2'])) {
        if (is_numeric($_GET['liczba1']) && is_numeric($_GET['liczba2'])) {
            echo "W formularzu podano liczby {$_GET['liczba1']} oraz
                    {$_GET['liczba2']}.<BR>";
            echo "Wynik odejmowania: " . ($_GET['liczba1'] - $_GET['liczba2']);
        } else {
            echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
        }
    } else {
        echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
    }
} else if (isset($_GET['pomnoz'])) {
    if (isset($_GET['liczba1']) && isset($_GET['liczba2'])) {
        if (is_numeric($_GET['liczba1']) && is_numeric($_GET['liczba2'])) {
            echo "W formularzu podano liczby {$_GET['liczba1']} oraz
                    {$_GET['liczba2']}.<BR>";
            echo "Wynik mnożenia: " . ($_GET['liczba1'] * $_GET['liczba2']);
        } else {
            echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
        }
    } else {
        echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
    }
} else if (isset($_GET['podziel'])) {
    if (isset($_GET['liczba1']) && isset($_GET['liczba2'])) {
        if (is_numeric($_GET['liczba1']) && is_numeric($_GET['liczba2'])) {
            echo "W formularzu podano liczby {$_GET['liczba1']} oraz
                    {$_GET['liczba2']}.<BR>";
            echo "Wynik dzielenia: " . ($_GET['liczba1'] / $_GET['liczba2']);
        } else {
            echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
        }
    } else {
        echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
    }
} else {
    echo "";
}

?>
<BR>
<A href="calculator.php">Powrót</A>

</BODY>

