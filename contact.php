
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
<table style="width:100%">
<div class="col-sm-6 col-md-5 login-page-form-header">
<main id="authentication-panel" class="panel panel-transparent">
<div class="login-modal-wrapper">
					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Contact us</h1>
									
									<div class="entry" >
									
										<form action="contact_valid.php" method="POST">
												

											<br>Name :<br>
												<input type='text' name='con_nm' size=35>
												<br><br><br>
												
												E-mail ID:<br>
												<input type='text' name='con_email' size=35>
												<br><br><br>
												
												Query:<br>
												<textarea cols="40" rows="10" name='con_query' ></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   OK   '  >

												
										</form>
									
									</div>
									
								</div>
								
							</div>	
</div>			
</div>
</div>
</body>
</html>
