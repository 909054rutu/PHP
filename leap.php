<html>
<body>
<form method="POST" action="leap.php">
enter no:
<input type="text" name="r1"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</html>
</body>
</form>
<?php
$n=$_POST["r1"];
if($n%2==0)
echo("<br>year is leap");
else
echo("<br>year is not leap");
?>
