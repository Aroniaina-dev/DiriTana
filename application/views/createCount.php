<!doctype html>
<html lang="en">
  <head>
  	<title>DIRI_TANA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/Login/css/style.css'); ?>">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url('assets/Login/images/bg.jpg'); ?>);">
	<section class="ftco-section">
		<div class="container">
		<nav class="navbar navbar-expand-lg" id="tm-main-nav" style="margin-left : 900px;">
			<div class="collapse navbar-collapse tm-nav" id="navbar-nav">
				<ul class="navbar-nav text-uppercase">
					<li class="nav-item active" style="margin-left : 20px;">
						<a href="<?php echo base_url('Welcome/index');?>">Home</a>	
					</li>                                                    
					<li class="nav-item active" style="margin-left : 20px;">
						<a href="<?php echo base_url('Login/index');?>#work">Connexion</a>
					</li>
					<li class="nav-item" style="margin-left : 20px; margin-top : -2%;">
						<a class="nav-link tm-nav-link" href="<?php echo base_url('Welcome/index');?>">Return</a>
					</li>
				</ul>                            
			</div>
		</nav>
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">DIRI_TANA</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action=<?php echo base_url('Login/register/'); ?> class="signin-form" method="POST">
                    <div class="form-group">
		      			<input type="text" name="nom" class="form-control" placeholder="Name" required="">
		      		</div>
                    <div class="form-group">
		      			<input type="text" name="num" class="form-control" placeholder="Number" required="">
		      		</div>
					<div class="form-group">
						<input id="password-field" name="pass" type="password" class="form-control" placeholder="Password" required="">
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
					<div class="form-group">
						<button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
					</div>
				</form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url('assets/Login/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Login/js/popper.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Login/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/Login/js/main.js'); ?>"></script>

	</body>
</html>

