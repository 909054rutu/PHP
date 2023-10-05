<html><body>
<form method="post" action="">
1]sort the arrya by asce,dsce
<br>2]without changing key
<br>3]find the intersection two arrys
<br>4]find the union
<br>ENter choice
<input type="text" name="r1"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$ch=$_POST["r1"];
$a=array("om"=>"70","sai"=>"90","ram"=>"60");
echo("<br>original");
print_r($a);
switch($ch)
{
case 1:sort($a);
echo("<b><br>ascending order</b>");
print_r($a);
rsort($a);
ksort($a);
echo("<br>desending order");
print_r($a);
asort($a);
break;
case 2:arsort($a);
echo("<b><br>ascending order<b>");
print_r($a);
asort($a);
echo("<br>desending order");
print_r($a);
break;
case 3:$a=array(10,20,30,40);
$b=array(10,60,70,30);
echo("<br>original");
print_r($a);
echo("<br>original");
print_r($b);
$c=array_intersect($a,$b);
echo("<br>intersection");
print_r($c);
case 4:$a=array(10,20,30,40);
$b=array(10,90,60,30);
echo("<br>original");
print_r($a);
echo("<br>original");
print_r($b);
$c=array_merge($a,$b);
$c=array_unique($c);
echo("<br>union");
print_r($c);
break;
}
?>



