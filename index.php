<?php
function printDigits(array $digits) {
	foreach ($digits as $index => $digit) {
		echo $digit;
		if($index < count($digits)-1) echo " + ";
	}
}

function calcSumDigit(int $number): void {
	if($number == 0) echo "0 = 0, surprise motherfucker!".PHP_EOL;
	else {
		$digits = array();
		$sum_digits = 0;
		while($number > 0) {
			$digit = $number%10;
			$sum_digits += $digit;
			array_unshift($digits, $digit);
			$number = intdiv($number,10);
		}
		echo printDigits($digits)." = ".$sum_digits.PHP_EOL;
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