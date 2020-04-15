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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>

<body class="text-center">
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
                <h3 class="mt-3 text-center"><b class="text-primary">CML HIL</b></h3>
              </div>
            </div>
            <div class="col-md-12 text-left" style="">
              <form name="add_name" id="add_name" autocomplete="off" class="form-cabin">
                <div class="table-responsive" id="dynamic_field">
                  <h4 class="text-left"><b>Cabin Problem</b></h4>
                  <div class="col-md-12 text-left">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group text-left"><label><b>CML Hil</b></label><textarea type="text" name="hil" placeholder="Input Problem" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border"></textarea></div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-6" style="">
                            <div class="form-group text-left"><label><b>Date</b></label><input type="date" name="exp_cml" class="form-control form-control-sm border" placeholder="Name / Code" style=""></div>
                          </div>
                          <div class="col-md-6 align-right">
                            <div class="form-group text-left"><label><b>Cat</b></label><select type="text" name="cat" class="form-control form-control-sm border" placeholder="Input Your Answer" style="">
                                <option value="">---</option>
                                <option value="A"> A </option>
                                <option value="b"> B </option>
                                <option value="C"> C </option>
                                <option value="d"> D </option>
                              </select>
                              <br>
                            </div>
                            <div class="row">
                              <div class="col-md-12 text-right"><button type="button" name="add" id="add" class="btn btn-link text-primary">Add More</button></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                  </div>
                  <script> $(document).ready(function(){
                    var i=1;
                    $('#add').click(function(){
                      i++;
                      $('#dynamic_field').append('<div id="row'+i+'"><div class="col-md-12 text-left" style=""><div class="row"><div class="col-md-4" style=""><div class="form-group text-left"><label><b>CML Hil</b>&nbsp;&nbsp;&nbsp;<button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></label><textarea type="text" name="hil'+i+'" placeholder="Input Problem" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border"></textarea></div></div><div class="col-md-6"><div class="row"><div class="col-md-6" style=""><div class="form-group text-left"><label><b>Date</b></label><input type="date" name="exp_cml'+i+'" class="form-control form-control-sm border" placeholder="Name / Code" style=""></div></div><div class="col-md-6 align-right"><div class="form-group text-left"><label><b>Cat</b></label><select type="text" name="cat'+i+'" class="form-control form-control-sm border" placeholder="Input Your Answer" style=""><option value="">---</option><option value="A"> A </option><option value="b"> B </option><option value="C"> C </option><option value="d"> D </option></select><br><br></div></div></div></div></div>');
                    });
                    
                    $(document).on('click', '.btn_remove', function(){
                      var button_id = $(this).attr("id"); 
                      $('#row'+button_id+'').remove();
                    });
                    
                  });
                  </script>
                </div>
            </div>
            <div class="row">
              <div class="col-md-2 text-right" style=""><a type="submit" id="cml" class="btn p-2 btn-light mb-3 mt-3 bg-aquamarine text-white btn-lg btn-block">Save</a></div>
            </div>
            <div class="row">
              <div class="col-md-12 my-4"></div>
            </div>
            </form>
            <h5 class="text-left"><b>Cabin Tools</b></h5>
            <form autocomplete="off" class="form-tools">
              <div class="row">
                <div class="col-md-4 my-2" style="">
                  <div class="row">
                    <div class="col-md-9 text-left" style=""><b>Carpet Condition</b></div>
                  </div><img class="img-fluid d-block mt-1" src="../icon/carpet.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;">&nbsp;&nbsp;<input type="radio" required="required" id="yes4" name="carpet_co" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no4" name="carpet_co" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"><textarea type="text" id="textArea4" name="txtcarpet_co" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                      <script> var yes4 = document.querySelectorAll('input[name="carpet_co"]');
                    var textArea4 = document.getElementById('textArea4');
                    var tempCarpet_co = "";

                    for(var i = 0; i < yes4.length; i++) {
                      yes4[i].addEventListener("change", Carpet_coHandler);
                    }


                    function Carpet_coHandler() {
                      if(this.id == "yes4") {
                        textArea4.disabled = false;
                        textArea4.value = tempCarpet_co;
                      } else {
                        tempCarpet_co = textArea4.value;
                        textArea4.value = "";
                        textArea4.disabled = true;
                      }
                    }
                    </script>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 my-2" style="">
                  <div class="row">
                    <div class="col-md-9 text-left" style=""><b>Cabin Cleanliness</b></div>
                  </div><img class="img-fluid d-block mt-1" src="../icon/CabinCleanlines.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;">&nbsp;&nbsp;<input type="radio" required="required" id="yes5" name="cabin_cl" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no5" name="cabin_cl" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"><textarea type="text" id="textArea5" name="txtcabin_cl" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                      <script> var yes5 = document.querySelectorAll('input[name="cabin_cl"]');
                    var textArea5 = document.getElementById('textArea5');
                    var tempCabin_cl = "";

                    for(var i = 0; i < yes5.length; i++) {
                      yes5[i].addEventListener("change", Cabin_clHandler);
                    }


                    function Cabin_clHandler() {
                      if(this.id == "yes5") {
                        textArea5.disabled = false;
                        textArea5.value = tempCabin_cl;
                      } else {
                        tempCabin_cl = textArea5.value;
                        textArea5.value = "";
                        textArea5.disabled = true;
                      }
                    }
                    </script>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 my-2" style="">
                  <div class="row">
                    <div class="col-md-9 text-left" style=""><b>Emergency Equipment</b></div>
                  </div><img class="img-fluid d-block mt-1" src="../icon/fire-emergency-010-512.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;">&nbsp;&nbsp;<input type="radio" required="required" id="yes6" name="ee" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no6" name="ee" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"><textarea type="text" id="textArea6" name="txtee" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                      <script> var yes6 = document.querySelectorAll('input[name="ee"]');
                    var textArea6 = document.getElementById('textArea6');
                    var tempEe = "";

                    for(var i = 0; i < yes6.length; i++) {
                      yes6[i].addEventListener("change", EeHandler);
                    }


                    function EeHandler() {
                      if(this.id == "yes6") {
                        textArea6.disabled = false;
                        textArea6.value = tempEe;
                      } else {
                        tempEe = textArea6.value;
                        textArea6.value = "";
                        textArea6.disabled = true;
                      }
                    }
                    </script>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 my-2" style="">
                  <div class="row text-left">
                    <div class="col-md-8" style=""><b>Seat cover condition</b></div>
                  </div><img class="img-fluid d-block mt-1" src="../icon/SeatCover.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;" class="scc">&nbsp; <input type="radio" required="required" id="yes2" name="scc" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no2" name="scc" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"><textarea type="text" id="textArea2" name="txtscc" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                      <script> var yes2 = document.querySelectorAll('input[name="scc"]');
                    var textArea2 = document.getElementById('textArea2');
                    var tempScc = "";

                    for(var i = 0; i < yes2.length; i++) {
                      yes2[i].addEventListener("change", SccHandler);
                    }


                    function SccHandler() {
                      if(this.id == "yes2") {
                        textArea2.disabled = false;
                        textArea2.value = tempScc;
                      } else {
                        tempScc = textArea2.value;
                        textArea2.value = "";
                        textArea2.disabled = true;
                      }
                    }
                    </script>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 my-2" style="">
                  <div class="row text-left">
                    <div class="col-md-8" style=""><b>Exterior Appearance</b></div>
                  </div><img class="img-fluid d-block mt-1" src="../icon/aprreance.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;" class="scc">&nbsp; <input type="radio" required="required" id="yes3" name="ea" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no3" name="ea" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group"><textarea type="text" id="textArea3" name="txtea" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                      <script>
                        var yes3 = document.querySelectorAll('input[name="ea"]');
                        var textArea3 = document.getElementById('textArea3');
                        var tempEa = "";
                        for (var i = 0; i < yes3.length; i++) {
                          yes3[i].addEventListener("change", EaHandler);
                        }

                        function EaHandler() {
                          if (this.id == "yes3") {
                            textArea3.disabled = false;
                            textArea3.value = tempEa;
                          } else {
                            tempEa = textArea3.value;
                            textArea3.value = "";
                            textArea3.disabled = true;
                          }
                        }
                      </script>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-md-12 my-3"></div>
              </div><b>
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
                    <div class="row">
                      <div class="col-md-2 text-right" style=""><a href="#" class="btn p-2 btn-light mb-3 mt-3 bg-aquamarine text-white btn-lg btn-block">Save</a></div>
                    </div>
                    <p class="mt-3 text-danger text-center"><span style="font-weight: normal;"><i>If no additional cml hil skip this section and if choose finding please input reason after.</i></span></p>
                  </div>
                </div>
              </b>
            </form>
          </div><b>
          </b>
        </div><b style="">
        </b>
      </div><b>
      </b>
    </div><b>
    </b>
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
 <!-- JavaScript dependencies -->
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
  <script>
    $(document).ready(function() {
      $("#cml").click(function() {
        $.ajax({
          method: 'POST',
          url: "cabin_problem.php",
          data: $(".form-cabin").serialize(),
          success: function(data) {
            Swal.fire({
                icon: 'success',
                title: 'Save Successfully!',
                text: 'You can fill cabin tools if you want'
              }),
              setTimeout(function(data) {
                e.preventDefault();
              }, 2500);
          }
        });
        return false;
      })
    })
  </script>
  <script>
    $(document).ready(function() {
      $("#tools").click(function() {
        $.ajax({
          method: 'POST',
          url: "cabin_tools.php",
          data: $(".form-tools").serialize(),
          success: function(data) {
            Swal.fire({
                icon: 'success',
                title: 'Save Successfully!',
                showConfirmButton: false,
                timer: 2000
              }),
              setTimeout(function(data) {
                window.location.href = "aircraftdata.php";
              }, 2500);
          }
        });
        return false;
      })
    })
  </script>
 </body>

</html>