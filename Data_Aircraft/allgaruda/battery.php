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
        <div class="p-3 bg-white col-md-12 border mt-3 input-group" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12"><img class="img-fluid d-block float-right" src="../../assets/Background/garuda.png" width="100"></div>
            </div>
            <div class="row">
            </div>
            <h3 class="text-primary text-center mt-4" style=""><b>Battery</b></h3>
            <div class="row my-3">
              <div class="col-md-12" style="">
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-12">
                    <form class="form-inline" >
                    <div class="form-group">
                      <input type="date" class="form-control form-control-sm border" placeholder="start" name="tanggal" required="required"> </div>
                    <div class="form-group">
                      <input type="date" class="form-control form-control-sm border" placeholder="last" name="tanggal2" required="required"> </div>
                    <button class="btn btn-primary bg-aquamarine btn-sm m-1" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                    </div>
                    <div class="row">
                      <div class="col-md-6 my-2">
                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                        <div id="gac" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAC' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gac').highcharts({
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
                  text: 'PK-GAC',
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
                      </div>
                      <div class="col-md-6 my-2">
                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                          <div id="gad" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAD' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gad').highcharts({
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
                  text: 'PK-GAD',
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
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6 my-2">
                            <div class="grid-margin stretch-card card input-group col-md-12" style="">
                              <div id="gae" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAE' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gae').highcharts({
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
                  text: 'PK-GAE',
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
                          </div>
                          <div class="col-md-6 my-2" style="">
                            <div class="grid-margin stretch-card card input-group col-md-12" style="">
                              <div id="gaf" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAF' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gaf').highcharts({
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
                  text: 'PK-GAF',
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
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-6 my-2">
                                    <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                      <div id="gah" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAH' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gah').highcharts({
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
                  text: 'PK-GAH',
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
                                  </div>
                                  <div class="col-md-6 my-2">
                                    <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                      <div id="gai" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAI' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gai').highcharts({
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
                  text: 'PK-GAI',
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
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-6 my-2">
                                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                          <div id="gaj" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAJ' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gaj').highcharts({
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
                  text: 'PK-GAJ',
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
                                      </div>
                                      <div class="col-md-6 my-2" style="">
                                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                          <div id="gak" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAK' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gak').highcharts({
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
                  text: 'PK-GAK',
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
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-6 my-2">
                                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                          <div id="gal" class="card-body input-group" style="	height: 270px;">
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
              $('#gal').highcharts({
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
                  text: 'PK-GAL',
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
                                      </div>
                                      <div class="col-md-6 my-2">
                                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                          <div id="gam" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAM' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gam').highcharts({
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
                  text: 'PK-GAM',
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
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="row">
                                      <div class="col-md-6 my-2">
                                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                          <div id="gan" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAN' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gan').highcharts({
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
                  text: 'PK-GAN',
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
                                      </div>
                                      <div class="col-md-6 my-2">
                                        <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                          <div id="gao" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAO' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gao').highcharts({
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
                  text: 'PK-GAO',
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
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="row">
                                          <div class="col-md-6 my-2">
                                            <div class="grid-margin stretch-card card input-group col-md-12" style="">
                                              <div id="gaq" class="card-body input-group" style="	height: 270px;">
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
 $sql = "SELECT * FROM tampung_all WHERE kode = 'PK-GAQ' AND tanggal BETWEEN '$tgl' AND '$tgl2'";
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
              $('#gaq').highcharts({
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
                  text: 'PK-GAQ',
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
                                          </div>
                                          <div class="col-md-6"></div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12 text-left"><input type="button" value="Go Back" onclick="history.back(-1)" class="btn btn-primary btn-sm m-2 bg-aquamarine"></div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="row my-3">
                                              <div class="col-md-12 my-3" style="">
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <div class="row">
                                                      <div class="col-md-12">
                                                        <p class="mt-3 text-danger"><span style="font-weight: 400;"><i>Battery All Aircraft Garuda</i></span></p>
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
  <!-- JavaScript dependencies -->
  <!-- JavaScript dependencies -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
  </body>

</html>