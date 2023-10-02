
<html>
<body>
<form method="POST" action="g_per.php">
enter per:
<input type="text" name="r1"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</html>
</body>
</form>
<?php
$per=$_POST["r1"];
if($per<40)
echo("<br>fail");
else if($per>=40&&$per<=50)
echo("<br>pass class");
else if($per>=50&&$per<=60)
echo("<br>heiger secod class");
else if($per>=60&&$per<=70)
echo("<br>first class");
else
echo("<br>first class and destinetion");
?>





