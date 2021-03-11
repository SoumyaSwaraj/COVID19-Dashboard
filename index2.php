
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta name=”robots” content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Coronavirus Update - Live Statistics of CoVID19 (Global + Indian Status)
  </title>
  <meta name="description" content="Live Statistics of Coronavirus (CoVID19) at the Global scale sorted by country tracking the number of confirmed cases, recovered patients, death toll and new cases. Graphical representation of historical data of COVID19 cases in India based on WHO, CDC & John Hopkins' Data updated around every 5-10 mins.">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
	$(window).on("load",function(){
     $(".loadx").fadeOut("slow");
});
	</script>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="./assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/argon-dashboard.css?v=1.1.1" rel="stylesheet" />
</head>
 	<style>
	   *{
		  box-sizing:border-box;
		}

		.px{
		  display:flex;
		  justify-content:center;
		  color:white;
		  font-size:1em;
		  text-align:center;
		  text-transform:uppercase;
		  margin-right:-10px;
		  font-weight:bold;
		  letter-spacing:7px;
		  z-index:100;
		}
		.loadx{
			background-color: white;
			z-index: 10;
			position: absolute;
			top:0;
			left: 0;
		  width:100%;
		  height: 100vh;
		}
		.containerx{
			
		  z-index: 1000000;
		  display:flex;
		  font-family: 'Roboto', sans-serif;
		  justify-content:space-evenly;
		  align-items:center;
		  height:100vh;
		}
		.blobx{
		  position:absolute;
		  width:100px;
		  height:100px;
		  border-radius:50%;
		}
		.blobx:nth-child(1){
		  animation: mover 2s ease-in-out infinite;
		}
		.blobx:nth-child(2){
		  animation: mover 3s ease-in-out infinite;
		}
		.blobx:nth-child(3){
		  animation: mover 4s ease-in-out infinite;
		}

		@keyframes mover{
		  0%, 100% {
		    background:#05668D;
		    box-shadow:0 0 0px 0px #825ee4;
		    border:0px groove #00A896;
		    transform:scale(1) rotate(0deg);
		    opacity:.5;
		  }
		  50% {
		    background:#00A896;
		    box-shadow:0 0 100px 50px #5e72e4;
		    border:50px groove #000;
		    transform:scale(2) rotate(359deg);
		    opacity:1;
		  }
		}
       

	</style>
<body class="">
	<div class="loadx">
		<div class='containerx'>  
		  <div class='blobx'></div>
		  <div class='blobx'></div>
		  <div class='blobx'></div>
		  <p class="px">Updating</p>
		</div>
	</div>
 <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.php">
        <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">

            <a class="dropdown-item" href="https://www.who.int/health-topics/coronavirus">WHO Guidelines</a>
            <a class="dropdown-item" href="https://www.who.int/news-room/q-a-detail/q-a-coronaviruses">WHO's FAQ</a>
            <a class="dropdown-item" href="https://www.google.com/covid19/">Google's COVID19 Site</a>
            <a class="dropdown-item" href="https://www.google.com/crisisresponse/covid19-map/">Google's COVID19 Map</a>
            <a class="dropdown-item" href="https://en.wikipedia.org/wiki/2019%E2%80%9320_coronavirus_pandemic">Wikipedia's Page</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://www.mohfw.gov.in/">Indian Govt.'s Offical Site</a>
          </div>
        </li>
        
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.php">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <?php
          $connection=mysqli_connect(localhost, kvief6z2_sih, kvief6z2_sih, kvief6z2_sih);
          if(!$connection){
           echo "Database Connection Failed";
          }
          $visitors=2138;
          $query="SELECT * FROM visitors WHERE id=1";
          $result = mysqli_query($connection, $query);
          if(!$result){
              die('Query Failed' . mysqli_error($connection));
          }
          while($row=mysqli_fetch_assoc($result)){
          $visitors=$row['visitors'];
        }
          $visitors=$visitors+1;

          $query2 = "UPDATE visitors SET visitors='$visitors' WHERE id=1";
          $result2 = mysqli_query($connection, $query2);
          if(!$result2){
              die('Query Failed' . mysqli_error($connection));
          }

        ?>
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" value="Hi there! Visitor No. <?php echo $visitors; ?>" aria-label="Search" disabled>
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-single-02"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="index.php">
              <i class="ni ni-tv-2 text-primary"></i>Corona Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="modal" data-target="#modal-notification">
              <i class="ni ni-planet text-red"></i>Precautions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " target="_blank" href="https://www.google.com/crisisresponse/covid19-map/">
              <i class="ni ni-pin-3 text-orange"></i>Google's COVID19 Map
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#"  data-toggle="modal" data-target="#modal-sp">
              <i class="ni ni-bullet-list-67 text-pink"></i> How COVID19 speads
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#"  data-toggle="modal" data-target="#modal-about">
              <i class="ni ni-single-02 text-info"></i> About us</a>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">IMPORTANT LINKS</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.who.int/health-topics/coronavirus">
              <i class="ni ni-spaceship"></i> WHO Guidelines
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.who.int/news-room/q-a-detail/q-a-coronaviruses">
              <i class="ni ni-ui-04"></i> FAQs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.mohfw.gov.in/">
              <i class="ni ni-ui-04"></i> Official Indian COVID19 Site
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://en.wikipedia.org/wiki/2019%E2%80%9320_coronavirus_pandemic">
              <i class="ni ni-ui-04"></i> Wikipedia's COVID19 Page
            </a>
          </li>
          <li class="nav-item">
            <div class="alert alert-info text-sm p-1 alert-dismissible fade show" role="alert">
              
              <span class="alert-text">You are Visitor No. <strong><?php echo $visitors; ?>!</strong></span>
              
          </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">


  	<!--MODAL 0000 -->
