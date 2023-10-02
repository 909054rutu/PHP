<html>
<body>

<h2>Place an Order</h2>
    <form method="post" action=" ">
        <label for="product">Product:</label>
        <input type="text" id="product" name="product" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="customerName">Your Name:</label>
        <input type="text" id="customerName" name="customerName" required><br><br>

        <label for="customerEmail">Your Email:</label>
        <input type="email" id="customerEmail" name="customerEmail" required><br><br>

        <input type="submit" value="Place Order">
    </form>
</body>
</html>
</html>
</body>
</form>
<?php
$con=mysql_connect("localhost","root","");
if($con==false){

die("error in database");
}
$product=$_POST["product"];
$quantiy=$_POST["quantity"];
$customerName=$_POST["customerName"];
$customerEmail=$_POST["customerEmail"];

mysql_query("use bca");

$k=mysql_query("insert into student values(`name`, `address`, `phone`, `product`, `qty`) VALUES ('$customerName', 'shrirampur', '123', '$product', '$quantity')");
if($k==true)
echo("insert successful");
else
echo("record not found");

mysql_close($con);
?>