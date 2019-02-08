<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>
<html>
<title>Bubz Shopping</title>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<h1>Welcome to Bubz shopping</h1>
</header><br>
<div class="login-page">
<div class="form">
<form align=center class="login-form" action="index.php" method="post">
	<input name= "UserID" type="text" class="inputvalues" placeholder="Type your UserID" required/><br>
	<input name="password" type="password" class="inputvalues" placeholder="Enter your Password" required/><br>
	<input name="login-btn" type="submit" id="login-btn" value="LOGIN"/><br>
	<p class="message">Not registered? <a href="register.php">Create an account</a></p>
	
</form>
<?php
	if(isset($_POST['login-btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

		$UserID = $_POST['UserID'];
		$password = $_POST['password'];
		$query= "select * from User WHERE UserID='$UserID' AND Password='$password'";
		$query_run = mysqli_query($con,$query);
		if(mysqli_num_rows($query_run)>0)
		{
			echo '<script type="text/javascript"> alert("Logged-in Successfully...!!") </script>';
			$_SESSION['UserID']=$UserID;
			header('location:homepage.php');		
		}
		else
		{
			echo '<script type="text/javascript"> alert("Incorrect UserID or Password..!! Try again") </script>';			
		}
	}
?>
</div>
</div>
</body>
</html>
