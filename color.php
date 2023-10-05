<html>
<body>
<form method="post" action="color.php">
enter days sun,mon,tues,wed,trus,fri,satr........
<input type="text" name="r1"><br>
<input type="submit" value="submit"><br>
<input type="reset" value="reset">
</html>
</body>
</form>
<?php
$d=$_POST["r1"];
switch($d)
{
case "monday":echo("<body bgcolor='red'>");
break;
case "tuesday":echo("<body bgcolor='pink'>");
break;
case "wednesday":echo("<body bgcolor='yellow'>");
break;
case "thursday":echo("<body bgcolor='white'>");
break;
case "friday":echo("<body bgcolor='green'>");
break;
case "saturday": echo("<body bgcolor='purple'>");
break;
}
?>