<div class="modal fade" id="district" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
            <div class="modal-content bg-gradient-primary shadow">
              
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Indian Statistics Districtwise</h6>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            
            <div class="modal-body">
              
                <div class="py-3">
                  
                		<div class="row mt-5">
					        <div class="col-xl-12 mb-5 mb-xl-0">
					          <div class="card shadow">
					            <div class="card-header border-0">
					              <div class="row align-items-center">
					                <div class="col">
					                  <h3 class="mb-0">Indian COVID-19 Districtwise Statistics</h3>
					                </div>
					                
					              </div>
					            </div>
					            <div class="table-responsive" id="districtx">
					              <!-- Projects table -->

					            </div>
					          </div>
					        </div>
					        
					      </div>


                   
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
                <button type="button" class="btn btn-link text-black ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
      </div>
    </div>







      <!--Modal 1 -->
      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-red">
              
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            
            <div class="modal-body">
              
                <div class="py-3">
                  <div class="text-center">
                    <i class="ni ni-planet ni-3x"></i>
                    <h4 class="heading mt-4">Please follow these guidelines!</h4></div>
                    <p class="text-left">
                      <ul>
                        <li>
                          <b>Wash your hands frequently.</b><br>
                          Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water. 
                        </li>
                        <li>
                          <b>Maintain social distancing</b><br>
                          Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing. It's best if you stay at Home.
                        </li>
                        <li>
                          <b>Avoid touching eyes, nose and mouth</b><br><br>
                          
                        </li>
                        <li>
                          <b>Practice respiratory hygiene</b><br>
                          Make sure you, and the people around you, follow good respiratory hygiene. This means covering your mouth and nose with your bent elbow or tissue when you cough or sneeze. Then dispose of the used tissue immediately.
                        </li>
                        <li>
                          <b>If you have fever, cough and difficulty breathing, seek medical care early</b><br>
                          
                        </li>
                      </ul>
                    </p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
                <button type="button" class="btn btn-link text-black ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
      </div>
    </div>
    <!--MOD2-->
    <div class="modal fade" id="modal-sp" tabindex="-1" role="dialog" aria-labelledby="modal-sp" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content text-dark bg-gradient-pink">
              
                <div class="modal-header">
                    <h6 class="modal-title text-dark" id="modal-title-notification">Your attention is required</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            
            <div class="modal-body">
              
                <div class="py-3">
                  <div class="text-center">
                    <i class="ni ni-bullet-list-67 ni-3x"></i>
                    <h4 class="heading mt-3 text-dark">How does Corona Virus (COVID19) spread?</h4></div>
                    <p class="text-left text-dark">
                      People can catch COVID-19 from others who have the virus. The disease can spread from person to person through small droplets from the nose or mouth which are spread when a person with COVID-19 coughs or exhales. These droplets land on objects and surfaces around the person. Other people then catch COVID-19 by touching these objects or surfaces, then touching their eyes, nose or mouth. People can also catch COVID-19 if they breathe in droplets from a person with COVID-19 who coughs out or exhales droplets. This is why it is important to stay more than 1 meter (3 feet) away from a person who is sick.
                      <br><br>
                      WHO is assessing ongoing research on the ways COVID-19 is spread and will continue to share updated findings.    
                      <ul>
                        <li>
                          <b>Can the virus that causes COVID-19 be transmitted through the air?</b><br>
                          Studies to date suggest that the virus that causes COVID-19 is mainly transmitted through contact with respiratory droplets rather than through the air. 
                        </li>
                        <li>
                          <b>Can CoVID-19 be caught from a person who has no symptoms?</b><br>
                          The main way the disease spreads is through respiratory droplets expelled by someone who is coughing. The risk of catching COVID-19 from someone with no symptoms at all is very low. However, many people with COVID-19 experience only mild symptoms. This is particularly true at the early stages of the disease. It is therefore possible to catch COVID-19 from someone who has, for example, just a mild cough and does not feel ill.  WHO is assessing ongoing research on the period of transmission of COVID-19 and will continue to share updated findings.    
                        </li>
                        
                        <li>
                          <b>Can I catch COVID-19 from the feces of someone with the disease?</b><br>
                          The risk of catching COVID-19 from the feces of an infected person appears to be low. While initial investigations suggest the virus may be present in feces in some cases, spread through this route is not a main feature of the outbreak. WHO is assessing ongoing research on the ways COVID-19 is spread and will continue to share new findings. Because this is a risk, however, it is another reason to clean hands regularly, after using the bathroom and before eating. 
                        </li>
                        
                      </ul>
                    </p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Ok, Got it</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
            
        </div>
      </div>
    </div>
