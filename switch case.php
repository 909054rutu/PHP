<html>
<body>
<form method="POST" action="switch case.php">
enter no1:
<input type="text" name="r1"><br>
enter no2:
<input type="text" name="r2"><br>
enter choice
1-add<br>2-sub<br>3-mul<br>4-div<br>
<input type="text" name="r3"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</html>
</body>
</form>
<?php
$n1=$_POST["r1"];
$n2=$_POST["r2"];
$ch=$_POST["r3"];
switch($ch)
{
case 1:$c=$n1+$n2;
echo("addition=".$c);
break;
case 2:$c=$n1-$n2;
echo("substraction=".$c);
break;
case 3:$c=$n1*$n2;
echo("multiplication=".$c);
break;
case 4:$c=$n1/$n2;
echo("division=".$c);
break;
default:echo("invalid choice");
}
?>


