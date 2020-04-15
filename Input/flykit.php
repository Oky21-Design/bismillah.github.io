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
  <link rel="stylesheet" href="../CSS/aquamarine.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
</head>

<body class="text-center">
  <!-- Navbar -->
  <!-- Cover -->
  <!-- Parallax section -->
  <!-- Navbar -->
  <!-- Schedule -->
  <!-- Sponsor logos -->
  <!-- Call to action -->
  <!-- Navbar -->
  <div class="py-5" style="background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <div class="row" style="">
        <div class="p-5 bg-white col-md-12 border input-group mt-3" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mt-3 text-center text-primary"><b>TOOLS</b></h3>
              </div>
            </div>
            <b>
              <div class="row">
              </div>
              <div class="row">
              </div>
              <form class="form-flykit">
                <div class="row">
                  <div class="col-md-12 my-4">
                    <div class="col-md-12" style="">
                      <div class="col-md-12 my-2"></div>
                      <div class="row" style="">
                        <div class="col-md-6 text-center" style=""><b class="">Tire Assy</b>
                          <div class="row">
                            <div class="col-md-4  offset-md-1" style="">
                              <div class="form-group text-center"><label><b>MW</b></label>
                                <div class="form-group">
                                  <div class="form-group"><input type="date" id="input1" name="mw_tanggal" class="form-control form-control-sm border" required="required" style="">
                                    <div class="form-group"><input type="text" id="input2" name="mw_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                      <div class="form-group" style=""><input id="input3" type="text" name="mw_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/Icon_NLG-01.png" width="95"></div>
                            <div class="col-md-4" style="">
                              <div class="form-group text-center"><label><b>NW</b></label>
                                <div class="form-group">
                                  <div class="form-group"><input type="date" id="input4" name="nw_tanggal" class="form-control form-control-sm border" required="required" style="" placeholder="Psi.">
                                    <div class="form-group"><input type="text" id="input5" name="nw_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                      <div class="form-group" style=""><input id="input6" type="text" name="nw_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6  text-center " style=""><b class="">Torque Wrench</b>
                          <div class="row">
                            <div class="col-md-4 offset-md-1 text-center" style="">
                              <div class="form-group text-center"><label><b>MLG</b></label>
                                <div class="form-group">
                                  <div class="form-group"><input type="date" id="input7" name="mtw_tanggal" class="form-control form-control-sm border" required="required" style="" placeholder="Psi.">
                                    <div class="form-group"><input type="text" id="input8" name="mtw_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                      <div class="form-group" style=""><input id="input9" type="text" name="mtw_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/TorqueWrench.png" width="75"></div>
                            <div class="col-md-4" style="">
                              <div class="form-group text-center"><label><b>NLG</b></label>
                                <div class="form-group">
                                  <div class="form-group"><input type="date" id="input10" name="ntw_tanggal" class="form-control form-control-sm border" required="required" style="" placeholder="Psi.">
                                    <div class="form-group"><input type="text" id="input11" name="ntw_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                      <div class="form-group" style=""><input id="input12" type="text" name="ntw_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
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
                  <div class="col-md-12 my-3"></div>
                </div>
                <div class="row" style="">
                  <div class="col-md-6 text-center" style=""><b class="">Adaptor Tools</b>
                    <div class="row">
                      <div class="col-md-4  offset-md-1" style="">
                        <div class="form-group text-center"><label><b>MLG</b></label>
                          <div class="form-group">
                            <div class="form-group"><input type="date" id="input13" name="mat_tanggal" class="form-control form-control-sm border" required="required" style="" placeholder="Psi.">
                              <div class="form-group"><input type="text" id="input14" name="mat_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                <div class="form-group" style=""><input id="input15" type="text" name="mat_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/AdaptorTools.png" width="85"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label><b>NLG</b></label>
                          <div class="form-group">
                            <div class="form-group"><input type="date" id="input16" name="nat_tanggal" class="form-control form-control-sm border" required="required" style="" placeholder="Psi.">
                              <div class="form-group"><input type="text" id="input17" name="nat_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                <div class="form-group" style=""><input id="input18" type="text" name="nat_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6  text-center " style=""><b class="">Tire Pressure Gauge</b>
                    <div class="row">
                      <div class="col-md-4 offset-md-1 text-center" style="">
                      </div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/Gauge.png" width="75" style=""></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label><b></b></label>
                          <div class="form-group">
                            <div class="form-group"><input type="date" id="input19" name="tpg_tanggal" class="form-control form-control-sm border" required="required" style="" placeholder="Psi.">
                              <div class="form-group"><input type="text" id="input20" name="tpg_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                <div class="form-group" style=""><input id="input21" type="text" name="tpg_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
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
                    <div class="col-md-12 my-3" style=""></div>
                    <div class="row" style="">
                      <div class="col-md-6 text-center" style=""><b class="" style="">Jack</b><b>&nbsp;NLG &amp; MLG</b>
                        <div class="row text-center">
                          <div class="col-md-4  offset-md-1" style="">
                            <div class="form-group text-center"><label></label>
                              <div class="form-group">
                                <div class="form-group"><input type="date" id="input22" name="nmj_tanggal" class="form-control form-control-sm border" required="required" style="" placeholder="Psi.">
                                  <div class="form-group"><input type="text" id="input23" name="nmj_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                    <div class="form-group" style=""><input id="input24" type="text" name="nmj_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 text-center" style=""><img class="img-fluid d-block mt-4 mx-auto" src="../icon/Jack.png" width="75" style="float:left"></div>
                          <div class="col-md-4" style=""></div>
                        </div>
                      </div>
                      <div class="col-md-6  text-center " style=""><b class="">Crew Seat Spring</b>
                        <div class="row">
                          <div class="col-md-4 offset-md-1 text-center" style=""></div>
                          <div class="col-md-3" style=""><img class="img-fluid d-block mt-4 mx-auto" src="../icon/seat.png" style="float:left" width="75"></div>
                          <div class="col-md-4" style="">
                            <div class="form-group text-center"><label><b></b></label>
                              <div class="form-group">
                                <div class="form-group"><input type="text" id="input25" name="css_ipn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Pn">
                                  <div class="form-group" style=""><input type="text" id="input26" name="css_isn" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="Sn"></div>
                                  <div class="form-group" style=""><input type="number" id="input27" name="css_pcs" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="ea"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="">
                      <div class="col-md-12 my-3 mt-4">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-2" style=""><button type="submit" id="flykit" class="btn btn-primary btn-block bg-aquamarine btn-sm mt-1 mb-3">Submit</button></div>
                              <div class="col-md-6" style=""></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12"><b>
                          <div class="row">
                          </div>
                          <p class="mt-3 text-danger"><span style="font-weight: 400;"><i>Date for input last inspection, expire date or available</i></span></p>
                        </b></div>
                    </div>
                  </div>
                </div>
              </form>
            </b>
          </div>
        </div><b>
        </b>
      </div><b style="">
      </b>
    </div><b>
    </b>
  </div><b>
  </b>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-secondary">
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
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"><a class="dropdown-item" href="../Home/logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
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
  <!-- JavaScript dependencies -->
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
  <script>
    $(document).ready(function() {
      $("#flykit").click(function() {
        var input1 = $("#input1").val();
        var input2 = $("#input2").val();
        var input3 = $("#input3").val();
        var input4 = $("#input4").val();
        var input5 = $("#input5").val();
        var input6 = $("#input6").val();
        var input7 = $("#input7").val();
        var input8 = $("#input8").val();
        var input9 = $("#input9").val();
        var input10 = $("#input10").val();
        var input11 = $("#input11").val();
        var input12 = $("#input12").val();
        var input13 = $("#input13").val();
        var input14 = $("#input14").val();
        var input15 = $("#input15").val();
        var input16 = $("#input16").val();
        var input17 = $("#input17").val();
        var input18 = $("#input18").val();
        var input19 = $("#input19").val();
        var input20 = $("#input20").val();
        var input21 = $("#input21").val();
        var input22 = $("#input22").val();
        var input23 = $("#input23").val();
        var input24 = $("#input24").val();
        var input25 = $("#input25").val();
        var input26 = $("#input26").val();
        var input27 = $("#input27").val();
        if (input1 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date MW Tire Assy Is Empty!', 'error')
        } else if (input2 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number MW Tire Assy Is Empty!', 'error')
        } else if (input3 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number MW Tire Assy Is Empty!', 'error')
        } else if (input4 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date NW Tire Assy Is Empty!', 'error')
        } else if (input5 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number NW Tire Assy Is Empty!', 'error')
        } else if (input6 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number NW Tire Assy Is Empty!', 'error')
        } else if (input7 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date MLG Torque Wrench Is Empty!', 'error')
        } else if (input8 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number MLG Torque Wrench Is Empty!', 'error')
        } else if (input9 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number MLG Torque Wrench Is Empty!', 'error')
        } else if (input10 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date NLG Torque Wrench Is Empty!', 'error')
        } else if (input11 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number NLG Torque Wrench Is Empty!', 'error')
        } else if (input12 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number NLG Torque Wrench Is Empty!', 'error')
        } else if (input13 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date MLG Adaptor Tools Is Empty!', 'error')
        } else if (input14 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number MLG Adaptor Tools Is Empty!', 'error')
        } else if (input15 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number MLG Adaptor Tools Is Empty!', 'error')
        } else if (input16 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date NLG Adaptor Tools Is Empty!', 'error')
        } else if (input17 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number NLG Adaptor Tools Is Empty!', 'error')
        } else if (input18 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number NLG Adaptor Tools Is Empty!', 'error')
        } else if (input19 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date Tire Pressure Gauge Is Empty!', 'error')
        } else if (input20 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number Tire Pressure Gauge Is Empty!', 'error')
        } else if (input21 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number Tire Pressure Gauge Is Empty!', 'error')
        } else if (input22 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Date NLG & MLG Jack Is Empty!', 'error')
        } else if (input23 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number NLG & MLG Jack Is Empty!', 'error')
        } else if (input24 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number NLG & MLG Jack Is Empty!', 'error')
        } else if (input25 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Part Number Crew Seat Spring Is Empty!', 'error')
        } else if (input26 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Serial Number Crew Seat Spring Is Empty!', 'error')
        } else if (input27 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'pcs Crew Seat Spring Is Empty!', 'error')
        } else {
          $.ajax({
            type: 'POST',
            url: "flykit_input.php",
            data: $(".form-flykit").serialize(),
            success: function(data) {
              Swal.fire({
                  icon: 'success',
                  title: 'Save Successfully!',
                  showConfirmButton: false,
                  timer: 2000
                }),
                setTimeout(function(data) {
                  window.location.href = "weekly.php";
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