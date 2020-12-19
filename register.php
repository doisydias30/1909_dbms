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
        <a class="nav-link" href="category.php">Category</a>
		</li>
		 <li class="nav-item">
        <a class="nav-link" href="viewcart.php">Cart</a>
		</li>
		
		
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
			  <img src="images/big_pic.jpg" class="img-fluid" alt="Los Angeles" width="1100" height="300">
			</div>
			<div class="carousel-item">
			  <img src="images/comp1.jpg" class="img-fluid" alt="Chicago" width="1100" height="300">
			   
			</div>
			<div class="carousel-item">
			  <img src="images/comp2.jpg" class="img-fluid" alt="New York" width="1100" height="300">
				
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
<table style="width:100%" border="10">
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
		<form action="userinfo.php" method="POST" class="needs-validation" novalidate>
		<div class="form-group">
			  <label for="fname"><h4>FullName:</h4></label>
			  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="fname" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="uname"><h4>Username:</h4></label>
			  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="form-group">
			  <label for="pwd"><h4>Password:</h4></label>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			
			<div class="form-group">
			  <label for="email"><h4>Email id:</h4></label>
			  <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="email" required>
			  <div class="valid-feedback">Valid.</div>
			  <div class="invalid-feedback">Please fill out this field.</div>
			</div>
			
			
			<div class="form-group">
			 <label for="city"><h4>City:</h4></label>
			 <select div class="form-control" data-toggle="dropdown" placeholder="City" name="city" required>City</div>
			
														
															<option>Margao
															<option>Quepem
															<option>Vasco
															<option>Panjim
															
															
														
													</select>
			</div>
		
			<button type="submit" class="btn btn-primary">Submit</button>
		  </form>


		<script>
		// Disable form submissions if there are invalid fields
		(function() {
		  'use strict';
		  window.addEventListener('load', function() {
			// Get the forms we want to add validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
			  form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
				  event.preventDefault();
				  event.stopPropagation();
				}
				form.classList.add('was-validated');
			  }, false);
			});
		  }, false);
		})();
		</script>

<div class="password-forgot">
<a href="/forgot?nextUrl=https://www.wattpad.com/home">Forgot password?</a>
</div></div>
<footer class="signup-link"><span>Don&#x27;t have an account? <button>Sign up</button></span></footer></div></div>
</div>
</main>
</div>
</div>
</table>
</div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
	</html>