<html>
<body>
<form method="post" action="add.php">
enter n1:
<input type="text" name="t1"><br>
enter n2:
<input type="text" name="t2"><br>
<input type="submit" value="calculate">
<input type="reset" value="clear">
</form>
</body>
</html>
<?php
$a=s_post["t1"];
$b=s_post["t2"];
$c=$a+$b;
$d=$a*$b;
$e=$a/$b;
echo("addition=".$c);
echo("addition=".$d);
echo("addition=".$e);
?>



