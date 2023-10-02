<?php
for($n=1;$n<=100;$n++)
{
$s=0;
for($i=1;$i<$n;$i++)
{
if($n%$i==0)
{
$s=$s+$i;
}
}
if($s==$i)
echo("<br> perfect no=".$n);
}
?>
