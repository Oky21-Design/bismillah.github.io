<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $seq_msao= $_POST['seq_msao'];
                $dess_msao= $_POST['dess_msao'];
                $pno_msao= $_POST['pno_msao'];
                $pni_msao= $_POST['pni_msao'];
                $sno_msao= $_POST['sno_msao'];
                $sni_msao= $_POST['sni_msao'];
                $seq_msao2= $_POST['seq_msao2'];
                $dess_msao2= $_POST['dess_msao2'];
                $pno_msao2= $_POST['pno_msao2'];
                $pni_msao2= $_POST['pni_msao2'];
                $sno_msao2= $_POST['sno_msao2'];
                $sni_msao2= $_POST['sni_msao2'];
                $seq_msao3= $_POST['seq_msao3'];
                $dess_msao3= $_POST['dess_msao3'];
                $pno_msao3= $_POST['pno_msao3'];
                $pni_msao3= $_POST['pni_msao3'];
                $sno_msao3= $_POST['sno_msao3'];
                $sni_msao3= $_POST['sni_msao3'];
                $seq_msao4= $_POST['seq_msao4'];
                $dess_msao4= $_POST['dess_msao4'];
                $pno_msao4= $_POST['pno_msao4'];
                $pni_msao4= $_POST['pni_msao4'];
                $sno_msao4= $_POST['sno_msao4'];
                $sni_msao4= $_POST['sni_msao4'];
                $seq_msao5= $_POST['seq_msao5'];
                $dess_msao5= $_POST['dess_msao5'];
                $pno_msao5= $_POST['pno_msao5'];
                $pni_msao5= $_POST['pni_msao5'];
                $sno_msao5= $_POST['sno_msao5'];
                $sni_msao5= $_POST['sni_msao5'];
                $seq_msao6= $_POST['seq_msao6'];
                $dess_msao6= $_POST['dess_msao6'];
                $pno_msao6= $_POST['pno_msao6'];
                $pni_msao6= $_POST['pni_msao6'];
                $sno_msao6= $_POST['sno_msao6'];
                $sni_msao6= $_POST['sni_msao6'];
                $seq_msao7= $_POST['seq_msao7'];
                $dess_msao7= $_POST['dess_msao7'];
                $pno_msao7= $_POST['pno_msao7'];
                $pni_msao7= $_POST['pni_msao7'];
                $sno_msao7= $_POST['sno_msao7'];
                $sni_msao7= $_POST['sni_msao7'];
                $seq_msao8= $_POST['seq_msao8'];
                $dess_msao8= $_POST['dess_msao8'];
                $pno_msao8= $_POST['pno_msao8'];
                $pni_msao8= $_POST['pni_msao8'];
                $sno_msao8= $_POST['sno_msao8'];
                $sni_msao8= $_POST['sni_msao8'];
                $seq_msao9= $_POST['seq_msao9'];
                $dess_msao9= $_POST['dess_msao9'];
                $pno_msao9= $_POST['pno_msao9'];
                $pni_msao9= $_POST['pni_msao9'];
                $sno_msao9= $_POST['sno_msao9'];
                $sni_msao9= $_POST['sni_msao9'];
                $seq_msao10= $_POST['seq_msao10'];
                $dess_msao10= $_POST['dess_msao10'];
                $pno_msao10= $_POST['pno_msao10'];
                $pni_msao10= $_POST['pni_msao10'];
                $sno_msao10= $_POST['sno_msao10'];
                $sni_msao10= $_POST['sni_msao10'];
                

                $sql="INSERT INTO activity_msao (seq_msao, dess_msao, pno_msao, pni_msao, sno_msao, sni_msao, seq_msao2, dess_msao2, pno_msao2, pni_msao2, sno_msao2, sni_msao2, seq_msao3, dess_msao3, pno_msao3, pni_msao3, sno_msao3, sni_msao3, seq_msao4, dess_msao4, pno_msao4, pni_msao4, sno_msao4, sni_msao4, seq_msao5, dess_msao5, pno_msao5, pni_msao5, sno_msao5, sni_msao5, seq_msao6, dess_msao6, pno_msao6, pni_msao6, sno_msao6, sni_msao6, seq_msao7, dess_msao7, pno_msao7, pni_msao7, sno_msao7, sni_msao7, seq_msao8, dess_msao8, pno_msao8, pni_msao8, sno_msao8, sni_msao8, seq_msao9, dess_msao9, pno_msao9, pni_msao9, sno_msao9, sni_msao9, seq_msao10, dess_msao10, pno_msao10, pni_msao10, sno_msao10, sni_msao10)
                VALUES ('$seq_msao', '$dess_msao', '$pno_msao', '$pni_msao', '$sno_msao', '$sni_msao', '$seq_msao2', '$dess_msao2', '$pno_msao2', '$pni_msao2', '$sno_msao2', '$sni_msao2', '$seq_msao3', '$dess_msao3', '$pno_msao3', '$pni_msao3', '$sno_msao3', '$sni_msao3', '$seq_msao4', '$dess_msao4', '$pno_msao4', '$pni_msao4', '$sno_msao4', '$sni_msao4', '$seq_msao5', '$dess_msao5', '$pno_msao5', '$pni_msao5', '$sno_msao5', '$sni_msao5', '$seq_msao6', '$dess_msao6', '$pno_msao6', '$pni_msao6', '$sno_msao6', '$sni_msao6', '$seq_msao7', '$dess_msao7', '$pno_msao7', '$pni_msao7', '$sno_msao7', '$sni_msao7', '$seq_msao8', '$dess_msao8', '$pno_msao8', '$pni_msao8', '$sno_msao8', '$sni_msao8', '$seq_msao9', '$dess_msao9', '$pno_msao9', '$pni_msao9', '$sno_msao9', '$sni_msao9', '$seq_msao10', '$dess_msao10', '$pno_msao10', '$pni_msao10', '$sno_msao10', '$sni_msao10')";
                mysqli_query($conn, $sql);
                ?>