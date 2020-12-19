<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{
	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment.php");
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@700&display=swap" rel="stylesheet">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("bi/1.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BooksDeal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav sl-auto">
  <li class="nav-item">
		 <a class="nav-link" href="aboutus.php">About</a>
		 </li>
		 <li class="nav-item">
		  <a class="nav-link" href="contact.php">Contact</a>
		</li></ul>
    <ul class="navbar-nav ml-auto">
	
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log in</a>
		</li>
		<li class="nav-item">
        <a class="nav-link" href="register.php">Sign up</a>
		</li>
		 <li class="nav-item">
        <a class="nav-link" href="category.php">Category</a>
		</li>
		 <li class="nav-item">
        <a class="nav-link" href="viewcart.php">Cart</a>
	
		
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Languages
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">English</a>
          <a class="dropdown-item" href="#">French</a>
		   <a class="dropdown-item" href="#">Spanish</a>
		    <a class="dropdown-item" href="#">Portuguese</a>
			 <a class="dropdown-item" href="#">Italian</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<br><br>
	

	<div class="container">
<div class="row">
<div class="col-sm-6 col-md-7 center-text">

	<div id="demo" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="bi/storm2.jpg" class="img-fluid" alt="Los Angeles" width="1100" height="300">
			</div>
			<div class="carousel-item">
			  <img src="bi/storm1.jpg" class="img-fluid" alt="Chicago" width="1100" height="300">
			   
			</div>
			<div class="carousel-item">
			  <img src="bi/har.jpg" class="img-fluid" alt="New York" width="1100" height="300">
				
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		 </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>
		</div>

</div>	
				
			<!-- end header -->
			<!------------------------------->
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
		
      <div  class="form">
    		<form id="contactform" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
                
                <p class="contact"><label for="username">Postal Code</label></p> 
    			<input id="pc" name="pc" placeholder="201001" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="delhi"> 
                <p class="contact"><label for="state">State</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder="delhi"> 
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>