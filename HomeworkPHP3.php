
<!DOCTYPE html>
<html>
<head>
	<title>Homework PHP Forms</title>
	<meta charset="UTF-8">
</head>
<body>

<!-- homework TASK 1 -->
<h3>Homework Task 1</h3>

<form action="HomeworkPHP3.php" method="post">
	<p>Въведете потребителско име<input type="text" name="username" value=""></p>
	<br>
	<p>Въведете парола<input type="password" name="password" value=""></p>
	<br>
	<input type="submit" name="submit" value="вход">
	
</form>

<?php
$username="venislav";
$password="veni";
if(!empty($_POST["submit"])){
	
	
		if($_POST["username"]==$username && $_POST["password"]==$password){
			echo "Добре дошъл ".$username;
		}
		elseif ($_POST["username"]==$username && $_POST["password"]!=$password) {
			echo "Грешна парола";
		}
		elseif ($_POST["username"]!=$username && $_POST["password"]==$password) {
			echo "Грешно потребителско име";
		}
else{
	echo "Грешна парола и потребителско име";
}}

?>
<br>
  <!-- homework TASK 2 -->
  <h3>Homework Task 2</h3>
<form action="HomeworkPHP3.php" method="get">
	<p>въведете ден от седмицата на английски език<input type="text" name="dday" value="">
	<input type="submit" name="submit" value="submit">
</form>

<?php
if(!empty($_GET["submit"])){
	$dday=$_GET["dday"];
	switch ($dday) {
		case 'monday':
			echo "Laugh on ".$dday.", laugh for danger.";
			break;
		case 'tuesday':
			echo "Laugh on ".$dday.", kiss a stranger.";
			break;
		case 'wednesday':
			echo "Laugh on ".$dday.",  laugh for a letter.";
			break;
		case 'thursday':
			echo "Laugh on ".$dday.",  something better.";
			break;
		case 'friday':
			echo "Laugh on ".$dday.",   laugh for sorrow.";
			break;
		case 'saturday':
			echo "Laugh on ".$dday.",    joy tomorrow.";
			break;
		default:
			echo "невалиден ден";
			break;
	}

}

?>

 
</body>
</html>