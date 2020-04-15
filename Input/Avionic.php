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
  <div class="py-5" style="	background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <form autocomplete="off" class="form-avionic" style="">
      <div class="row">
        <div class="p-5 bg-white col-md-12 border input-group mt-3" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="mt-3 text-center text-primary"><b>Avionic</b></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row" style="">
                  <div class="col-md-6 text-center" style="">
                    <div class="row">
                      <div class="col-md-4  offset-md-1" style="">
                        <div class="form-group text-center"><label><b>Headset</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input id="inputas1" type="number" name="head" class="form-control form-control-sm border mt-1 my-3" required="required" style="" placeholder="Pcs.">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto my-3" src="../icon/Boomheadset.png" width="75"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label><b>Boom Headset</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group">
                                <div class="form-group" style=""><input id="inputas2" type="number" class="form-control form-control-sm border my-3 mt-1" required="required" style="" placeholder="pcs." name="b_head"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 text-center" style="">
                    <div class="row">
                      <div class="col-md-4  offset-md-1" style="">
                        <div class="form-group text-center"><label><b>Main Battery</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group"><input id="inputas3" type="number" name="mbv" class="form-control form-control-sm border mt-1 my-3" required="required" style="" placeholder="Volt.">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3" style=""><img class="d-block mx-auto my-3" src="../icon/main.png" width="75"></div>
                      <div class="col-md-4" style="">
                        <div class="form-group text-center"><label><b>Emmer. Battey</b></label>
                          <div class="form-group">
                            <div class="form-group">
                              <div class="form-group">
                                <div class="form-group" style=""><input id="inputas4" type="number" class="form-control form-control-sm border my-3 mt-1" required="required" style="" placeholder="Volt." name="ebv"></div>
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
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5 class="text-left text-primary"><b>Code</b></h5>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4" style="">
                    <div class="col-md-12 my-2" style="">
                      <div class="row text-left">
                        <div class="col-md-8" style=""><b>P.E.C Code</b></div>
                      </div><img class="img-fluid d-block mt-1" src="../icon/code.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;" class="scc"><br>&nbsp;<input type="radio" required="required" id="yes5" name="pec" value="Finding">Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><input type="radio" required="required" id="not" name="pec" value="No Finding" style="">No Finding&nbsp;<br><br></span></b>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group"><textarea type="text" id="textArea5" name="txtpec" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                          <script> var yes5 = document.querySelectorAll('input[name="pec"]');
                                                          var textArea5 = document.getElementById('textArea5');
                                                          var tempPec = "";

                                                          for(var i = 0; i < yes5.length; i++) {
                                                            yes5[i].addEventListener("change", PecHandler);
                                                          }


                                                          function PecHandler() {
                                                            if(this.id == "yes5") {
                                                              textArea5.disabled = false;
                                                              textArea5.value = tempPec;
                                                            } else {
                                                              tempPec = textArea5.value;
                                                              textArea5.value = "";
                                                              textArea5.disabled = true;
                                                            }
                                                          }
                                                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="">
                    <div class="col-md-12 my-2" style="">
                      <div class="row text-left">
                        <div class="col-md-8" style=""><b>E.E.C. Code</b></div>
                      </div><img class="img-fluid d-block mt-1" src="../icon/code.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;" class="scc"><br>&nbsp;<input type="radio" required="required" id="yes6" name="eec" value="Finding">Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><input type="radio" required="required" id="no6" name="eec" value="No Finding" style="">No Finding&nbsp;<br><br></span></b>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group"><textarea type="text" id="textArea6" name="txteec" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                          <script> var yes6 = document.querySelectorAll('input[name="eec"]');
                                                          var textArea6 = document.getElementById('textArea6');
                                                          var tempEec = "";

                                                          for(var i = 0; i < yes6.length; i++) {
                                                            yes6[i].addEventListener("change", EecHandler);
                                                          }


                                                          function EecHandler() {
                                                            if(this.id == "yes6") {
                                                              textArea6.disabled = false;
                                                              textArea6.value = tempEec;
                                                            } else {
                                                              tempEec = textArea6.value;
                                                              textArea6.value = "";
                                                              textArea6.disabled = true;
                                                            }
                                                          }
                                                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4" style="">
                    <div class="col-md-12 my-2" style="">
                      <div class="row text-left">
                        <div class="col-md-8" style=""><b>M.F.C. Code</b></div>
                      </div><img class="img-fluid d-block mt-1" src="../icon/code.png" style="float:left" width="75"> <b style=""><span style="font-weight: normal;" class="scc"><br>&nbsp;<input type="radio" required="required" id="yes7" name="mfc" value="Finding">Finding&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<br><input type="radio" required="required" id="no7" name="mfc" value="No Finding" style="">No Finding&nbsp;<br><br></span></b>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group"><textarea type="text" id="textArea7" name="txtmfc" placeholder="problem" style="margin-top: 0px; margin-bottom: 0px; height: 32px;" class="form-control form-control- border"></textarea></div>
                          <script> var yes7 = document.querySelectorAll('input[name="mfc"]');
                                                        var textArea7 = document.getElementById('textArea7');
                                                        var tempMfc = "";

                                                        for(var i = 0; i < yes7.length; i++) {
                                                          yes7[i].addEventListener("change", MfcHandler);
                                                        }


                                                        function MfcHandler() {
                                                          if(this.id == "yes7") {
                                                            textArea7.disabled = false;
                                                            textArea7.value = tempMfc;
                                                          } else {
                                                            tempMfc = textArea7.value;
                                                            textArea7.value = "";
                                                            textArea7.disabled = true;
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
              <div class="col-md-2 text-right"><a id="avionic" class="btn p-2 btn-light mb-3 mt-3 bg-aquamarine text-white btn-lg btn-block">Save</a></div>
           </div>
            </form>
            </div>
            <div class="row">
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
                  showConfirmButton: false,
                  timer: 2000
                }),
                setTimeout(function(data) {
                  window.location.href = "Certificate.php";
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