<?php
$a=array(array("c","dbms","web tech"),
array("ds","se","php","os"),
array("java","python","xml","AJAX"));
echo("<br>");
echo("fy subject");
print_r($a[0]);
echo("<br>");
echo("sy subject");
print_r($a[1]);
echo("<br>");
echo("ty subject");
print_r($a[2]);
$flag=0;
foreach($a as $b)
{
if(in_array("java",$b))
{
$flag=1;
break;
}
}
if($flag==1)
echo("<br> found");
else
echo("<br>not found");
?>