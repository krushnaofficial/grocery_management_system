<?php
	session_start();

	if (isset($_SESSION['username'])) 
	{ 	
		$User = $_SESSION['username']; 
	}
	else 
	{
		$User = ""; 
	}

	include("head1.html");
?>
<br /><br />

<div id="wrapper">
<?php
	include("header.php");
	include("section.html"); 	
?>

<?php include("navigation.php");?>

<div class="box-product-1" >
<?php
	include("products.php");
?>

</div>

<?php include("footer.php");?>

</div>

</body>
</html>