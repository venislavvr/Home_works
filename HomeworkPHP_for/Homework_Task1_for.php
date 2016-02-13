<?php
header('Content-Type:text/html;charset=utf-8');
$temperature = array();
for ($i=0; $i<90; $i++){
	$temperature[$i]=rand(-30, 50);
	}
$sum=0;
$finaltemp=0;
$length = count($temperature);
	for($i=0; $i<$length; $i++){
	sort($temperature);
	echo "$temperature[$i]"." ";

		
		$sum=$sum+$temperature[$i];
	}
		
		$finaltemp=$sum/$length;
		echo "<p>Средна температуара е ".$finaltemp."</p>";
	for($i=0; $i<5; $i++){
			echo "<p>Първите 5 елемента са: ".$temperature[$i]."</p>";
			
		}

		for($i=$length-5; $i<$length; $i++){
			echo "<p>Последните 5 елемента са: ".$temperature[$i]."</p>";
			
		}



?>