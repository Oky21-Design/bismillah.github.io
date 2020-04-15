<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $seq_aml= $_POST['seq_aml'];
                $dess_aml= $_POST['dess_aml'];
                $cat_aml= $_POST['cat_aml'];
                $seq_aml2= $_POST['seq_aml2'];
                $dess_aml2= $_POST['dess_aml2'];
                $cat_aml2= $_POST['cat_aml2'];
                $seq_aml3= $_POST['seq_aml3'];
                $dess_aml3= $_POST['dess_aml3'];
                $cat_aml3= $_POST['cat_aml3'];
                $seq_aml4= $_POST['seq_aml4'];
                $dess_aml4= $_POST['dess_aml4'];
                $cat_aml4= $_POST['cat_aml4'];
                $seq_aml5= $_POST['seq_aml5'];
                $dess_aml5= $_POST['dess_aml5'];
                $cat_aml5= $_POST['cat_aml5'];
                $seq_aml6= $_POST['seq_aml6'];
                $dess_aml6= $_POST['dess_aml6'];
                $cat_aml6= $_POST['cat_aml6'];
                $seq_aml7= $_POST['seq_aml7'];
                $dess_aml7= $_POST['dess_aml7'];
                $cat_aml7= $_POST['cat_aml7'];
                $seq_aml8= $_POST['seq_aml8'];
                $dess_aml8= $_POST['dess_aml8'];
                $cat_aml8= $_POST['cat_aml8'];
                $seq_aml9= $_POST['seq_aml9'];
                $dess_aml9= $_POST['dess_aml9'];
                $cat_aml9= $_POST['cat_aml9'];
                $seq_aml10= $_POST['seq_aml10'];
                $dess_aml10= $_POST['dess_aml10'];
                $cat_aml10= $_POST['cat_aml10'];
                

                $sql="INSERT INTO activity_aml (seq_aml, dess_aml, cat_aml, seq_aml2, dess_aml2, cat_aml2, seq_aml3, dess_aml3, cat_aml3, seq_aml4, dess_aml4, cat_aml4, seq_aml5, dess_aml5, cat_aml5, seq_aml6, dess_aml6, cat_aml6, seq_aml7, dess_aml7, cat_aml7, seq_aml8, dess_aml8, cat_aml8, seq_aml9, dess_aml9, cat_aml9, seq_aml10, dess_aml10, cat_aml10)
                VALUES ('$seq_aml', '$dess_aml', '$cat_aml', '$seq_aml2', '$dess_aml2', '$cat_aml2', '$seq_aml3', '$dess_aml3', '$cat_aml3', '$seq_aml4', '$dess_aml4', '$cat_aml4', '$seq_aml5', '$dess_aml5', '$cat_aml5', '$seq_aml6', '$dess_aml6', '$cat_aml6', '$seq_aml7', '$dess_aml7', '$cat_aml7', '$seq_aml8', '$dess_aml8', '$cat_aml8', '$seq_aml9', '$dess_aml9', '$cat_aml9', '$seq_aml10', '$dess_aml10', '$cat_aml10')";
                mysqli_query($conn, $sql);
                ?>