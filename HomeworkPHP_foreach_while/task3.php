<!DOCTYPE html>
<html>
<head>
	<title>foreach_while_Task3</title>
	<meta charset="UTF-8">
</head>
<body>

<form action="task3.php" method="get">
	<select name="city">
			<option value="София">София</option>
			<option value="Виена">Виена</option>
			<option value="Москва">Москва</option>
			<option value="Рим">Рим</option>
			<option value="Берлин">Берлин</option>
		</select>
	<input type="submit" name="submit" value="submit">
</form>
<?php
if(!empty($_GET['submit'])){
	$get_cityname=$_GET['city'];
	

	$citynames=array('София'=>"България",
						"Виена"=>"Австрия",
						"Москва"=>"Русия",
						"Рим"=>"Италия",
						"Берлин"=>"Германия");


	echo "$get_cityname"." се намира в "."$citynames[$get_cityname]";
	

	
}
	
	
?>
</body>
</html>


