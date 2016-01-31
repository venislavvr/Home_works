<?php
header(`Content-Type:text/html;charset=utf-8`);
//Homework Task 1
echo "<h2>Homework Task 1</h2>";
$a=61;
$b=60;
$c=60;
echo "a= ".$a;
echo "<br>";
echo "b= ".$b;
echo "<br>";
echo "c= ".$c;
echo "<br>";

if ($a+$b+$c==180) {
	echo "може да се построи триъгълник";
}
else{
	echo "не може да се построи триъгълник";
}

//Homework Task 2
echo "<h2>Homework Task 2</h2>";

$a=14;
$b=2;
$c=30;
echo "a= ".$a;
echo "<br>";
echo "b= ".$b;
echo "<br>";
echo "c= ".$c;
echo "<br>";

if ($a+$b<$c) {
	echo "Не може да се построи триъгълник";
	

if ($a+$c<$b) {
	echo "Не може да се построи триъгълник";
	
if ($c+$b<$a) {
	echo "Не може да се построи триъгълник";
	}}}
else{
	echo "Може да се построи триъгълник";

}

//Homework Task 3
echo "<h2>Homework Task 3</h2>";

$c=rand(0, 1000);
echo "c= ".$c;
echo "<br>";
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
}

//Homework Task 4
echo "<h2>Homework Task 4</h2>";

$count=100;
$price;

if ($count<=50) {
	$price=0.10;
	$fin=($count*$price)*0.20;
	echo "цената на електроенергията е ".$fin;
}
elseif($count>=51 && $count<=150){
	$price1=0.15;
	$fin1=($count*$price1)*0.20;
	$finalprice=$fin+$fin1;
	echo "цената на електроенергията е ".$finalprice;

}