<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $hil= $_POST['hil'];
                $exp_cml= $_POST['exp_cml'];
                $cat= $_POST['cat'];
                $hil2= $_POST['hil2'];
                $exp_cml2= $_POST['exp_cml2'];
                $cat2= $_POST['cat2'];
                $hil3= $_POST['hil3'];
                $exp_cml3= $_POST['exp_cml3'];
                $cat3= $_POST['cat3'];
                $hil4= $_POST['hil4'];
                $exp_cml4= $_POST['exp_cml4'];
                $cat4= $_POST['cat4'];
                $hil5= $_POST['hil5'];
                $exp_cml5= $_POST['exp_cml5'];
                $cat5= $_POST['cat5'];
                $hil6= $_POST['hil6'];
                $exp_cml6= $_POST['exp_cml6'];
                $cat6= $_POST['cat6'];
                $hil7= $_POST['hil7'];
                $exp_cml7= $_POST['exp_cml7'];
                $cat7= $_POST['cat7'];
                $hil8= $_POST['hil8'];
                $exp_cml8= $_POST['exp_cml8'];
                $cat8= $_POST['cat8'];
                $hil9= $_POST['hil9'];
                $exp_cml9= $_POST['exp_cml9'];
                $cat9= $_POST['cat9'];
                $hil10= $_POST['hil10'];
                $exp_cml10= $_POST['exp_cml10'];
                $cat10= $_POST['cat10'];

                $sql="INSERT INTO cabin_problem (hil, exp_cml, cat, hil2, exp_cml2, cat2, hil3, exp_cml3, cat3, hil4, exp_cml4, cat4, hil5, exp_cml5, cat5, hil6, exp_cml6, cat6, hil7, exp_cml7, cat7, hil8, exp_cml8, cat8, hil9, exp_cml9, cat9, hil10, exp_cml10, cat10)
                VALUES ('$hil', '$exp_cml', '$cat', '$hil2', '$exp_cml2', '$cat2', '$hil3', '$exp_cml3', '$cat3', '$hil4', '$exp_cml4', '$cat4', '$hil5', '$exp_cml5', '$cat5', '$hil6', '$exp_cml6', '$cat6', '$hil7', '$exp_cml7', '$cat7', '$hil8', '$exp_cml8', '$cat8', '$hil9', '$exp_cml9', '$cat9', '$hil10', '$exp_cml10', '$cat10')";
                mysqli_query($conn, $sql);
                ?>