<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  <title>DIRI_TANA</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/info/favicon.ico'); ?>" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/css/themify-icons.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/css/bootstrap.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/vendor/animate/animate.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/vendor/owl-carousel/owl.carousel.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/vendor/perfect-scrollbar/css/perfect-scrollbar.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/vendor/nice-select/css/nice-select.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/vendor/fancybox/css/jquery.fancybox.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/css/virtual.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/info/css/topbar.virtual.css'); ?>">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    <div class="set-menu">
      <p>Select Color</p>
      <div class="color-bar" data-toggle="selected">
        <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
        <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
        <span class="color-item bg-theme-green" data-class="theme-green"></span>
        <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
        <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
      </div>
      <select class="custom-select d-block my-2" id="change-page">
        <option value="">Choose Page</option>
        <option value="index">Topbar</option>
        <option value="blog-topbar">Blog (Topbar)</option>
        <option value="index-2">Minibar</option>
        <option value="blog-minibar">Blog (Minibar)</option>
      </select>
    </div>
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(<?php echo base_url('assets/info/img/bg_image_1.jpg'); ?>)">
    <!-- Navbar -->
    <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
      <div class="container">
        <a href="" class="navbar-brand">V-Folio</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="<?php echo base_url('Welcome/index'); ?>" class="nav-link" data-animate="scrolling">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Login/index'); ?>" class="nav-link" data-animate="scrolling">Connexion</a>
            </li>
          </ul>
          <ul class="nav ml-auto">
            <li class="nav-item">
              <button class="btn btn-fab btn-theme no-shadow">En</button>
            </li>
          </ul>
        </div>
      </div>
    </div> <!-- End Navbar -->
    <!-- Caption header -->
    <div class="caption-header text-center wow zoomInDown">
      <h5 class="fw-normal">Welcome to</h5>
      <h1 class="fw-light mb-4"> <b class="fg-theme">SRI</b> (DIRI_TANA)</h1>
      <div class="badge">Service Régional de l'Industrie</div>
    </div> <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
  <div class="vg-page page-about" id="about">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="img-place wow fadeInUp">
            <img src="<?php echo base_url('assets/info/img/person.jpg'); ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight">
          <h1 class="fw-light"><?php echo $coop['nomCooperative']; ?></h1>
          <ul class="theme-list">
            <li><b>N° Certificat d'enregistrement:</b> <?php echo $coop['CE']; ?></li>
            <li><b>Date de création:</b> <?php echo $coop['DC']; ?></li>
            <li><b>Date d'enregistrement:</b> <?php echo $coop['DE']; ?></li>
            <li><b>Nom du président:</b> <?php echo $coop['nomPresident']; ?></li>
            <li><b>Nombres des membres:</b> <?php echo $coop['membre']; ?></li>
            <li><b>Homme(s):</b> <?php echo $coop['homme']; ?></li>
            <li><b>Femme(s):</b> <?php echo $coop['femme']; ?></li>
            <li><b>Contact:</b> <?php echo $coop['contact']; ?></li>
            <li><b>Branche:</b> <?php echo $coop['branche']; ?></li>
            <li><b>Activité(s) principale(s):</b> <?php echo $coop['filiere']; ?></li>
            <li><b>Siège sociale:</b> <?php echo $coop['addrescooperative']; ?></li>
            <li><b>Province:</b> <?php echo $coop['province']; ?></li>
            <li><b>Région:</b> <?php echo $coop['region']; ?></li>
            <li><b>District:</b> <?php echo $coop['distric']; ?></li>
            <li><b>Commune:</b> <?php echo $coop['commune']; ?></li>
            <li><b>Fokontany:</b> <?php echo $coop['fokotany']; ?></li>
          </ul>
          <button class="btn btn-theme-outline">Read More</button>
        </div>
      </div>
    </div>
    
  
  <div class="vg-page page-service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Service</div>
      </div>
      <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
      <div class="row mt-5">
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-paint-bucket"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-search"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">SEO</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-vector"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">UI/UX Design</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card card-service wow fadeInUp">
            <div class="icon">
              <span class="ti-desktop"></span>
            </div>
            <div class="caption">
              <h4 class="fg-theme">Web Development</h4>
              <p>There are many variations of passages of Lorem Ipsum available</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="vg-page page-funfact" style="background-image: url(<?php echo base_url('assets/info/img/bg_banner.jpg'); ?>);">
    <div class="container">
      <div class="row section-counter">
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="768">768</h1>
          <span>Clients</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="230">230</h1>
          <span>Project Compleate</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="97">97</h1>
          <span>Project Ongoing</span>
        </div>
        <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
          <h1 class="number" data-number="699">699</h1>
          <span>Client Satisfaction</span>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Portfolio page -->
   <!-- End Portfolio page -->
  
  <!-- Testimonial -->
  <div class="vg-page page-testimonial">
    <div class="container">
      <h1 class="text-center fw-normal wow fadeInUp">What Clients are Saying</h1>
      <div class="row justify-content-center mt-5 wow fadeInUp">
        <div class="col-md-9">
          <div class="owl-carousel testi-carousel">
            <div class="item">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-place">
                    <img src="<?php echo base_url('assets/info/img/testimonials/testimonials_1.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caption">
                    <div class="testi-content">There are many variations of passages of Lorem Ipsum available, but the majority have suffered</div>
                    <div class="testi-info">
                      <div class="thumb-profile">
                        <img src="<?php echo base_url('assets/info/img/testimonials/testimonials_1.jpg'); ?>" alt="">
                      </div>
                      <div class="tagline">
                        <h5 class="mb-0">Satria Nugraha</h5>
                        <span class="text-muted">CEO Nutshell</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-place">
                    <img src="<?php echo base_url('assets/info/img/testimonials/testimonials_2.jpg'); ?>" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caption">
                    <div class="testi-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe natus expedita ab facilis ut, animi explicabo amet. Voluptatibus possimus iste enim, doloremque, fugiat accusamus nisi optio fugit ratione expedita harum?</div>
                    <div class="testi-info">
                      <div class="thumb-profile">
                        <img src="<?php echo base_url('assets/info/img/testimonials/testimonials_2.jpg'); ?>" alt="">
                      </div>
                      <div class="tagline">
                        <h5 class="mb-0">Selena Arrini</h5>
                        <span class="text-muted">CEO BigTree</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End testimonial -->
  
  <!-- Client -->
  
  <!-- Contact -->
  <div class="vg-page page-contact" id="contact">
    <div class="container-fluid">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Contact</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
      <div class="row py-5">
        <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
          <div class="vg-maps">
            <div id="google-maps" style="width: 100%; height: 100%;"></div>
          </div>
        </div>
        <div class="col-lg-5">
          <form class="vg-contact-form">
            <div class="form-row">
              <div class="col-12 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Name" placeholder="Your Name">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Email" placeholder="Email Address">
              </div>
              <div class="col-6 mt-3 wow fadeInUp">
                <input class="form-control" type="text" name="Subject" placeholder="Subject">
              </div>
              <div class="col-12 mt-3 wow fadeInUp">
                <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- End Contact -->
  
  <!-- Footer -->
  <div class="vg-footer">
    <h1 class="text-center">Virtual Folio</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 py-3">
          <div class="footer-info">
            <p>Where to find me</p>
            <hr class="divider">
            <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Follow me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 py-3">
          <div class="float-lg-right">
            <p>Contact me</p>
            <hr class="divider">
            <ul class="list-unstyled">
              <li>info@virtual.com</li>
              <li>+8890234</li>
              <li>+813023</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-12 mb-3">
          <h3 class="fw-normal text-center">Subscribe</h3>
        </div>
        <div class="col-lg-6">
          <form class="mb-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email address">
              <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
            </div>
          </form>
        </div>
        <div class="col-12">
          <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode ID</a></p>
        </div>
      </div>
    </div>
  </div> <!-- End footer -->
  
  
  <script src="<?php echo base_url('assets/info/js/jquery-3.5.1.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/js/bootstrap.bundle.min.js>'); ?>"></script>   
  <script src="<?php echo base_url('assets/info/vendor/owl-carousel/owl.carousel.min.js'); ?>"></script>   
  <script src="<?php echo base_url('assets/info/vendor/perfect-scrollbar/js/perfect-scrollbar.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/vendor/isotope/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/vendor/nice-select/js/jquery.nice-select.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/vendor/fancybox/js/jquery.fancybox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/vendor/wow/wow.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/vendor/animateNumber/jquery.animateNumber.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/vendor/waypoints/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/js/google-maps.js'); ?>"></script>
  <script src="<?php echo base_url('assets/info/js/topbar-virtual.js'); ?>"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>