<?php
session_start();

if (isset($_SESSION['user_id']))
{
	$userid = $_SESSION['user_id'];
}

if (isset($_SESSION['username']))
{
	$User = $_SESSION['username'];
}

else
{
	$User = "";
}
?>

<?php

$productid = $_POST['txtjewelid'];

include("includes/mysqli_connection.php");

$sql = "SELECT * FROM cart WHERE cust_id = '$userid' AND product_id = '$productid' AND checkout = 'n'";
$query = mysqli_query($db_conx, $sql);

while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
{
	$id = $row['id'];
	$jewelid = $row["product_id"];
	$qty = $row["qty"];
	$userid = $row["cust_id"];
	$checkout = $row['checkout'];
}

if($qty >= 100)
{
	echo "<script>alert('You cannot add more than this!')</script>";
	echo "<script>window.location.href='cart.php';</script>";
}

else
{
	$qty = $qty + 1;
	$sql = "UPDATE cart SET qty = '$qty' WHERE id = '$id'";
	$updateqty = mysqli_query($db_conx, $sql);
}

// Close your database connection
mysqli_close($db_conx);
header("location:cart.php");
?>
 