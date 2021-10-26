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
	<section class="ftco-section" style="margin-top: -100px;">
	<div class="row justify-content-center">
		    <nav class="navbar navbar-expand-lg" id="tm-main-nav" style="margin-left : 200px;">
				<div class="collapse navbar-collapse tm-nav" id="navbar-nav">
					<ul class="navbar-nav text-uppercase">
                      <li class="active" style="margin-left : 10px"> <a href="<?php echo base_url('Login/retour'); ?>"> Home</a> </li>
                      <li style="margin-left : 10px"> <a href="<?php echo base_url('Login/Cooperative/index'); ?>">Cooperative</a> </li>
                      <li style="margin-left : 10px"> <a href="<?php echo base_url('Login/emplRehetra'); ?>">Employées</a> </li>
                      <li style="margin-left : 10px"> <a href="<?php echo base_url('Login/insertCoop'); ?>">Insérer Coopérative</a> </li>
                      <li style="margin-left : 10px"> <a href="<?php echo base_url('Login/insertEmpl'); ?>">Insérer Employée</a> </li>
					  <li style="margin-left : 10px"> <a href="<?php echo base_url('Login/Dissoute'); ?>">Dissoute</a> </li>
                      <li style="margin-left : 10px"> <a href="<?php echo base_url('Login/DissouteEmpl'); ?>">Anciens employées</a> </li>
                     <li style="margin-left : 10px"> <a href="<?php echo base_url('Welcome/index'); ?>"><img src="<?php echo base_url('assets/Admin/icon/icon_b.png'); ?>" alt="#" /></a></li>
					</ul>              
            	</div>
			</nav>
			
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	        <h3 class="mb-4 text-center">Insérer nouveau coopérative</h3>
		      	        <form action=<?php echo base_url('Login/ajouterCoop/'); ?> class="signin-form" method="POST">
						  	<div class="form-row">
								<div class="col-4 mt-3 wow fadeInUp">
									<input type="text" name="nomCooperative" class="form-control" placeholder="Nom du Coopérative" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="ce" type="text" class="form-control" placeholder="Certificat d'enregistrement" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input type="text" name="dc" class="form-control" placeholder="Date de création" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="de" type="text" class="form-control" placeholder="Date d'enregistrement" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input type="text" name="mandat" class="form-control" placeholder="Mandat" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="dateAJour" type="text" class="form-control" placeholder="Date à jour" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input type="text" name="nomPresident" class="form-control" placeholder="Nom du président" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="membre" type="text" class="form-control" placeholder="Membres" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input type="text" name="homme" class="form-control" placeholder="homme(s)" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="femme" type="text" class="form-control" placeholder="Femme(s)" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="contact" type="text" class="form-control" placeholder="Contact" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="branche" type="text" class="form-control" placeholder="Branche" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="filiere" type="text" class="form-control" placeholder="Filière" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="addrescooperative" type="text" class="form-control" placeholder="Addresse" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="fokotany" type="text" class="form-control" placeholder="Fokotany" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="commune" type="text" class="form-control" placeholder="Commune" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="distric" type="text" class="form-control" placeholder="Distric" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="province" type="text" class="form-control" placeholder="Province" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="region" type="text" class="form-control" placeholder="Région" required="">
								</div>
								<div class="col-4 mt-3 wow fadeInUp">
									<input id="text-field" name="date2018" type="text" class="form-control" placeholder="En 2018" required="">
								</div>
								<div class="col-12 mt-3 wow fadeInUp">
									<button type="submit" class="form-control btn btn-primary submit px-3">Insérer</button>
								</div>
							</div>
				        </form>
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

