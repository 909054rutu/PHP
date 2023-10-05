<?php
$a=array(array("c","dbms","stat","dbms"),
array("DS","cpp","php","SE"),
array("java","python","ajax"));
echo("<br>FY subject");
print_r($a[0]);
echo("<br>SY subject");
print_r($a[1]);
echo("<br>TY subject");
print_r($a[2]);
$flag=0;
foreach($a as $b)
if(in_array("ajax",$b))
{
$flag=1;
break;
}
if($flag==1)
echo("<br>found");
else
echo("<br>not found");
?>
