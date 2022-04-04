<?php

if (isset($_GET['submit'])) {
    if (isset($_COOKIE['cookie'])) {
        echo "Już głosowałeś.";
    } else {
        setcookie('cookie', 'cookie', time() + 5);
        header("Location:cookie.php");
    }
}
?>

<BODY>
<FORM>
    <TR>
        <TD>Sonda internetowa.</TD>
    </TR>
    <TR>
        <TD>1: Ile masz lat?</TD>
        <select name="age" required>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
    </TR>
    <TR>
        <TD><INPUT name="submit" type="submit" value="Wyślij"></TD>
    </TR>
</FORM>


</BODY>
