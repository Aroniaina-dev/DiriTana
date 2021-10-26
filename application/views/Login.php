<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIRI_TANA</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="<?php echo base_url('assets/Login/css/bootstrap.min.css'); ?>" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="<?php echo base_url('assets/Login/fontawesome/css/all.min.css'); ?>" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="<?php echo base_url('assets/Login/css/templatemo-diagoona.css'); ?>" rel="stylesheet" /><!--TemplateMo 550 Diagoonahttps://templatemo.com/tm-550-diagoona-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
</head>
<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">SRI</h1>
                            <p class="tm-slogon">Service Regional de l'Industrie</p>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url('Login/index');?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url('Login/aboutlogin');?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url('Login/servicelogin');?>">Services</a>
                                </li>                                                        
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url('Login/connex');?>">Connexion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="<?php echo base_url('Welcome/index');?>">Return</a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Nos contacter</h2>
                        <p class="mb-85">Même avec de l'alcool. Qui est l'élite de l'avantage de la vie. Afin de ne pas manquer, la faisabilité de celui-ci est très importante, la gorge de certains arc.</p>
                        <form id="contact-form" action="<?php echo base_url('Login/seconnecter/'); ?>" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="login" class="form-control" placeholder="Nom ou numéro téléphone" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="pass" class="form-control" placeholder="Mot de passe" required="" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Valider</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2020 Manda Aroniaina. 
                    
                    | Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-text-link">Manda template</a></p>
                </footer>
            </div>   
        </div>  

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/Login/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Login/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Login/js/jquery.backstretch.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Login/js/templatemo-script.js'); ?>"></script>
</body>
</html>