<html>
<body>
<form method="post" action="area.php">
enter value of radius:
<input type="text" name="t1"><br>
enter value of base:
<input type="text" name="t2"><br>
enter value of height:
<input type="text" name="t3"><br>
<input type="submit" value="area">
</body>
</html>
<?php
$r=$_POST["t1"];
$b=$_POST["t2"];
$h=$_POST["t3"];
$c=3.14*$r*$r;
$s=$b*$b;
$r=0.5*$b*$h;
echo("<br>area of circle=".$c);
echo("<br>area of square=".$s);
echo("<br>area of rectangle=".$r);



?>
 