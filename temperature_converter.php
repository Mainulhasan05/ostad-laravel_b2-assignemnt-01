<?php
$celcius_temp=100;
$fahrenheit_temp=($celcius_temp*9/5)+32;
echo $celcius_temp."°C = ".$fahrenheit_temp."°F\n";
$fahrenheit_temp=212;
$celcius_temp=($fahrenheit_temp-32)*5/9;
echo $fahrenheit_temp."°F = ".$celcius_temp."°C\n";
?>