<html>
<body>
<form>
<form method="GET" action="aa11.php">
enter l:
<input type="text" name="t1"><br>
enter b:
<input type="text" name="t2"><br>
enter h:
<input type="text" name="t3"><br>
<input type="submit" value="submit">
<input type="reset" value="reset"><br>
</form>
</body>
</html>
<?php
$l=$_GET["t1"];
$b=$_GET["t2"];
$h=$_GET["t3"];
$s=2*(($l*$b)+($l*$h)+($b*$h));
$v=$l*$b*$h;
echo("surface area=".$s);
echo("volume=".$v);
?>