<!--MOD3-->
    <div class="modal fade" id="modal-about" tabindex="-1" role="dialog" aria-labelledby="modal-about" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content text-white bg-gradient-info">
              
                <div class="modal-header">
                    <h6 class="modal-title text-white" id="modal-title-notification">More information about us!</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            
            <div class="modal-body">
              
                <div class="py-3">
                  <div class="text-center">
                    <i class="ni ni-single-02 ni-3x"></i>
                    <h4 class="heading mt-3 text-white">Who developed this website?</h4></div>
                    <p class="text-left text-white">
                      <b>This website has been developed by Soumya Swaraj & the logo has been designed by Yash Goien. Both are students of Thapar Institute of Engineering & Technology, Patiala.
                      </b>
                    </p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
            
        </div>
      </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Global Corona Virus Stats</a>
        <!-- Form -->
        <!-- User -->
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row world" id="world">






          </div>
        <!--nnn --></div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                  <h2 class="text-white mb-0">India's Timeline</h2>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end" id="indiaxxx">
                    

                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Countires with </h6>
                  <h2 class="mb-0">Highest Number of Cases</h2>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <canvas id="chart-orders" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Indian COVID-19 Statewise Statistics <span class="text-xs text-muted">(Source : Covid19India)</span></h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#district">See Districtwise Stats</a>
                </div>
              </div>
            </div>
            <div class="table-responsive" id="indiaxp">
              <!-- Projects table -->
              





            </div>
          </div>
        </div>
        
      </div>
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Global COVID-19 Statistics by Country</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive" id="countryx">
              <!-- Projects table -->
              





            </div>
          </div>
        </div>
        
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2020 <a href="https://linkedin.com/isoumyaswaraj" class="font-weight-bold ml-1" target="_blank">Soumya Swaraj</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.instagram.com/isoumyaswaraj" class="nav-link" target="_blank">
                    <button class="btn btn-icon btn-primary" type="button">
                        <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
                        <span class="btn-inner--text">Instagram</span>
                    </button>
                </a>
              </li>
              <li id="nbv" class="nav-item">
                <a href="https://www.facebook.com/isoumyaswaraj" class="nav-link" target="_blank">
                    <button class="btn btn-icon btn-primary" type="button">
                        <span class="btn-inner--icon"><i class="fab fa-facebook-square"></i></span>
                        <span class="btn-inner--text">Facebook</span>
                    </button>

                </a>
              </li>
              <li class="nav-item">
                <a href="http://soumyaswaraj.co" class="nav-link" target="_blank">
                  <button class="btn btn-icon btn-primary" type="button">
                        <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                        <span class="btn-inner--text">Future Blog</span>
                    </button>
                  </a>
              </li>
              
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
    <script type="text/javascript">
