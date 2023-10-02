<html>
<body>
<form method="POST" action="demo2.php">
enter roll no:
<input type="text" name="t1" value="<?php echo($_POST['t1']);?>"><br>
<input type="submit">
</html>
</body>
</form>
<?php

echo("<br>roll no=".$_POST['t1']);

?>