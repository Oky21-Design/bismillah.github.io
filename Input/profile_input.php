<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $tanggal= $_POST['tanggal'];
                $tanggal= date('Y-m-d', strtotime($tanggal));
                $ar= $_POST['ar'];
                $ar2= $_POST['ar2'];
                $mechanic= $_POST['mechanic'];
                $pesawat= $_POST["pesawat"];
                $kode= $_POST['kode'];
                $mt= $_POST['mt'];
                $station= $_POST['station'];

                $sql="INSERT INTO profile (tanggal, ar, ar2, mechanic, pesawat, kode, mt, station)
                VALUES ('$tanggal', '$ar', '$ar2', '$mechanic', '$pesawat', '$kode', '$mt', '$station')";
                mysqli_query($conn, $sql);

                $sql="INSERT INTO tampung_all (pesawat, kode)
                VALUES ('$pesawat', '$kode')";
                mysqli_query($conn, $sql);
                
                ?>