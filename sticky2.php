<html>
<body>
<form method="post" action="sticky2.php"><br>
enter email id:
<input type="text" name="t1"><br>
<input type="submit"><br>
</html>
</body>
</form>
<?php
$s1=$_POST["t1"];
echo("email id=".$s1);
if(filter_var ($s1,FILTER_VALIDATE_EMAIL))
echo("valid");
else
echo("invalid");
?>

