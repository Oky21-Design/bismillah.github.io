<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location: ../../home/login.php?pesan=not_logged_in");
	}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="../../assets/Team/AIR Logo.png">
  <title>Aircraft Integrated Report </title>
  <meta name="description">
  <meta name="keywords">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="../js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="../js/animate-in.js"></script>
  <link rel="stylesheet" href="../../CSS/aquamarine.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>

<body class="text-center">
  <!-- Navbar -->
  <!-- Cover -->
  <!-- Parallax section -->
  <!-- Navbar -->
  <!-- Schedule -->
  <!-- Sponsor logos -->
  <!-- Call to action -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-secondary" style="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block" src="../../assets/Team/AIR Logo.png" width="75"></div>
      </div> <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse justify-content-start collapse" id="navbar4" style="">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 text-left pt-1"> <a class="nav-link text-dark " href="../../home/Homes_AfterLogin.php"><b class="text-light">HOME</b></a> </li>
          <li class="nav-item mx-2 text-left pt-1 text-light"> <a class="nav-link  text-dark " href="../../home/dashboard.php"><b class="text-light">DASHBOARD</b></a> </li>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">CREATE ARR</b>
            </button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="../../input/profiles.php">Create Data Report</a><a class="dropdown-item" href="../../input/labreport.php">Create Lab Data</a>
            </div>
          </div>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">Hello, &nbsp; <?php echo $_SESSION['nama']; ?></b></button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"><a class="dropdown-item" href="../../Home/logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <div class="py-5" style="background-image: url(&quot;../../assets/Team/fix.png&quot;);	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <div class="row" style="">
        <div class="p-5 bg-white col-md-12 border mt-3 input-group" style="">
          <div class="row">
            <div class="col-md-12"><img class="img-fluid d-block float-right" src="../../assets/Background/garuda.png" width="100"></div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12" style="">
                <h2 class="text-primary" style=""><b>PK-GAL</b></h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12" style="">
                    <div class="row">
                      <div class="col-md-12" style="">
                        <form class="form-inline">
                          <div class="form-group">
                            <input type="date" class="form-control form-control-sm border" placeholder="start" name="tanggal" required="required"> </div>
                          <div class="form-group">
                            <input type="date" class="form-control form-control-sm border" placeholder="last" name="tanggal2" required="required"> </div>
                          <button class="btn btn-primary bg-aquamarine btn-sm m-1" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row my-3">
              <div class="col-md-12 my-3" style="">
                <div class="row">
                  <div class="col-md-6" style="">
                    <div id="battery" class="grid-margin stretch-card input-group card m-3
                     col-md-12" style="	height: 250px;">
                     <?php
 // koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "air");

 // array data
 $array_tanggal = array();
 $array_kategori = array();
 $array_series = array();
 $array_tampung_all = array();

 // set attribute
 $array_attribute = array('mbv', 'ebv');
 $nama = array('Main Battery', 'Emmer Battery');

 // cari tanggal
			$no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

 while($row = mysqli_fetch_array($rs)){
  $id = $row['id'];
  $tanggal = $row['tanggal'];

  // set tanggal
  array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

  // set kategori
  array_push($array_kategori, $tanggal);
 }

 foreach($array_tanggal as $key=>$val){
  // set data
  $array_tampung_all[$val['tanggal']] = array();

  $sql = 'SELECT * FROM tampung_all';
  $sql .= ' WHERE id='.intval($val['id']);
  $rs = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($rs)){
   $mbv = $row['mbv'];
   $ebv = $row['ebv'];

   // value datas
   $array_tampung_all[$val['tanggal']]['mbv'] = floatval($mbv);
   $array_tampung_all[$val['tanggal']]['ebv'] = floatval($ebv);
  }
 }

 // set nama series grafik
 foreach($nama as $attribute){
  array_push($array_series, array('name'=>$attribute, 'data'=>array()));
 }

 // set value per series grafik
 foreach($array_kategori as $kategori){
  $i = 0;
  foreach($array_attribute as $attribute){
   array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$attribute]);

   $i++;
  }
 }
