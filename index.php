<?php
require_once "dbConnect.php";
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

?>

<BODY>

<TABLE>
    <TR>Samochody:</TR>
	<?php
	echo "<br>";
	echo "<br>";
	
	$pg = $_GET['page'];
	$next = $pg + 5;
	$prev = $pg - 5;
	
	if ($next == $count + 1) {
		$next = 1;
	}
	
	if ($prev < 1) {
		$prev = $count - 4;
	}
	
	echo "<a href='index.php?page=$next'>Nastepna strona</a>";
	echo "&nbsp";
	echo "<a href='index.php?page=$prev'>Poprzednia strona</a>";
	
	echo "<br>";
	echo "<br>";
	
	
	if (isset($_GET['page'])) {
		$i = $_GET['page'];
		$end = $_GET['page'];
		while ($i < ($end + 5)) {
		$car = getOneCar($connection, $i);
		echo "<TR>";
		echo "Id: " . $car["id"];
		$id = $car["id"];
		echo "<br>";
	    echo "Marka: " . $car["marka"];
		echo "<br>";
		echo "<a href='car.php?carID=" . $id . "'>Wiecej</a>";
		echo "<TR/>";
		echo "<br>";
		$i++;
		
		}
    } else {
		echo "Nie ma takiej strony.";
	}
    
	/* foreach ($data as $key => $value) {
		echo "<TR>";
		echo "Id: " . $value["id"];
		$id = $value["id"];
		echo "<br>";
	    echo "Marka: " . $value["marka"];
		echo "<br>";
		echo "<a href='car.php?carID=" . $id . "'>Wiecej</a>";
		echo "<TR/>";
		echo "<br>";
	} */
	
    ?>
</TABLE>

</BODY>
