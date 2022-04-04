<?php
session_start();
?>
<BODY>
<FORM action="login_form.php" method="GET">
    <TABLE>
        <TR>
            <TD>Login:</TD>
            <TD><INPUT name="login" required></TD>
        </TR>
        <TR>
            <TD>Hasło:</TD>
            <TD><INPUT name="haslo" required></TD>
        </TR>
        <TR>
            <TD>&nbsp;</TD>
            <TD><INPUT name="zaloguj" type="submit" value="Zaloguj się"></TD>
        </TR>
    </TABLE>
</FORM>
<?php
$login = "log";
$haslo = "123";

if(isset($_GET['zaloguj'])) {
    if (isset($_GET['login']) && isset($_GET['haslo'])) {
        if ($_GET['login'] === $login) {
            if ($_GET['haslo'] === $haslo) {
                $_SESSION["logged"] = true;
            }
        }
        header("Location:logged_in.php");
        exit();
    }
}
?>
</BODY>