?>
            <script>
              $('#battery').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                text: '<b>■BATTERY■</b>',
                style: {
                  
            color: '<?php
                    include 'koneksi.php';
                    $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GAL' ORDER BY id DESC LIMIT 1");
                    while($data = mysqli_fetch_array($query)){
                      if ($data["mbv"] > 25.5 && $data["ebv"] > 25.5) {

                        echo 'green';
        
                        }else{
        
                        echo 'red';
        
                        }
                }?>'
         }
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                yAxis: {
                  max: 50,
            plotLines: [{
                value: 25,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 25.5,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 26,
                color: 'green',
                dashStyle: 'shortdash',
                width: 2
            }]
        },
        
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                    </div>
                  </div>
                  <div class="col-md-6" style="">
                    <div id="ac" class="grid-margin stretch-card input-group card  m-3 col-md-12" style="	height: 250px;">
                    <?php
          $conn=mysqli_connect("localhost", "root", "", "air");

// array data
$array_tanggal = array();
$array_kategori = array();
$array_series = array();
$array_tampung_all = array();

// set attribute
$array_attribute = array('fct_afh', 'fct_normal', 'fdt_afh', 'fdt_normal', 'cct_afh', 'cct_normal', 'cmt_afh', 'cmt_normal', 'cdt_afh', 'cdt_normal');
$nama = array('FLT COMP TEMP AFH', 'FLT COMP TEMP NORMAL', 'FLT DUCT TEMP AFH', 'FLT DUCT TEMP NORMAL', 'CAB COMP TEMP AFH', 'CAB COMP TEMP NORMAL','CAB MFD TEMP AFH', 'CAB MFD TEMP NORMAL', 'CAB DUCT TEMP AFH', 'CAB DUCT TEMP NORMAL');

// cari tanggal
$no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

while($row = mysqli_fetch_array($rs)){
 $id = $row['id'];
 $tanggal = $row['tanggal'];

 // set tanggal
 array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

 // set kategori
 array_push($array_kategori, $tanggal);
}

foreach($array_tanggal as $key=>$val){
 // set data
 $array_tampung_all[$val['tanggal']] = array();

 $sql = 'SELECT * FROM tampung_all';
 $sql .= ' WHERE id='.intval($val['id']);
 $rs = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_array($rs)){
  $fct_afh = $row['fct_afh'];
  $fct_normal = $row['fct_normal'];
  $fdt_afh = $row['fdt_afh'];
  $fdt_normal = $row['fdt_normal'];
  $cct_afh = $row['cct_afh'];
  $cct_normal = $row['cct_normal'];
  $cmt_afh = $row['cmt_afh'];
  $cmt_normal = $row['cmt_normal'];
  $cdt_afh = $row['fct_afh'];
  $cdt_normal = $row['cdt_normal'];

  // value datas
  $array_tampung_all[$val['tanggal']]['fct_afh'] = intval($fct_afh);
  $array_tampung_all[$val['tanggal']]['fct_normal'] = intval($fct_normal);
  $array_tampung_all[$val['tanggal']]['fdt_afh'] = intval($fdt_afh);
  $array_tampung_all[$val['tanggal']]['fdt_normal'] = intval($fdt_normal);
  $array_tampung_all[$val['tanggal']]['cct_afh'] = intval($cct_afh);
  $array_tampung_all[$val['tanggal']]['cct_normal'] = intval($cct_normal);
  $array_tampung_all[$val['tanggal']]['cmt_afh'] = intval($cmt_afh);
  $array_tampung_all[$val['tanggal']]['cmt_normal'] = intval($cmt_normal);
  $array_tampung_all[$val['tanggal']]['cdt_afh'] = intval($cdt_afh);
  $array_tampung_all[$val['tanggal']]['cdt_normal'] = intval($cdt_normal);
 }
}

