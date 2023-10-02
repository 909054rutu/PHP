<html>
<body>
<form method="post" action="table.php">
enter table no:
<input type="text" name="t1"><br>
<input type="submit" value="table">
</body>
</html>
<?php
$n=$_POST["t1"];
for($i=1;$i<=10;$i++)
{
echo("<br>".$i*$n);
}
?>