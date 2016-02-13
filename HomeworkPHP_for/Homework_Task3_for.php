<?php
header('Content-Type:text/html;charset=utf-8');
$arr = array();
for ($i=0; $i<30; $i++){
	$arr[$i]=rand(0, 70);
	echo $arr[$i]." ";
	}
$min=$arr[0];

for ($i=0; $i<30; $i++){
	if ($arr[$i]<$min && $arr[$i]!=0) {
		$min=$arr[$i];
		
	}


}
echo "<br>";
echo "<p>Минималният елемент на масива различен от 0 е: ".$min."</p>";