// set nama series grafik
foreach($nama as $attribute){
 array_push($array_series, array('name'=>$attribute, 'data'=>array()));
}

// set value per series grafik
foreach($array_kategori as $kategori){
 $i = 0;
 foreach($array_attribute as $attribute){
  array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$attribute]);

  $i++;
 }
}
?>
            <script>
              $('#ac').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                  text: '<b>■AC TEMPERATURES■</b>',
                  style: {
            color: '<?php
                    include 'koneksi.php';
                    $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GAL' ORDER BY id DESC LIMIT 1");
                    while($data = mysqli_fetch_array($query)){
                      if ($data["fdt_afh"] > 15 && $data["fdt_normal"] > 15 && $data["cdt_afh"] > 15 && $data["cdt_normal"] > 15) {

                        echo 'red';
        
                        }else{
        
                        echo 'green';
        
                        }
                }?>'
         }
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
              yAxis: {
            plotLines: [{
                value: 15,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 17,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 19,
                color: 'green',
                dashStyle: 'shortdash',
                width: 2
            }]
        },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="">
                    <div id="tire" class="grid-margin stretch-card input-group card m-3 col-md-12" style="	height: 250px;">
                    <?php
          $conn=mysqli_connect("localhost", "root", "", "air");

// array data
$array_tanggal = array();
$array_kategori = array();
$array_series = array();
$array_tampung_all = array();

// set attribute
$array_attribute = array('lmw_bi', 'lmw_bii', 'rmw_biii', 'rmw_biv', 'lmw_ai', 'lmw_aii', 'rmw_aiii', 'rmw_aiv', 'nw_bi', 'nw_bii', 'nw_ai', 'nw_aii');
$nama = array('MW Tire Pressure Before I', 'MW Tire Pressure Before II', 'MW Tire Pressure Before III', 'MW Tire Pressure Before IV', 'MW Tire Pressure After I', 'MW Tire Pressure After II', 'MW Tire Pressure After III', 'MW Tire Pressure After IV', 'NW Tire Pressure Before I', 'NW Tire Pressure Before II', 'NW Tire Pressure After I', 'NW Tire Pressure After II');

// cari tanggal
$no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

while($row = mysqli_fetch_array($rs)){
 $id = $row['id'];
 $tanggal = $row['tanggal'];

 // set tanggal
 array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

 // set kategori
 array_push($array_kategori, $tanggal);
}

foreach($array_tanggal as $key=>$val){
 // set data
 $array_tampung_all[$val['tanggal']] = array();

 $sql = 'SELECT * FROM tampung_all';
 $sql .= ' WHERE id='.intval($val['id']);
 $rs = mysqli_query($conn, $sql);

 while($row = mysqli_fetch_array($rs)){
  $lmw_bi = $row['lmw_bi'];
  $lmw_bii = $row['lmw_bii'];
  $rmw_biii = $row['rmw_biii'];
  $rmw_biv = $row['rmw_biv'];
  $lmw_ai = $row['lmw_ai'];
  $lmw_aii = $row['lmw_aii'];
  $rmw_aiii = $row['rmw_aiii'];
  $rmw_aiv = $row['rmw_aiv'];
  $nw_bi = $row['nw_bi'];
  $nw_bii = $row['nw_bii'];
  $nw_ai = $row['nw_ai'];
  $nw_aii = $row['nw_aii'];


  // value datas
  $array_tampung_all[$val['tanggal']]['lmw_bi'] = intval($lmw_bi);
  $array_tampung_all[$val['tanggal']]['lmw_bii'] = intval($lmw_bii);
  $array_tampung_all[$val['tanggal']]['rmw_biii'] = intval($rmw_biii);
  $array_tampung_all[$val['tanggal']]['rmw_biv'] = intval($rmw_biv);
  $array_tampung_all[$val['tanggal']]['lmw_ai'] = intval($lmw_ai);
  $array_tampung_all[$val['tanggal']]['lmw_aii'] = intval($lmw_aii);
  $array_tampung_all[$val['tanggal']]['rmw_aiii'] = intval($rmw_aiii);
  $array_tampung_all[$val['tanggal']]['rmw_aiv'] = intval($rmw_aiv);
  $array_tampung_all[$val['tanggal']]['nw_bi'] = intval($nw_bi);
  $array_tampung_all[$val['tanggal']]['nw_bii'] = intval($nw_bii);
  $array_tampung_all[$val['tanggal']]['nw_ai'] = intval($nw_ai);
  $array_tampung_all[$val['tanggal']]['nw_aii'] = intval($nw_aii);
 }
}

