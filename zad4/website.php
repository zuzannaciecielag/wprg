<BODY>
<?php
$podstrony = array();
$podstrony[0] = ['nazwa'=>'O nas', 'link'=>'onas', 'tresc'=>'Sekcja "O nas"'];
$podstrony[1] = ['nazwa'=>'Strona główna', 'link'=>'stronaglowna', 'tresc'=>'To jest strona główna.'];
$podstrony[2] = ['nazwa'=>'Kontakt', 'link'=>'kontakt', 'tresc'=>'email@domain.com'];

?>
<FORM action="website.php" method="GET">
    <TABLE>
        <ul>
            <?php
            foreach($podstrony as $key => $value) {
                echo "<li><a href='website.php?menu=" . $value["link"] . "'>" .
                    $value["nazwa"] . "</a></li>";
            }
            ?>
        </ul>
    </TABLE>
</FORM>
<?php
$check = false;
if (isset($_GET['menu'])) {
    foreach($podstrony as $key => $value) {
        if ($_GET['menu'] == $value["link"]) {
            $check = true;
            echo "<b><em>" . $value["nazwa"] . "</em></b>" . "</br>" .$value["tresc"];
        }
    }
    if (!$check) {
        echo "Nie ma takiej podstrony.";
    }
} else {
    echo "<b><em>" . $podstrony[0]["nazwa"] . "</em></b>" . "</br>" .$podstrony[0]["tresc"];
}
?>
</BODY>


