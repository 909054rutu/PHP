<html>
<body>
<form method="post" action=" ">
enter roll no:
<input type="text" name="r1"><br>
enter name:
<input type="text" name="r2"><br>
enter per:
<input type="text" name="r3"><br>
<input type="submit" value="insert"><br>
</html>
</body>
</form>
<?php
$con=mysql_connect("localhost","root","");
if($con==false){

die("error in database");
}
$rno=$_POST["r1"];
$name=$_POST["r2"];
$per=$_POST["r3"];

mysql_query("use bca");

$k=mysql_query("insert into student values($rno,'$name',$per)");
if($k==true)
echo("insert successful");
else
echo("record not found");

mysql_close($con);
?>