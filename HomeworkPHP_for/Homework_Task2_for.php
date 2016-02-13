<?php
header('Content-Type:text/html;charset=utf-8');
$arr = array();
for ($i=0; $i<20; $i++){
	$arr[$i]=$i*5;
	echo "$arr[$i]";
	echo "<br>";

		}
