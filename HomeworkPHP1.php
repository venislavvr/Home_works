<?php
header('Content-Type:text/html;charset=utf-8');

//Task 1
	$Firsname="Венислав Тихомиров Вълчев";
	$Age="36";
	echo $Firsname;
	echo "<br>";
	echo "Години"." ".$Age;
	echo "<br>";

//Task 2
	$Adress="Никола Войводов 7 вх.Б";
	echo $Adress;
	echo "<br>";

//Task 3
	$number=4;
	$decinumber=10.5;
	$alphabet="Името ми е Венислав";
	$logic=true;
	echo gettype($number);
	echo "<br>";
	echo gettype($decinumber);
	echo "<br>";
	echo gettype($alphabet);
	echo "<br>";
	echo gettype($logic);
	echo "<br>";

//Task 4 Homework 1
	echo "<h1>Домашно 1 задача</h1>";

	$a=5;
	$b=10;
	echo "a=".$a;
	echo "<br>";
	echo "b=".$b;
	echo "<br>";

//inverse
	echo "Обърнати стойности:";
	echo "<br>";
	echo "a=".$b;
	echo "<br>";
	echo "b=".$a;
	echo "<br>";

//Task 5&6
	$user="Венислав";
	$hobby="Фотография";
	echo "на ".$user." хобито е ".$hobby;
	echo "<br>";
	$user="Иван";
	$hobby="Риболов";
	echo "на ".$user." хобито е ".$hobby;
	echo "<br>";
?>


<!-- Task 7 -->
<!DOCTYPE html>
<html>
<head>
	<title>Tets</title>
<style type="text/css">
h1{
	color: #FF0000;
}
	#frst{
		color: blue;
	}
	#sec{
		color: red;
	}

	table{
		border-collapse: collapse;
	}
	#us{
		color: blue;
	}
	#st{
		color: red;
	}
	#le{
		color: green;
	}
	#co{
		color: #915029;
	}

	#srectangle{
		color: red;
	}
	#prectangle{
		color: #E66767;
	}
	#striangle{
		color: #E924B8;
	}
	#ptriangle{
		color: #900872;
	}
	#scircle{
		color: #3D77ED;
	}
	#pcircle{
		color: #0E19AF;
	}
	#strapeze{
		color: #31E631;
	}
	#ptrapeze{
		color: #0C8217;
	}
</style>

</head>
<body>
<?php
	header(`Content-Type:text/html;charset=utf-8`);
	$first="I've gone to the store.";
	$second='“The harder’s the life, the sweeter’s the song.”';
	echo "<p id='frst'>".$first;
	echo "<br>";
	echo "<p id='sec'>".$second;
	echo "<br>";
?>




<!-- Task 8,9,10 -->



<?php


	$user="Ivan";
	$student="student";
	$lecture="lecture";
	$course="Physics course";

	echo "<p>Hi, <span id='us'>$user</span> You`ve been approved to take part in the <span id='co'>$course</span> as a <span id='le'>$lecture</span>. The <span id='co'>$course</span>will last for two days.</p>";
	echo "<br>";

	$user="Todor";
	$student="student";
	$lecture="lecture";
	$course="Mathematics course";

	echo "<p>Hi, <span id='us'>$user</span> You`ve been approved to take part in the <span id='co'>$course</span> as a <span id='st'>$student</span>. The <span id='co'>$course</span> will last for two days.</p>";
	echo "<br>";
?>

<!-- Task 11 -->
	<?php
	echo "<h2>Лице и периметър на правоъгълник</h2>";
	$a=20;
	$b=15;
	$c=8;
	$d=5;
	$h=26;
	$s=$a*$b;
	$p=2*($a+$b);
	echo "Лицето на правоъгълника е: ".$s;
	echo "<br>";
	echo "Периметъра на правоъгълника е: ".$p;
	echo "<br>";
	echo "<h2>Лице и периметър на триъгълник</h2>";
	$s=($b*$h)/2;
	$p=$a+$b+$c;
	echo "Лицето на триъгълника е: ".$s;
	echo "<br>";
	echo "Периметъра на триъгълника е: ".$p;
	echo "<br>";
//Homework task 2
	echo "<h1>Домашно 2 задача</h1>";

	echo "<h2>Лице и периметър на кръг</h2>";
	$r=7;
	$pi=3.14;
	$s=$pi*sqrt($r);
	$p=2*$pi*$r;
	echo "Лицето на кръга е: ".$s;
	echo "<br>";
	echo "Периметъра на кръга е: ".$p;
	echo "<br>";
//Homework task 3
	echo "<h1>Домашно 3 задача</h1>";

	echo "<h2>Лице и периметър на трапец</h2>";
	$p=$a+$b+$c+$d;
	$s=(($a+$b)*$h)/2;
	echo "Лицето на трапеца е: ".$s;
	echo "<br>";
	echo "Периметъра на трапеца е: ".$p;
	echo "<br>";

//Homework task 4
	echo "<h1>Домашно 4 задача</h1>";

	echo "<h2>таблица с формули</h2>";
	echo "<table border=1>
			<tr>
			<td id='srectangle'>Лицето на правоъгълника е: s=a*b</td>
			<td id='prectangle'>Периметъра на правоъгълника е: p=2*(a+b) </td>
			</tr>
			<tr>
			<td id='striangle'>Лицето на триъгълника е: s=(b*h)/2</td>
			<td id='ptriangle'>Периметъра на триъгълника е: p=a+b+c</td>
			</tr>
			<tr>
			<td id='scircle'>Лицето на кръга е: s=pi*sqrt(r)</td>
			<td id='pcircle'>Периметъра на кръга е: p=2*pi*r</td>
			</tr>
			<tr>
			<td id='strapeze'>Лицето на трапеца е: s=((a+b)*h)/2</td>
			<td id='ptrapeze'>Периметъра на трапеца е: p=a+b+c+d</td>
			</tr>
		</table>";

//Homework task 5
		echo "<h1>Домашно 5 задача</h1>";
		echo "<h2>Текуща дата и час в България</h2>";
		echo "днес е ".date("d.m.Y")."<br>";
		date_default_timezone_set("Europe/Sofia");
		echo "часът е ".date("h:i:s");
//Homework task 6
		echo "<h1>Домашно 6 задача</h1>";
		echo "<h2>Текуща дата и час в Бразилия</h2>";
		date_default_timezone_set("America/Buenos_Aires");
		echo "днес е ".date("d.m.Y")."<br>";
		echo "часът е ".date("h:i:s")."<br>";
//Homework task 7
		echo "<h1>Домашно 7 задача</h1>";
		echo "днес е ".date("d/m/Y")."<br>";
		echo "днес е ".date("Y-m-d")."<br>";
		echo "днес е ".date("d/M/Y")."<br>";
//Homework task 8
		echo "<h1>Домашно 8 задача</h1>";
		date_default_timezone_set("Europe/Sofia");
		echo "часът е ".date("H:i")."<br>";
		echo "часът е ".date("h:ia")."<br>";
		echo "часът е ".date("H:i:s")."<br>";

?>


</body>
</html>