// set nama series grafik
foreach($nama as $attribute){
 array_push($array_series, array('name'=>$attribute, 'data'=>array()));
}

// set value per series grafik
foreach($array_kategori as $kategori){
 $i = 0;
 foreach($array_attribute as $attribute){
  array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$attribute]);

  $i++;
 }
}
?>
            <script>
              $('#tire').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                  text: '<b>■TIRE PRESSURE■</b>',
                  style: {
            color: '<?php
                    include 'koneksi.php';
                    $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GAL' ORDER BY id DESC LIMIT 1");
                    while($data = mysqli_fetch_array($query)){
                      if ($data["nw_bi"] > 60.1 && $data["nw_bii"] > 60.1 && $data["nw_ai"] > 60.1 && $data["nw_aii"] > 60.1 &&
                          $data["lmw_bi"] > 120.1 && $data["lmw_ai"] > 120.1 && $data["lmw_bii"] > 120.1 && $data["lmw_aii"] > 120.1 &&
                          $data["rmw_biii"] > 120.1 && $data["rmw_aiii"] > 120.1 && $data["rmw_biv"] > 120.1 && $data["rmw_aiv"] > 120.1) {

                        echo 'green';
        
                        }else{
        
                        echo 'red';
        
                        }
                }?>'
         }
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
              yAxis: {
                  max: 150,
            plotLines: [{
                value: 120,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 60,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }]
        },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                    </div>
                  </div>
                  <div class="col-md-6" style="">
                    <div id="stargen" class="grid-margin stretch-card input-group card  m-3 col-md-12" style="	height: 250px;">
                    <?php
 // koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "air");

 // array data
 $array_tanggal = array();
 $array_kategori = array();
 $array_series = array();
 $array_tampung_all = array();

 // set attribute
 $array_attribute = array('sgb_one', 'sgb_two');
 $nama = array('#1', '#2');

 // cari tanggal
 $no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

 while($row = mysqli_fetch_array($rs)){
  $id = $row['id'];
  $tanggal = $row['tanggal'];

  // set tanggal
  array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

  // set kategori
  array_push($array_kategori, $tanggal);
 }

 foreach($array_tanggal as $key=>$val){
  // set datas
  $array_tampung_all[$val['tanggal']] = array();

  $sql = 'SELECT * FROM tampung_all';
  $sql .= ' WHERE id='.intval($val['id']);
  $rs = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($rs)){
   $sgb_one = $row['sgb_one'];
   $sgb_two = $row['sgb_two'];

   // value datas
   $array_tampung_all[$val['tanggal']]['sgb_one'] = intval($sgb_one);
   $array_tampung_all[$val['tanggal']]['sgb_two'] = intval($sgb_two);
  }
 }

 // set nama series grafik
 foreach($nama as $attribute){
  array_push($array_series, array('name'=>$attribute, 'data'=>array()));
 }

 // set value per series grafik
 foreach($array_kategori as $kategori){
  $i = 0;
  foreach($array_attribute as $attribute){
   array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$attribute]);

   $i++;
  }
 }
