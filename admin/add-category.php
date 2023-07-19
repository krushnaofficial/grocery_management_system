<?Php require('include/header.php');
if(isset($_POST["btnSubmit"])){	

if($_POST["categoryname"]=="")
{	
	echo "Category name cant be blanked";
}
else{
	

	$sql="INSERT INTO categorymaster(categoryname)VALUES('".$_POST["categoryname"]."')";
	if(mysql_query($sql)){
		header('location:manage-category.php');
	}else{
		echo mysql_error();
	}
}
}?>
<form name="frmSubmit" id="frmSubmit" action="" method="post" enctype="multipart/form-data">
  <table border="0" width="100%" cellpadding="0" cellspacing="0" class="form-table">
    <tr>
      <th>Category:</th>
      <td><input type="text" name="categoryname" id="categoryname"  title="Category Name" class="text" style="width:300px;" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSubmit" value="Submit"/></td>
    </tr>
  </table>
</form>
<?Php require('include/footer.php');?>