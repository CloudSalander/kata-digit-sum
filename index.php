<?php
function calcSumDigit(int $number): void {
	if($number == 0) echo "0 = 0, surprise motherfucker!".PHP_EOL;
	else {
		$digits = array();
		$sum_digits = 0;
		while($number > 0) {
			$sum_digits += $number%10;
			$number = intdiv($number,10);
		}
		echo " = ".$sum_digits;
	}
}

$number = readline();
/*
TODO: Por precondición, es un número entero positivo y mayor que 0,
no estaría de más comprobarlo de igual manera.
*/
while($number >= 0) {
	calcSumDigit($number);
	$number = readline();
}

?>