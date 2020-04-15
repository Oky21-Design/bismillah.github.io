<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location: login.php?pesan=not_logged_in");
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
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
  <div class="section-parallax py-4 section-fade section-background realback" style="">
    <div class="container-fluid">
    </div>
  </div>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark asd" style="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block" src="../assets/Team/AIR Logo.png" width="75"></div>
      </div> <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse justify-content-start collapse" id="navbar4" style="">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 text-left pt-1"> <a class="nav-link text-dark " href="Homes_AfterLogin.php"><b class="text-light">HOME</b></a> </li>
          <li class="nav-item mx-2 text-left pt-1 text-light"> <a class="nav-link  text-dark " href="dashboard.php"><b class="text-light">DASHBOARD</b></a> </li>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">CREATE ARR</b>
            </button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="../input/profiles.php">Create Data Report</a><a class="dropdown-item" href="../input/labreport.php">Create Lab Data</a>
            </div>
          </div>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">Hello, &nbsp; <?php echo $_SESSION['nama']; ?></b></button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);"><a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <div class="">
    <div class="container">
      <div class="row">
      </div>
      <div class="row">
      </div>
    </div>
  </div>
  <!-- Navbar -->
  <div class="py-5 rou asd" style="">
    <div class="container">
      <div class="row">
      </div>
      <div class="row" style="">
        <div class="p-5 bg-white col-md-12 border mt-3 input-group" style="">
          <div class="col-md-12">
            <h2 class="text-primary"><b>DASHBOARD</b></h2>
            <div class="row">
              <div class="col-md-12" style="">
                <div class="row">
                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="grid-margin input-group col-md-12 hovereffect" style="">
                              <div class="card-body input-group" style="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12 card input-group" style="	height: 190px;	min-width: 200px;">
                                        <div class="row">
                                          <div class="col-md-12 bg-primary input-group text-uppercase" style="">
                                            <p class="font-weight-semibold mb-0"><b class="mt-2">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tia rate</b><br><br></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="wrapper">
                                              <small class="text-muted mt-2">YTD 2019</small>
                                              <p class="lead text-danger"><i><b><b>0,0263</b></b></i></p><small class="text-warning"><b>Target&nbsp; 0,012</b></small>
                                            </div>
                                          </div>
                                        </div>
                                        <p class="font-weight-semibold mb-0 text-info"><b>Week 12</b></p>
                                      </div>
                                    </div>
                                    <div class="d-flex py-2 border-bottom " style="">
                                      <div class="wrapper">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="#">View More</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wrapper rounded">
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
                          <div class="col-md-12">
                            <div class="grid-margin input-group col-md-12 hovereffect" style="">
                              <div class="card-body input-group" style="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12 card input-group" style="	height: 190px;	min-width: 200px;">
                                        <div class="row">
                                          <div class="col-md-12 bg-primary input-group text-uppercase" style="">
                                            <p class="font-weight-semibold mb-0"><b class="mt-2">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp;revenue Flight</b><br><br></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="wrapper">
                                              <small class="text-muted mt-2">YTD 2019</small>
                                              <p class="lead text-danger"><i><b><b>0,0263</b></b></i></p><small class="text-warning"><b>Target&nbsp; 0,012</b></small>
                                            </div>
                                          </div>
                                        </div>
                                        <p class="font-weight-semibold mb-0 text-info"><b>Week 12</b></p>
                                      </div>
                                    </div>
                                    <div class="d-flex py-2 border-bottom " style="">
                                      <div class="wrapper">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="#">View More</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wrapper rounded">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="">
                    <div class="row">
                      <div class="col-md-12 my-5"></div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 mt-4" style="">
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="grid-margin input-group col-md-12 hovereffect mt-3" style="">
                              <div class="card-body input-group" style="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12 card input-group" style="	height: 190px;	min-width: 200px;">
                                        <div class="row">
                                          <div class="col-md-12 bg-primary input-group text-uppercase" style="">
                                            <p class="font-weight-semibold mb-0"><b class="mt-2">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>&nbsp; &nbsp;dispatch reability&nbsp;</b><br><br></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="wrapper">
                                              <small class="text-muted mt-2">YTD 2019</small>
                                              <p class="lead text-danger"><i><b><b>0,0263</b></b></i></p><small class="text-warning"><b>Target&nbsp; 0,012</b></small>
                                            </div>
                                          </div>
                                        </div>
                                        <p class="font-weight-semibold mb-0 text-info"><b>Week 12</b></p>
                                      </div>
                                    </div>
                                    <div class="d-flex py-2 border-bottom " style="">
                                      <div class="wrapper">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="#">View More</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wrapper rounded">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="grid-margin input-group col-md-12 hovereffect" style="">
                              <div class="card-body input-group" style="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12 card input-group" style="	height: 190px;	min-width: 200px;">
                                        <div class="row">
                                          <div class="col-md-12 bg-primary input-group text-uppercase" style="">
                                            <p class="font-weight-semibold mb-0"><b class="mt-2">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Total fault</b><br><br></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="wrapper">
                                              <small class="text-muted mt-2">YTD 2019</small>
                                              <p class="lead text-danger"><i><b><b>0,0263</b></b></i></p><small class="text-warning"><b>Target&nbsp; 0,012</b></small>
                                            </div>
                                          </div>
                                        </div>
                                        <p class="font-weight-semibold mb-0 text-info"><b>Week 12</b></p>
                                      </div>
                                    </div>
                                    <div class="d-flex py-2 border-bottom " style="">
                                      <div class="wrapper">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="#">View More</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wrapper rounded">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="">
                        <div class="col-md-12">
                          <div class="col-md-12">
                            <div class="grid-margin input-group col-md-12 hovereffect" style="">
                              <div class="card-body input-group" style="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-12 card input-group" style="	height: 190px;	min-width: 200px;">
                                        <div class="row">
                                          <div class="col-md-12 bg-primary input-group text-uppercase" style="">
                                            <p class="font-weight-semibold mb-0"><b class="mt-2">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Total Flight</b><br><br></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="wrapper">
                                              <small class="text-muted mt-2">YTD 2019</small>
                                              <p class="lead text-danger"><i><b><b>0,0263</b></b></i></p><small class="text-warning"><b>Target&nbsp; 0,012</b></small>
                                            </div>
                                          </div>
                                        </div>
                                        <p class="font-weight-semibold mb-0 text-info"><b>Week 12</b></p>
                                      </div>
                                    </div>
                                    <div class="d-flex py-2 border-bottom " style="">
                                      <div class="wrapper">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="#">View More</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="wrapper rounded">
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
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12" style="">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12">
                            <h5 class="text-left text-primary"><b>Reporting Aircraft</b></h5>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-4 my-2" style="">
                                <div class="grid-margin stretch-card card input-group col-md-12 mx-auto hovereffect">
                                  <div class="card-body input-group" style="">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="d-flex py-2 border-bottom ">
                                          <div class="wrapper">
                                            <small class="text-muted">Reporting</small>
                                            <p class="font-weight-semibold mb-0"><b>Aircraft</b></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="../Data_Aircraft/Airgaruda.php">Garuda</a><a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="../Data_Aircraft/Aircitilink.php">Citilink</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="wrapper rounded">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 my-2" style="">
                                <div class="grid-margin stretch-card card input-group col-md-12 mx-auto hovereffect">
                                  <div class="card-body input-group" style="">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="d-flex py-2 border-bottom ">
                                          <div class="wrapper">
                                            <small class="text-muted">Reporting</small>
                                            <p class="font-weight-semibold mb-0"><b>All Aircraft</b></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="citilink/gjp.php">Garuda</a><a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="#">Update</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="wrapper rounded">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4 my-2 text-right" style="">
                                <div class="grid-margin stretch-card card input-group col-md-12 mx-auto hovereffect">
                                  <div class="card-body input-group" style="">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="d-flex py-2 border-bottom ">
                                          <div class="wrapper">
                                            <small class="text-muted">Reporting</small>
                                            <p class="font-weight-semibold mb-0"><b>Create ARR</b></p>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="citilink/gjr.php">Create</a><a class="btn btn-primary btn-sm m-2 bg-aquamarine info text-capitalize" href="citilink/gjr.php">Update</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="wrapper rounded">
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
                </div>
              </div>
            </div>
            <b>
              <div class="row">
              </div>
              <div class="row">
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </b>
          </div><b>
          </b>
        </div><b style="">
        </b>
      </div><b>
      </b>
    </div><b>
    </b>
  </div>
  <div class="py-3 bg-primary" style="	background-image: linear-gradient(to right, #61A528, #006197);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block" src="../assets/Team/Footer.png" width="75"></div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
  </body>

</html>