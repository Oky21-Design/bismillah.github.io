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
  <div class="py-5 " style="	background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;" >
    <div class="container">
      <div class="row py-3">
      </div>
      <div class="row">
        <div class="p-5 bg-white col-md-12 border input-group mt-3" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mt-3 text-center"><b class="text-primary">PROFILES</b></h3>
              </div>
            </div>
            <form autocomplete="off" class="form-user">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4" style="">
                    <div class="form-group">
                      <div class="form-group text-left"><label class=""><b>ARR Date</b></label><input type="date" id="input8" name="tanggal" class="form-control form-control-sm border" style=""></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4 text-left" style="">
                    <div class="form-group"><label class=""><b>Aircraft Realesman (1)</b>
                    </label><input type="text" id="input1" name="ar" class="form-control form-control-sm border" placeholder="Name / code" style=""></div>
                  </div>
                  <div class="col-md-4 text-left" style="">
                    <div class="form-group"><label class=""><b>Aircraft Realesman (II)</b>
                    </label><input type="text" name="ar2" class="form-control form-control-sm border" placeholder="Name / code" style=""></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4" style="">
                    <div class="form-group text-left"><label class=""><b>Mechanic</b></label>
                    <input type="text" id="input3" name="mechanic" class="form-control form-control-sm border" placeholder="Name / Code" style=""></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4" style="">
                    <div class="col-md-12" style="">
                      <div class="form-group">
                        <div class="form-group row"><label class=""><b>Aircraft</b></label><select type="text" name="pesawat" id="pesawat" class="form-control form-control-sm border" style="">
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
                  <div class="col-md-4" style="">
                    <div class="col-md-12" style="">
                      <div class="form-group row"><label class=""><b>Type Aircraft</b></label>
                      <select type="text" name="kode" id="kodes" class="form-control form-control-sm border" style="">
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
                  <div class="col-md-4" style="">
                    <div class="form-group">
                      <div class="form-group text-left"><label class=""><b>Maintenance Type</b></label><select type="text" id="input6" name="mt" class="form-control form-control-sm border" style="">
                          <option value=""> Please Select </option>
                          <option value="BD"> BD </option>
                          <option value="OOP+7"> OOP+7 </option>
                        </select></div>
                    </div>
                  </div>
                  <div class="col-md-4" style="">
                    <div class="form-group">
                      <div class="form-group text-left"><label class=""><b>Station</b></label><select type="text" id="input7" name="station" class="form-control form-control-sm border" style="">
                          <option value=""> Please Select </option>
                          <option value="CGK"> CGK </option>
                          <option value="KNO"> JAD </option>
                          <option value="PLM"> PLM </option>
                          <option value="BPN"> BPN </option>
                          <option value="PNK"> PNK </option>
                          <option value="HLP"> HLP </option>
                          <option value="BDO"> BDO </option>
                          <option value="SUB"> SUB </option>
                          <option value="DPS"> DPS </option>
                          <option value="LOP"> LOP </option>
                          <option value="UPG"> UPG </option>
                          <option value="MDC"> MDC </option>
                          <option value="BIK"> BIK </option>
                        </select></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-2" style=""><button id="submits" class="btn btn-primary btn-block bg-aquamarine btn-sm mt-1 mb-3">Submit</button></div>
                  </form>
                  <div class="col-md-6" style=""></div>
                </div>
                <p class="mt-3 text-danger"><i>Please Input Data Valid&nbsp; , Realesman (II) no required.</i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 my-5" ></div>
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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" style=""></script>
  <script src="js/config.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.3/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
<script>
$(document).ready(function(){
$("#submits").click(function(){
  var input1 = $("#input1").val();
  var input3 = $("#input3").val();
  var input4 = $("#pesawat").val();
  var input5 = $("#kodes").val();
  var input6 = $("#input6").val();
  var input7 = $("#input7").val();
  var input8 = $("#input8").val();

  if(input8 == ''){
    event.preventDefault();
    Swal.fire(
  'CHECK AGAIN',
  'ARR Date Is Empty!',
  'error'
)
}else if(input1 == ''){
    event.preventDefault();
    Swal.fire(
  'CHECK AGAIN',
  'Aircraft Realesmen (I) Is Empty!',
  'error'
)
}else if(input3 == ''){
    event.preventDefault();
    Swal.fire(
  'CHECK AGAIN',
  'Mechanic Is Empty!',
  'error'
)
}else if(input4 == ''){
    event.preventDefault();
    Swal.fire(
  'CHECK AGAIN',
  'Aircraft Is Empty!',
  'error'
)
}else if(input5 == ''){
    event.preventDefault();
    Swal.fire(
  'CHECK AGAIN',
  'Type Aircraft Is Empty!',
  'error'
)
}else if(input6 == ''){
    event.preventDefault();
    Swal.fire(
  'CHECK AGAIN',
  'Maintenance Type Is Empty!',
  'error'
)
}else if(input7 == ''){
    event.preventDefault();
    Swal.fire(
  'CHECK AGAIN',
  'Station Is Empty!',
  'error'
)
}else{
		$.ajax({
			method: 'POST',
			url: "profile_input.php",
			data: $(".form-user").serialize(),
			success: function(data){
        Swal.fire({
  icon: 'success',
  title: 'Your input has been saved!',
  showConfirmButton: false,
  timer: 2000
}),
        setTimeout(function(data) {
       window.location.href = "activity_ar.php";
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