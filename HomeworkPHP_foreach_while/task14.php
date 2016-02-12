<!DOCTYPE html>
<html>
<head>
	<title>N!</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="task14.php" method="get">
	<p>Въведете число <input type="text" name="n"></p>
	<input type="submit" name="submit" value="Изчисли n! ">
</form>

<?php
if(!empty($_GET["submit"])){
$a=$_GET["n"];
if($a<=0){
	echo "Неправилна стойност";
}else{
$fact=1;
for($i=1; $i<=$a; $i++){
	$fact=$fact*$i;

}echo "n!= ".$fact;}
}
?>
</body>
</html>