<html>
<body>
<form>
<form method="post" action="ee1.php">
enter no1:
<input type="number" name="r1"><br>
enter no2:
<input type="number" name="r2"><br>
<input type="submit" value="check">
</form>
</body>
</html>
<?php
$a=$_POST["r1"];
$b=$_POST["r2"];

$q=$a/$b;
$r=$a%$b;
echo("quoient=".$q);
echo("<br> reminder=".$r);
?>
