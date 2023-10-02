<html>
<body>
<form method="post" action="p3.php">
enter l:
<input type="text" name="t1"><br>
enter b:
<input type="text" name="t2"><br>
enter h:
<input type="text" name="t3"><br>
<input type="submit" value="ok">
</body>
</html>
<?php
$l=$_POST["t1"];
$b=$_POST["t2"];
$h=$_POST["t3"];
$s=2*(($l*$b)+($l*$h)+($b*$h));
$v=$l*$b*$h;
echo("<br>surface area".$s);
echo("<br>volume".$v);


?>
 