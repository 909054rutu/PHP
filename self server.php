<html>
<body>
<form method="POST" action="<?php echo($_SERVER['PHP_SELF']);?>">
enter no1:
<input type="text" name="t1"><br>
enter no2:
<input type="text" name="t2"><br>
<input type="submit">
</html>
</body>
</form>
<?php
if(isset($_POST["t1"])&&isset($_POST["t2"]))
{
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a+$b;
echo("addition=".$c);
}
?>