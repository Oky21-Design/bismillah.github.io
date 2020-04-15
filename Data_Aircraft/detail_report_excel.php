<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location: ../../../home/login.php?pesan=not_logged_in");
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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="js/FileSaver.js"></script>
  <script src="js/jquery.table2excel.js"></script>

  <style> table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;


}
#back{
background-color: red;
}
</style>
</head>

<body class="text-center">
  <!-- Navbar -->
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
  <!-- Cover -->
  <!-- Parallax section -->
  <!-- Navbar -->
  <!-- Schedule -->
  <!-- Sponsor logos -->
  <!-- Call to action -->
  <div class="py-5" style="background-image: url(&quot;../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-12 d-flex flex-column justify-content-center p-3" style="">
          <div class="row">
            <div class="col-md-12 my-3">
              <div class="card-body bg-white text-dark input-group" style="">
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
                <div class="row" style="">
                  <div class="col-md-12" style="">
                  <h2 class="text-primary"><b>&nbsp;<?php echo $data["pesawat"];?> <?php echo $data["kode"];?></b></h2>
                  </div>
                </div>
                <blockquote class="mb-0" style=""></blockquote>
                <div id="print" class="tbl-content" style="height: 350px;">
                  <div id="page-content">
                    <div id="table2excel">
                      <form id="konten" action="" method="post">
              <table>
              <tr>
                  <td width="400px">A/C Registration</td>
                  <td width="750px"><?php echo $data["kode"];?></td>
              </tr>
              <tr>
                  <td>Date</td>
                  <td><?php echo $data["tanggal"];?></td>
              </tr>
              <tr>
                  <td>Station</td>
                  <td><?php echo $data["station"];?></td>
              </tr>
              <tr>
                  <td>Maintance Type</td>
                  <td><?php echo $data["mt"];?></td>
              </tr>
              <tr>
                  <td>A/C Releaseman</td>
                  <td><?php echo $data["ar"];?></td>
              </tr>
              <tr>
                  <td>A/C Releaseman 2</td>
                  <td><?php echo $data["ar2"];?></td>
              </tr>
              <tr>
                  <td>Mechanic</td>
                  <td><?php echo $data["mechanic"];?></td>
              </tr>
              </table>
              <br>
              <table>
              <tr>
                  <td width="355px">Logbook Sequence<br>(Pilot Report, Maint Report)</td>
                  <td>Seq No.<?php echo $data["seq_log"];?></td>
                  <td width="550px"><?php echo $data["dess_log"];?></td>
              </tr>
              </table>
              <br>
              <table>
              <tr>
                  <td width="355px">Action / Rectification</td>
                  <td>Seq No.<?php echo $data["seq_ar"];?></td>
                  <td width="550px"><?php echo $data["dess_ar"];?></td>
              </tr>
              </table>
              <table>
              <tr>
                  <td width="355px"></td>
                  <td>PN IN : <?php echo $data["pni_ar"];?> <br> SN IN : <?php echo $data["sni_ar"];?>
                  </td>
                  <td>PN OUT : <?php echo $data["pno_ar"];?> <br> SN OUT : <?php echo $data["sno_ar"];?>
                  </td>
              </tr>
              </table>
              <table>
              <tr>
                  <td width="355px">Add Job (Engineering Order, etc)</td>
                  <td><?php echo $data["dess_add"];?></td>
              </tr>
              <tr>
                  <td>MSAO</td>
                  <td><?php echo $data["dess_msao"];?></td>
              </tr>
              </table>
              <table>
              <tr>
                  <td width="355px">AML HIL</td>
                  <td width="324px"><?php echo $data["dess_aml"];?></td>
                  <td>CAT : <?php echo $data["cat_aml"];?></td>
              </tr>
              </table>
              <table>
              <tr>
                  <td width="355px"></td>
                  <td width="324px"></td>
                  <td>HIL Input and Match to SWIFT : <?php echo $data["hil_aml"];?></td>
              </tr>
              </table>
              <table>
              <tr>
                  <td width="355px">NDB Due Date</td>
                  <td><?php echo $data["due_dates"];?></td>
              </tr>
              <tr>
                  <td width="355px">EEC Code</td>
                  <td><?php echo $data["eec"];?></td>
              </tr>
              <tr>
                  <td width="355px">PEC Code</td>
                  <td><?php echo $data["pec"];?></td>
              </tr>
              <tr>
                  <td width="355px">MFC Code</td>
                  <td><?php echo $data["mfc"];?></td>
              </tr>
              </table>
              <table>
              <tr>
                  <td width="355px">Main Battery Voltage</td>
                  <td width="140px"><?php echo $data["mbv"];?> Volt</td>
                  <td>Emmer Battery Voltage</td>
                  <td width="259px"><?php echo $data["ebv"];?> Volt</td>
              </tr>
              <tr>
                  <td>StartGen Brush #1 (WY)</td>
                  <td><?php echo $data["sgb_one"];?> MM</td>
                  <td>Date of last inspection</td>
                  <td><?php echo $data["last_inspect_one"];?></td>
              </tr>
              <tr>
                  <td>StartGen Brush #2 (WY)</td>
                  <td><?php echo $data["sgb_two"];?> MM</td>
                  <td>Date of last inspection</td>
                  <td><?php echo $data["last_inspect_two"];?></td>
              </tr>
              </table>
              <table>
              <tr>
                <td width="355px">AirConditioning Temp (WY)</td>
                <td width="140px"></td>
                <td >AIR HIGH FLOW</td>
                <td width="259px">NORMAL</td>
              </tr>
              <tr>
                <td></td>
                <td>FLT COMP TEMP</td>
                <td><?php echo $data["fct_afh"];?></td>
                <td><?php echo $data["fct_normal"];?></td>
              </tr>
              <tr>
                <td></td>
                <td>FLT DUCT TEMP</td>
                <td><?php echo $data["fdt_afh"];?></td>
                <td><?php echo $data["fdt_normal"];?></td>
              </tr>
              <tr>
                <td></td>
                <td>CAB COMP TEMP</td>
                <td><?php echo $data["cct_afh"];?></td>
                <td><?php echo $data["cct_normal"];?></td>
              </tr>
              <tr>
                <td></td>
                <td>CAB MFD TEMP</td>
                <td><?php echo $data["cmt_afh"];?></td>
                <td><?php echo $data["cmt_normal"];?></td>
              </tr>
              <tr>
                <td></td>
                <td>CAB DUCT TEMP</td>
                <td><?php echo $data["cdt_afh"];?></td>
                <td><?php echo $data["cdt_normal"];?></td>
              </tr>
              </table>
              <table>
              <tr>
              <td width="355px">Fuel Draining (WY)</td>
              <td><?php echo $data["fueldraining"];?></td>
              </tr>
              <tr>
              <td width="355px">Servicing Engine Oil #1</td>
              <td><?php echo $data["seo_one"];?> Qrt</td>
              </tr>
              <tr>
              <td width="355px">Servicing Engine Oil #2</td>
              <td><?php echo $data["seo_two"];?> Qrt</td>
              </tr>
              <tr>
              <td width="355px">Servicing Hyd</td>
              <td><?php echo $data["hydra"];?> Qrt</td>
              </tr>
              <tr>
              <td width="355px">Fuel Onboard</td>
              <td><?php echo $data["fob"];?> KGS</td>
              </tr>
              <tr>
              <td width="355px">Crew Oxygen Press</td>
              <td><?php echo $data["cop"];?> PSI</td>
              </tr>
              </table>
              <table>
              <tr>
              <td width="355px">MW Tire Pressure (Before)</td>
              <td>(I) <?php echo $data["lmw_bi"];?> Psi <?php echo $data["lmw_bi_rl"];?></td>
              <td>(II) <?php echo $data["lmw_bii"];?> Psi <?php echo $data["lmw_bii_rl"];?></td>
              <td>(III) <?php echo $data["rmw_biii"];?> Psi <?php echo $data["rmw_biii_rl"];?></td>
              <td>(IV) <?php echo $data["rmw_biv"];?> Psi <?php echo $data["rmw_biv_rl"];?></td>
              </tr>
              <tr>
              <td width="355px">MW Tire Pressure (After)</td>
              <td>(I) <?php echo $data["lmw_ai"];?> Psi </td>
              <td>(II) <?php echo $data["lmw_aii"];?> Psi </td>
              <td>(III) <?php echo $data["rmw_aiii"];?> Psi </td>
              <td>(IV) <?php echo $data["rmw_aiv"];?> Psi </td>
              </tr>
              </table>
              <table>
              <tr>
              <td width="355px">NW Tire Pressure (Before)</td>
              <td>(I) <?php echo $data["nw_bi"];?> Psi </td>
              <td width="334px">(II) <?php echo $data["nw_bii"];?> Psi </td>
              </tr>
              <tr>
              <td width="355px">NW Tire Pressure (After)</td>
              <td>(I) <?php echo $data["nw_ai"];?> Psi </td>
              <td width="334px">(II) <?php echo $data["nw_aii"];?> Psi </td>
              </tr>
              </table>
              <table>
              <tr>
              <td width="355px">Brake Wear Pin</td>
              <td>(I) <?php echo $data["bwpb_one"];?> mm</td>
              <td>(II) <?php echo $data["bwpa_one"];?> mm</td>
              <td width="160px">(III) <?php echo $data["bwpb_two"];?> mm</td>
              <td>(IV) <?php echo $data["bwpa_two"];?> mm</td>
              </tr>
              </table>
              <table>
              <tr>
              <td width="355px">Cargo Compartement</td>
              <td>FWD : <?php echo $data["before_com"];?></td>
              <td width="334px">AFT : <?php echo $data["after_com"];?></td>
              </tr>
              </table>
              <table>
              <tr>
              <td width="355px">Radome Condition</td>
              <td><?php echo $data["rc"];?></td>
              </tr>
              <tr>
              <tr>
              <td width="355px">Boom Headset</td>
              <td><?php echo $data["b_head"];?></td>
              </tr>
              <tr>
              <td width="355px">Headset</td>
              <td><?php echo $data["head"];?></td>
              </tr>
              <tr>
              <td width="355px">Sign Of Leakage</td>
              <td><?php echo $data["sol"];?></td>
              </tr>
              <tr>
              <td width="355px">C OF R</td>
              <td><?php echo $data["cor"];?></td>
              </tr>
              <tr>
              <td width="355px">C OF A</td>
              <td><?php echo $data["coa"];?></td>
              </tr>
              <tr>
              <td width="355px">AASL</td>
              <td><?php echo $data["aasl"];?></td>
              </tr>
              <tr>
              <td width="355px">Cert Insurance</td>
              <td><?php echo $data["ci"];?></td>
              </tr>
              </table>
              <br>
              <table>
              <tr>
              <td width="355px">CML HIL</td>
              <td width="250px"></td>
              <td>Cat : <?php echo $data["cat"];?></td>
              <td>Exp Date : <?php echo $data["exp_cml"];?></td>
              </tr>
              </table>
              <table>
              <tr>
              <td width="355px">Lavatory</td>
              <td><?php echo $data["lavatory"];?></td>
              </tr>
              <tr>
              <td width="355px">Seat Cover Condition</td>
              <td><?php echo $data["scc"];?></td>
              </tr>
              <tr>
              <td width="355px">Exterior Appearance</td>
              <td><?php echo $data["ea"];?></td>
              </tr>
              <tr>
              <td width="355px">Carpet Condition</td>
              <td><?php echo $data["carpet_co"];?></td>
              </tr>
              <tr>
              <td width="355px">Cabin Cleanless</td>
              <td><?php echo $data["cabin_cl"];?></td>
              </tr>
              <tr>
              <td width="355px">Emergency Equipment</td>
              <td><?php echo $data["ee"];?></td>
              </tr>
              </table>
              <br>
              <table>
              <tr>
                <td width="355px">FlyKit Status</td>
                <td width="140px">PN</td>
                <td>SN</td>
                <td width="259px">Exp Date/Next Inspection/Availability</td>
              </tr>
              <tr>
                <td width="355px">MW Tire Assy</td>
                <td width="140px"><?php echo $data["mw_ipn"];?></td>
                <td><?php echo $data["mw_isn"];?></td>
                <td width="259px"><?php echo $data["mw_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">NW Tire Assy</td>
                <td width="140px"><?php echo $data["nw_ipn"];?></td>
                <td><?php echo $data["nw_isn"];?></td>
                <td width="259px"><?php echo $data["nw_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">MLG Torque Wrench</td>
                <td width="140px"><?php echo $data["mtw_ipn"];?></td>
                <td><?php echo $data["mtw_isn"];?></td>
                <td width="259px"><?php echo $data["mtw_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">NLG Torque Wrench</td>
                <td width="140px"><?php echo $data["ntw_ipn"];?></td>
                <td><?php echo $data["ntw_isn"];?></td>
                <td width="259px"><?php echo $data["ntw_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">NLG And MLG Jack</td>
                <td width="140px"><?php echo $data["nmj_ipn"];?></td>
                <td><?php echo $data["nmj_ipn"];?></td>
                <td width="259px"><?php echo $data["nmj_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">MLG Adapter Tool</td>
                <td width="140px"><?php echo $data["mat_ipn"];?></td>
                <td><?php echo $data["mat_isn"];?></td>
                <td width="259px"><?php echo $data["mat_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">NLG Adapter Tool</td>
                <td width="140px"><?php echo $data["nat_ipn"];?></td>
                <td><?php echo $data["nat_isn"];?></td>
                <td width="259px"><?php echo $data["nat_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">Tire Pressure Gage</td>
                <td width="140px"><?php echo $data["tpg_ipn"];?></td>
                <td><?php echo $data["tpg_isn"];?></td>
                <td width="259px"><?php echo $data["tpg_tanggal"];?></td>
              </tr>
              <tr>
                <td width="355px">Crew Seat Spring </td>
                <td width="140px"><?php echo $data["css_ipn"];?></td>
                <td><?php echo $data["css_isn"];?></td>
                <td width="259px"><?php echo $data["css_pcs"];?> ea</td>
              </tr>
              </table>
              <?php $no++; } ?>
              <?php } ?>
              </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3  " style="">
                  <div class="col-md-12 text-left" style=""></div>
                </div>
                <div class="col-md-4 mb-3   offset-md-2" style="">
                  <div class="row">
                    <div class="col-md-12"><b>Export to:</b></div>
                  </div><button id="xcel" class="btn mt-2 mx-1 btn-success">EXCEL</button>
                </div>
                <div class="row" style="">
                  <div class="col-md-12" style="">
                  </div>
                </div>
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
        <div class="col-md-6"><img class="img-fluid d-block mx-auto" src="../../../assets/Team/footer.png" width="75"></div>
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
  </div>
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
  <div class="">
    <div class="container">
      <div class="row">
      </div>
      <div class="row">
      </div>
    </div>
  </div>
  <!-- JavaScript dependencies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
</body>

</html>