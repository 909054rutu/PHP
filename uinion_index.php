<?php
$a=array(10,20,30,40);
$b=array(20,10,22,33);
$c=array_merge($a,$b);
$c=array_unique($c);
echo("unique element=");
print_r($c);

shuffle($a);
echo("<br> random number");
print_r($a);
?>