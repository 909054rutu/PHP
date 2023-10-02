<?php
$a=array("rno"=>"101","name"=>"om","per"=>"70");
echo("display element along with key");
print_r($a);

echo("<br> size of array=".count($a));

$a=array_reverse($a);
echo("<br> display reverse");
print_r($a);


?>