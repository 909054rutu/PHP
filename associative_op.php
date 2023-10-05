<?php
$a=array("rno"=>"101","name"=>"om","per"=>"90");
echo("displya element using with key");
print_r($a);
echo("<br>size  of array=".count($a));
$a=array_reverse($a);
echo("<br> Display reverse");
print_r($a);
unset($a["rno"]);
echo("<br> displya array after Delete ");
print_r($a);

?>
