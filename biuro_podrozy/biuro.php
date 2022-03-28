<body>
<FORM action="biuro.php" method="POST">
    <TABLE>
        <TR>
            <TD>Wybierz datę początkową:</TD>
            <TD><INPUT name="dateBegin" type="date" value="2022-03-28" min="2022-03-28" required></TD>
        </TR>
        <TR>
            <TD>Wybierz datę końcową:</TD>
            <TD><INPUT name="dateEnd" type="date" value="2022-03-29" min="2022-03-29" required></TD>
        </TR>
        <TR>
            <TD>Wpisz liczbę osób:</TD>
            <TD><INPUT name="people" required></TD>
        </TR>
        <TR>
            <TD>Wybierz kraj:</TD>
            <TD><SELECT name="countries" required>
                    <option name="Germany" value="Germany">Niemcy</option>
                    <option name="France" value="France">Francja</option>
                    <option name="Spain" value="Spain">Hiszpania</option>
                    <option name="UK" value="UK">UK</option>
                    <option name="USA" value="USA">USA</option>
                    <option name="Italy" value="Italy">Włochy</option>
                </SELECT></TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT name="submit" type="submit" value="Oblicz cenę"></TD>
        </TR>
    </TABLE>
</FORM>
<HR>
<?php
$countries = array("Germany"=>20, "France"=>30, "Spain"=>35, "UK"=>50, "USA"=>60, "Italy"=>35);
if (isset($_POST['dateBegin']) && isset($_POST['dateEnd']) && isset($_POST['people']) && isset($_POST['countries'])) {
    $date1 = new DateTime($_POST['dateBegin']);
    $date2 = new DateTime($_POST['dateEnd']);
    if(is_numeric($_POST['people']) && ($date1 < $date2)) {
        $dateBegin = strtotime($_POST['dateBegin']);
        $dateEnd = strtotime($_POST['dateEnd']);
        $seconds = $dateEnd-$dateBegin;
        $days = $seconds / 86400;
        $select = $_POST['countries'];
        switch ($select) {
            case 'Germany':
                echo "Koszt podróży wynosi: " . $days * $_POST['people'] * $countries['Germany'];
                break;
            case 'France':
                echo "Koszt podróży wynosi: " . $days * $_POST['people'] * $countries['France'];
                break;
            case 'Spain':
                echo "Koszt podróży wynosi: " . $days * $_POST['people'] * $countries['Spain'];
                break;
            case 'UK':
                echo "Koszt podróży wynosi: " . $days * $_POST['people'] * $countries['UK'];
                break;
            case 'USA':
                echo "Koszt podróży wynosi: " . $days * $_POST['people'] * $countries['USA'];
                break;
            case 'Italy':
                echo "Koszt podróży wynosi: " . $days * $_POST['people'] * $countries['Italy'];
                break;
            default:
                echo "Błąd - niewłaściwe dane.";
                break;
        }
        } else {
            echo "Podano niewłaściwe dane. Liczba osób musi być liczbą, a okres podróży musi trwać >1 dni.";
        }
} else {
    echo "";
}

?>
<BR>
<A href="biuro.php">Wymaż formularz</A>
</body>
