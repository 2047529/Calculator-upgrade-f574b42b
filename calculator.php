<?php

echo "Welke operatie wil je uitvoeren? (+, -, %)";
$a = readline();
if ($a == '+' || $a == '-' || $a == '%')
{
echo "Eerste getal?";
$getal1 = readline();

if (!(is_numeric($getal1))){
	echo "Sorry, dit is geen getal";
	exit;
}
echo "Tweede Getal?";
$getal2 = readline();

if (!(is_numeric($getal2))){
	echo "Sorry, dit is geen getal";
	exit;
}

if ($a == '+')
	echo $getal1 + $getal2;
elseif ($a == '-')
	echo $getal1 - $getal2;
elseif ($a == '%')
	echo $getal1 % $getal2;
}
else
	echo "Sorry, dit is geen +, - of %";
