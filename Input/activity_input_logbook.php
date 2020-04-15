<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $seq_logbook= $_POST['seq_logbook'];
                $dess_logbook= $_POST['dess_logbook'];
                $pno_logbook= $_POST['pno_logbook'];
                $pni_logbook= $_POST['pni_logbook'];
                $sno_logbook= $_POST['sno_logbook'];
                $sni_logbook= $_POST['sni_logbook'];
                $seq_logbook2= $_POST['seq_logbook2'];
                $dess_logbook2= $_POST['dess_logbook2'];
                $pno_logbook2= $_POST['pno_logbook2'];
                $pni_logbook2= $_POST['pni_logbook2'];
                $sno_logbook2= $_POST['sno_logbook2'];
                $sni_logbook2= $_POST['sni_logbook2'];
                $seq_logbook3= $_POST['seq_logbook3'];
                $dess_logbook3= $_POST['dess_logbook3'];
                $pno_logbook3= $_POST['pno_logbook3'];
                $pni_logbook3= $_POST['pni_logbook3'];
                $sno_logbook3= $_POST['sno_logbook3'];
                $sni_logbook3= $_POST['sni_logbook3'];
                $seq_logbook4= $_POST['seq_logbook4'];
                $dess_logbook4= $_POST['dess_logbook4'];
                $pno_logbook4= $_POST['pno_logbook4'];
                $pni_logbook4= $_POST['pni_logbook4'];
                $sno_logbook4= $_POST['sno_logbook4'];
                $sni_logbook4= $_POST['sni_logbook4'];
                $seq_logbook5= $_POST['seq_logbook5'];
                $dess_logbook5= $_POST['dess_logbook5'];
                $pno_logbook5= $_POST['pno_logbook5'];
                $pni_logbook5= $_POST['pni_logbook5'];
                $sno_logbook5= $_POST['sno_logbook5'];
                $sni_logbook5= $_POST['sni_logbook5'];
                $seq_logbook6= $_POST['seq_logbook6'];
                $dess_logbook6= $_POST['dess_logbook6'];
                $pno_logbook6= $_POST['pno_logbook6'];
                $pni_logbook6= $_POST['pni_logbook6'];
                $sno_logbook6= $_POST['sno_logbook6'];
                $sni_logbook6= $_POST['sni_logbook6'];
                $seq_logbook7= $_POST['seq_logbook7'];
                $dess_logbook7= $_POST['dess_logbook7'];
                $pno_logbook7= $_POST['pno_logbook7'];
                $pni_logbook7= $_POST['pni_logbook7'];
                $sno_logbook7= $_POST['sno_logbook7'];
                $sni_logbook7= $_POST['sni_logbook7'];
                $seq_logbook8= $_POST['seq_logbook8'];
                $dess_logbook8= $_POST['dess_logbook8'];
                $pno_logbook8= $_POST['pno_logbook8'];
                $pni_logbook8= $_POST['pni_logbook8'];
                $sno_logbook8= $_POST['sno_logbook8'];
                $sni_logbook8= $_POST['sni_logbook8'];
                $seq_logbook9= $_POST['seq_logbook9'];
                $dess_logbook9= $_POST['dess_logbook9'];
                $pno_logbook9= $_POST['pno_logbook9'];
                $pni_logbook9= $_POST['pni_logbook9'];
                $sno_logbook9= $_POST['sno_logbook9'];
                $sni_logbook9= $_POST['sni_logbook9'];
                $seq_logbook10= $_POST['seq_logbook10'];
                $dess_logbook10= $_POST['dess_logbook10'];
                $pno_logbook10= $_POST['pno_logbook10'];
                $pni_logbook10= $_POST['pni_logbook10'];
                $sno_logbook10= $_POST['sno_logbook10'];
                $sni_logbook10= $_POST['sni_logbook10'];
                

                $sql="INSERT INTO activity_logbook (seq_logbook, dess_logbook, pno_logbook, pni_logbook, sno_logbook, sni_logbook, seq_logbook2, dess_logbook2, pno_logbook2, pni_logbook2, sno_logbook2, sni_logbook2, seq_logbook3, dess_logbook3, pno_logbook3, pni_logbook3, sno_logbook3, sni_logbook3, seq_logbook4, dess_logbook4, pno_logbook4, pni_logbook4, sno_logbook4, sni_logbook4, seq_logbook5, dess_logbook5, pno_logbook5, pni_logbook5, sno_logbook5, sni_logbook5, seq_logbook6, dess_logbook6, pno_logbook6, pni_logbook6, sno_logbook6, sni_logbook6, seq_logbook7, dess_logbook7, pno_logbook7, pni_logbook7, sno_logbook7, sni_logbook7, seq_logbook8, dess_logbook8, pno_logbook8, pni_logbook8, sno_logbook8, sni_logbook8, seq_logbook9, dess_logbook9, pno_logbook9, pni_logbook9, sno_logbook9, sni_logbook9, seq_logbook10, dess_logbook10, pno_logbook10, pni_logbook10, sno_logbook10, sni_logbook10)
                VALUES ('$seq_logbook', '$dess_logbook', '$pno_logbook', '$pni_logbook', '$sno_logbook', '$sni_logbook', '$seq_logbook2', '$dess_logbook2', '$pno_logbook2', '$pni_logbook2', '$sno_logbook2', '$sni_logbook2', '$seq_logbook3', '$dess_logbook3', '$pno_logbook3', '$pni_logbook3', '$sno_logbook3', '$sni_logbook3', '$seq_logbook4', '$dess_logbook4', '$pno_logbook4', '$pni_logbook4', '$sno_logbook4', '$sni_logbook4', '$seq_logbook5', '$dess_logbook5', '$pno_logbook5', '$pni_logbook5', '$sno_logbook5', '$sni_logbook5', '$seq_logbook6', '$dess_logbook6', '$pno_logbook6', '$pni_logbook6', '$sno_logbook6', '$sni_logbook6', '$seq_logbook7', '$dess_logbook7', '$pno_logbook7', '$pni_logbook7', '$sno_logbook7', '$sni_logbook7', '$seq_logbook8', '$dess_logbook8', '$pno_logbook8', '$pni_logbook8', '$sno_logbook8', '$sni_logbook8', '$seq_logbook9', '$dess_logbook9', '$pno_logbook9', '$pni_logbook9', '$sno_logbook9', '$sni_logbook9', '$seq_logbook10', '$dess_logbook10', '$pno_logbook10', '$pni_logbook10', '$sno_logbook10', '$sni_logbook10')";
                mysqli_query($conn, $sql);
                ?>