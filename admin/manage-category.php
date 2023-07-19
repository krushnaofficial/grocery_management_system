<?Php require('include/header.php');?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="table_list">
        <tr>
          <th>From Date </th>
          <td><input type="text" name="fdt"  /></td>
          <th>To Date </th>
          <td><input type="text" name="tdt"  /></td>
          <td><input type="submit" name="btn" value="Search"  /></td>
          <td><a href="manage-category-print.php" target="_blank">Print</a></td>
        </tr>

      </table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="table_list">
  <tr>
    <th width="5%">SR No</th>
    <th width="80%">Category</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
  <?Php $sql="SELECT * FROM categorymaster ORDER BY categoryid ASC";$result=mysql_query($sql);if(mysql_num_rows($result)!=0){$srno=0;while($row=mysql_fetch_array($result)){$srno++;?>
  <tr>
    <td><?Php echo $srno;?></td>
    <td><?Php echo $row["categoryname"];?></td>
    <td><a href="edit-category.php?rid=<?Php echo $row["categoryid"];?>" title="Edit">Edit</a></td>
    <td><a href="delete-category.php?rid=<?Php echo $row["categoryid"];?>" title="Delete">Delete</a></td>
  </tr>
  <?Php }}else{?>
  <tr>
    <th>No Record Found...</th>
  </tr>
  <?Php }?>
</table>
<?Php require('include/footer.php');?>
