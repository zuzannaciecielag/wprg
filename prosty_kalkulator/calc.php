<BODY>
<FORM action="calc.php" method="POST">
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

        if (isset($_POST['dodaj'])) {
            if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
                if (is_numeric($_POST['liczba1']) && is_numeric($_POST['liczba2'])) {
                    echo "W formularzu podano liczby {$_POST['liczba1']} oraz
                    {$_POST['liczba2']}.<BR>";
                    echo "Wynik dodawania: " . ($_POST['liczba1'] + $_POST['liczba2']);
                } else {
                    echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
                }
            } else {
                echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
            }
        } else if (isset($_POST['odejmij'])) {
            if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
                if (is_numeric($_POST['liczba1']) && is_numeric($_POST['liczba2'])) {
                    echo "W formularzu podano liczby {$_POST['liczba1']} oraz
                    {$_POST['liczba2']}.<BR>";
                    echo "Wynik odejmowania: " . ($_POST['liczba1'] - $_POST['liczba2']);
                } else {
                    echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
                }
            } else {
                echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
            }
        } else if (isset($_POST['pomnoz'])) {
            if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
                if (is_numeric($_POST['liczba1']) && is_numeric($_POST['liczba2'])) {
                    echo "W formularzu podano liczby {$_POST['liczba1']} oraz
                    {$_POST['liczba2']}.<BR>";
                    echo "Wynik mnożenia: " . ($_POST['liczba1'] * $_POST['liczba2']);
                } else {
                    echo "Błędne dane! Jedna lub obie liczby są niepoprawne!<BR>";
                }
            } else {
                echo "Brak danych! Jedna lub obie liczby nie zostały podane!<BR>";
            }
        } else if (isset($_POST['podziel'])) {
            if (isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
                if (is_numeric($_POST['liczba1']) && is_numeric($_POST['liczba2'])) {
                    echo "W formularzu podano liczby {$_POST['liczba1']} oraz
                    {$_POST['liczba2']}.<BR>";
                    echo "Wynik dzielenia: " . ($_POST['liczba1'] / $_POST['liczba2']);
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
<A href="calc.php">Powrót</A>

</BODY>
