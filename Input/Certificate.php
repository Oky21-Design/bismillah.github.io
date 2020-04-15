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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
  <link rel="stylesheet" href="../CSS/aquamarine.css">
</head>

<body class="text-center">
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
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="profiles.php">Create Data Report</a><a class="dropdown-item" href="labreport.php">Create Lab Data</a>
            </div>
          </div>
          <div class="btn-group">
          <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">Hello, &nbsp; <?php echo $_SESSION['nama']; ?></b></button>
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);"><a class="dropdown-item" href="../Home/logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5" style="background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <form autocomplete="off" class="form-certificate">
      <div class="row">
        <div class="p-5 bg-white col-md-12 border input-group mt-3" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="mt-3 text-center text-primary"><b>Certificate</b></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-12">
                  <div class="col-md-12" style="">
                    <div class="col-md-12 text-left" style="">
                      <label class="text-left"><b>C Of R</b></label>
                    </div>
                    <div class="row" style="">
                      <div class="col-md-6" style="">
                        <div class="form-group"><small class="text-muted form-text text-left">Valid Until&nbsp;</small><input type="date" id="cer1" name="cor" class="form-control form-control-sm border" required="required" placeholder="Input" style=""></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-12">
                  <div class="col-md-12" style="">
                    <div class="col-md-12 text-left" style="">
                      <label class="text-left"><b>C Of A</b></label>
                    </div>
                    <div class="row" style="">
                      <div class="col-md-6" style="">
                        <div class="form-group"><small class="text-muted form-text text-left">Valid Until&nbsp;</small><input type="date" id="cer2" name="coa" class="form-control form-control-sm border" required="required" placeholder="Input" style=""></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-12" style="">
                  <div class="col-md-12" style="">
                    <div class="col-md-12 text-left" style="">
                      <label class="text-left"><b>A.A.S.L.</b></label>
                    </div>
                    <div class="row" style="">
                      <div class="col-md-6" style="">
                        <div class="form-group"><small class="text-muted form-text text-left">Valid Until&nbsp;</small><input type="date" id="cer3" name="aasl" class="form-control form-control-sm border" required="required" placeholder="Input" style=""></div>
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
                    <div class="col-md-12 text-left">
                      <label class="text-left"><b>Cert. Insurance</b></label>
                    </div>
                    <div class="row">
                      <div class="col-md-12" style="">
                        <div class="row">
                          <div class="col-md-6" style="">
                          <div class="form-group"><small class="text-muted form-text text-left">Valid Until&nbsp;</small><input type="date" id="cer4" name="ci" class="form-control form-control-sm border" required="required" placeholder="Input" style="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" >
                <div class="col-md-2" style=""><a id="cert" class="btn p-2 btn-light mb-3 mt-3 bg-aquamarine text-white btn-lg btn-block">Save</a></div>
              </div>
              <p class="mt-3 text-danger"><i>Input expire date of certificate&nbsp;</i></p>
            </div>
          </div>
        <div class="" style="">
          <div class="container">
            <div class="row">
            </div>
            <div class="row">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" style=""></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" style=""></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" style=""></script>
  <script>
    $(document).ready(function() {
      $("#cert").click(function() {
        var cer1 = $("#cer1").val();
        var cer2 = $("#cer2").val();
        var cer3 = $("#cer3").val();
        var cer4 = $("#cer4").val();
        if (cer1 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'C of R Is Empty!', 'error')
        } else if (cer2 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'C of A Is Empty!', 'error')
        } else if (cer3 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'A.A.S.L. Is Empty!', 'error')
        } else if (cer4 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Certificate insurance Is Empty!', 'error')
        } else {
          $.ajax({
            type: 'POST',
            url: "certificate_input.php",
            data: $(".form-certificate").serialize(),
            success: function(data) {
              Swal.fire({
                  icon: 'success',
                  title: 'Save Successfully!',
                  showConfirmButton: false,
                  timer: 2000
                }),
                setTimeout(function(data) {
                  window.location.href = "flykit.php";
                }, 2500);
            }
          });
          return false;
        }
      })
    })
  </script>
 </body>

</html>