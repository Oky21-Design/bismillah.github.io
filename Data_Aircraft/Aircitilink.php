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
  <link href="//db.onlinewebfonts.com/c/f1a22f6f15d272c7aa56da8b2c91f5e5?family=Circular+Std+Black" rel="stylesheet" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
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
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-secondary" style="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block" src="../assets/Team/AIR Logo.png" width="75"></div>
      </div> <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse justify-content-start collapse" id="navbar4" style="">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 text-left pt-1"> <a class="nav-link text-dark " href="../home/Homes_AfterLogin.php"><b class="text-light">HOME</b></a> </li>
          <li class="nav-item mx-2 text-left pt-1 text-light"> <a class="nav-link  text-dark " href="../home/dashboard.php"><b class="text-light">DASHBOARD</b></a> </li>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">CREATE ARR</b>
            </button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="../input/profiles.php">Create Data Report</a><a class="dropdown-item" href="../input/labreport.php">Create Lab Data</a>
            </div>
          </div>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">Hello, &nbsp; <?php echo $_SESSION['nama']; ?></b></button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"><a class="dropdown-item" href="../Home/logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <div class="py-5 text-center section-paralax" style="background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills pt-4">
            <li class="nav-item text-dark"> <a href="airgaruda.php" class="nav-link">Garuda</a> </li>
            <li class="nav-item"> <a href="aircitilink.php" class="nav-link active">Citilink</a> </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12"><img class="img-fluid d-block mx-auto my-3" src="../assets/Background/citilink.png" width="100"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2 my-2 col-6" style="">
              <div class="grid-margin stretch-card card input-group col-md-12 mx-auto hovereffect bg-white">
                <div class="card-body input-group" style="">
                  <div class="row">
                    <div class="col-md-12"><img class="p-0 col-md-12 d-none d-md-block" src="../assets/Background/asd.png" width="250px" style="">
                      <div class="d-flex py-2 border-bottom ">
                        <div class="wrapper">
                        <?php
                          include 'koneksi.php';
                          $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GJS' ORDER BY id DESC LIMIT 1");
                          ?>
                          <?php if(mysqli_num_rows($query)>0){ ?>
                          <?php
                          $no = 1;
                          while($data = mysqli_fetch_array($query)){
                          ?>
                          <small class="text-muted"><?php echo date("d/m/y", strtotime($data["tanggal"]));?></small>
                          <?php $no++; } ?>
                          <?php } ?>
                          <p class="font-weight-semibold mb-0"><b>PK-GJA</b></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <a class="btn btn-secodary btn-sm m-2 info text-capitalize text-primary text-left" href="Citilink/gja.php">View More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 my-2 col-6" style="">
              <div class="grid-margin stretch-card card input-group col-md-12 mx-auto hovereffect bg-white">
                <div class="card-body input-group" style="">
                  <div class="row">
                    <div class="col-md-12"><img class="p-0 col-md-12 d-none d-md-block" src="../assets/Background/asd.png" width="250px" style="">
                      <div class="d-flex py-2 border-bottom ">
                        <div class="wrapper">
                        <?php
                          include 'koneksi.php';
                          $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GJP' ORDER BY id DESC LIMIT 1");
                          ?>
                          <?php if(mysqli_num_rows($query)>0){ ?>
                          <?php
                          $no = 1;
                          while($data = mysqli_fetch_array($query)){
                          ?>
                          <small class="text-muted"><?php echo date("d/m/y", strtotime($data["tanggal"]));?></small>
                          <?php $no++; } ?>
                          <?php } ?>
                          <p class="font-weight-semibold mb-0"><b>PK-GJP</b></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <a class="btn btn-secodary btn-sm m-2 info text-capitalize text-primary text-left" href="Citilink/gjp.php">View More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 my-2 col-6" style="">
              <div class="grid-margin stretch-card card input-group col-md-12 mx-auto hovereffect bg-white">
                <div class="card-body input-group" style="">
                  <div class="row">
                    <div class="col-md-12"><img class="p-0 col-md-12 d-none d-md-block" src="../assets/Background/asd.png" width="250px" style="">
                      <div class="d-flex py-2 border-bottom ">
                        <div class="wrapper">
                        <?php
                          include 'koneksi.php';
                          $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GJR' ORDER BY id DESC LIMIT 1");
                          ?>
                          <?php if(mysqli_num_rows($query)>0){ ?>
                          <?php
                          $no = 1;
                          while($data = mysqli_fetch_array($query)){
                          ?>
                          <small class="text-muted"><?php echo date("d/m/y", strtotime($data["tanggal"]));?></small>
                          <?php $no++; } ?>
                          <?php } ?>
                          <p class="font-weight-semibold mb-0"><b>PK-GJR</b></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <a class="btn btn-secodary btn-sm m-2 info text-capitalize text-primary text-left" href="Citilink/gjr.php">View More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 my-2 col-6" style="">
              <div class="grid-margin stretch-card card input-group col-md-12 mx-auto hovereffect bg-white">
                <div class="card-body input-group" style="">
                  <div class="row">
                    <div class="col-md-12"><img class="p-0 col-md-12 d-none d-md-block" src="../assets/Background/asd.png" width="250px" style="">
                      <div class="d-flex py-2 border-bottom ">
                        <div class="wrapper">
                        <?php
                          include 'koneksi.php';
                          $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GJS' ORDER BY id DESC LIMIT 1");
                          ?>
                          <?php if(mysqli_num_rows($query)>0){ ?>
                          <?php
                          $no = 1;
                          while($data = mysqli_fetch_array($query)){
                          ?>
                          <small class="text-muted"><?php echo date("d/m/y", strtotime($data["tanggal"]));?></small>
                          <?php $no++; } ?>
                          <?php } ?>
                          <p class="font-weight-semibold mb-0"><b>PK-GJS</b></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <a class="btn btn-secodary btn-sm m-2 info text-capitalize text-primary text-left" href="Citilink/gjs.php">View More</a>
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
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12">
            <p class="text-danger mt-5" style=""><span style="font-weight: 400;"><i>Choose Aircraft to display report data</i></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="container-fluid">
      <div class="row">
      </div>
    </div>
  </div>
  <!-- Footer -->
  <b>
  </b>
  <b>
  </b>
  <div class="py-3 bg-primary" style="	background-image: linear-gradient(to right, #61A528, #006197);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block mx-auto" src="../assets/Team/footer.png" width="75"></div>
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
  <!-- JavaScript dependencies -->
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
 </body>

</html>