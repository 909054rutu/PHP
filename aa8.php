<html>
<body>
<form method="POST" action="aa8.php">
enter 1:
<input type="text" name="t1"><br>
enter 2:
<input type="text" name="t2"><br>
<input type="submit" value="show">
<input type="reset" value="reset">
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$q=$a/$b;
$r=$a%$b;
echo("<br>quotient=".$q);
echo("<br>remainder=".$r);

?>