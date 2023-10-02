<?php
$con=mysql_connect("localhost","root","");
if($con==false){

die("error in database");
}
mysql_query("use bca");

$res=mysql_query("select *from student");
$k=mysql_affected_rows();
while($row=mysql_fetch_array($res))
{
echo("<br> student rno=".$row[0]);
echo("<br> student name=".$row[1]);
echo("<br> student per=".$row[2]);
}
mysql_close($con);
?>