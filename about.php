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

<br /><br />
<?php include("navigation.php");?>

<br /><br /><br /><br /><br /><br />
	
	<div class="box mb0" id="about_us" >
		<div class="box-heading-1"><span>ABOUT US</span></div>
			<div class="box-content-1">
				<div class="box-product-1">
					<?php
						include("includes/mysqli_connection.php");
						
						$sql = " SELECT * FROM webcontent WHERE webpage LIKE 'about'";

						$query = mysqli_query($db_conx, $sql);
							
						$list = '';

						while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
						{
							$contentid = $row["content_id"];
							$content = $row["content"];
							$webpage = $row["webpage"];
							$list .= $content; // end list here
						}
						// Close your database connection
						mysqli_close($db_conx);

						if($row = "")
						{
							echo "<center><h2>Nothing to display</h2></center>";
						}
						else
						{
							echo "<center><h2>".$list."</h2></center>";
						}
					?>
				</div>
			</div>
		</div>
<br /><br /><br />
<br /><br /><br />
	<?php include("footer.php");?>
</div>

</body>
</html>