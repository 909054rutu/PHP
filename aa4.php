<html>
<body>
<form method="POST" action="aa4.php">
enter no 1:
<input type="text" name="t1"><br>
enter no 2:
<input type="text" name="t2"><br>
<input type="submit" value="add">
<input type="reset" value="reset">
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a+$b;
echo("addition=".$c);
?>