<?php
header('Content-Type:text/html;charset=utf-8');
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

$count=rand(0, 1000);
echo "Единица изразходвана електроенергия: ".$count;
echo "<br>";
$first_price=(50*0.10)*0.20;
$secondary_price=((150*0.15)*0.20)+$first_price;
$third_price=((250*0.25)*0.20)+$secondary_price;

if ($count>=51 && $count<=150) {
	$sec_price=(($count*0.15)*0.20)+$first_price;
	echo "цената на електроенергията е ".$sec_price;
}
	elseif($count>=151 && $count<=250){
	
	$thirdy_price=(($count*0.25)*0.20)+$secondary_price;
	echo "цената на електроенергията е ".$thirdy_price;
}

	elseif($count>=251){
	$fourth_price=(($count*0.35)*0.20)+$third_price;
	echo "цената на електроенергията е ".$fourth_price;

}
else{
	$fin=($count*0.10)*0.20;
	echo "цената на електроенергията е ".$fin;

}

echo "<br>";


//Homework Task 5
echo "<h2>Homework Task 5</h2>";

$dd=rand(0, 100);
$mm=rand(0, 100);
$YY=rand(1000, 9999);
echo "<br>";
echo "денят е: ".$dd;
echo "<br>";
echo "месецът е: ".$mm;
echo "<br>";
echo "годината е: ".$YY;
echo "<br>";

if(($dd>=1 && $dd<=31) && ($mm>=1 && $mm<=12) && (strlen ($YY) == 4)){
	echo "датата е валидна";
}else {
	echo "датата не е валидна";
}



//Homework Task 6
echo "<h2>Homework Task 6</h2>";

$a = array(rand(0, 100),rand(0, 100), rand(0, 100),rand(0, 100),rand(0, 100) );
sort($a);
$length=count($a);
for ($i=0; $i < $length; $i++) { 
	echo $a[$i];
	echo'<br>';
}