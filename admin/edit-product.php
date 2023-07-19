<?Php require('include/header.php');
$editsql="SELECT * FROM products WHERE id='".$_GET["rid"]."'";
$result=mysql_query($editsql);
$row=mysql_fetch_array($result);

if(isset($_POST["btnSubmit"])){
	if($_POST["categoryname"]=="")
	{	
	echo "Categoryname cant be blanked";
}
if($_POST["productname"]=="")
	{	
	echo "Product name cant be blanked";
}
if($_POST["rate"]=="")
	{	
	echo "Rate cant be blanked";
}
if($_POST["description"]=="")
	{	
	echo "Description cant be blanked";
}
if($_POST["imagename"]=="")
	{	
	echo "image cant be blanked";
}
	
	$destPath = $_SERVER['DOCUMENT_ROOT']."/efarm/Photos/products/";

	$fileName=$_FILES['imagename']['name'];
	if($fileName!=""){
		$info = pathinfo($_FILES['imagename']['name']);
		$ext  = $info['extension'];
		$fileName = str_replace(array("."," "),"",microtime()).".".$ext;
		if(move_uploaded_file($_FILES['imagename']['tmp_name'],$destPath.$fileName)){
			$imagename=$fileName;
		}else{
			$imagename=$row["imagename"];
		}
	}else{
		$imagename=$row["imagename"];
	}
	$sql="UPDATE products SET prodname='".$_POST["productname"]."',price=".$_POST["rate"].",descr='".$_POST["description"]."',path='".$imagename."',category=".$_POST["categoryid"]." WHERE id=".$_POST["productid"]."";
	if(mysql_query($sql)){
		header('location:manage-product.php');
	}else{
		echo mysql_error();
	}
}?>

<form name="frmSubmit" id="frmSubmit" action="" method="post" enctype="multipart/form-data">
  <table border="0" width="100%" cellpadding="0" cellspacing="0" class="form-table">
    <tr>
      <th>Category Name:</th>
      <td><select name="categoryid" class="select" style="width:200px;">
          <?Php $catsql="SELECT * FROM categorymaster ORDER BY categoryid ASC";$cat_res=mysql_query($catsql);while($cat=mysql_fetch_array($cat_res)){
			  $sel="";
			  if($row["categoryid"]==$cat["categoryid"]){
			  $sel='selected="selected"';
			  }
			  ?>
          <option value="<?Php echo $cat["categoryid"];?>" <?Php echo $sel;?> ><?Php echo $cat["categoryname"];?></option>
          <?Php }?>
        </select></td>
    </tr>
    <tr>
      <th>Product Name:</th>
      <td><input type="text" name="productname" id="productname"  title="Product Name" class="text" style="width:300px;" value="<?Php echo $row["prodname"];?>" /></td>
    </tr>
  
    <tr>
      <th>Product Rate:</th>
      <td><input type="text" name="rate" id="rate"  title="Product Rate" class="text" style="width:300px;" value="<?Php echo $row["price"];?>"/></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><textarea name="description" id="description" rows="2" cols="50" title="Description" class="textarea" style="width:400px;"><?Php echo $row["descr"];?></textarea></td>
    </tr>
    <tr>
      <th>Product Image:</th>
      <td><input type="file" name="imagename" id="imagename"  title="Product Image" class="text" style="width:300px;" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSubmit" value="Submit"/>
        <input type="hidden" name="productid" value="<?php echo $row["id"];?>" /></td>
    </tr>
  </table>
</form>
<?Php require('include/footer.php');?>