
<!DOCTYPE html>
<html>
<head>
	<title>max number</title>
</head>
<body>

	<?php 

	//max number among three integers
	$a = 10;
	$b = 20;
	$c = 30;
	if($a > $b && $a > $c){
		echo "a is greater";
	}elseif ($b > $a && $b >$c) {
		echo "b is greater";
	}elseif ($c > $b && $c > $a) {
		echo "c is greater";
	}else{
		echo "the numbers are equal";
	}

	echo "<br><br>";

	//find out the even odd numbers

	$num1 = 2000000000005204152;
	if ($num1 % 2 == 0) {
		echo "the number is even";
	}else{
		echo "the number is odd";
	}


	echo "<br><br>";

	$num2 =  423454454454445451;
	if ($num2 % 2 == 1 ) {
		echo "the number is odd";
	}else{
		echo "the number is even";
	}



	 ?>


</body>
</html>