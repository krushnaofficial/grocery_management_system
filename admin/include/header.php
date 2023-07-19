<?Php session_start(); include('../includes/config.php');if(!isset($_SESSION["UID"]) && $_SESSION["UID"]==""){header('location:index.php');}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
  <td colspan="2"><img src="images/head.jpg" width="100%" height="80px" />
    <div class="welcome-text"></div>
    <a href="logout.php" class="btn-logout">Logout</a></td>
</tr>
<tr>
  <td style="border-left:1px solid #cbcbcb;width:10%;vertical-align:top;"><div id="main-nav">
      <div class="main-image"><a href="welcome.php"><img src="images/admin.jpg" width="120" height="120"></a></div>
      <div class="main-head">Welcome Admin</div>
      <div class="main-mid" id="accordion">
        <h3><a href="#">Category</a></h3>
        <div>
          <ul>
            <li><a href="add-category.php"><span>Add Category</span></a></li>
            <li><a href="manage-category.php"><span>Modify Category</span></a></li>
          </ul>
        </div>
        <h3><a href="#">Product</a></h3>
        <div>
          <ul>
            <li><a href="add-product.php"><span>Add Product</span></a></li>
            <li><a href="manage-product.php"><span>Modify Product</span></a></li>
          </ul>
        </div>

        
        
        <h3><a href="#">Reports</a></h3>
        <div>
          <ul>
            <li><a href="manage-category-print.php"><span>Categorywise Report</span></a></li>
            <li><a href="manage-product-print.php"><span>Product Report</span></a></li>
            <li><a href="manage-sales-print.php"><span>Daily Report</span></a></li>

          </ul>
        </div>


      </div>
    </div></td>
  <td  style="border-left:1px solid #cbcbcb;vertical-align:top;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="table_head">
      <tr>
        <th width="40%" align="left">&nbsp;</th>
        <th width="60%" align="left" id="response"></th>
        <th width="10%" align="right" valign="middle" class="action"> </th>
      </tr>
    </table>
