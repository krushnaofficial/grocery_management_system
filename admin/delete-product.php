<?Php include('../includes/config.php');
$sql="DELETE FROM products WHERE id=".$_GET["rid"]."";
if(mysql_query($sql)){
	header('location:manage-product.php');
}else{
	echo mysql_error();
}?>