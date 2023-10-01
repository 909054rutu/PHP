<html>
<body>
<form method="POST" action="aa9.php">
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
$t=$a;
$a=$b;
$b=$t;
echo("<br>swap=".$a);
echo("<br>swap=".$b);


?>