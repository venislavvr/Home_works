<?php
header('Content-Type:text/html;charset=utf-8');
$table=array('България' => 'София',
			 'Гърция'   => 'Атина',
			 'Русия'	=> 'Москва',
			 'Сърбия' 	=> 'Белград',
			 'Австрия'	=> 'Виена');
echo '<table border=1>';
echo'<tr>';
foreach ($table as $key => $value) {
	echo '<td>';
	echo $key;
	echo '</td>';
	echo '<td>';
	echo $value;
	echo '</td>';
	echo '</td>';
	echo '</tr>';
}echo '</table>';


//------------------Сортиране по азбучен ред на Държавите----------------
echo "<h3>Сортиране по азбучен ред на Държавите</h3>";
$table=array("България" => "София",
			 "Гърция"   => "Атина",
			 "Русия"	=> "Москва",
			 "Сърбия" 	=> "Белград",
			 "Австрия"	=> "Виена");
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
//------------------Сортиране по азбучен ред на Градовете----------------
echo "<h3>Сортиране по азбучен ред на Градовете</h3>";
$table=array("България" => "София",
			 "Гърция"   => "Атина",
			 "Русия"	=> "Москва",
			 "Сърбия" 	=> "Белград",
			 "Австрия"	=> "Виена");
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
?>