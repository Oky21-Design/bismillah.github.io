<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location: ../home/login.php?pesan=not_logged_in");
	}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="../../assets/Team/AIR Logo.png">
  <title>Aircraft Integrated Report </title>
  <meta name="description">
  <meta name="keywords">
  <!-- CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Favicon and touch icons -->
  <link rel="stylesheet" href="../CSS/aquamarine1.css">
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/carousel.css">
  <link rel="stylesheet" href="../../css/media-queries.css">
  <!-- Script: Animated entrance -->
  <script type="text/javascript" src="jquery-1.3.2.js"></script>
  <script type="text/javascript" src="jquery-ui-1.7.2.custom.js"></script>
  <script type="text/javascript" src="jquery.jcoverflip.js"></script>
  <link rel="stylesheet" href="jquery-ui-1.7.2.custom.css" type="text/css" media="all">
  <script src="../js/navbar-ontop.js"></script>
  <script src="../js/animate-in.js"></script>
</head>

<body>
  <!-- Top menu -->
  <!-- Top content -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark asd">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block" src="assets/Team/AIR Logo.png" width="75"></div>
      </div> <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse justify-content-start collapse" id="navbar4">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 text-left pt-1"> <a class="nav-link text-dark " href="../../home/Homes_AfterLogin.php"><b class="text-light">HOME</b></a> </li>
          <li class="nav-item mx-2 text-left pt-1 text-light"> <a class="nav-link  text-dark " href="../../home/dashboard.php"><b class="text-light">DASHBOARD</b></a> </li>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">CREATE ARR</b>
            </button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="../../input/profiles.php">Create Data Report</a><a class="dropdown-item" href="../../input/labreport.php">Create Lab Data</a>
            </div>
          </div>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">Hello, &nbsp; <?php echo $_SESSION['nama']; ?></b></button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"><a class="dropdown-item" href="../../Home/logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Section 1 -->
  <div class="asd">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 my-4"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-primary text-left"><b>All Aircraft Monitoring</b></h3>
        </div>
      </div>
      <div class="row">
        <div class="owl-carousel owl-theme">
          <div class="item bg-white shadow">
            <div class="hovereffect">
              <img class="img-fluid d-block mx-auto"  src="icon/BrakeWearPin.png" style="width: 220px; margin-top: 25px;" >
              <div class="content">
                <h4 class="bg-secondary text-white">Brake Wear Pin</h4>
                <p class="text-justify mx-2"><a class="text-white">
                  AIR helps to prepare the material prior to its replacement date to prevent AOG-based stock order.</a></p>
                  <a href="#" class="btn btn-primary bg-aquamarine btn-sm">SEE MORE</a>
                </div>
            </div>
          </div>
          <div class="item bg-white shadow">
            <div class="hovereffect">
              <img class="img-fluid d-block mx-auto" src="icon/Icon_NLG-01.png" style="width: 220px; margin-top: 25px;" >
              <div class="content">
                <h4 class="bg-secondary text-white">Tire Pressure </h4>
                <p class="text-justify mx-2"><a class="text-white">
                  Records of pressure addition can also show the performance of the tire.</a></p>
                  <a href="#" class="btn btn-primary bg-aquamarine btn-sm">SEE MORE</a>
                </div>
            </div>
          </div>
          <div class="item bg-white shadow">
            <div class="hovereffect">
              <img class="img-fluid d-block mx-auto"  src="icon/asdasdasd.png" style="width: 220px; margin-top: 25px;" >
              <div class="content">
                <h4 class="bg-secondary text-white">Servicing Hydraulic</h4>
                <p class="text-justify mx-2"><a class="text-white">
                  With AIR, the servicing hydraulic fluid is monitored to check for leakage and other problems.
</a></p>
                  <a href="#" class="btn btn-primary bg-aquamarine btn-sm">SEE MORE</a>
                </div>
            </div>
          </div>
          <div class="item bg-white shadow">
            <div class="hovereffect">
              <img class="img-fluid d-block mx-auto" src="icon/asd.png" style="width: 220px; margin-top: 25px;" >
              <div class="content">
                <h4 class="bg-secondary text-white">Air Cond Temperature</h4>
                <p class="text-justify mx-2"><a class="text-white">
                  Air conditioning temperature is monitored by AIR to keep its preferred performance.
                </a></p>
                <a href="#" class="btn btn-primary bg-aquamarine btn-sm">SEE MORE</a>
              </div>
            </div>
          </div>
          <div class="item bg-white shadow">
            <div class="hovereffect">
              <img class="img-fluid d-block mx-auto" src="icon/engine.png" style="width: 220px; margin-top: 25px;" >
              <div class="content">
                <h4 class="bg-secondary text-white">Servicing Engine Oil</h4>
                <p class="text-justify mx-2"><a class="text-white">
                  With AIR, the oil consumption is monitored to check high oil cunsumption.
                </a></p>
                  <a href="#" class="btn btn-primary bg-aquamarine btn-sm">SEE MORE</a>
                </div>
            </div>
          </div>
          <div class="item bg-white shadow">
            <div class="hovereffect">
              <img class="img-fluid d-block mx-auto" src="icon/main.png" style="width: 220px; margin-top: 25px;" >
              <div class="content">
                <h4 class="bg-secondary text-white">Battery Voltage</h4>
                <p class="text-justify mx-2"><a class="text-white">
                  AIR sees the trend and send an alert if the aircraft battery voltage reach the specified value.
                </a></p>
                <a href="../allgaruda/battery.php" type="submit" class="btn btn-primary bg-aquamarine btn-sm">SEE MORE</a>
              </div>
            </div>
          </div>
          <div class="item bg-white shadow">
            <div class="hovereffect">
              <img class="img-fluid d-block mx-auto" src="icon/stargen.png" style="width: 220px; margin-top: 25px;" >
              <div class="content">
                <h4 class="bg-secondary text-white">Stargen Brush </h4>
                <p class="text-justify mx-2"><a class="text-white">
                  AIR helps to monitor brush length and send alert to Engineering and Maintenance Support.
                </a></p>
                <a href="#" class="btn btn-primary bg-aquamarine btn-sm">SEE MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 bg-primary" style="	background-image: linear-gradient(to right, #61A528, #006197);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block" src="../../assets/Team/footer.png" width="75"></div>
        <div class="col-md-6 text-center d-md-flex align-items-center">
          <p class="mt-2 mb-0 mx-auto">© December 2019 GMF Aeroasia Hangar-3. All rights reserved</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
        </div>
      </div>
    </div>
  </div>
  <!-- Section 2 -->
  <!-- Section 3 -->
  <!-- Section 4 -->
  <!-- Footer -->
  <!-- Javascript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" charset="utf-8"></script>
  <script src="assets/js/scripts.js"></script>
 </body>

</html>
