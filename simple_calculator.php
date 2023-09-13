<?php
$num1=65;
$num2=20;
$operation="sub";
switch($operation){
    case "add":
        echo $num1+$num2."\n";
        break;
    case "sub":
        echo $num1-$num2."\n";
        break;
    case "mul":
        echo $num1*$num2."\n";
        break;
    case "div":
        echo $num1/$num2."\n";
        break;
    default:
        echo "Invalid operation\n";
}