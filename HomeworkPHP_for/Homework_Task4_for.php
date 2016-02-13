<!DOCTYPE html>
<html>
<head>
	<title>Task4</title>
	<meta charset="UTF-8">
</head>
<body>
<form action="Homework_Task4_for.php" method="post">
<textarea name="passage" rows="10" cols="50"></textarea>
<input type="submit" name="submit" value="Кодирай текста ">
</form>

</body>
</html>





<?php
if(!empty($_POST['submit'])){
$text=$_POST["passage"];
$word=strlen($text);
for($i=0; $i<$word; $i++ ){
$arr=str_split($text);
echo "$arr[$i]";}

	for($i=0; $i<$word; $i++ ){
	if("$arr[$i]"=="a"){
		$arr[$i]="@";
			}
	if ("$arr[$i]"=="e") {
		$arr[$i]="3";
	}

	}
	echo "<br>";

for($i=0; $i<$word; $i++ ){
	echo "$arr[$i]";
}}
//------------Работи само на англ. език--------------
?>