
<html>
<body>
<form method="POST" action="form14.php"><br>
Name:
<input type="text" name="t2"><br>
Address:
<input type="adress" name="t3"><br>
Contact No:
<input type="number" name="t4"><br>
Source:
<select name="s1">
<option value="pune">pune</option>
<option value="mumbai">mumbai</option>
<option value="nashik">nashik</option>
</select>
Date of journey:
<input type="date" name="t6"><br>
Gender:
<input type="radio" name="aa">male<br>
<input type="radio" name="aa">female<br>
passenger:
<input type="number" name="t7"><br>
Price per Ticket
<input type="number" name="t8"><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</html>
</body>
</form>
<?php
$s2=$_POST["t2"];
$s3=$_POST["t3"];
$s4=$_POST["t4"];
$s5=$_POST["s1"];
$s7=$_POST["t6"];
$s8=$_POST["aa"];
$s9=$_POST["t7"];
$s10=$_POST["t8"];
$tot=$s9*$s10;
echo("<br>Name=".$s2);
echo("<br>address=".$s3);
echo("<br>contact=".$s4);
echo("<br>source=".$s5);
echo("<br>date of journy=".$s7);
echo("<br>gender=".$s8);
echo("<br>passenger=".$s9);
echo("<br>per tiket=".$s10);
echo("<br>total=".$tot);
?>

