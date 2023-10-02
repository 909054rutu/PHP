<html>
<body>
<form method="POST" action="p2.php">
enter no:
<input type="text" name="t1"><br>
enter no2:
<input type="text" name="t2"><br>
<input type="submit" value="ok">
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$t=$b;
$b=$a;
$a=$t;
echo("<br>1 value".$a);
echo("<br>2 value".$b);
?>
 