var data9900 = null;

var xhr20 = new XMLHttpRequest();
xhr20.withCredentials = true;

xhr20.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
              var dataxy = JSON.parse(this.responseText);

              document.getElementById("world").innerHTML=`
                <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total Cases</h5>
                                <span class="h2 font-weight-bold mb-0">` + dataxy.total_cases + `</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                  <i class="fas fa-chart-bar"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                              Globally
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total Deaths</h5>
                                <span class="h2 font-weight-bold mb-0">` + dataxy.total_deaths + `</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                  <i class="fas fa-chart-pie"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                              Since the start of the outbreak
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Total Recoveries</h5>
                                <span class="h2 font-weight-bold mb-0">` + dataxy.total_recovered + `</span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                  <i class="fas fa-users"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                              <b>around the world</b>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                          <div class="card-body">
                            <div class="row">
                              <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">New Cases Today</h5>
                                <span class="h2 font-weight-bold mb-0"><b>` + dataxy.new_cases + `</b></span>
                              </div>
                              <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                  <i class="fas fa-chart-bar"></i>
                                </div>
                              </div>
                            </div>
                            <p class="mt-3 mb-0 text-sm">
                              ` + dataxy.new_deaths + ` New Deaths Todays
                            </p>
                          </div>
                        </div>
                      </div>
                      `;
        }
      });
xhr20.open("GET", "https://coronavirus-monitor.p.rapidapi.com/coronavirus/world_total_stat.php");
xhr20.setRequestHeader("x-rapidapi-host", "coronavirus-monitor.p.rapidapi.com");
xhr20.setRequestHeader("x-rapidapi-key", "2ee2a821f9mshe4b9a935a107530p1f8fb1jsn3055255ef35f");

xhr20.send(data9900);

  </script>
 <script type="text/javascript">
  var datasss = null;

var xhr6 = new XMLHttpRequest();
xhr6.withCredentials = true;

xhr6.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    var inx = JSON.parse(this.responseText);

              document.getElementById("indiaxxx").innerHTML=`
              <h4 class="text-white m-3"><b class="mb-3">Total Cases</b> : <b class="bg-info p-1">`+ inx.latest_stat_by_country[0].total_cases +`</b></h4>
              <h4 class="text-white m-3"><b class="mb-3">Total Deaths</b> : <b class="bg-danger p-1">`+ inx.latest_stat_by_country[0].total_deaths +`</b></h4>

              `;
  }
});

xhr6.open("GET", "https://coronavirus-monitor.p.rapidapi.com/coronavirus/latest_stat_by_country_name.php?country=india");
xhr6.setRequestHeader("x-rapidapi-host", "coronavirus-monitor.p.rapidapi.com");
xhr6.setRequestHeader("x-rapidapi-key", "2ee2a821f9mshe4b9a935a107530p1f8fb1jsn3055255ef35f");

xhr6.send(datasss);
</script>


<!--Districtwise Stats -->
<script type="text/javascript">
var datadx = null;

var xhr999 = new XMLHttpRequest();
xhr999.withCredentials = false;

xhr999.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    var statex = JSON.parse(this.responseText);
    var i=1; 
    var j=0;
    var m=0;
    var datx="";
        var statename = Object.keys(statex);
		for(i in statex){
			var y=0;
			var districtname = Object.keys(statex[i].districtData);
    		for(j in statex[i].districtData){

                 datx+= `
                  <tr>
                    <th scope="row" class="font-weight-bold text-dark" style="color:black;">
                    `+
                    statename[m]
                    +`
                    </th>
                    <td class="font-weight-bold bg-info text-white">`+
                    districtname[y]
                    +`</td>
                    <td class="font-weight-bold bg-danger text-white">`+
                    statex[i].districtData[j].confirmed
                    +`</td>
                    
                  </tr>`;
                  y++;
            } 
            m++;
        } 
              document.getElementById("districtx").innerHTML=`
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">State/UT Name</th>
                    <th scope="col">District Name</th>
                    <th scope="col">Total Cases</th>
                  </tr>
                  </thead>
                  <tbody>
                  ` 
                  + datx +
                `


                </tbody>
              </table>

               `;
  }
});

