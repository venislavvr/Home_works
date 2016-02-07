 <!DOCTYPE html>
 <html>
 <head>
 	<title>Homework_3 Task_3</title>
 </head>
 <body>
 <h3>Проверка на сметка за електроенергия </h3>

  <form action="HomeworkPHP3_Task3.php" method="post">
  <p>въведете количество изразходвана електроенергия <input type="text" name="energy" value=""></p>
  <input type="submit" name="submit" value="провери сметка">
  </form>

 <?php
 
if (!empty($_POST["submit"])) {
	$count=$_POST['energy'];
	$first_price=(50*0.10)*1.2;
$secondary_price=((100*0.15)*1.2)+$first_price;
$third_price=((100*0.25)*1.2)+$secondary_price;

if ($count>=51 && $count<=150) {
	$count1=$count-50;
	$sec_price=(($count*0.15)*1.2)+$first_price;
	echo "цената на електроенергията е ".$sec_price;
}
	elseif($count>=151 && $count<=250){
	$count2=$count-150;
	$thirdy_price=(($count2*0.25)*1.2)+$secondary_price;
	echo "цената на електроенергията е ".$thirdy_price;
}

	elseif($count>=251){
	$count3=$count-250;
	$fourth_price=(($count3*0.35)*1.2)+$third_price;
	echo "цената на електроенергията е ".$fourth_price;

}
else{
	$fin=($count*0.10)*1.2;
	echo "цената на електроенергията е ".$fin;

}

echo "<br>";

}else{
	echo"моля, въведете стойност";
}
?>

<h3>Проверка дали дадено число се дели на 3, 5 и 7</h3>
<form action="HomeworkPHP3_Task3.php" method="get">
	<input type="text" name="entered_number" value="">
	<input type="submit" name="submit" value="провери числото">
</form>
<?php
if(!empty($_GET["submit"])){

$c=$_GET["entered_number"];
if ($c%3==0 && $c%5==0 && $c%7==0) {
	echo "Числото се дели на 3, 5 и 7";
}elseif($c%3==0 && $c%5!=0 && $c%7!=0){
	echo "Числото се дели на 3";
}elseif ($c%3!=0 && $c%5==0 && $c%7!=0) {
	echo "Числото се дели на 5";
}elseif ($c%3!=0 && $c%5!=0 && $c%7==0) {
	echo "Числото се дели на 7";
}elseif ($c%3==0 && $c%5==0 && $c%7!=0) {
	echo "Числото се дели на 3 и 5";
}elseif ($c%3==0 && $c%5!=0 && $c%7==0) {
	echo "Числото се дели на 3 и 7";
}elseif ($c%3!=0 && $c%5==0 && $c%7==0) {
	echo "Числото се дели на 5 и 7";
}

else{
	echo "Числото не се дели на нито едно от трите";
}}
?>
 </body>
 </html>

 