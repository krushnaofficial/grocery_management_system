<?Php require('include/header.php');?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="table_list">
        <tr>
          <th>From Date </th>
          <td><input type="text" name="fdt"  /></td>
          <th>To Date </th>
          <td><input type="text" name="tdt"  /></td>
          <td><input type="submit" name="btn" value="Search"  /></td>
          <td><a href="manage-product-print.php" target="_blank">Print</a></td>
        </tr>

      </table>
      <table border="0" cellpadding="0" cellspacing="0" width="100%" class="table_list">
        <tr>
          <th width="5%">SR No</th>
          <th width="5%">Image</th>
          <th width="15%">Product Name</th>
          <th width="10%">Product Rate</th>
          <th width="45%">Description</th>
          <th width="10%">Edit</th>
          <th width="10%">Delete</th>
        </tr>
        <?Php $sql="SELECT * FROM products ORDER BY id ASC";$result=mysql_query($sql);if(mysql_num_rows($result)!=0){$srno=0;while($row=mysql_fetch_array($result)){$srno++;?>
        <tr>
          <td><?Php echo $srno;?></td>
          <td><img src="../Photos/<?Php echo $row["path"];?>" height="62" width="62" /></td>
          <td><?Php echo $row["prodname"];?></td>
          <td><?Php echo $row["price"];?></td>
          <td><?Php echo $row["descr"];?></td>
          <td><a href="edit-product.php?rid=<?Php echo $row["id"];?>" title="Edit">Edit</a></td>
          <td><a href="delete-product.php?rid=<?Php echo $row["id"];?>" title="Delete">Delete</a></td>
        </tr>
        <?Php }}else{?>
        <tr>
          <th>No Record Found...</th>
        </tr>
        <?Php }?>
      </table>
      <?Php require('include/footer.php');?>
