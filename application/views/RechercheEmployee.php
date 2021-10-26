<?php
  for ($i=0; $i < count($rechercheEmpl); $i++){
      $testeImage[$i] = "../assets/SaryTapaka/".$rechercheEmpl[$i]['prenomEmployee'].".jpg";
      // echo $testeImage[$i];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>DIRI_TANA</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="<?php echo base_url('assets/Admin/images/fevicon.png'); ?>" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin/css/bootstrap.min.css'); ?>">
  <!-- style css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin/css/style.css'); ?>">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin/css/responsive.css'); ?>">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin/css/jquery.mCustomScrollbar.min.css'); ?>">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/Table/images/icons/favicon.ico'); ?>"/>
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Table/vendor/bootstrap/css/bootstrap.min.css'); ?>">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Table/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Table/vendor/animate/animate.css'); ?>">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Table/vendor/select2/select2.min.css'); ?>">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Table/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>">
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Table/css/util.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Table/css/main.css'); ?>">
  <!--===============================================================================================-->

</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="<?php echo base_url('assets/Admin/images/loading.gif'); ?>" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                  <a href="<?php echo base_url('Login/retour'); ?>">SRI</h1></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
            <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="<?php echo base_url('Login/retour'); ?>">Home</a> </li>
                      <li> <a href="<?php echo base_url('Login/Cooperative/index'); ?>">Cooperative</a> </li>
                      <li> <a href="<?php echo base_url('Login/emplRehetra'); ?>">Employées</a> </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Insertion <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li> <a href="<?php echo base_url('Login/insertCoop'); ?>">Insérer Coopérative</a> </li>
                          <li> <a href="<?php echo base_url('Login/insertEmpl'); ?>">Insérer Employée</a> </li> 
                        </ul>
                      </li>
                      <li> <a href="<?php echo base_url('Login/Dissoute'); ?>">Dissoute</a> </li>
                      <li> <a href="<?php echo base_url('Login/DissouteEmpl'); ?>">Anciens employées</a> </li> 
                      <li> <a href="<?php echo base_url('Login/versTeste'); ?>">Statistiques</a> </li>
                      <li> <a href="<?php echo base_url('Welcome/index'); ?>"><img src="<?php echo base_url('assets/Admin/icon/icon_b.png'); ?>" alt="#" /></a></li>
                    </ul>
                        <form class="form-inline my-2 my-lg-0" style = "margin-left: 400px " action="<?php echo base_url('Welcome/Recherche'); ?>" method="POST">
                            <input class="form-control mr-sm-2" type="search" name="mot" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            <select class="custom-select custom-select-lg mb-3" name ="type" style = "width: 200px; height : 40px; border-radius : 10px; margin-left : 2%; margin-top : 2%">
                                <option selected>All type</option>
                                <option value="Employee">Employée</option>
                                <option value="Cooperative">Cooperative<option>
                            </select>
                        </form>
                   </nav>
                 </div>
               </div> 
            </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

    <!-- table -->
    <h1>Liste recherche employée</h1>
    <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
        <div class="table100 ver5 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name</th>
									<th class="cell100 column2">Lastname</th>
									<th class="cell100 column3">Function</th>
									<th class="cell100 column4">Experience</th>
									<th class="cell100 column5">Profil</th>
                  <th class="cell100 column6"></th>
                  <th class="cell100 column7"></th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                <?php for ($i=0; $i < count($rechercheEmpl); $i++) { ?>
                    <tr class="row100 body">
                        <td class="cell100 column1">
                          <form class="news" action=<?php echo base_url('Login/versInfoEmpl/'); ?> method="POST">
                            <input type="hidden" name="idEmployee" value="<?php echo $rechercheEmpl[$i]['idEmployee'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                            <?php echo $rechercheEmpl[$i]['nomEmployee']; ?>
                          </button>
                          </form>
                        </td>
                        <td class="cell100 column2">
                          <form class="news" action=<?php echo base_url('Login/versInfoEmpl/'); ?> method="POST">
                            <input type="hidden" name="idEmployee" value="<?php echo $rechercheEmpl[$i]['idEmployee'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $rechercheEmpl[$i]['prenomEmployee']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column3">
                          <form class="news" action=<?php echo base_url('Login/versInfoEmpl/'); ?> method="POST">
                            <input type="hidden" name="idEmployee" value="<?php echo $rechercheEmpl[$i]['idEmployee'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $rechercheEmpl[$i]['fonctionEmployee']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column4">
                          <form class="news" action=<?php echo base_url('Login/versInfoEmpl/'); ?> method="POST">
                            <input type="hidden" name="idEmployee" value="<?php echo $rechercheEmpl[$i]['idEmployee'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $rechercheEmpl[$i]['experience']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column5">
                          <img src="<?php echo $testeImage[$i]; ?>" alt="..." class="rounded-circle">
                        </td>
                        <td class="cell100 column6"> 
                            <form class="news" action=<?php echo base_url('Login/ModifEmpl/'); ?> method="POST">
                                <input type="hidden" name="idEmployee" value="<?php echo $rechercheEmpl[$i]['idEmployee']; ?>" >
                                <button class="submit" name="" style="width: 70px; height: 40px; color: black;">Modif</button>
                            </form>
                            
                        </td>
                        <td class="cell100 column7">
                            <form class="news" action=<?php echo base_url('Login/deleteEmployee/'); ?> method="POST">
                            <input type="hidden" name="idEmployee" value="<?php echo $rechercheEmpl[$i]['idEmployee']; ?>" >
                            <input type="hidden" name="nomEmployee" value="<?php echo $rechercheEmpl[$i]['nomEmployee']; ?>" >
                            <input type="hidden" name="prenomEmployee" value="<?php echo $rechercheEmpl[$i]['prenomEmployee']; ?>" >
                            <input type="hidden" name="fonctionEmployee" value="<?php echo $rechercheEmpl[$i]['fonctionEmployee']; ?>" >
                            <input type="hidden" name="experience" value="<?php echo $rechercheEmpl[$i]['experience']; ?>" >
                            <button class="submit" style="width: 70px; height: 40px; color: black;">Demiss</button>
                            </form>
                        </td>
                      </tr>
                <?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>



    <!-- end table --> 

    

    
    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <a href="#" class="logo_footer"> <img src="<?php echo base_url('assets/Admin/images/logo2.png'); ?>" alt="#"/></a>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Address </h3>
                    <ul class="loca">
                      <li>
                        <a href="#"></a>It is a long established fact 
                        <br>that a reader will be  </li>
                        <li>
                          <a href="#"></a>(+71 1234567890) </li>
                          <li>
                            <a href="#"></a>demo@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Social Link</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="#">Twitter</a> </li>
                            <li><a href="#">Facebook</a> </li>
                            <li><a href="#">Instagram</a> </li>
                            <li><a href="#">Linkdin</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Newsletter</h3>
                           <form class="news">
                           <input class="newslatter" placeholder="Enter your email" type="text" name=" Enter your email">
                            <button class="submit">Subscribe</button>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>Copyright © 2019 Design by <a href="https://html.design/">Free Html Templates </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <!--===============================================================================================-->	
          <script src="<?php echo base_url('assets/Table/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
        <!--===============================================================================================-->
          <script src="<?php echo base_url('assets/Table/vendor/bootstrap/js/popper.js'); ?>"></script>
          <script src="<?php echo base_url('assets/Table/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <!--===============================================================================================-->
          <script src="<?php echo base_url('assets/Table/vendor/select2/select2.min.js'); ?>"></script>
        <!--===============================================================================================-->
          <script src="<?php echo base_url('assets/Table/vendor/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
          <script>
            $('.js-pscroll').each(function(){
              var ps = new PerfectScrollbar(this);

              $(window).on('resize', function(){
                ps.update();
              })
            });
              
            
          </script>
        <!--===============================================================================================-->
	        <script src="<?php echo base_url('assets/Table/js/main.js'); ?>"></script>

          <script src="<?php echo base_url('assets/Admin/js/jquery.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/Admin/js/popper.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/Admin/js/bootstrap.bundle.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/Admin/js/jquery-3.0.0.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/Admin/js/plugin.js'); ?>"></script>
          <!-- sidebar -->
          <script src="<?php echo base_url('assets/Admin/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
          <script src="<?php echo base_url('assets/Admin/js/custom.js'); ?>"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = '<?php echo base_url('assets/Admin/images/maps-and-flags.png'); ?>';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>

</html>
