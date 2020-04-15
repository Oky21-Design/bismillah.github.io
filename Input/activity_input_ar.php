<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $seq_ar= $_POST['seq_ar'];
                $dess_ar= $_POST['dess_ar'];
                $pno_ar= $_POST['pno_ar'];
                $pni_ar= $_POST['pni_ar'];
                $sno_ar= $_POST['sno_ar'];
                $sni_ar= $_POST['sni_ar'];
                $seq_ar2= $_POST['seq_ar2'];
                $dess_ar2= $_POST['dess_ar2'];
                $pno_ar2= $_POST['pno_ar2'];
                $pni_ar2= $_POST['pni_ar2'];
                $sno_ar2= $_POST['sno_ar2'];
                $sni_ar2= $_POST['sni_ar2'];
                $seq_ar3= $_POST['seq_ar3'];
                $dess_ar3= $_POST['dess_ar3'];
                $pno_ar3= $_POST['pno_ar3'];
                $pni_ar3= $_POST['pni_ar3'];
                $sno_ar3= $_POST['sno_ar3'];
                $sni_ar3= $_POST['sni_ar3'];
                $seq_ar4= $_POST['seq_ar4'];
                $dess_ar4= $_POST['dess_ar4'];
                $pno_ar4= $_POST['pno_ar4'];
                $pni_ar4= $_POST['pni_ar4'];
                $sno_ar4= $_POST['sno_ar4'];
                $sni_ar4= $_POST['sni_ar4'];
                $seq_ar5= $_POST['seq_ar5'];
                $dess_ar5= $_POST['dess_ar5'];
                $pno_ar5= $_POST['pno_ar5'];
                $pni_ar5= $_POST['pni_ar5'];
                $sno_ar5= $_POST['sno_ar5'];
                $sni_ar5= $_POST['sni_ar5'];
                $seq_ar6= $_POST['seq_ar6'];
                $dess_ar6= $_POST['dess_ar6'];
                $pno_ar6= $_POST['pno_ar6'];
                $pni_ar6= $_POST['pni_ar6'];
                $sno_ar6= $_POST['sno_ar6'];
                $sni_ar6= $_POST['sni_ar6'];
                $seq_ar7= $_POST['seq_ar7'];
                $dess_ar7= $_POST['dess_ar7'];
                $pno_ar7= $_POST['pno_ar7'];
                $pni_ar7= $_POST['pni_ar7'];
                $sno_ar7= $_POST['sno_ar7'];
                $sni_ar7= $_POST['sni_ar7'];
                $seq_ar8= $_POST['seq_ar8'];
                $dess_ar8= $_POST['dess_ar8'];
                $pno_ar8= $_POST['pno_ar8'];
                $pni_ar8= $_POST['pni_ar8'];
                $sno_ar8= $_POST['sno_ar8'];
                $sni_ar8= $_POST['sni_ar8'];
                $seq_ar9= $_POST['seq_ar9'];
                $dess_ar9= $_POST['dess_ar9'];
                $pno_ar9= $_POST['pno_ar9'];
                $pni_ar9= $_POST['pni_ar9'];
                $sno_ar9= $_POST['sno_ar9'];
                $sni_ar9= $_POST['sni_ar9'];
                $seq_ar10= $_POST['seq_ar10'];
                $dess_ar10= $_POST['dess_ar10'];
                $pno_ar10= $_POST['pno_ar10'];
                $pni_ar10= $_POST['pni_ar10'];
                $sno_ar10= $_POST['sno_ar10'];
                $sni_ar10= $_POST['sni_ar10'];
                

                $sql="INSERT INTO activity_ar (seq_ar, dess_ar, pno_ar, pni_ar, sno_ar, sni_ar, seq_ar2, dess_ar2, pno_ar2, pni_ar2, sno_ar2, sni_ar2, seq_ar3, dess_ar3, pno_ar3, pni_ar3, sno_ar3, sni_ar3, seq_ar4, dess_ar4, pno_ar4, pni_ar4, sno_ar4, sni_ar4, seq_ar5, dess_ar5, pno_ar5, pni_ar5, sno_ar5, sni_ar5, seq_ar6, dess_ar6, pno_ar6, pni_ar6, sno_ar6, sni_ar6, seq_ar7, dess_ar7, pno_ar7, pni_ar7, sno_ar7, sni_ar7, seq_ar8, dess_ar8, pno_ar8, pni_ar8, sno_ar8, sni_ar8, seq_ar9, dess_ar9, pno_ar9, pni_ar9, sno_ar9, sni_ar9, seq_ar10, dess_ar10, pno_ar10, pni_ar10, sno_ar10, sni_ar10)
                VALUES ('$seq_ar', '$dess_ar', '$pno_ar', '$pni_ar', '$sno_ar', '$sni_ar', '$seq_ar2', '$dess_ar2', '$pno_ar2', '$pni_ar2', '$sno_ar2', '$sni_ar2', '$seq_ar3', '$dess_ar3', '$pno_ar3', '$pni_ar3', '$sno_ar3', '$sni_ar3', '$seq_ar4', '$dess_ar4', '$pno_ar4', '$pni_ar4', '$sno_ar4', '$sni_ar4', '$seq_ar5', '$dess_ar5', '$pno_ar5', '$pni_ar5', '$sno_ar5', '$sni_ar5', '$seq_ar6', '$dess_ar6', '$pno_ar6', '$pni_ar6', '$sno_ar6', '$sni_ar6', '$seq_ar7', '$dess_ar7', '$pno_ar7', '$pni_ar7', '$sno_ar7', '$sni_ar7', '$seq_ar8', '$dess_ar8', '$pno_ar8', '$pni_ar8', '$sno_ar8', '$sni_ar8', '$seq_ar9', '$dess_ar9', '$pno_ar9', '$pni_ar9', '$sno_ar9', '$sni_ar9', '$seq_ar10', '$dess_ar10', '$pno_ar10', '$pni_ar10', '$sno_ar10', '$sni_ar10')";
                mysqli_query($conn, $sql);
                ?>