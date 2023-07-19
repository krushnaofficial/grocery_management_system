<script type="text/javascript">


</script>
  <?Php require('include/upper.php');?>
<h3 align=center>Product Report</h3>
<?php  include('../includes/config.php');?>

      <table border="2" cellpadding="0" cellspacing="0" width="100%" class="table_list">
        <tr align="center">
          <th width="5%">SR No</th>
         
          	<th width="10%">Product Name</th>
          	<th width="10%">Product Category</th>
          	<th width="35%">Description</th>
	<th width="10%">Product Rate</th>
          
        </tr>
        <?Php $sql="SELECT prodname,categoryname,descr,price FROM products inner join categorymaster on products.category=categorymaster.categoryid ORDER BY id ASC";$result=mysql_query($sql);if(mysql_num_rows($result)!=0){$srno=0;while($row=mysql_fetch_array($result)){$srno++;?>
        <tr>
          	<td align="center"><?Php echo $srno;?></td>
         
          	<td><?Php echo $row["prodname"];?></td>
	<td align="center"><?Php echo $row["categoryname"];?></td>
	<td><?Php echo $row["descr"];?></td>
          	<td align="right"><?Php echo $row["price"];?></td>
          
          
        </tr>
        <?Php }}else{?>
        <tr>
          <th>No Record Found...</th>
        </tr>
        <?Php }?>
      </table>

