<html>
<body>
<form method="POST" action="per.php">
DATA:
<input type="text" name="t1"><br>
PHP:
<input type="text" name="t2"><br>
SE:
<input type="text" name="t3"><br>
BIG DATA:
<input type="text" name="t4"><br>
DIGITAL MARKETING:
<input type="text" name="t5"><br>
<input type="submit" value="TP">
</form>
</body>
</html>
<?php
$m1=$_POST["t1"];
$m2=$_POST["t2"];
$m3=$_POST["t3"];
$m4=$_POST["t4"];
$m5=$_POST["t5"];
$t=$m1+$m2+$m3+$m4+$m5;
$p=$t/5;
echo("<br> total marks=".$t);
echo("<br> percentage=".$p);
?>
