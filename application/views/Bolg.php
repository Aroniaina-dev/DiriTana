<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>DIRI_TANA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="<?php echo base_url('assets/img/favicon.ico'); ?>" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/lib/animate/animate.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    </head>

    <body class="page">
    <h1></h1>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>8:00 - 16:00</h2>
                                <p>Lun - ven</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+261 34 94 960 13</h2>
                                <p>Heure de travail</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">SRI</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="<?php echo base_url('Welcome/index');?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo base_url('About/index');?>" class="nav-item nav-link">About</a>
                        <a href="<?php echo base_url('Welcome/service');?>" class="nav-item nav-link">Service</a>
                        <a href="<?php echo base_url('Welcome/feature');?>" class="nav-item nav-link">Feature</a>
                        <a href="<?php echo base_url('Welcome/review');?>" class="nav-item nav-link">Review</a>
                        <a href="<?php echo('Contact/index');?>" class="nav-item nav-link">Contact</a>
                        <a href="<?php echo base_url('Login/index');?>" class="nav-item nav-link">Connexion</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header">
                    <p>Blogue de consultation</p>
                    <h2>Dernières nouvelles de notre blog de consultation</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/blog-1.jpg');?>" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Notre équipe</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Category</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>14-Sept-2021</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Nous sommes toujours disponibles et notre travail est satisfesable.
                                </p>
                                <a class="btn" href="">PLus d'information</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/blog-2.jpg');?>" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Notre agent</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Category</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>14-Sept-2021</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Nos agents sont toujours à votre service dans n'importe quel moment vous avez besoin de nous.
                                </p>
                                <a class="btn" href="">Plus d'information</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php echo base_url('assets/img/blog-3.jpg');?>" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Notre service</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Category</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>14-Sept-2021</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Notre service est disponible du lundi au vendredi, du matin au soire même dans les jours fériers.
                                </p>
                                <a class="btn" href="">PLus d'information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Notre lieu de travail</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Antananarivo Tsaralalana</p>
                                    <p><i class="fa fa-phone-alt"></i>+261 34 94 960 13</p>
                                    <p><i class="fa fa-envelope"></i>diritana@gmail.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Liens rapides</h2>
                                    <a href="">Conditions d'utilisation</a>
                                    <a href="">Politique de confidentialité</a>
                                    <a href="">Fonctionnalité</a>
                                    <a href="">Aide</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Nouvelle lettre</h2>
                            <p>
                                Envoyer nous vos suggestiuons
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Lien de votre Email">
                                <button class="btn">Valider</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">DIRI_TANA</a>, Tous droits réservés.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">Manda Aroniaina</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
        
        <!-- Contact Javascript File -->
        <script src="<?php echo base_url('assets/mail/jqBootstrapValidation.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/mail/contact.js'); ?>"></script>

        <!-- Template Javascript -->
        <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    </body>
</html>