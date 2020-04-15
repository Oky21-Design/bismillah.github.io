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
  <!-- Navbar -->
  <div class="py-5" style="background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <div class="row">
        <div class="p-5 bg-white col-md-12 border input-group mt-3">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mt-3 text-center"><b class="text-primary">Activity</b></h3>
                <div class="row">
                  <div class="col-md-12 col-12">
                    <ul class="nav nowrap">
                      <li class="nav-item bg-primary">
                        <a href="#" class="nav-link active"><b class="text-light">MSAO.</b></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><b>Others</b></a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="activity_aml.php"><b>AML HIL</b></a><a class="dropdown-item" href="#"><b>ACTION</b></a><a class="dropdown-item" href="#"><b>LOGBOOK</b></a><a class="dropdown-item" href="#"><b>ADDJOB</b></a>
                          <div class="dropdown-divider"></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 text-left">
              <form name="add_name" id="add_name" autocomplete="off" class="form-msao">
                <div class="responsive" id="dynamic_field">
                  <label class="mt-4"><b>MSAO :</b><span style="font-weight: normal;" class="scc"><i>&nbsp; &nbsp;&nbsp;<br>&nbsp;<input type="radio" required="required" id="yes" name="activity" value="Finding">&nbsp; Any Add&nbsp; &nbsp;&nbsp;<input type="radio" required="required" id="no" name="activity" value="No Finding">&nbsp;No Add&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</i></span></label>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <div class="form-group row">
                          <div class="col-10 col-md-12"><input type="text" id="seq_msao" name="seq_msao" class="form-control form-control-s form-control-sm border" placeholder="Seq :"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-10 col-md-6">
                      <div class="form-group">
                        <div class="form-group row">
                          <div class="col-10 col-md-12"><textarea type="text" name="dess_msao" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_msao"></textarea></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 text-right">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group"><input type="text" id="pno_msao" name="pno_msao" class="form-control form-control-sm border" placeholder="Part Number Out"></div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group"><input type="text" id="pni_msao" name="pni_msao" class="form-control form-control-sm border" placeholder="Part Number In"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group"><input type="text" id="sno_msao" name="sno_msao" class="form-control form-control-sm border" placeholder="Serial Number Out"></div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group"><input type="text" id="sni_msao" name="sni_msao" class="form-control form-control-sm border" placeholder="Serial Number In"></div>
                        </div>
                      </div><button type="button" name="add" id="add" class="btn btn-link text-primary">Add More</button>
                    </div>
                    <script>
                    var yes = document.querySelectorAll('input[name="activity"]');
                    var seq_msao = document.getElementById('seq_msao');
                    var dess_msao = document.getElementById('dess_msao');
                    var pno_msao = document.getElementById('pno_msao');
                    var pni_msao = document.getElementById('pni_msao');
                    var sno_msao = document.getElementById('sno_msao');
                    var sni_msao = document.getElementById('sni_msao');
                    var tempSeq = "";
                    var tempDess = "";
                    var tempPno_msao = "";
                    var tempPni_msao = "";
                    var tempSno_msao = "";
                    var tempSni_msao = "";

                    for(var i = 0; i < yes.length; i++) {
                      yes[i].addEventListener("change", SeqHandler);
                    }


                    function SeqHandler() {
                      if(this.id == "yes") {
                        seq_msao.disabled = false;
                        seq_msao.value = tempSeq;
                        dess_msao.disabled = false;
                        dess_msao.value = tempDess;
                        pno_msao.disabled = false;
                        pno_msao.value = tempPno_msao;
                        pni_msao.disabled = false;
                        pni_msao.value = tempPni_msao;
                        sno_msao.disabled = false;
                        sno_msao.value = tempSno_msao;
                        sni_msao.disabled = false;
                        sni_msao.value = tempSni_msao;
                      } else {
                        tempSeq = seq_msao.value;
                        seq_msao.value = "";
                        seq_msao.disabled = true;
                        tempDess = dess_msao.value;
                        dess_msao.value = "";
                        dess_msao.disabled = true;
                        tempPno_msao = pno_msao.value;
                        pno_msao.value = "";
                        pno_msao.disabled = true;
                        tempPni_msao = pni_msao.value;
                        pni_msao.value = "";
                        pni_msao.disabled = true;
                        tempSno_msao = sno_msao.value;
                        sno_msao.value = "";
                        sno_msao.disabled = true;
                        tempSni_msao = sni_msao.value;
                        sni_msao.value = "";
                        sni_msao.disabled = true;
                      }
                    }
                    </script>
                    <script>
                      $(document).ready(function() {
                        var i = 1;
                        $('#add').click(function() {
                          i++;
                          $('#dynamic_field').append('<div id="row' + i + '">&nbsp;&nbsp;&nbsp;<button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button><div class="col-md-12"><div class="form-group"><label class="mt-4"><b>MSAO :</b><span style="font-weight: normal;" class="scc"><i>&nbsp; &nbsp;&nbsp;<br>&nbsp;<input type="radio" required="required" id="yes2" name="scc" value="Finding" >&nbsp;Any Add&nbsp; &nbsp;&nbsp;<input type="radio" required="required" id="no2" name="scc" value="No Finding" >&nbsp;No Add&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</i></span></label><div class="row"><div class="col-md-2" ><div class="form-group"><div class="form-group row"><div class="col-10 col-md-12" ><input type="text" id="seq_msao'+i+'" name="seq_msao'+i+'" class="form-control form-control-s form-control-sm border" placeholder="Seq :"></div></div></div></div></div></label><div class="form-group row"><div class="col-10 col-md-6" ><div class="form-group"><div class="form-group row"><div class="col-10 col-md-12" ><textarea type="text" name="dess_msao'+i+'" placeholder="Reason" style="margin-top: 0px; margin-bottom: 0px; height: 88px;" class="form-control form-control- border" id="dess_msao'+i+'"></textarea></div></div></div></div><div class="col-md-6 text-right" ><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" id="pno_msao'+i+'" name="pno_msao'+i+'" class="form-control form-control-sm border" placeholder="Part Number Out"></div></div><div class="col-md-6"><div class="form-group"><input type="text" id="pni_msao'+i+'" name="pni_msao'+i+'" class="form-control form-control-sm border" placeholder="Part Number In"></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" id="sno_msao'+i+'" name="sno_msao'+i+'" class="form-control form-control-sm border" placeholder="Serial Number Out"></div></div><div class="col-md-6"><div class="form-group"><input type="text" id="sni_msao'+i+'" name="sni_msao'+i+'" class="form-control form-control-sm border" placeholder="Serial Number In"></div></div></div></div>');
                        });
                        $(document).on('click', '.btn_remove', function() {
                          var button_id = $(this).attr("id");
                          $('#row' + button_id + '').remove();
                        });
                      });
                    </script>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-2 text-right"><a id="msao" class="btn p-2 btn-light mb-3 mt-3 bg-aquamarine text-white btn-lg btn-block">Save</a></div>
            </div>
            </form>
            <div class="row">
              <div class="col-md-12 my-4">
                <p class="mt-3 text-danger text-center"><span style="font-weight: normal;"><i>If no additional cml hil skip this section and if choose finding please input reason after.</i></span></p>
              </div>
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
  <!-- JavaScript dependencies -->
  <script>
    $(document).ready(function() {
      $("#msao").click(function() {
        $.ajax({
          method: 'POST',
          url: "activity_input_msao.php",
          data: $(".form-msao").serialize(),
          success: function(data) {
            Swal.fire({
                icon: 'success',
                title: 'Save Successfully!',
                text: 'Please continue to AML HIL tab',
                showConfirmButton: false,
                timer: 2000
              }),
              setTimeout(function(data) {
                e.preventDefault();
                window.location.href = "activity.php";
              }, 2500);
          }
        });
        return false;
      })
    })
  </script>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
 </body>

</html>