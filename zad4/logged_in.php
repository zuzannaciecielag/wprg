<BODY>
<FORM action="logged_in.php" method="GET">

<?php

    if ($_GET['log']=='true') {
        session_start();
        echo "<TR> <TD>Zalogowales sie!</TD> </TR>";
        echo '<TR><a href="login_form.php?zaloguj=NULL">Wyloguj</a></TR>';
        if ($_GET['zaloguj'] == 'NULL') {
        session_destroy();
        exit(); 
        }  
    } else {
        echo "<TR> <TD>Nie zalogowales sie!</TD> </TR>";
        echo "<TR> <TD><a href='login_form.php'>Powrot</a></TD></TR>";
    }
    ?>

</FORM>
</BODY>
