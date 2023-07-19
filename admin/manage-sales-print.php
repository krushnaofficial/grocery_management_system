<script type="text/javascript">


</script>
<?Php require('include/upper.php');?>
<h3 align=center>Daily Sales Report</h3>
<?php  include('../includes/config.php');?>


<table border="1" cellpadding="0" cellspacing="0" width="100%" class="table_list">
  <tr>
    <th width="6%">SR No</th>
    <th width="40%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="10%">Rate</th>
    <th width="20%">Amount</th>
   
  </tr>
  <?Php $sql="SELECT prodname,qty,price,price*qty as amount FROM cart inner join products on cart.product_id=products.id";$result=mysql_query($sql);if(mysql_num_rows($result)!=0){$srno=0;while($row=mysql_fetch_array($result)){$srno++;?>
  <tr align="center">
    <td><?Php echo $srno;?></td>
    <td align="left"><?Php echo $row["prodname"];?></td>
    <td align="right"><?Php echo $row["qty"];?></td>
    <td align="right"><?Php echo $row["price"];?></td>
    <td align="right"><?Php echo $row["amount"];?></td>
  </tr>
  <?Php }}else{?>
  <tr>
    <th>No Record Found...</th>
  </tr>
  <?Php }?>
</table>