xhr999.open("GET", "https://api.covid19india.org/state_district_wise.json");

xhr999.send(datadx);
</script>






<!--India Data -->
<script type="text/javascript">
var datad = null;

var xhr99 = new XMLHttpRequest();
xhr99.withCredentials = false;

xhr99.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    var india = JSON.parse(this.responseText);
    var i=1; 
    var datumx="";
              

    for(i in india.statewise){

                 datumx+= `
                  <tr>
                    <th scope="row font-weight-bold">
                    `+
                    india.statewise[i].state
                    +`
                    </th>
                    <td class="font-weight-bold bg-info text-white">`+
                    india.statewise[i].confirmed
                    +`</td>
                    <td class="font-weight-bold bg-danger text-white">`+
                    india.statewise[i].deaths
                    +`</td>
                    <td class="font-weight-bold bg-warning  text-white">`+
                    india.statewise[i].active
                    +`</td>
                    <td class="bg-success font-weight-bold text-white">`+
                    india.statewise[i].recovered
                    +`</td>
                  </tr>`;
                }  
              document.getElementById("indiaxp").innerHTML=`
              <table class="table align-items-center table-dark">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">State/UT Name</th>
                    <th scope="col">Total Cases</th>
                    <th scope="col">Total Deaths</th>
                    <th scope="col" >Active Cases</th>
                    <th scope="col" >Recovered</th>
                  </tr>
                  </thead>
                  <tbody>
                  ` 
                  + datumx +
                `


                </tbody>
              </table>

               `;
  }
});

xhr99.open("GET", "https://api.covid19india.org/data.json");

xhr99.send(datad);
</script>


<!--World Data -->

  <script type="text/javascript">
    var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    var countryxx = JSON.parse(this.responseText);
    var i=0; 
    var datum="";
              

    for(i in countryxx.countries_stat){

                 datum+= `
                  <tr>
                    <th scope="row font-weight-bold">
                    `+
                    countryxx.countries_stat[i].country_name
                    +`
                    </th>
                    <td class="font-weight-bold">`+
                    countryxx.countries_stat[i].cases
                    +`</td>
                    <td class="bg-danger font-weight-bold text-white">+`+
                    countryxx.countries_stat[i].new_cases
                    +`</td>
                    <td class="font-weight-bold">`+
                    countryxx.countries_stat[i].deaths
                    +`</td>
                    <td class="bg-danger font-weight-bold text-white">+`+
                    countryxx.countries_stat[i].new_deaths
                    +`</td>
                    <td class="bg-success font-weight-bold">`+
                    countryxx.countries_stat[i].total_recovered
                    +`</td>
                    <td class="bg-warning font-weight-bold text-white">`+
                    countryxx.countries_stat[i].serious_critical
                    +`</td>
                    <td class="font-weight-bold">`+
                    countryxx.countries_stat[i].active_cases
                    +`</td>
                    <td class="bg-info font-weight-bold text-white">`+
                    countryxx.countries_stat[i].total_cases_per_1m_population
                    +`</td>
                  </tr>`;
                }  
              document.getElementById("countryx").innerHTML=`
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Country Name</th>
                    <th scope="col">Total Cases</th>
                    <th scope="col">New Cases</th>
                    <th scope="col">Total Deaths</th>
                    <th scope="col" >New Deaths</th>
                    <th scope="col" >Total Recovered</th>
                    <th scope="col">Critical Cases</th>
                    <th scope="col">Active Cases</th>
                    <th scope="col">Cases per million</th>
                  </tr>
                  </thead>
                  <tbody>
                  ` 
                  + datum +
                `


                </tbody>
              </table>

               `;
  }
});

xhr.open("GET", "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php");
xhr.setRequestHeader("x-rapidapi-host", "coronavirus-monitor.p.rapidapi.com");
xhr.setRequestHeader("x-rapidapi-key", "2ee2a821f9mshe4b9a935a107530p1f8fb1jsn3055255ef35f");

xhr.send(data);
  </script>
  <!--   Core   -->
  <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="./assets/js/argon-dashboard.js?v=1.1.1"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>