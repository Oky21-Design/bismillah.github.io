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
  <!-- Navbar -->
  <!-- Cover -->
  <!-- Parallax section -->
  <!-- Navbar -->
  <!-- Schedule -->
  <!-- Sponsor logos -->
  <!-- Call to action -->
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

  <div class="container-fluid">
  </div>
  <div class="py-5" style="background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <div class="row">
        <div class="p-5 bg-white col-md-12 border input-group mt-3">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mt-3 text-center"><b class="text-primary">LAB DATA</b></h3>
              </div>
            </div>
            <form autocomplete="off" class="form-lab" autocomplete="off">
              <div class="row">
                <div class="col-md-12">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 col-6">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group row"><label class=""><b>Aircraft</b></label><select type="text" name="pesawat" id="pesawat" class="form-control form-control-sm border" required="required">
                              <option value=""> Please Select </option>
                              <?php
                                      include "koneksi.php";
                                      $sql = mysqli_query($connect, "SELECT * FROM pesawat");
                                      while($data = mysqli_fetch_array($sql)){
                                        echo "<option value='".$data['id']."'>".$data['nama']."</option>";
                                      }
                              ?> 
                            </select></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-6">
                      <div class="col-md-12">
                        <div class="form-group row"><label class=""><b>Type Aircraft</b></label>
                          <select type="text" name="kode" id="kodes" class="form-control form-control-sm border" required="required">
                            <option value=""> Please Select </option>
                          </select></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 text-left col-6">
                      <div class="form-group"><label class=""><b class="text-nowrap">Sampling Date</b></label><input type="date" id="input1" name="sampling_date" class="form-control form-control-sm border" required="required"></div>
                    </div>
                    <div class="col-md-4 text-left col-6">
                      <div class="form-group"><label class=""><b>Next Date</b>
                        </label><input type="date" name="next_date" id="input2" class="form-control form-control-sm border" required="required"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group text-left"><label class=""><b class="text-left">Order No.</b></label><input type="number" name="no_or" id="input3" class="form-control form-control-sm border"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-6">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <div class="form-group"><label class=""><b>TAN</b></label><input type="number" name="tan" id="input4" class="form-control form-control-sm border" placeholder="microS/cm"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4">
                      <div class="form-group text-left"><label class=""><b>Action TAN :</b></label><textarea type="text" disabled="true" id="input5" name="action_tan" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_ar"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-6">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <div class="form-group"><label class="text-nowrap"><b>Water Content</b></label><input type="number" name="wc" id="input6" class="form-control form-control-sm border" placeholder="microS/cm"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4">
                      <div class="form-group text-left"><label class=""><b>Action Water Content :</b></label><textarea type="text" disabled="true" id="input7" name="action_wc" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_ar"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-6">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <div class="form-group"><label class=""><b>Density</b></label><input type="number" name="density" id="input8" class="form-control form-control-sm border" placeholder="microS/cm"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4">
                      <div class="form-group text-left"><label class=""><b>Action Density :</b></label><textarea type="text" disabled="true" id="input9" name="action_density" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_ar"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-6">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <div class="form-group text-nowrap"><label class=""><b>Kinematic Viscosity</b></label><input type="number" id="input10" name="kv" class="form-control form-control-sm border" placeholder="microS/cm"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4">
                      <div class="form-group text-left"><label class=""><b>Action&nbsp;Kinematic Viscosity :</b></label><textarea type="text" disabled="true" id="input11" name="action_kv" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_ar"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-6">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <div class="form-group text-nowrap"><label class=""><b>Chlorine Content</b></label><input type="number" id="input12" name="cc" class="form-control form-control-sm border" placeholder="microS/cm"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4">
                      <div class="form-group text-left"><label class=""><b>Action Chlorine Content :</b></label><textarea type="text" disabled="true" id="input13" name="action_cc" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_ar"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 col-6">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <div class="form-group"><label class=""><b class="text-nowrap">Electrical Conductivity</b></label><input type="number" id="input14" name="ec" class="form-control form-control-sm border" placeholder="microS/cm"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7 mb-4">
                      <div class="form-group text-left"><label class=""><b>Action Electrical Conductivity :</b></label><textarea type="text" disabled="true" id="input15" name="action_ec" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_ar"></textarea></div>
                    </div>
                  </div>
                  <div class="row my-4">
                    <div class="col-md-12 text-left mt-4">
                      <h4 class="text-primary"><b>Particle Size</b></h4>
                    </div>
                  </div>
                  <div class="row text-left">
                    <div class="col-md-4">
                      <div class="form-group"><label class=""><b>NAS Class</b></label>
                        <div class="form-group row">
                          <div class="col-10 col-md-12"><select type="text" id="input16" name="nas_class" class="form-control form-control-sm border" placeholder="Input Your Answer">
                              <option value="">---</option>
                              <option value="4"> 4 </option>
                              <option value="5"> 5 </option>
                              <option value="6"> 6 </option>
                              <option value="7"> 7 </option>
                              <option value="8"> 8 </option>
                              <option value="9"> 9 </option>
                              <option value="10"> 10 </option>
                            </select></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group"><label class=""><b>5 - 15&nbsp;µm</b></label><input type="number" id="input17" name="particle_i" class="form-control form-control-sm border" placeholder="µm"></div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group"><label class=""><b>15 - 25&nbsp;µm</b></label><input type="number" id="input18" name="particle_ii" class="form-control form-control-sm border" placeholder="µm"></div>
                    </div>
                  </div>
                  <div class="row text-left">
                    <div class="col-md-4">
                      <div class="form-group"><label class=""><b>25 - 50 µm</b></label><input type="number" id="input19" name="particle_iii" class="form-control form-control-sm border" placeholder="µm"></div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group"><label class=""><b>50 - 100 µm</b></label><input type="number" id="input20" name="particle_iv" class="form-control form-control-sm border" placeholder="µm"></div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group"><label class=""><b>&gt; 100&nbsp;µm</b></label><input type="number" id="input21" name="particle_v" class="form-control form-control-sm border" placeholder="µm"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group text-left mt-2"><label class=""><b>Action Particle Size :</b></label><textarea type="text" id="input22" name="action_particle" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_ar"></textarea></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2"><button id="submits" class="btn btn-primary btn-block bg-aquamarine btn-sm mt-1 mb-3"><b>Check &amp; Save<b></button></div>
                    <div class="col-md-6"></div>
                  </div>
                  <p class="mt-3 text-danger"><i>Input action after press button (Check and Save).</i></p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Navbar -->
  <!-- Footer -->
  <div class="py-3 bg-primary" style="	background-image: linear-gradient(to right, #61A528, #006197);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block  mx-auto" src="../assets/Team/footer.png" width="75"></div>
        <div class="col-md-6 text-center d-md-flex align-items-center">
          <p class="mt-2 mb-0 mx-auto">© December 2019 GMF Aeroasia Hangar-3. All rights reserved</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
        </div>
      </div>
    </div>
    <!-- JavaScript dependencies -->
    <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/config.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
    <script>
      $(document).ready(function() {
        $("#submits").click(function() {
          var pesawat = $("#pesawat").val();
          var kodes = $("#kodes").val();
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

          if (pesawat == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Aircraft Is Empty!', 'error')
          } else if (kodes == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Type Aircraft Is Empty!', 'error')
          } else if (input1 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Sampling Date Is Empty!', 'error')
          } else if (input2 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Next Date Is Empty!', 'error')
          } else if (input3 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Order No Is Empty!', 'error')
          } else if (input4 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'TAN Is Empty!', 'error')
          } else if (input4 > 1.5) {
            event.preventDefault();
            document.getElementById("input5").disabled = false;
            Swal.fire('CHECK AGAIN', 'TAN Is Reach The Max Limit Please Fill The Action', 'error')
          } else if (input6 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Water Content Is Empty!', 'error')
          } else if (input6 > 0.8) {
            event.preventDefault();
            document.getElementById("input7").disabled = false;
            Swal.fire('CHECK AGAIN', 'WATER CONTENT Is Reach The Max Limit Please Fill The Action', 'error')
          } else if (input8 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Density Is Empty!', 'error')
          } else if (input8 < 970 ) {
            event.preventDefault();
            document.getElementById("input9").disabled = false;
            Swal.fire('CHECK AGAIN', 'Action Density Is Reach The Min Limit Please Fill The Action', 'error')
          }else if (input8 > 1066 ) {
            event.preventDefault();
            document.getElementById("input9").disabled = false;
            Swal.fire('CHECK AGAIN', 'Action Density Is Reach The Max Limit Please Fill The Action', 'error')
          } else if (input10 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Kinematic Viscosity Is Empty!', 'error')
          } else if (input10 < 6 ) {
            event.preventDefault();
            document.getElementById("input11").disabled = false;
            Swal.fire('CHECK AGAIN', 'Kinematic Viscosity Is Reach The Min Limit Please Fill The Action', 'error')
          } else if (input10 > 12.5 ) {
            event.preventDefault();
            document.getElementById("input11").disabled = false;
            Swal.fire('CHECK AGAIN', 'Kinematic Viscosity Is Reach The Max Limit Please Fill The Action', 'error')
          }  else if (input12 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Chlorine Content Is Empty!', 'error')
          } else if (input12 > 200) {
            event.preventDefault();
            document.getElementById("input13").disabled = false;
            Swal.fire('CHECK AGAIN', 'Chlorine Content Is Reach The Max Limit Please Fill The Action', 'error')
          } else if (input14 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Electrical Conductivity Is Empty!', 'error')
          } else if (input14 < 0.30) {
            event.preventDefault();
            document.getElementById("input15").disabled = false;
            Swal.fire('CHECK AGAIN', 'Electrical Conductivity Is Reach The Max Limit Please Fill The Action', 'error')
          } else if (input16 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'NAS Class Is Empty!', 'error')
          } else if (input17 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', '5 - 15 µm Is Empty!', 'error')
          } else if (input18 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', '15 - 25 µm Is Empty!', 'error')
          } else if (input19 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', '25 - 50 µm Is Empty!', 'error')
          } else if (input20 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', '50 - 100 µm Is Empty!', 'error')
          } else if (input21 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', '> 100 µm Is Empty!', 'error')
          } else if (input22 == '') {
            event.preventDefault();
            Swal.fire('CHECK AGAIN', 'Action Particle Size Is Empty!', 'error')
          } else {
            $.ajax({
              method: 'POST',
              url: "labreport_input.php",
              data: $(".form-lab").serialize(),
              success: function(data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Your input has been saved!',
                    showConfirmButton: false,
                    timer: 2000
                  }),
                  setTimeout(function(data) {
                    window.location.href = "../home/dashboard.php";
                  }, 2500);
              }
            });
            return false;
          }
        })
      })
    </script>
  </div>
 </body>

</html>