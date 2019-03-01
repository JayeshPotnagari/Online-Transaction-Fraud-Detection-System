<?php
	session_start();
	require 'dbconfig/config.php';
if(!$_SESSION['UserID'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<!DOCTYPE HTML>
<html>
<title>Shopping Site</title>
<head>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
	<h1>Welcome to Bubz shopping</h1>
</header>

<h6 align="right"><a href="logout.php" class="btn btn-danger" role="button">Logout</a> </h6> 
<strong> <?php echo $_SESSION['UserID']?>, here are your offers</strong>
<center>
	<marquee behavior="alternate" scrollamount="20"><h1 class="bg-primary">Best Offers...!!</h1></marquee>
	
	<div class="container">
	 
	<div class="row">
 		 <div class="col-sm-6">
			<img src="images/oneplus.jpg" height=400px width=500px><br><br>
		</div>
			 
 		 <div class="col-sm-6">
		<div class="jumbotron">
		<b> <h2>OnePlus 6T (Mirror Black, 6GB RAM, 128GB Storage) </h2></b>
		 <br> <b>Price:</b><h3 style="color:#e74c3c;">37,999.00</h3>
		 <!--<button type="button" class="btn btn-warning">Buy Now</button>-->
		<a href="details.php" class="btn btn-info btn-lg" role="button">Buy Now</a>
		</div>
	</div>		
	</div> 
</center>
</body>
</html>	

