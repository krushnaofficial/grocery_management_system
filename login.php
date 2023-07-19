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

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>

<body>

<form id="ajaxform" method="post" action="processlogin.php">

<div id="login_center_main" style="text-align:center">
	
	<div id="inputDivLogin">
   
    	<div id="LoginLabel"><b>Username : </b><input type="text" name="txtusername" class="Logintextboxes"/></div>
        
    </div>
	<br />
    <div id="inputDivLogin">
    	<div id="LoginLabel"><b>Password : </b><input type="password" name="txtpassword" class="Logintextboxes"/></div>
    </div>
	<br />
    <div id="inputDivLoginControl">
    	<div>
        	<input id="btnSignin" class="LoginButton" type="submit" value="Sign in" />
            <input class="LoginButton" id="btnClear" type="reset" value="Clear" />
 
	</div>
	</div>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br />
</form>

</body>
</html>

<?php include("footer.php"); ?>