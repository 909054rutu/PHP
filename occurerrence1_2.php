<?php
$s1="shrirampur";
$s2="ram";
$k=strpos($s1,$s2);

if($k==NULL)
echo("<br>substring not found");
else
echo("<br>substring  found pos=".$k);
$s1=strtoupper($s1);
$s1=strtolower($s1);
echo("<br>uppercase string=".$s1);
echo("<br>lowercase string=".$s2);
?>

