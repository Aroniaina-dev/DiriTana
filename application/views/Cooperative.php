<?php 
  // for ($i=0; $i < count($liste); $i++) { 
  //     echo $liste[$i]['couleur'];
  // }

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
                     <form class="form-inline my-2 my-lg-0" style = "margin-left: 400px " action="<?php echo base_url('Login/Recherche'); ?>" method="POST">
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
     <div id="ssh" style="margin-left : 10%">
      <h1 class="display-4">Group by</h1>
      <form class="news" action=<?php echo base_url('Login/Cooperative/'); ?> method="POST">
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline1" name = "groupe" value="nomCooperative" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline1">Designation</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline2" name = "groupe" value="CE" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline2">CE</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline3" name = "groupe" value="DE" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline3">Date</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline4" name = "groupe" value="Region" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline4">Region</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline5" name = "groupe" value="Branche" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline5">Branche</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline6" name = "groupe" value="filiere" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline6">Filière</label>
        </div>

        <button type="submit" class="btn btn-outline-dark">Search</button>
      </form>
    </div>
    <!-- end table --> 

    <div class="limiter">
		  <div class="container-table100">
        <div class="wrap-table100">
          <div class="table100 ver5 m-b-110">
            <div class="table100-head">
              <table>
                <thead>
                  <tr class="row100 head">
                    <th class="cell100 column8" style="text-align: center;">CE</th>
                    <th class="cell100 column1" style="text-align: center;">Cooperative</th>                    
                    <th class="cell100 column2" style="text-align: center;">Président</th>
                    <th class="cell100 column3" style="text-align: center;">Branche</th>
                    <th class="cell100 column4" style="text-align: center;">Filière</th>
                    <th class="cell100 column5" style="text-align: center;">Region</th>
                    <th class="cell100 column6" style="text-align: center;">Modif</th>
                    <th class="cell100 column7" style="text-align: center;">/Suppr</th>
                  </tr>
                </thead>
              </table>
            </div>
					  <div class="table100-body js-pscroll">
						  <table>
							  <tbody>
                  <?php for ($i=0; $i < count($liste); $i++) { ?>
                    <tr class="row100 body">
                    <td class="cell100 column8">
                          <form class="news" action=<?php echo base_url('Login/versInfoCoop/'); ?> method="POST">
                            <input type="hidden" name="idCooperative" value="<?php echo $liste[$i]['idCooperative'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $liste[$i]['CE']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column1">
                          <form class="news" action=<?php echo base_url('Login/versInfoCoop/'); ?> method="POST">
                            <input type="hidden" name="idCooperative" value="<?php echo $liste[$i]['idCooperative'];?>" >
                              <button class="submit" name="" style= "background : <?php echo $liste[$i]['couleur'];?>; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $liste[$i]['nomCooperative']; ?>
                            </button>
                          </form>
                        </td>
                        
                        <td class="cell100 column2">
                          <form class="news" action=<?php echo base_url('Login/versInfoCoop/'); ?> method="POST">
                            <input type="hidden" name="idCooperative" value="<?php echo $liste[$i]['idCooperative'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $liste[$i]['nomPresident']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column3">
                          <form class="news" action=<?php echo base_url('Login/versInfoCoop/'); ?> method="POST">
                            <input type="hidden" name="idCooperative" value="<?php echo $liste[$i]['idCooperative'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $liste[$i]['branche']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column4">
                          <form class="news" action=<?php echo base_url('Login/versInfoCoop/'); ?> method="POST">
                            <input type="hidden" name="idCooperative" value="<?php echo $liste[$i]['idCooperative'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $liste[$i]['filiere']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column5">
                          <form class="news" action=<?php echo base_url('Login/versInfoCoop/'); ?> method="POST">
                            <input type="hidden" name="idCooperative" value="<?php echo $liste[$i]['idCooperative'];?>" >
                            <button class="submit" name="" style= "background : transparent; color : gray; font-size : 18px; font-family : Calibri Light">
                              <?php echo $liste[$i]['region']; ?>
                            </button>
                            </form>
                        </td>
                        <td class="cell100 column6"> 
                       
                        <form class="news" action=<?php echo base_url('Login/ModifCoop/'); ?> method="POST">
                          <input type="hidden" name="id" value="<?php echo $liste[$i]['idCooperative'];?>" >
                          <button class="submit" name="" style="width: 70px; height: 40px; color: black;">Ajour</button>
                        </form>
                        </td>
                        
                        <td class="cell100 column7">
                          <form class="news" action=<?php echo base_url('Login/deleteCooperative/'); ?> method="POST">
                            <input type="hidden" name="idCooperative" value="<?php echo $liste[$i]['idCooperative'];?>" >
                            <input type="hidden" name="nomCooperative" value="<?php echo $liste[$i]['nomCooperative'];?>" >
                            <input type="hidden" name="ce" value="<?php echo $liste[$i]['CE'];?>" >
                            <input type="hidden" name="de" value="<?php echo $liste[$i]['DE'];?>" >
                            <input type="hidden" name="dc" value="<?php echo $liste[$i]['DC'];?>" >
                            <input type="hidden" name="mandat" value="<?php echo $liste[$i]['mandat'];?>" >
                            <input type="hidden" name="dateAJour" value="<?php echo $liste[$i]['dateAJour'];?>" >
                            <input type="hidden" name="nomPresident" value="<?php echo $liste[$i]['nomPresident'];?>" >
                            <input type="hidden" name="membre" value="<?php echo $liste[$i]['membre'];?>" >
                            <input type="hidden" name="homme" value="<?php echo $liste[$i]['homme'];?>" >
                            <input type="hidden" name="femme" value="<?php echo $liste[$i]['femme'];?>" >
                            <input type="hidden" name="contact" value="<?php echo $liste[$i]['contact'];?>" >
                            <input type="hidden" name="branche" value="<?php echo $liste[$i]['branche'];?>" >
                            <input type="hidden" name="filiere" value="<?php echo $liste[$i]['filiere'];?>" >
                            <input type="hidden" name="addrescooperative" value="<?php echo $liste[$i]['addrescooperative'];?>" >
                            <input type="hidden" name="fokotany" value="<?php echo $liste[$i]['fokotany'];?>" >
                            <input type="hidden" name="commune" value="<?php echo $liste[$i]['commune'];?>" >
                            <input type="hidden" name="distric" value="<?php echo $liste[$i]['distric'];?>" >
                            <input type="hidden" name="province" value="<?php echo $liste[$i]['province'];?>" >
                            <input type="hidden" name="region" value="<?php echo $liste[$i]['region'];?>" >
                            <input type="hidden" name="date2018" value="<?php echo $liste[$i]['date2018'];?>" >
                            <button class="submit" style="width: 70px; height: 40px; color: black;">Arch</button>
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
