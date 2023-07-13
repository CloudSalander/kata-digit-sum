<?php
function calcSumDigit(int $number): void {
	
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