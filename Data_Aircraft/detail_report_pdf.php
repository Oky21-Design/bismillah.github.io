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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  <script src="js/FileSaver.js"></script>
  <script src="js/jquery.wordexport.js"></script>
  <script src="js/jquery.table2excel.js"></script>
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
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="../input/profiles.php">Create Data Report</a><a class="dropdown-item" href="../input/labreport.php">Create Lab Data</a>
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
      <?php
              include "koneksi.php";
              if (isset($_GET['tanggal'])) {
                // jika ada ambil nilai tanggal
                $tanggal = $_GET['tanggal'];
              } else {
                // jika tidak ada redirect ke index.php
                header('Location:../home/dashboard.php');
              }
              $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE tanggal = '$tanggal' LIMIT 1");
              ?>
              <?php if(mysqli_num_rows($query)>0){ ?>
              <?php
              $no = 1;
              while($data = mysqli_fetch_array($query)){
              ?>
      <div id="print" class="row">
        <div id="page-content" class="p-5 bg-white col-md-12 border input-group mt-3 text-left" style="transition: all 0.25s;">
          <div id="table2excel" class="col-md-12">
            <div class="row">
              <div class="col-md-12 text-left">
                <h3 class="mt-3 text-primary text-left"><b><?php echo $data["pesawat"];?> <?php echo $data["kode"];?></b></h3>
              </div>
            </div>
            <div class="row">
              <div id="print">
                <div id="printableArea" class="col-md-12 table">
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>A/C Registration</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p class="text-justify"><?php echo $data["kode"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Date</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p class="text-justify"><?php echo $data["tanggal"];?></p>
                    </div>
                  </div>
                  <div class="row" style="">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Station</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p class="text-justify"><?php echo $data["station"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Maintance Type</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p class="text-justify"><?php echo $data["mt"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>A/C Releaseman</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p class="text-justify"><?php echo $data["ar"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>A/C Releaseman 2</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p class="text-justify"><?php echo $data["ar2"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Mechanic</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p class="text-justify"><?php echo $data["mechanic"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>Logbook Sequence (Pilot Report, Main Report)</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Seq No.&nbsp; &nbsp;: &nbsp; &nbsp; <?php echo $data["seq_ar"];?></i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p class="text-justify"><i>Reason&nbsp; &nbsp;: &nbsp; &nbsp; <?php echo $data["dess_ar"];?></i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>PN IN&nbsp; &nbsp; &nbsp; :&nbsp;</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>PN OUT :&nbsp;</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>SN IN&nbsp; &nbsp; &nbsp; :</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>SN OUT :</i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>Action / Rectification</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Seq No.&nbsp; :</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p class="text-justify"><i>Reason&nbsp; &nbsp;:</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>PN IN&nbsp; &nbsp; &nbsp; :&nbsp;</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>PN OUT :&nbsp;</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>SN IN&nbsp; &nbsp; &nbsp; :</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>SN OUT :</i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>Add Job (Engineering Order, etc)</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Seq No.&nbsp; :</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p class="text-justify"><i>Reason&nbsp; &nbsp;:</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>PN IN&nbsp; &nbsp; &nbsp; :&nbsp;</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>PN OUT :&nbsp;</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>SN IN&nbsp; &nbsp; &nbsp; :</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>SN OUT :</i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>MSAO</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Seq No.&nbsp; :</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p class="text-justify"><i>Reason&nbsp; &nbsp;:</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>PN IN&nbsp; &nbsp; &nbsp; :&nbsp;</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>PN OUT :&nbsp;</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><i>SN IN&nbsp; &nbsp; &nbsp; :</i></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><i>SN OUT :</i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>AML HIL</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Seq No.&nbsp; :</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p class="text-justify"><i>Reason&nbsp; &nbsp;:</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Category :&nbsp;</i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>NDB Due Date</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["due_dates"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>EEC Code</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["eec"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>PEC Code</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["pec"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>MFC Code</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["mfc"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Main Battery Voltage</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["mbv"];?> Volt.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Emmer Battery Voltage</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["ebv"];?> Volt.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6" style="">
                      <div class="row">
                        <div class="col-md-6 col-6 text-left">
                          <p><b>StartGen Brush #1 (WY)</b></p>
                        </div>
                        <div class="col-md-6 col-6 text-left">
                          <p><?php echo $data["sgb_one"];?> MM.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6" style="">
                      <div class="row">
                        <div class="col-md-6 col-6 text-left">
                          <p><i>Date of last inspection</i></p>
                        </div>
                        <div class="col-md-6 col-6 text-left">
                          <p><?php echo $data["last_inspect_one"];?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6" style="">
                      <div class="row">
                        <div class="col-md-6 col-6 text-left" style="">
                          <p><b>StartGen Brush #2 (WY)</b></p>
                        </div>
                        <div class="col-md-6 col-6 text-left" style="">
                          <p><?php echo $data["sgb_one"];?> MM.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6" style="">
                      <div class="row">
                        <div class="col-md-6 col-6 text-left">
                          <p><i>Date of last inspection</i></p>
                        </div>
                        <div class="col-md-6 col-6 text-left">
                          <p><?php echo $data["last_inspect_one"];?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>AirConditioning Temp (WY)</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4 offset-md-4 col-6 text-left" style="">
                          <p><u>AIR HIGH FLOW</u></p>
                        </div>
                        <div class="col-md-4 col-6 text-left" style="">
                          <p><u>NORMAL</u></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 text-left">
                          <p><i>FLT COMP TEMP</i></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["fct_afh"];?></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["fct_normal"];?></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 text-left">
                          <p><i>FLT DUCT TEMP</i></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["fdt_afh"];?></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["fdt_normal"];?></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 text-left">
                          <p><i>CAB COMP TEMP</i></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["cct_afh"];?></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["cct_normal"];?></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 text-left">
                          <p><i>CAB MFD TEMP</i></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["cmt_afh"];?></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["cmt_normal"];?></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 text-left">
                          <p><i>CAB DUCT TEMP</i></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["cdt_afh"];?></p>
                        </div>
                        <div class="col-md-4 col-6 text-left">
                          <p><?php echo $data["cdt_normal"];?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Fuel Draining (WY)</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["fueldraining"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Servicing Engine Oil #1</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["seo_one"];?> Qrt.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Servicing Engine Oil #2</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["seo_two"];?> Qrt.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Servicing Hyd</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["hydra"];?> Qrt.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Fuel Onboard</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["fob"];?> Kgs.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Crew Oxygen Press</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["cop"];?> Kgs.</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p class="text-nowrap"><b>MW Tire Pressure (Before)</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-3 text-left">
                          <p>(I) <?php echo $data["lmw_bi"];?> (I) Psi. <?php echo $data["lmw_bi_rl"];?></p>
                        </div>
                        <div class="col-md-3 text-left">
                        <p>(I) <?php echo $data["lmw_bii"];?> (I) Psi. <?php echo $data["lmw_bii_rl"];?></p>
                        </div>
                        <div class="col-md-3 text-left">
                        <p>(I) <?php echo $data["rmw_biii"];?> (I) Psi. <?php echo $data["rmw_biii_rl"];?></p>
                        </div>
                        <div class="col-md-3 text-left">
                        <p>(I) <?php echo $data["rmw_biv"];?> (I) Psi. <?php echo $data["rmw_biv_rl"];?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>MW Tire Pressure (After)</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["lmw_ai"];?> (I) Psi.</p>
                        </div>
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["lmw_aii"];?> (II) Psi.</p>
                        </div>
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["rmw_aiii"];?> (III) Psi.</p>
                        </div>
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["rmw_aiv"];?> (IV) Psi.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p class="text-nowrap"><b>NW Tire Pressure (Before)</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><?php echo $data["nw_bi"];?> (I) Psi.</p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><?php echo $data["nw_bii"];?> (II) Psi.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>NW Tire Pressure (After)</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p><?php echo $data["nw_ai"];?> (I) Psi.</p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p><?php echo $data["nw_aii"];?> (II) Psi.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>Brake Wear Pin</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["bwpb_one"];?> (I) mm.</p>
                        </div>
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["bwpa_one"];?> (II) mm.</p>
                        </div>
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["bwpb_two"];?> (III) mm.</p>
                        </div>
                        <div class="col-md-3 text-left">
                          <p><?php echo $data["bwpa_two"];?> (IV) mm.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>Cargo Compartement</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <p>FWD&nbsp; &nbsp;:&nbsp; <?php echo $data["before_com"];?></p>
                        </div>
                        <div class="col-md-6 text-left">
                          <p>AFT&nbsp; &nbsp;:&nbsp; <?php echo $data["after_com"];?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p style=""><b>Radome Condition</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["rc"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Boom Headset</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["b_head"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Headset</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["head"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Sign Of Leakage</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["sol"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>C OF R</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["cor"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>C OF A</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["coa"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>AASL</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["aasl"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Cert Insurance</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p><?php echo $data["ci"];?></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>CML HIL</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p class="text-justify"><i>Problem&nbsp; :</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Date&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:</i></p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-left">
                          <p><i>Category&nbsp; &nbsp;:</i></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Seat Cover Condition</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p>Jawaban.......................&nbsp;</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Exterior Appearance</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p>Jawaban.......................&nbsp;</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Carpet Condition</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p>Jawaban.......................&nbsp;</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 col-6 text-left" style="">
                      <p><b>Cabin Cleanless</b></p>
                    </div>
                    <div class="col-md-9 col-6 text-left" style="">
                      <p>Jawaban.......................&nbsp;</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 text-left" style="">
                      <p><b>FlyKit Status</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4 text-center" style="">
                          <p><u style="">PartNumber&nbsp;</u></p>
                        </div>
                        <div class="col-md-3 text-center" style="">
                          <p><u>SerialNumber&nbsp;</u></p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-nowrap"><u>Exp Date/Next Inspection/Availability</u></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>MW Tire Assy</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5 text-center" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>NW Tire Assy</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>MLG Torque Wrench</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>NLG Torque Wrench</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>NLG And MLG Jack</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>MLG Adapter Tool</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p style=""><b>NLG Adapter Tool</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>Tire Pressure Gage</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>NLG Adapter Tool</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5" style="">
                          <p class="text-center">21/09/1102</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row text-center">
                    <div class="col-md-3 text-left" style="">
                      <p><b>Crew Seat Spring</b></p>
                    </div>
                    <div class="col-md-9" style="">
                      <div class="row">
                        <div class="col-md-4" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-3" style="">
                          <p>234324234</p>
                        </div>
                        <div class="col-md-5 text-center" style="">
                          <p class="text-center">Jawaban.....EA.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php $no++; } ?>
            <?php } ?>
            <div class="row">
              <div class="col-md-12 col-12" style="transition: all 0.25s;">
                <div class="col-md-12 mb-3 text-center" style="">
                  <div class="row">
                    <div class="col-md-12"><b>Export to:</b></div>
                  </div><button class="btn mt-2 mx-1 btn-danger" onclick="printDiv('printableArea')">PDF</button>
                </div>
              </div>
            </div>
            <div class="row">
            </div>
          </div>
        </div>
        <div class="" style="transition: all 0.25s;">
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

  <!-- JavaScript dependencies -->
  <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  </script>
  <script>
                    $("#xcel").click(function(){

                      $("#table2excel").table2excel({
                        // exclude CSS class
                        exclude: ".noExl",
                        name: "Worksheet Name",
                        filename: "Report", //do not include extension
                        fileext: ".xls" // file extension
                      });
                    });
                    </script>
                    <script>
                  var doc = new jsPDF('landscape');
                  var specialElementHandlers = {
                      '#print-btn': function (element, renderer) {
                          return true;
                      }
                  };

                  $('#submit').click(function () {
                      doc.fromHTML($('#print').html(), 30, 30, {
                          'width': 300,
                              'elementHandlers': specialElementHandlers
                      });
                      doc.save('report.pdf');
                  });
                  </script>
  <!-- JavaScript dependencies -->
  
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" style=""></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" style=""></script>
 </body>

</html>