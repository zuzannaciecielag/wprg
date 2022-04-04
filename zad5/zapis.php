<?php

if (isset($_GET['zapisz'])) {
    if (isset($_GET['tekst'])) {
        $text = $_GET['tekst'];
        $fop = fopen("Z:\\public_html\\wprg\\zad5\\plik.txt", "a");
        $fwr = fwrite($fop, $text);
        if ($fwr) {
            echo "Pomyślnie zapisano do pliku.";
        } else {
            echo "Błąd zapisu.";
        }
    }
}
?>
<BODY>
<FORM action="zapis.php" method="GET">
    <TD>Wpisz tekst:</TD>
    <TD><INPUT name="tekst" required></TD>
    <TD><INPUT name="zapisz" type="submit" value="Zapisz"></TD>
</FORM>
</BODY>

