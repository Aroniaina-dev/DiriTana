<?php
    for ($i=0; $i < count($sary); $i++){
        $testeImage[$i] = "assets/SaryInfo/".$sary[$i]['prenomEmployee'].".jpg";
    }
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIRI_TANA</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>" type="image/x-icon">
        
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/Office/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/Office/css/style.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/Office/css/flexslider.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/Office/icons/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/Office/icons/css/simple-line-icons.css'); ?>" rel="stylesheet" type="text/css">
       
        <!--revolution slider setting css-->
        <link href="<?php echo base_url('assets/Office/rs-plugin/css/settings.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/Office/css/prettyPhoto.css'); ?>" rel="stylesheet" type="text/css" />
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">
       <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-fixed-top before-color" style="height : 100px">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand alo" href="#home">SRI</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="<?php echo base_url('Welcome/Post'); ?>">Blog Post</a></li>                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url('Welcome/Typographie');?>">Typography</a></li> 
                            </ul>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="<?php echo base_url('Login/index');?>#work">Connexion</a></li>
                        <li><img src="<?php echo base_url('assets/Photo/imagesGi2.png'); ?>" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" style="margin-top: -10px; margin-left: 150px"></li>
                        <form class="form-inline my-2 my-lg-0" style = "margin-left: 300px " action="<?php echo base_url('Welcome/RechercheFronts'); ?>" method="POST">
                            <input class="form-control mr-sm-2" type="search" name="mot" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            <select class="custom-select custom-select-lg mb-3" name ="type" style = "width: 100px; height : 30px; border-radius : 10px">
                                <option selected>All type</option>
                                <option value="Employee">Employée</option>
                                <option value="Cooperative">Cooperative<option>
                            </select>
                        </form>
                    </ul>    
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>


        <div class="fullwidthbanner" id="home">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" style="margin-top: 20px">
                        <img src="<?php echo base_url('assets/SaryGroupe/IMG_20211011_135525_582.jpg'); ?>" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut" style="color: red;">
                            welcome to <span>SRI</span>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on" style="color: green">
                            <h1 class="display-4">Service Regional de l'Industrie</h1>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">See more</a>
                        </div>
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url('assets/SaryGroupe/IMG_20211011_135750_282.jpg'); ?>" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut" style="color: red;">
                            <h1 class="display-1">Service Régional <span>de l'Industrie</span></h1>
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on" style="color: green;">
                            <h1 class="display-3">Service Regional de l'Industrie</h1>
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">See more</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 3 -->
                </ul>
            </div>
        </div>
        <!--full width banner-->
               
        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Service <span class="alo">for the state</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                we are a creative agency located in <span class="colored-text">Madagascar.</span> We are localed to the MADAGASCAR town who is Antananarivo.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- title row end-->

                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-lightbulb-outline front-icon"></i>
                                <i class="ion-ios-lightbulb-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Our Service</h3>                         
                                <p>
                                    Our job is to make a mission for every cooperative in Madagascar (Anamalamanga)
                                </p>
                            </div>
                        </div>
                        <!--features icon wrap-->
                    </div>
                    <!--features col-->

                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-gear-outline front-icon"></i>
                                <i class="ion-ios-gear-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Our support</h3>                         
                                <p>
                                    We are financy by the Madagascar State for all projects.
                                </p>
                            </div>
                        </div>
                        <!--features icon wrap-->
                    </div>
                    <!--features col-->
                </div>
                <!--row-->

                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-iphone front-icon"></i>
                                <i class="ion-iphone back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Fully Responsive</h3>                         
                                <p>
                                    You can contact us with phone or tablette or computer. More information on contact.
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-people-outline front-icon"></i>
                                <i class="ion-ios-people-outline back-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Dedicated Team</h3>                         
                                <p>
                                    We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears. The mass of the ferry.
                                </p>
                            </div>
                        </div>
                        <!--features icon wrap-->
                    </div>
                    <!--features col-->
                </div>
                <!--row-->
            </div>
            <!--container-->      
        </section>
        <!--about section end-->

        <div class="funfacts parallax-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>654</h2>                          
                            <h5>Cooperatives</h5>
                            <span class="border-line"></span>
                        </div>
                    </div>
                    <!--fact cols-->
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2><?php echo $nbr['nbr']; ?></h2>                          
                            <h5>Employees</h5>
                            <span class="border-line"></span>
                        </div>
                    </div>
                    <!--fact cols-->
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>15</h2>                          
                            <h5>Partenaires </h5>
                            <span class="border-line"></span>
                        </div>
                    </div>
                    <!--fact cols-->
                    <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>23</h2>                          
                            <h5>Regions</h5>
                            <span class="border-line"></span>
                        </div>
                    </div>
                    <!--fact cols-->
                </div>
            </div>
        </div>

        <div class="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">All</span> team</h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                We are composed with more women and every one have his own job, own poste.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="<?php echo base_url('assets/Office/images/team-1.jpg'); ?>" class="img-responsive" alt="">

                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4>Daniel Smith</h4>
                            <em>Manager</em>
                        </div>
                    </div>
                    <!--team col end-->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="<?php echo base_url('assets/SaryTapaka/20190808_130830.jpg'); ?>" class="img-responsive" alt="">                       
                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4>Eve Emma</h4>
                            <em>Chef</em>
                        </div>
                    </div>
                    <!--team col end-->
                    <div class="col-sm-4 margin-bottom30">
                        <div class="team-box">
                            <img src="<?php echo base_url('assets/SaryTapaka/Matantsoa.jpg'); ?>" class="img-responsive" alt="">                       
                            <ul class="social list-inline">
                                <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-desc">
                            <h4>Matantsoa</h4>
                            <em>Sous-chef</em>
                        </div>
                    </div>
                    <!--team col end-->
                </div>
            </div>
        </div>
        <!--team section end-->
        <section id="services" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Our <span class="colored-text">Services</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                Why you choose <span class="colored-text">Bonativo</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- title row end-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-paperplane-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Marketing</h3>                         
                                <p>
                                    We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears. The mass of the ferry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-browsers-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Web & Graphics design</h3>                         
                                <p>
                                    We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears. The mass of the ferry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--services col-->
                </div>
                <!--services row-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-world-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Social Media</h3>                         
                                <p>
                                    We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears. The mass of the ferry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-color-wand-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Creative ideas</h3>                         
                                <p>
                                    We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears. The mass of the ferry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--services col-->
                </div>
                <!--services row-->
                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-crop front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Responsive Design</h3>                         
                                <p>
                                    We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears. The mass of the ferry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--services col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-people-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Customer Support</h3>                         
                                <p>
                                    We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears. The mass of the ferry.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--services col-->
                </div>
                <!--services row-->
            </div>
        </section>
        <!--services section end-->
        <div class="testimonials parallax-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="flexslider testislider">
                            <ul class="slides">
                                <li>
                                    <div class="slide-items">
                                        <img src="<?php echo base_url('assets/SaryTapaka/IMG_20211011_102800_573.jpg'); ?>" alt="">
                                        <p>                                            
                                            We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears.
                                        </p>
                                        <h5>Maria Navratilova - Codeflicks inc.</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                        <img src="<?php echo base_url('assets/SaryTapaka/IMG_20210130_191157.jpg'); ?>" alt="">
                                        <p>
                                            
                                            We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears.
                                        </p>
                                        <h5>Maria Navratilova - Codeflicks inc.</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                        <img src="<?php echo base_url('assets/SaryTapaka/IMG_20211011_104408.jpg'); ?>" alt="">
                                        <p>
                                            
                                            We live for the backyard of life, the torturer's hairstyle. No arrows, sad diameter, as the earth bears.
                                        </p>
                                        <h5>Maria Navratilova - Codeflicks inc.</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--testimonials-->
        
        <!--pricing-->
        
        <!--call to action-->

        <section id="work" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">ALl</span> Team</h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                We are on your services.

                            </p>
                        </div>
                    </div>
                </div>
                <!--heading row-->


                <div class="row">
                    <?php for ($i=0; $i < count($sary); $i++) { ?>
                        <?php echo $sary[$i]['idEmployee']; ?>
                        <div class="col-sm-4">
                            <div class="entry-thumb portfolio-thumb">
                                <div class="imgoverlay text-light">
                                    <a type="button" href="<?php echo base_url($testeImage[$i]); ?>" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                                        <img src="<?php echo base_url($testeImage[$i]); ?>" class="img-responsive" alt="">
                                        <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6><?php echo $sary[$i]['prenomEmployee']; ?></h6></div></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
        </section>
        <!--work section end-->


        <section id="blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo">Bonativo</span> News</h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                We live for the backyard of life, the torturer's hairstyle.

                            </p>
                        </div>
                    </div>
                </div>
                <!--heading row-->
            </div>
            <!--container-->

            
        <!--news section end-->
        <div class="cta">
            <div class="container text-center scroll-to">
                <h1>Simple & clean one our page</h1>
                <a href="#contact" class="btn btn-border-black btn-radius btn-lg">Purchase now</a>
            </div>
        </div>
        <!--call to action-->


        <section id="contact" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="row contact-details">
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-location-outline"></i>
                                <h4>Madagascar, Antananarivo</h4>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-email-outline"></i>
                                <h4>diritana@gmail.com</h4>
                            </div>
                            <div class="col-sm-4 margin-bottom30 text-center">
                                <i class="ion-ios-telephone-outline"></i>
                                <h4>+261 34 94 960 13</h4>
                            </div>
                        </div>
                        <!--contact details-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">

                        <form name="sentMessage" class="contact-form" method="post" novalidate>
                            <h3>Drop us a line</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">

                                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 controls">

                                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12  controls">

                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">

                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12 text-right">
                                    <button type="submit" class="btn btn-white btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!--contact section end-->

        <footer class="footer">
            <div class="container text-center">
                <span class="alo">Service Régional de l'Industrie</span>
                <ul class="social list-inline">
                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                </ul>
                <span class="copyright">&copy; Copyright 2021. Gesign Created By <a href="http://mandaaroniaina.com">Manda Aroniaina Nomenjanahary</a></span>
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('assets/Office/js/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/Office/js/moderniz.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/Office/js/jquery.easing.1.3.js'); ?>" type="text/javascript"></script>
        <!-- bootstrap js-->
        <script src="<?php echo base_url('assets/Office/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/Office/js/jquery.flexslider-min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/Office/js/parallax.min.js'); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('assets/Office/js/jquery.prettyPhoto.js'); ?>"></script>	       
        <script type="text/javascript" src="<?php echo base_url('assets/Office/js/jqBootstrapValidation.js'); ?>"></script>
        <!--revolution slider scripts-->
        <script src="<?php echo base_url('assets/Office/rs-plugin/js/jquery.themepunch.tools.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/Office/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>" type="text/javascript"></script>  
        <script src="<?php echo base_url('assets/Office/js/template.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>        
    </body>
</html>
