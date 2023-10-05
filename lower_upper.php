<?php
$s1="rbnb";
$s2="college";
$k=strcmp($s1,$s2);
if($k==0)
echo("string are same");
if($k>0)
echo("string greater=".$s1);
if($k<0)
echo("string greater=".$s2);
$s1=strtoupper($s1);
$s2=strtolower($s2);
echo("<br>uppercase string=".$s1);
echo("<br>lowercase string=".$s2);
?>

