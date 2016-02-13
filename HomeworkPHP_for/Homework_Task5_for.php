<?php
$num=array();
for ($i=0; $i<100; $i++){
	$num[$i]=rand(1, 100);
	if($num[$i]%2!=0){
		$num[$i]+=1;
	}
	$a=$num[$i];
}
		echo "<table border=1>";
		echo "<tr>";
		echo "<td>";
			echo "$a";
		echo "</td>";
		echo "<td>";
			$b= sqrt($a);
		echo (round($b, 2));
		echo "</td>";
		echo "</tr>";

		echo "</table>";
?>