?>
            <script>
              $('#stargen').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                  text: '<b>■STARGEN BRUSH■</b>',
                  style: {
            color: '<?php
                    include 'koneksi.php';
                    $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GAL' ORDER BY id DESC LIMIT 1");
                    while($data = mysqli_fetch_array($query)){
                      if ($data["sgb_one"] > 6.1 && $data["sgb_two"] > 6.1) {

                        echo 'green';
        
                        }else{
        
                        echo 'red';
        
                        }
                }?>'
         }
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
              yAxis: {
            plotLines: [{
                value: 6,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 8,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 10,
                color: 'green',
                dashStyle: 'shortdash',
                width: 2
            }]
        },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="">
                    <div id="oil" class="grid-margin stretch-card input-group card m-3 col-md-12" style="	height: 250px;">
                    <?php
 // koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "air");

 // array data
 $array_tanggal = array();
 $array_kategori = array();
 $array_series = array();
 $array_tampung_all = array();

 // set attribute
 $array_attribute = array('seo_one', 'seo_two');
 $nama = array('#1', '#2');

 // cari tanggal
 $no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

 while($row = mysqli_fetch_array($rs)){
  $id = $row['id'];
  $tanggal = $row['tanggal'];

  // set tanggal
  array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

  // set kategori
  array_push($array_kategori, $tanggal);
 }

 foreach($array_tanggal as $key=>$val){
  // set data
  $array_tampung_all[$val['tanggal']] = array();

  $sql = 'SELECT * FROM tampung_all';
  $sql .= ' WHERE id='.intval($val['id']);
  $rs = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($rs)){
   $seo_one = $row['seo_one'];
   $seo_two = $row['seo_two'];

   // value datas
   $array_tampung_all[$val['tanggal']]['seo_one'] = intval($seo_one);
   $array_tampung_all[$val['tanggal']]['seo_two'] = intval($seo_two);
  }
 }

 // set nama series grafik
 foreach($nama as $attribute){
  array_push($array_series, array('name'=>$attribute, 'data'=>array()));
 }

 // set value per series grafik
 foreach($array_kategori as $kategori){
  $i = 0;
  foreach($array_attribute as $attribute){
   array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$attribute]);

   $i++;
  }
 }
?>
            <script>
              $('#oil').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                  text: '<b>SERVICING ENGINE OIL</b>',
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
              yAxis: {
                  max: 20,
            plotLines: [{
                value: 0.2,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 0.4,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 0.6,
                color: 'green',
                dashStyle: 'shortdash',
                width: 2
            }]
        },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                    </div>
                  </div>
                  <div class="col-md-6" style="">
                    <div id="hydra" class="grid-margin stretch-card input-group card  m-3 col-md-12" style="	height: 250px;">
                    <?php
 // koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "air");

 // array data
 $array_tanggal = array();
 $array_kategori = array();
 $array_series = array();
 $array_tampung_all = array();

 // set attribute
 $array_ucup = array('hydra');
 $nama = array('Servicing Hydraulic');

 // cari tanggal
 $no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

 while($row = mysqli_fetch_array($rs)){
  $id = $row['id'];
  $tanggal = $row['tanggal'];

  // set tanggal
  array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

  // set kategori
  array_push($array_kategori, $tanggal);
 }

 foreach($array_tanggal as $key=>$val){
  // set data
  $array_tampung_all[$val['tanggal']] = array();

  $sql = 'SELECT * FROM tampung_all';
  $sql .= ' WHERE id='.intval($val['id']);
  $rs = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($rs)){
   $hydra = $row['hydra'];

   // value datas
   $array_tampung_all[$val['tanggal']]['hydra'] = intval($hydra);
  }
 }

 // set nama series grafik
 foreach($nama as $ucup){
  array_push($array_series, array('name'=>$ucup, 'data'=>array()));
 }

 // set value per series grafik
 foreach($array_kategori as $kategori){
  $i = 0;
  foreach($array_ucup as $ucup){
   array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$ucup]);

   $i++;
  }
 }
