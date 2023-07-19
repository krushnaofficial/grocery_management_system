<?Php include('../includes/config.php');
$sql="DELETE FROM categorymaster WHERE categoryid=".$_GET["rid"]."";
if(mysql_query($sql)){
	header('location:manage-category.php');
}else{
	echo mysql_error();
}?>