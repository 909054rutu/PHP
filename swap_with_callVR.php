<?php
function swap(&$a,&$b)
{
$t=$a;
$a=$b;
$b=$t;
echo("<br><br>swap value of a=".$a);
echo("<br><br>swap value of b=".$b);
}
$a=11;
$b=22;
echo("<br><br>before swap a=".$a);
echo("<br><br>before swap b=".$b);
swap($a,$b);
echo("<br><br>after swap a=".$a);
echo("<br><br>after swap b=".$b);
?>