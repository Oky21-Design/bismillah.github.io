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
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="../input/profiles.php">Create Data Report</a><a class="dropdown-item" href="labreport.php">Create Lab Data</a>
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
  <div class="py-5" style="background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <div class="row">
        <div class="p-5 bg-white col-md-12 border input-group mt-3" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="mt-3 text-center text-primary"><b>Airframe</b></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row" style="">
                  <div class="col-md-6 text-center" style=""><b class="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Servicing Engine Oil</b>
                    <div class="row">
                      <div class="col-md-4  offset-md-1" style="">
                        <div class="form-group text-center"><label><b>#1</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input type="number" id="inputs1" name="seo_one" class="form-control form-control-sm border mt-1 my-3" required="required" style="" placeholder="Qrt.">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/engine.png" width="100"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label><b>#2</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group">
                                <div class="form-group" style=""><input id="inputs2" type="number" class="form-control form-control-sm border my-3 mt-1" required="required" style="" placeholder="Qrt." name="seo_two"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6  text-center " style=""><b class="">&nbsp; &nbsp; Brake Wear pin</b>
                    <div class="row">
                      <div class="col-md-4 offset-md-1 text-center" style="">
                        <div class="form-group text-center"><label><b>#1</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input type="number" id="inputs3" name="bwpb_one" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="(I)">
                                <div class="form-group" style=""><input id="inputs4" type="number" name="bwpa_one" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="(II)"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/BrakeWearPin.png" width="100"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label><b>#2</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input id="inputs5" type="number" name="bwpb_two" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="(III)">
                                <div class="form-group" style=""><input id="inputs6" type="number" name="bwpa_two" class="form-control form-control-sm border mt-1" required="required" style="" placeholder="(IV)"></div>
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
                <div class="col-md-12 my-3"></div>
                <div class="row">
                  <div class="col-md-4  text-center " style=""><b class=""> Servicing Hydraulic</b>
                    <div class="row">
                      <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/serv.png" width="75"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input id="inputs7" type="number" name="hydra" class="form-control form-control-sm border mt-1 my-4" required="required" style="" placeholder="Qrt.">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 offset-md-1 text-center" style=""></div>
                    </div>
                  </div>
                  <div class="col-md-4  text-center " style=""><b class="" contenteditable="true">Fuel On Board</b>
                    <div class="row">
                      <div class="offset-md-1 text-center col-md-2" style=""></div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/fuel on board.png" width="75"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input id="inputs8" type="number" name="fob" class="form-control form-control-sm border mt-1 my-4" required="required" style="" placeholder="Qrt.">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4  text-center " style=""><b class="" contenteditable="true">Crew Oxygen Pass</b>
                    <div class="row">
                      <div class="col-md-4 offset-md-1 text-center" style=""></div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto mt-4" src="../icon/crewOxygenPass.png" width="75"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input id="inputs9" type="number" name="cop" class="form-control form-control-sm border mt-1 my-4" required="required" style="" placeholder="Qrt.">
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
            </div>
            <div class="col-md-12 my-3"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6" style="">
                    <div class="col-md-12 my-2" style="">
                      <div class="row">
                        <div class="col-md-9 text-left" style=""><b>Radome Condition</b></div>
                      </div><img class="img-fluid d-block mt-1" src="../icon/radome.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;">&nbsp;&nbsp;<input type="radio" required="required" id="yes3" name="rc" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no3" name="rc" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                      <div class="row">
                        <div class="col-md-10 offset-md-2" style="">
                          <div class="form-group"><textarea type="text" id="textArea3" name="txtrc" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                          <script> var yes3 = document.querySelectorAll('input[name="rc"]');
                    var textArea3 = document.getElementById('textArea3');
                    var tempRc = "";

                    for(var i = 0; i < yes3.length; i++) {
                      yes3[i].addEventListener("change", RcHandler);
                    }


                    function RcHandler() {
                      if(this.id == "yes3") {
                        textArea3.disabled = false;
                        textArea3.value = tempRc;
                      } else {
                        tempRc = textArea3.value;
                        textArea3.value = "";
                        textArea3.disabled = true;
                      }
                    }
                    </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6" style="">
                    <div class="col-md-12 my-2" style="">
                      <div class="row">
                        <div class="col-md-9 text-left" style=""><b>Sign Of Leakage</b></div>
                      </div><img class="img-fluid d-block mt-1" src="../icon/leakage.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;">&nbsp;&nbsp;<input type="radio" required="required" id="yes4" name="sol" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no4" name="sol" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                      <div class="row">
                        <div class="col-md-10 offset-md-2" style="">
                          <div class="form-group"><textarea type="text" id="textArea4" name="txtsol" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                          <script> var yes4 = document.querySelectorAll('input[name="sol"]');
                                                        var textArea4 = document.getElementById('textArea4');
                                                        var tempSol = "";

                                                        for(var i = 0; i < yes4.length; i++) {
                                                          yes4[i].addEventListener("change", SolHandler);
                                                        }


                                                        function SolHandler() {
                                                          if(this.id == "yes4") {
                                                            textArea4.disabled = false;
                                                            textArea4.value = tempSol;
                                                          } else {
                                                            tempSol = textArea4.value;
                                                            textArea4.value = "";
                                                            textArea4.disabled = true;
                                                          }
                                                        }
                                                        </script>
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
                  <div class="col-md-6" style="">
                    <div class="col-md-12 my-2" style="">
                      <div class="row">
                        <div class="col-md-9 text-left" style=""><b>Cargo Compartement (Before)</b></div>
                      </div><img class="img-fluid d-block mt-1 ml-2" src="../icon/Compartement.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;">&nbsp;&nbsp;<input type="radio" required="required" id="yes1" name="before_com" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no1" name="before_com" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                      <div class="row">
                        <div class="col-md-10 offset-md-2" style="">
                          <div class="form-group"><textarea type="text" id="textArea1" name="txtbefore_com" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                          <script> var yes1 = document.querySelectorAll('input[name="before_com"]');
                                                        var textArea1 = document.getElementById('textArea1');
                                                        var tempbefore_com = "";

                                                        for(var i = 0; i < yes1.length; i++) {
                                                          yes1[i].addEventListener("change", before_comHandler);
                                                        }


                                                        function before_comHandler() {
                                                          if(this.id == "yes1") {
                                                            textArea1.disabled = false;
                                                            textArea1.value = tempbefore_com;
                                                          } else {
                                                            tempbefore_com = textArea1.value;
                                                            textArea1.value = "";
                                                            textArea1.disabled = true;
                                                          }
                                                        }
                                                        </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6" style="">
                    <div class="col-md-12 my-2" style="">
                      <div class="row">
                        <div class="col-md-9 text-left" style=""><b>Cargo Compartement (After)</b></div>
                      </div><img class="img-fluid d-block mt-1 ml-2" src="../icon/Compartement.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;">&nbsp;&nbsp;<input type="radio" required="required" id="yes2" name="after_com" value="Finding">&nbsp;Finding&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br> &nbsp;<input type="radio" required="required" id="no2" name="after_com" value="No Finding" style="">&nbsp;No Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b>
                      <div class="row">
                        <div class="col-md-10 offset-md-2" style="">
                          <div class="form-group"><textarea type="text" id="textArea2" name="txtafter_com" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                          <script> var yes2 = document.querySelectorAll('input[name="after_com"]');
                                                        var textArea2 = document.getElementById('textArea2');
                                                        var tempafter_com = "";

                                                        for(var i = 0; i < yes2.length; i++) {
                                                          yes2[i].addEventListener("change", after_comHandler);
                                                        }


                                                        function after_comHandler() {
                                                          if(this.id == "yes2") {
                                                            textArea2.disabled = false;
                                                            textArea2.value = tempafter_com;
                                                          } else {
                                                            tempafter_com = textArea2.value;
                                                            textArea2.value = "";
                                                            textArea2.disabled = true;
                                                          }
                                                        }
                                                        </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row pt-3">
              <div class="col-md-2 text-right"><a id="airframe" class="btn p-2 btn-light mb-3 mt-3 bg-aquamarine text-white btn-lg btn-block">Save</a></div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <p class="text-danger mt-3 my-4"><i>If there is no additional pressure, fill the field after with zero (0) value &amp; if you choose finding please input reason after.</i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                  text: 'Please continue to Data 1 Tab'
                }),
                setTimeout(function(data) {
                  e.preventDefault();
                }, 2500);
            }
          });
          return false;
        }
      })
    })
  </script>
  <script>
    $(document).ready(function() {
      $("#airframe").click(function() {
        var inputs1 = $("#inputs1").val();
        var inputs2 = $("#inputs2").val();
        var inputs3 = $("#inputs3").val();
        var inputs4 = $("#inputs4").val();
        var inputs5 = $("#inputs5").val();
        var inputs6 = $("#inputs6").val();
        var inputs7 = $("#inputs7").val();
        var inputs8 = $("#inputs8").val();
        var inputs9 = $("#inputs9").val();
        var before_com = document.getElementsByName('before_com');
        var comValue = false;
        for (var i = 0; i < before_com.length; i++) {
          if (before_com[i].checked == true) {
            comValue = true;
          }
        }
        if (!comValue) {
          Swal.fire('CHECK AGAIN', 'Please Choose Before Compartement!', 'error')
          return false;
        }
        var after_com = document.getElementsByName('after_com');
        var comValue = false;
        for (var i = 0; i < after_com.length; i++) {
          if (after_com[i].checked == true) {
            comValue = true;
          }
        }
        if (!comValue) {
          Swal.fire('CHECK AGAIN', 'Please Choose After Compartement!', 'error')
          return false;
        }
        var rc = document.getElementsByName('rc');
        var rValue = false;
        for (var i = 0; i < rc.length; i++) {
          if (rc[i].checked == true) {
            rValue = true;
          }
        }
        if (!rValue) {
          Swal.fire('CHECK AGAIN', 'Please Choose Randome Condition!', 'error')
          return false;
        }
        var sol = document.getElementsByName('sol');
        var sValue = false;
        for (var i = 0; i < sol.length; i++) {
          if (sol[i].checked == true) {
            sValue = true;
          }
        }
        if (!sValue) {
          Swal.fire('CHECK AGAIN', 'Please Choose Sign Of Leakage!', 'error')
          return false;
        }
        if (inputs1 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Servicing Engine Oil #1 Is Empty!', 'error')
        } else if (inputs2 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Servicing Engine Oil #2 Is Empty!', 'error')
        } else if (inputs3 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before Brake Wear Pin #1 Is Empty!', 'error')
        } else if (inputs4 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After Brake Wear Pin #1 Is Empty!', 'error')
        } else if (inputs5 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Before Brake Wear Pin #2 Is Empty!', 'error')
        } else if (inputs6 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'After Brake Wear Pin #1 Is Empty!', 'error')
        } else if (inputs7 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Servicing Hydraulic Is Empty!', 'error')
        } else if (inputs8 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Fuel On Board Is Empty!', 'error')
        } else if (inputs9 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Crew Oxygen Press Is Empty!', 'error')
        } else {
          $.ajax({
            type: 'POST',
            url: "airframe_input.php",
            data: $(".form-airframe").serialize(),
            success: function(data) {
              Swal.fire({
                  icon: 'success',
                  title: 'Save Successfully!',
                  text: 'Please continue to Data 2 Tab'
                }),
                setTimeout(function(data) {
                  e.preventDefault();
                }, 2500);
            }
          });
          return false;
        }
      })
    })
  </script>
  <script>
    $(document).ready(function() {
      $("#avionic").click(function() {
        var inputas1 = $("#inputas1").val();
        var inputas2 = $("#inputas2").val();
        var inputas3 = $("#inputas3").val();
        var inputas4 = $("#inputas4").val();
        var pec = document.getElementsByName('pec');
        var pValue = false;
        for (var i = 0; i < pec.length; i++) {
          if (pec[i].checked == true) {
            pValue = true;
          }
        }
        if (!pValue) {
          Swal.fire('CHECK AGAIN', 'Please Choose P.E.C Code!', 'error')
          return false;
        }
        var eec = document.getElementsByName('eec');
        var eValue = false;
        for (var i = 0; i < eec.length; i++) {
          if (eec[i].checked == true) {
            eValue = true;
          }
        }
        if (!eValue) {
          Swal.fire('CHECK AGAIN', 'Please Choose E.E.C Code!', 'error')
          return false;
        }
        var mfc = document.getElementsByName('mfc');
        var mValue = false;
        for (var i = 0; i < mfc.length; i++) {
          if (mfc[i].checked == true) {
            mValue = true;
          }
        }
        if (!mValue) {
          Swal.fire('CHECK AGAIN', 'Please Choose M.F.C Code!', 'error')
          return false;
        }
        if (inputas1 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Headset Is Empty!', 'error')
        } else if (inputas2 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Boom Headset Is Empty!', 'error')
        } else if (inputas3 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Main Battery Is Empty!', 'error')
        } else if (inputas4 == '') {
          event.preventDefault();
          Swal.fire('CHECK AGAIN', 'Emmer Battery Is Empty!', 'error')
        } else {
          $.ajax({
            type: 'POST',
            url: "avionic_input.php",
            data: $(".form-avionic").serialize(),
            success: function(data) {
              Swal.fire({
                  icon: 'success',
                  title: 'Save Successfully!',
                  text: 'Please continue to Certificate Tab'
                }),
                setTimeout(function(data) {
                  e.preventDefault();
                }, 2500);
            }
          });
          return false;
        }
      })
    })
  </script>
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