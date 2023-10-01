<html>
<body>
<form method="GET" action="aa12.php"><br>
enter radius:
<input type="text" name="t1"><br>
enter base:
<input type="text" name="t2"><br>
enter height:
<input type="text" name="t3"><br>
<input type="submit" value="submit">
</html>
</body>
</form>
<?php
$r=$_GET["t1"];
$b=$_GET["t2"];
$h=$_GET["t3"];
$c=3.14*$r*$r;
$s=$b*$b;
$r=0.5*$b*$b;
echo("<br>circle=".$c);
echo("<br>square=".$s);
echo("<br>rectangle=".$r);
?>