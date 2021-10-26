<!DOCTYPE html>
<!--
	Bonativo by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIRI_TANA</title>
        
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/Office/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/Office/css/style.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/Office/css/flexslider.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/Office/icons/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/Office/icons/css/simple-line-icons.css'); ?>" rel="stylesheet" type="text/css">
        
        <!--revolution slider setting css-->
        <link href="<?php echo base_url('assets/Office/rs-plugin/css/settings.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/Office/css/prettyPhoto.css'); ?>" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">


        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-fixed-top before-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand alo" href="#home">DIRI_TANA</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="<?php echo base_url('Welcome/index'); ?>#home">Home</a></li>
                        <li><a href="<?php echo base_url('Welcome/index'); ?>#about">About</a></li>
                        <li><a href="<?php echo base_url('Welcome/index'); ?>#services">Services</a></li>
                        <li><a href="<?php echo base_url('Welcome/index'); ?>#work">Work</a></li>
                        <li><a href="<?php echo base_url('Welcome/index'); ?>#blog">Blog</a></li>
                        <li><a href="<?php echo base_url('Welcome/Post'); ?>">Blog Post</a></li>                      
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url('Welcome/Typographie');?>">Typography</a></li> 
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('Welcome/index'); ?>#contact">Contact</a></li>
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
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <div class="page-title">
            <div class="container text-center">
                <h3>Single Post</h3>
                <span class="border-line"></span>
            </div>
        </div><!--page title-->

        <div class="container section-padding">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="news-inner">

                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <p class="author">By Maria</p>
                            <h5 class="post-option"><a href="#">Comment</a> <a href="#">Share</a></h5>
                            <hr>
                        </div>
                    </div><!--hews header end-->   
                    <div class="news-content margin-bottom30">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                        </p>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
                        </p>
                    </div>
                 <nav>
  <ul class="pager">
    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Previous</a></li>
    <li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container text-center">
                <span class="alo">Bonativo</span>
                <ul class="social list-inline">
                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                </ul>
                <span class="copyright">&copy; Copyright 2016. Bonativo Created By <a href="http://templatestock.co">Template Stock</a></span>
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
        <script type="text/javascript" src="<?php echo base_url('assets/Office/js/contact_me.js'); ?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('assets/Office/js/jqBootstrapValidation.js'); ?>"></script>
        <!--revolution slider scripts-->
        <script src="<?php echo base_url('assets/Office/rs-plugin/js/jquery.themepunch.tools.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/Office/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>" type="text/javascript"></script>  
        <script src="<?php echo base_url('assets/Office/js/template.js'); ?>" type="text/javascript"></script>

    </body>
</html>
