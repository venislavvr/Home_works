<?php
echo "<h3>Сортира във възходящ ред по value</h3>";
$table=array("България" => "450000",
			 "Гърция"   => "900000",
			 "Русия"	=> "7000000",
			 "Сърбия" 	=> "390000",
			 "Австрия"	=> "456987");
asort($table);
echo "<table border=1>";
echo"<tr>";
foreach ($table as $key => $value) {
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</td>";
	echo "</tr>";
}echo "</table>";
//---------------------------------------
echo "<h3>Сортира в низходящ ред по value</h3>";
$table=array("България" => "450000",
			 "Гърция"   => "900000",
			 "Русия"	=> "7000000",
			 "Сърбия" 	=> "390000",
			 "Австрия"	=> "456987");
arsort($table);
echo "<table border=1>";
echo"<tr>";
foreach ($table as $key => $value) {
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</td>";
	echo "</tr>";
}echo "</table>";
//-----------------------------------------
echo "<h3>Сортира във възходящ ред по key</h3>";
$table=array("България" => "450000",
			 "Гърция"   => "900000",
			 "Русия"	=> "7000000",
			 "Сърбия" 	=> "390000",
			 "Австрия"	=> "456987");
ksort($table);
echo "<table border=1>";
echo"<tr>";
foreach ($table as $key => $value) {
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</td>";
	echo "</tr>";
}echo "</table>";
//-------------------------------------------
echo "<h3>Сортира в низходящ ред по key</h3>";
$table=array("България" => "450000",
			 "Гърция"   => "900000",
			 "Русия"	=> "7000000",
			 "Сърбия" 	=> "390000",
			 "Австрия"	=> "456987");
krsort($table);
echo "<table border=1>";
echo"<tr>";
foreach ($table as $key => $value) {
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</td>";
	echo "</tr>";
}echo "</table>";
