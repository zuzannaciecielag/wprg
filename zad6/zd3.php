<?php
session_start();
?>
<BODY>
<FORM action="zd3.php" method="GET">
    <TD>Wybierz, czy chcesz zaczac kółkiem czy krzyżykiem:</TD>
    <TD><INPUT name="o" type="submit" value="kolko"></TD>
    <TD><INPUT name="x" type="submit" value="krzyzyk"></TD>
</FORM>
<?php

if (isset($_GET['o'])) {
    $_SESSION['started'] = true;
    $_SESSION['choice'] = "o";
    $_SESSION['count'] = 0;
    $_SESSION['tempCountOne'] = 0;
    $_SESSION['tempCountTwo'] = 0;
    $_SESSION['corners'] = array();
    header("Location:game.php");
    exit();
}
if (isset($_GET['x'])) {
    $_SESSION['started'] = true;
    $_SESSION['choice'] = "x";
    $_SESSION['count'] = 0;
    $_SESSION['tempCountOne'] = 0;
    $_SESSION['tempCountTwo'] = 0;
    $_SESSION['corners'] = array();
    header("Location:game.php");
    exit();
}
?>
</BODY>