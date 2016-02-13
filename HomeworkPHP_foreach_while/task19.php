<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<meta charset="UTF-8">
</head>
<body>

<?php
//-------------Имам питане за оптимизация---------------
$n=4;
$i=1;
$j=1;
echo "<table border=1>";
	echo "<tr>";
	for($i=$j; $i<=$n; $i++){
		echo "<td>";
		echo "$i";
		echo "</td>";
	}
		echo "</tr>";
		$j++;

		echo "<tr>";
	for($i=$j; $i<=$n+1; $i++){
		echo "<td>";
		echo "$i";
		echo "</td>";
	} 
		echo "</tr>";
		$j++;
		echo "<tr>";
	for($i=$j; $i<=$n+2; $i++){
		echo "<td>";
		echo "$i";
		echo "</td>";
	}
		echo "</tr>";
		$j++;

	echo "<tr>";
	for($i=$j; $i<=$n+3; $i++){
		echo "<td>";
		echo "$i";
		echo "</td>";
	}
		echo "</tr>";
		$j++;
		
	echo "</table>";
?>
</body>
</html>


