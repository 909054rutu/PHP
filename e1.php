<html>
<body>
<form>
<form method="post" action="e1.php">
enter no1:
<input type="text" name="t1"><br>
enter no2:
<input type="text" name="t2"><br>
<input type="submit" value="check">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];

$q=$a/$b;
$r=$a%$b;
echo("quoient=".$q);
echo("<br> reminder=".$r);
?>