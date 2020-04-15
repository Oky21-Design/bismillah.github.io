<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location: ../home/login.php?pesan=not_logged_in");
	}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="../assets/Team/AIR Logo.png">
  <title>Aircraft Integrated Report </title>
  <meta name="description">
  <meta name="keywords">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="aquamarine.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
  <link rel="stylesheet" href="../CSS/aquamarine.css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <link rel="stylesheet" href="../CSS/aquamarine.css">
</head>

<body class="text-center">
  <!-- Navbar -->
  <!-- Cover -->
  <!-- Parallax section -->
  <!-- Navbar -->
  <!-- Schedule -->
  <!-- Sponsor logos -->
  <!-- Call to action -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top" style="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block" src="../assets/Team/AIR Logo.png" width="75"></div>
      </div> <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbar4" style="">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 text-left pt-1"> <a class="nav-link text-dark " href="homes_afterlogin.php"><b class="text-light">HOME</b></a> </li>
          <li class="nav-item mx-2 text-left pt-1 text-light"> <a class="nav-link  text-dark " href="dashboard.php"><b class="text-light">DASHBOARD</b></a> </li>
          <li class="nav-item mx-2 text-left pt-1 text-light"> <a class="nav-link  text-dark " href="../input/profiles.php"><b class="text-light">CREATE ARR</b></a> </li>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">Hello, &nbsp; <?php echo $_SESSION['nama']; ?></b></button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);"><a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 body py-5" style="	background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
          <div class="row">
            <div class="col-md-5 mt-5 p-5" style=""><img class="img-fluid d-block mx-auto rounded pt-5" src="../assets/Team/AIR Logo.png" width="250px">
              <p class="my-3">We are dedicated to enable the internet of things. Our primary focus is making a better work environment. We make it safer, faster and easier for you to report and see aircraft readiness anywhere, anytime.</p>
             <a class="btn mx-1 btn-outline-primary btn-sm" href="About Us_AfterLogin.php">See More</a>
            </div>
            <div class="col-md-7 pb-5" style=""><img class="col-md-12 d-none d-md-block p-0 my-3" src="../assets/Background/tes.png" height="450px"></div>
          </div>
        </div>
      </div><b>
      </b>
    </div><b>
    </b>
  </div>
  <div class="bg-primary py-3" style="	background-image: linear-gradient(to right, #61A528, #006197);	background-position: top left;	background-size: no-;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block mx-auto" src="../assets/Team/Footer.png" width="75"></div>
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
  <!-- Footer -->
  <!-- JavaScript dependencies -->
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="js/config.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
  </body>

</html>