?>
            <script>
              $('#hydra').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                  text: '<b>SERVICING HYDRAULIC</b>',
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="">
                    <div id="brake" class="grid-margin stretch-card input-group card m-3 col-md-12" style="	height: 250px;">
                    <?php
 // koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "air");

 // array data
 $array_tanggal = array();
 $array_kategori = array();
 $array_series = array();
 $array_tampung_all = array();

 // set attribute
 $array_attribute = array('bwpb_one', 'bwpa_one', 'bwpb_two', 'bwpa_two');
 $nama = array('(I)', '(II)', '(III)', '(IV)');

 // cari tanggal
 $no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

 while($row = mysqli_fetch_array($rs)){
  $id = $row['id'];
  $tanggal = $row['tanggal'];

  // set tanggal
  array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

  // set kategori
  array_push($array_kategori, $tanggal);
 }

 foreach($array_tanggal as $key=>$val){
  // set datas
  $array_tampung_all[$val['tanggal']] = array();

  $sql = 'SELECT * FROM tampung_all';
  $sql .= ' WHERE id='.intval($val['id']);
  $rs = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($rs)){
   $bwpb_one = $row['bwpb_one'];
   $bwpa_one = $row['bwpa_one'];
   $bwpb_two = $row['bwpb_two'];
   $bwpa_two = $row['bwpa_two'];

   // value datas
   $array_tampung_all[$val['tanggal']]['bwpb_one'] = intval($bwpb_one);
   $array_tampung_all[$val['tanggal']]['bwpa_one'] = intval($bwpa_one);
   $array_tampung_all[$val['tanggal']]['bwpb_two'] = intval($bwpb_two);
   $array_tampung_all[$val['tanggal']]['bwpa_two'] = intval($bwpa_two);
  }
 }

 // set nama series grafik
 foreach($nama as $attribute){
  array_push($array_series, array('name'=>$attribute, 'data'=>array()));
 }

 // set value per series grafik
 foreach($array_kategori as $kategori){
  $i = 0;
  foreach($array_attribute as $attribute){
   array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$attribute]);

   $i++;
  }
 }
?>
            <script>
              $('#brake').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                  text: '<b>BRAKE WEAR PIN</b>',
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
              yAxis: {
                  max: 50,
            plotLines: [{
                value: 0.5,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 3,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 7,
                color: 'green',
                dashStyle: 'shortdash',
                width: 2
            }]
        },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                    </div>
                  </div>
                  <div class="col-md-6" style="">
                    <div id="lab" class="grid-margin stretch-card input-group card m-3 col-md-12" style="	height: 250px;">
                    <?php
 // koneksi ke database
 $conn=mysqli_connect("localhost", "root", "", "air");

 // array data
 $array_tanggal = array();
 $array_kategori = array();
 $array_series = array();
 $array_tampung_all = array();

 // set attribute
 $array_attribute = array('bwpb_one', 'bwpa_one', 'bwpb_two', 'bwpa_two');
 $nama = array('(I)', '(II)', '(III)', '(IV)');

 // cari tanggal
 $no = 1;
 
			if(isset($_GET['tanggal'], $_GET['tanggal2'])){
        $tgl = $_GET['tanggal'];
        $tgl2 = $_GET['tanggal2'];
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAL' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
 $rs = mysqli_query($conn, $sql);}

 while($row = mysqli_fetch_array($rs)){
  $id = $row['id'];
  $tanggal = $row['tanggal'];

  // set tanggal
  array_push($array_tanggal, array('id'=>$id, 'tanggal'=>$tanggal));

  // set kategori
  array_push($array_kategori, $tanggal);
 }

 foreach($array_tanggal as $key=>$val){
  // set datas
  $array_tampung_all[$val['tanggal']] = array();

  $sql = 'SELECT * FROM tampung_all';
  $sql .= ' WHERE id='.intval($val['id']);
  $rs = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($rs)){
   $bwpb_one = $row['bwpb_one'];
   $bwpa_one = $row['bwpa_one'];
   $bwpb_two = $row['bwpb_two'];
   $bwpa_two = $row['bwpa_two'];

   // value datas
   $array_tampung_all[$val['tanggal']]['bwpb_one'] = intval($bwpb_one);
   $array_tampung_all[$val['tanggal']]['bwpa_one'] = intval($bwpa_one);
   $array_tampung_all[$val['tanggal']]['bwpb_two'] = intval($bwpb_two);
   $array_tampung_all[$val['tanggal']]['bwpa_two'] = intval($bwpa_two);
  }
 }

 // set nama series grafik
 foreach($nama as $attribute){
  array_push($array_series, array('name'=>$attribute, 'data'=>array()));
 }

 // set value per series grafik
 foreach($array_kategori as $kategori){
  $i = 0;
  foreach($array_attribute as $attribute){
   array_push($array_series[$i]['data'], $array_tampung_all[$kategori][$attribute]);

   $i++;
  }
 }
