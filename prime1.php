
<?php
for($n=1;$n<=50;$n++)
{
$f=0;
for($i=2;$i<$n;$i++)
{
if($n%$i==0)
{
$f=1;
break;
}
}
if($f==0)
echo(" ".$n);
}
?>
