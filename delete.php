<html>
<body>
<form method="post" action=" ">
enter roll no:
<input type="text" name="r1"><br>
<input type="submit" value="delete"><br>
</html>
</body>
</form>
<?php
$con=mysql_connect("localhost","root","");
if($con==false){

die("error in database");
}
$rno=$_POST["r1"];

mysql_query("use bca");

$k=mysql_query("delete from student where rno=$rno");
$k=mysql_affected_rows();
if($k>0)
echo("number of rows affected=$k");
else
echo("record not found");

mysql_close($con);
?>