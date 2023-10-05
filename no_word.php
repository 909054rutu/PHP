<html>
<body>
<form method="post" action="no_word.php">
enter number:
<input type="text" name="r1"><br>
<input type="submit" value="ok">
</html>
</body>
</from>
<?php
$n=$_POST["r1"];
$r=0;
while((int)$n>0)
{
$d=$n%10;
$r=$r*10+$d;
$n=$n/10;
}
while((int)$r>0)
{
$d=$r%10;
$r=$r/10;
switch($d)
{
case 1:echo("one");
break;
case 2:echo("two<br>");
break;
case 3:echo("three<br>");
break;
case 4:echo("four");
break;
case 5:echo("five");
break;
}
}
?>