?>
            <script>
              $('#lab').highcharts({
                chart: {
                  type: 'spline',
                  marginTop: 50,
                  marginBottom: 30
                },
                credits: {
                  enabled: false
                }, 
                tooltip: {
                  shared: true,
                  useHTML: true,
        headerFormat: '{point.key}</br>',
        pointFormat: '<tr><td style="color: {series.color}">{series.name}: </td>' +
            '<td><b>{point.y}</b></td></br></tr>'
                },
                title: {
                  text: '<b>LAB DATA</b>',
                },
                plotOptions: {
                  spline: {
                      lineWidth: 2,
                      states: {
                          hover: {
                              lineWidth: 3
                          }
                      },
                      marker: {
                          enabled: false
                      },
                  }
              },
              yAxis: {
                  max: 50,
            plotLines: [{
                value: 0.5,
                color: 'red',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 3,
                color: 'yellow',
                dashStyle: 'shortdash',
                width: 2
            }, {
                value: 7,
                color: 'green',
                dashStyle: 'shortdash',
                width: 2
            }]
        },
                xAxis: {
                  visible: false,
                  categories: <?php echo json_encode($array_kategori); ?>,
                  labels: {
                  rotation: 0,
                  align: 'right',
                  style: {
                    fontSize: '10px',
                    fontFamily: 'Verdana, sans-serif'
                  }
                  }
                },
                legend: {
                  enabled: false
                },
                series: <?php echo json_encode($array_series); ?>
                });
            </script>
                      </div>
                  </div>
                </div>
                <div class="row" style="">
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12" style="">
                      <div class="col-md-12">
                        <h4 class="mt-3 text-center"><b>View Report Data</b></h4>
                      </div>
                      <?php
                          include 'koneksi.php';
                          $query = mysqli_query($connect,"SELECT * FROM tampung_all WHERE kode='PK-GAL' ORDER BY id DESC LIMIT 1");
                          ?>
                          <?php if(mysqli_num_rows($query)>0){ ?>
                          <?php
                          $no = 1;
                          while($data = mysqli_fetch_array($query)){
                          ?>
                      <form method="post">
                        <div class="row">
                          <div class="col-md-12">
                            <p class="text-left">ARR Date Last : <?php echo $data["tanggal"];?></p>
                            </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <p class="text-left">Name Of Realesman : <?php echo $data["ar"];?></p>
                            </p>
                          </div>
                        </div>
                        <?php $no++; } ?>
                        <?php } ?>
                        <div class="col-md-12 text-left"><a class="btn btn-primary bg-aquamarine" href="../reportdatagaruda/gal/report2020.php">View More</a></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <b>
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
                  <p class="text-danger mt-3 my-5"><span style="font-weight: 400;"><i>Result Data Aircraft</i></span></p>
                </div>
              </div>
            </b>
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
        <div class="col-md-6"><img class="img-fluid d-block mx-auto" src="../../assets/Team/footer.png" width="75"></div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
</body>

</html>