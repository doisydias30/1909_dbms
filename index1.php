<!DOCTYPE html>
<html>
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
        <a class="nav-link" href="booklist.php">Category</a>
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

				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					 <button class="btn btn-outline-success my-2 my-sm-0" id="x" value="Search" type="submit">Search</button>
					</fieldset>
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


<table style="width:100%">
<div class="col-sm-6 col-md-5 login-page-form-header">
<main id="authentication-panel" class="panel panel-transparent">
<div class="login-modal-wrapper">
<div class="component-wrapper" id=component-loginform-login-form-/login>
<div id="authentication-panel" class="login-form">
<p><h3>Log in to BooksDeal</h3></p>
<div class="panel-body">
<div class="signin-buttons">
<button class="btn btn-facebook btn-block " autofocus="left">
<span class="fa fa-facebook-official fa-wp-neutral-5" aria-hidden="true" style="font-size:24px"></span>
<main id="authentication-panel" class="panel panel-transparent">
<div class="w-50 m-r">

<li id="login">			
<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '<form action="validation.php" method="POST" class="needs-validation" novalidate>
									<div class="form-group">
									  <label for="uname"><h4>Username:</h4></label>
									  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<div class="form-group">
									  <label for="pwd"><h4>Password:<h4></label>
									  <input type="password" class="form-control" id="x" placeholder="Enter password" name="pswd" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<div class="form-group form-check">
									  <label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="remember"> remember me.
										
									  </label>
									</div>
									<button type="submit" class="btn btn-primary">Submit</button>
								  </form>';
							}
?>
</li>
<footer class="signup-link"><span>Don&#x27;t have an account? <button><a href="register.php">Sign up</a></button></span></footer></div>

</main>
</div>
</div>
</table>
</div>
</div>
<section class="my-5"> 
<div  class="py-5">
<h1 class="text-center">best Sellers</h1>
	</div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-lg-3 col-md-3 col-12">
	<div class="card">
  <img class="card-img-top" src="bi/storm1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Storm and Silence</h4>
    <p class="card-text">Volume 1 of the series.</p>
    <a href="view.php" class="btn btn-primary">View</a>
  </div>
</div>
	</div>
	<div class="col-lg-3 col-md-3 col-12">
	<div class="card">
  <img class="card-img-top" src="bi/in.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">The Tiger at Midnight</h4>
    <p class="card-text">(The Tiger at Midnight Trilogy #1.</p>
    <a href="view.php" class="btn btn-primary">View</a>
  </div>
</div>
	</div>
	<div class="col-lg-3 col-md-3 col-12">
	<div class="card">
  <img class="card-img-top" src="bi/mist.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Into the Mist</h4>
    <p class="card-text">It is a prequel to the first book in The Land of Elyon series.</p>
    <a href="view.php" class="btn btn-primary">View</a>
  </div>
</div>
	</div>
	<div class="col-lg-3 col-md-3 col-12">
	<div class="card">
  <img class="card-img-top" src="bi/har.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Harry Porter</h4>
    <p class="card-text">The first novel in the Harry Potter series </p>
    <a href="view.php" class="btn btn-primary">View</a>
  </div>
</div>
	</div>
		</div>
		</div>
</section>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
	</html>