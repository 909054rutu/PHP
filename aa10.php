<html>
<body>
<form method="POST" action="aa10.php">
enter temp in cel:
<input type="text" name="t1"><br>

<input type="submit" value="show">
<input type="reset" value="reset">
</body>
</html>
<?php
$c=$_POST["t1"];
$f=$c*9/5+32;
echo("temp in far=".$f);


?>