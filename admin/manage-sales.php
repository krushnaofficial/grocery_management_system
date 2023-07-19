<?Php require('include/header.php');?>
      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="table_list">
        <tr>
          <th>From Date </th>
          <td><input type="text" name="fdt"  /></td>
          <th>To Date </th>
          <td><input type="text" name="tdt"  /></td>
          <td><input type="submit" name="btn" value="Search"  /></td>
          <td><a href="manage-sales-print.php" target="_blank">Print</a></td>
        </tr>

      </table>
      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="table_list">
        <tr>
          
    <th width="6%">SR No</th>
    <th width="8%">Order details ID</th>
    <th width="8%">Product ID</th>
    <th width="20%">Quantity</th>
    <th width="25%">Rate</th>
    <th width="20%">Amount</th>
   
 
          <th width="10%">View</th>
          <th width="10%">Delete</th>
        </tr>
        <?Php 
		
		$sql="SELECT * FROM orderdetails ORDER BY detailsid ASC";
		
		$result=mysql_query($sql);if(mysql_num_rows($result)!=0){$srno=0;while($row=mysql_fetch_array($result)){$srno++;?>
        <tr>
          <td><?Php echo $srno;?></td>
    <td><?Php echo $row["detailsid"];?></td>
   
    <td><?Php echo $row["productid"];?></td>
    <td><?Php echo $row["quantity"];?></td>
    <td><?Php echo $row["rate"];?></td>
    <td><?Php echo $row["amount"];?></td>
          <td><a href="view-sales.php?rid=<?Php echo $row["detailsid"];?>" title="Delete">View</a></td>
          <td><a href="delete-sales.php?rid=<?Php echo $row["detailsid"];?>" title="Delete">Delete</a></td>
        </tr>
        <?Php }}else{?>
        <tr>
          <th>No Record Found...</th>
        </tr>
        <?Php }?>
      </table>
      <?Php require('include/footer.php');?>
