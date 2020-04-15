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
      <form autocomplete="off" class="form-tire">
      <div class="row">
        <div class="p-5 bg-white col-md-12 border input-group mt-3" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="mt-3 text-center text-primary"><b>Tire Pressure</b></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3" style="">
                <div class="col-md-12">
                  <div class="form-group mt-3"><label><b>Due Date</b></label><input type="date" id="input1" name="due_dates" class="form-control form-control-sm border" required="required" style="" placeholder="Volt."></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="col-md-10   offset-md-2">
                  <div class="col-md-9 text-center" style="">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6"><b class="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nose Wheel&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</b>
                <div class="row">
                  <div class="col-md-3  offset-md-1" style="">
                    <div class="form-group text-center"><label><b>#1</b></label>
                      <div class="form-group">
                        <div class="form-group"><input type="number" id="input2" name="nw_bi" class="form-control form-control-sm mt-3 border" style="" placeholder="Before"></div>
                        <div class="form-group"><input type="number" id="input3" name="nw_ai" class="form-control form-control-sm mt-3 border" style="" placeholder="After"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style=""><img class="d-block mx-auto mt-3" src="../icon/Icon_NLG-01.png" width="100"></div>
                  <div class="col-md-3" style="">
                    <div class="form-group"><label><b>#2</b></label>
                      <div class="form-group">
                        <div class="form-group"><input type="number" id="input4" name="nw_bii" class="form-control form-control-sm mt-3 border" style="" placeholder="Before">
                          <div class="form-group"><input type="number" id="input5" name="nw_aii" class="form-control form-control-sm mt-3 border" placeholder="After"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3"></div>
            </div>
            <div class="row mt-5">
              <div class="col-md-5" style="">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group text-center"><label><b>#1</b></label>
                      <div class="form-group">
                        <div class="form-group"><input type="number" id="input6" name="lmw_bi" class="form-control form-control-sm border" required="required" style="" placeholder="Before">
                          <div class="form-group"><input type="number" id="input7" name="lmw_ai" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="After">
                            <div class="form-group"><select type="text" id="input8" name="lmw_bi_rl" class="form-control form-control-sm border mt-1" style="">
                                <option value=""> Retread </option>
                                <option value="R00"> R00 </option>
                                <option value="R01"> R01 </option>
                                <option value="R02"> R02 </option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"><b class="">LH Main Wheel</b><img class="d-block mx-auto mt-3" src="../icon/Icon_MLG_LH-01.png" width="85"></div>
                  <div class="col-md-4">
                    <div class="form-group text-center"><label><b>#2</b></label>
                      <div class="form-group">
                        <div class="form-group"><input type="number" id="input9" name="lmw_bii" class="form-control form-control-sm border" required="required" style="" placeholder="Before">
                          <div class="form-group"><input type="number" id="input10" name="lmw_aii" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="After">
                            <div class="form-group"><select type="text" id="input11" name="lmw_bii_rl" class="form-control form-control-sm border mt-1" placeholder="Input Your Answer" style="">
                                <option value=""> Retread </option>
                                <option value="R00"> R00 </option>
                                <option value="R01"> R01 </option>
                                <option value="R02"> R02 </option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5  offset-md-2" style="">
                <div class="row">
                  <div class="col-md-4" style="">
                    <div class="form-group"><label><b>#3</b></label>
                      <div class="form-group">
                        <div class="form-group"><input type="number" id="input12" name="rmw_biii" class="form-control form-control-sm border" required="required" style="" placeholder="Before">
                          <div class="form-group"><input type="number" id="input13" name="rmw_aiii" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="After">
                            <div class="form-group"><select type="text" id="input14" name="rmw_biii_rl" class="form-control form-control-sm border mt-1" placeholder="Input Your Answer" style="">
                                <option value=""> Retread </option>
                                <option value="R00"> R00 </option>
                                <option value="R01"> R01 </option>
                                <option value="R02"> R02 </option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style=""><b class="">RH Main Wheel</b><img class="d-block mx-auto mt-3" src="../icon/Icon_MLG_RH-01.png" width="85" style=""></div>
                  <div class="col-md-4" style="">
                    <div class="form-group text-center"><label><b>#4</b></label>
                      <div class="form-group">
                        <div class="form-group"><input type="number" id="input15" name="rmw_biv" class="form-control form-control-sm border" required="required" style="" placeholder="Before">
                          <div class="form-group mt-1"><input type="number" id="input16" name="rmw_aiv" class="form-control form-control-sm border" required="required" style="" placeholder="After">
                            <div class="form-group"><select type="text" id="input17" name="rmw_biv_rl" class="form-control form-control-sm border mt-1" placeholder="Input Your Answer" style="">
                                <option value=""> Retread </option>
                                <option value="R00"> R00 </option>
                                <option value="R01"> R01 </option>
                                <option value="R02"> R02 </option>
                              </select></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
              <div class="col-md-12 my-3" style="">
              <div class="col-md-2 text-right"><a id="tire" class="btn p-2 btn-light mb-3 mt-3 bg-aquamarine text-white btn-lg btn-block">Save</a></div>
           </div>
              </form>
            </div>
            <p class="mt-3 text-danger"><i>If there is no additional pressure, fill the field after with zero (0) value &amp; if you choose finding please input reason after.</i></p>
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
      $("#tire").click(function() {
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
        if (input1 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Due Date Is Empty!', 'error')
        } else if (input2 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before Nose Wheel #1 Is Empty!', 'error')
        } else if (input3 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After Nose Wheel #1 Is Empty!', 'error')
        } else if (input4 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before Nose Wheel #2 Is Empty!', 'error')
        } else if (input5 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After Nose Wheel #2 Is Empty!', 'error')
        } else if (input6 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before LH Main Wheel #1 Is Empty!', 'error')
        } else if (input7 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After LH Main Wheel #1 Is Empty!', 'error')
        } else if (input8 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Retread LH Main Wheel #1 Is Empty!', 'error')
        } else if (input9 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before LH Main Wheel #2 Is Empty!', 'error')
        } else if (input10 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After LH Main Wheel #2 Is Empty!', 'error')
        } else if (input11 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Retread LH Main Wheel #2 Is Empty!', 'error')
        } else if (input12 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before RH Main Wheel #3 Is Empty!', 'error')
        } else if (input13 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After RH Main Wheel #3 Is Empty!', 'error')
        } else if (input14 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Retread RH Main Wheel #3 Is Empty!', 'error')
        } else if (input15 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before RH Main Wheel #4 Is Empty!', 'error')
        } else if (input16 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After RH Main Wheel #4 Is Empty!', 'error')
        } else if (input17 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Retread RH Main Wheel #4 Is Empty!', 'error')
        } else {
          $.ajax({
            type: 'POST',
            url: "tire_input.php",
            data: $(".form-tire").serialize(),
            success: function(data) {
              Swal.fire({
                  icon: 'success',
                  title: 'Save Successfully!',
                  showConfirmButton: false,
                  timer: 2000
                }),
                setTimeout(function(data) {
                  window.location.href = "airframe.php";
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