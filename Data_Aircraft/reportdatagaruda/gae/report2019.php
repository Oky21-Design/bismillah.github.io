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
  <link rel="icon" href="../../../assets/Team/AIR Logo.png">
  <title>Aircraft Integrated Report </title>
  <meta name="description">
  <meta name="keywords">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="../../js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="../../js/animate-in.js"></script>
  <link rel="stylesheet" href="../../../CSS/aquamarine.css">
</head>

<body class="text-center">
    <script>
        $(document).ready(function(){
				// halaman default
				$('#konten').load('report2020.php');
 
				// fungsi yang mengatur konten mana yang akan ditampilkan
				$('#menu a').click(function(){
					// mengambil data dari href
					var hal = $(this).attr('href');
					// konten akan diisi oleh menu yang dipilih sesuai dengan isi dari href yang dipilih
					$('#konten').load(hal+'.php');
					return false;
				});
			});
		</script>
   <div class="py-5" style="	background-image: url(../../../assets/Team/fix.png);	background-position: top to bottom;	background-size: 100%;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row py-3">
      </div>
      <div class="row" style="">
        <div class="p-3 bg-white col-md-12 border input-group py-4 mt-4" style="">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12" style="">
                <ul class="nav nav-pills mt-2">
                  <li class="nav-item"> <a href="report2018.php" class="nav-link">2018</a> </li>
                  <li class="nav-item"> <a class="active nav-link" href="report2019.php">2019</a> </li>
                  <li class="nav-item"> <a href="report2020.php" class="nav-link">2020</a> </li>
                </ul>
              </div>
            </div>
            <h3 class="text-primary text-center" style=""><b>Garuda PK-GAE</b></h3>
            <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-tabs">
                  <li class="nav-item" style=""> <a href="" class="active nav-link" data-toggle="tab" data-target="#tab1"><b>Jan</b></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="" data-toggle="tab" data-target="#tab2"><b>Feb</b></a> </li>
                  <li class="nav-item" style=""> <a href="" class="nav-link" data-toggle="tab" data-target="#tab3"><b>Mar</b></a> </li>
                  <li class="nav-item" style=""> <a href="" class="nav-link" data-toggle="tab" data-target="#tab4"><b>Apr</b></a> </li>
                  <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tab5"><b>May</b></a> </li>
                  <li class="nav-item" style=""> <a href="" class="nav-link" data-toggle="tab" data-target="#tab6"><b>Jun</b></a> </li>
                  <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tab7"><b>Jul</b></a> </li>
                  <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tab8"><b>Aug</b></a> </li>
                  <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tab9"><b>Sept</b></a> </li>
                  <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tab10"><b>Okt</b></a> </li>
                  <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tab11"><b>Nov</b></a> </li>
                  <li class="nav-item"> <a href="" class="nav-link" data-toggle="tab" data-target="#tab12"><b>Des</b></a> </li>
                </ul>
                <div class="tab-content mt-2">
                  <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-01-01' AND '2019-01-31' ORDER BY tanggal ASC LIMIT 31";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                          <section>
                            <div class="tbl-header">
                              <table cellpadding="0" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th>NO</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                            <div class="tbl-content">
                              <table cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                  <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab2" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-02-01' AND '2019-02-28' ORDER BY tanggal ASC LIMIT 29";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab3" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-03-01' AND '2019-03-31' ORDER BY tanggal ASC LIMIT 31";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab4" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-04-01' AND '2019-04-30' ORDER BY tanggal ASC LIMIT 30";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab5" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-05-01' AND '2019-05-31' ORDER BY tanggal ASC LIMIT 31";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab6" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-06-01' AND '2019-06-30' ORDER BY tanggal ASC LIMIT 30";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab7" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-07-01' AND '2019-07-31' ORDER BY tanggal ASC LIMIT 31";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab8" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-08-01' AND '2019-08-31' ORDER BY tanggal ASC LIMIT 31";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab9" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-09-01' AND '2019-09-30' ORDER BY tanggal ASC LIMIT 30";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab10" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-10-01' AND '2019-10-31' ORDER BY tanggal ASC LIMIT 31";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab11" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-11-01' AND '2019-11-30' ORDER BY tanggal ASC LIMIT 30";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tab12" role="tabpanel">
                  <?php
                              require('koneksi.php');
                              $sql = "SELECT * FROM tampung_all WHERE kode='PK-GAE' AND tanggal BETWEEN '2019-12-01' AND '2019-12-31' ORDER BY tanggal ASC LIMIT 31";
                              $result = mysqli_query($connect, $sql);
                            ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-12">
                            <section>
                              <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>NO</th>
                                      <th>Name</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                              <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                    <?php
                                  $nomor = 1;
                                  while ($row=mysqli_fetch_assoc($result))
                                  {
                                    echo "<tr style='height: 45px'>";
                                    echo "<td style=''><b>". $nomor."</b></td>";
                                    echo "<td style=''><b>".$row['ar']."</b></td>";
                                    echo "<td style=''><b>".date("d/m/y", strtotime($row['tanggal']))."</b></td>";
                                    echo "<td class='text-primary'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-danger m-2'><a href='../../detail_report_pdf.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>PDF</font></b></a></button></div>";
                                    echo "<div class='col-md-6 text-center'><button class='btn-sm btn-secondary m-2'><a href='../../detail_report_excel.php?tanggal=".$row['tanggal']."'><b><font color='#FFFFFF'>EXCEL</font></b></a></button></div>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $nomor++;
                                  }
                                  ?>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </section>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-danger">
                      <p class="my-3" style=""><i>View detail for download this report</i></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><b>
        </b>
      </div>
      <b style="">
      </b>
    </div><b>
    </b>
  </div>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-secondary" style="">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block" src="../../../assets/Team/AIR Logo.png" width="75"></div>
      </div> <button class="navbar-toggler navbar-toggler-right border-0 collapsed" type="button" data-toggle="collapse" data-target="#navbar4" aria-expanded="false" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse justify-content-start collapse" id="navbar4" style="">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-2 text-left pt-1"> <a class="nav-link text-dark " href="../../../home/Homes_AfterLogin.php"><b class="text-light">HOME</b></a> </li>
          <li class="nav-item mx-2 text-left pt-1 text-light"> <a class="nav-link  text-dark " href="../../../home/dashboard.php"><b class="text-light">DASHBOARD</b></a> </li>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">CREATE ARR</b>
            </button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"> <a class="dropdown-item" href="../../../input/profiles.php">Create Data Report</a><a class="dropdown-item" href="../../../input/LabReport.php">Create Lab Data</a>
            </div>
          </div>
          <div class="btn-group">
            <button class="nav-item btn dropdown-toggle btn-link text-light" data-toggle="dropdown" aria-expanded="false"><b class="text-light">Hello, &nbsp; <?php echo $_SESSION['nama']; ?></b></button>
            <div class="dropdown-menu" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);" x-placement="bottom-start"><a class="dropdown-item" href="../../../Home/logout.php">Logout</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
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
  <!-- JavaScript dependencies -->
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>
</body>

</html>