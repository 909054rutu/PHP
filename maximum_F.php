<?php
function maximum($a,$b,$c)
{
if($a>$b && $a>$c)
return $a;
else if($b>$a &&$b>$c)
return $b;
else 
return $c;
}
echo("max no=".maximum(10,80,64));
?>
