
<!DOCTYPE html>
<html>
<head>
	<title>Task4</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="HomeworkPHP3_Task4.php" method="get">
	Въведете число в интервала 1-10: <input type="text" name="entered_number">
	<input type="submit" name="submit" value="провери числото">
</form>

<?php
if(!empty($_GET['submit'])){
	$a=4;
	$b=$_GET['entered_number'];
	
	if($b>0 && $b<$a){
		echo "Въведеното число е по-малко от зададеното";
	}elseif ($b==$a) {
		echo "Поздравление! вие познахте числото";
	}elseif ($b>$a && $b<=10) {
		echo "Въведеното число е по-голямо от зададеното";
		
	}else{
		echo "Въвели сте невалидно число";
	}

}

?>
</body>
</html>
