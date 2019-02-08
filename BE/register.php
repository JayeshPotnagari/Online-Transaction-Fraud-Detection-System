<?php
	require 'dbconfig/config.php';

?>
<!DOCTYPE HTML>
<html>
<title>Registration Page</title>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<h1>Welcome to Bubz shopping</h1>
</header><br>
<div class="login-page">
<div class="form">
<form align=center class="register-form" action="register.php" method="post">
	<input name="UserID" type="text" class="inputvalues" placeholder="Type your UserID" required/><br>
	<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/><br>
	<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password" required/><br>
	<input name="submit-btn" type="submit" id="login-btn" value="Register Yourself"/><br>
	<p class="message">Already registered? <a href="index.php">Back to login page</a></p>
</form>

<?php
if(isset($_POST['submit-btn']))
{
	//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

	$UserID = $_POST['UserID'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
			
	if($password==$cpassword)
	{
		$query= "select * from User WHERE UserID='$UserID'";		//Query for Checking whether userid already exists
		$query_run = mysqli_query($con,$query);	//mysqli_query() function is used to run the query in db and the result is stored in $query_run variable
		if(mysqli_num_rows($query_run)>0)		//this function checks if any similar result is present or not
		{
			//if there is already a user wih the same userid
			echo '<script type="text/javascript"> alert("User already exists...!! Try another UserID.") </script>';
		}
		else
		{
			$query= "insert into User values('$UserID','$password')";
			$query_run= mysqli_query($con,$query);
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("You have Registered Successfully...!!") </script>';
			}
			else
			{
				//echo '<script type="text/javascript"> alert("Error occured...!!") </script>';
				echo mysqli_error();
			}
		}
	}
	else
	{
		echo '<script type="text/javascript"> alert("Both the passwords did not match..Try again..!!") </script>';
	}
}
	
?>
</div>
</div>
</body>
</html>
