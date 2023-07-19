<script type="text/javascript">

</script>
<?Php require('include/upper.php');?>
<h4 align=center>Category Report</h4>
<?php  include('../includes/config.php');?>

<table align=center border="2" cellpadding="0" cellspacing="0" width="100%" class="table_list">
  <tr>
    <th width="5%">SR No</th>
    <th width="20%">Category</th>
    
  </tr>
  <?Php $sql="SELECT * FROM categorymaster ORDER BY categoryid ASC";$result=mysql_query($sql);if(mysql_num_rows($result)!=0){$srno=0;while($row=mysql_fetch_array($result)){$srno++;?>
  <tr align="center">
    <td width="5%"><?Php echo $srno;?></td>
    <td width="10%"><?Php echo $row["categoryname"];?></td>
   
  </tr>
  <?Php }}else{?>
  <tr>
    <th>No Record Found...</th>
  </tr>
  <?Php }?>
</table>

