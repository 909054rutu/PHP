<html>
<body>
<form method="POST" action="aa13.php"><br>
enter digital marketing:
<input type="text" name="t1"><br>
enter SE:
<input type="text" name="t2"><br>
enter PHP:
<input type="text" name="t3"><br>
enter DATA STRUCTURE:
<input type="text" name="t4"><br>
enter BIG DATA:
<input type="text" name="t5"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</html>
</body>
</form>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];
$s4=$_POST["t4"];
$s5=$_POST["t5"];
$total=$s1+$s2+$s3+$s4+$s5;
$per=$total/5;
echo("<br>total=".$total);
echo("<br>per=".$per);
?>