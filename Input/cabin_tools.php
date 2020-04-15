<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $lavatory= $_POST['lavatory'];
                $txtlavatory= $_POST['txtlavatory'];
                $scc= $_POST['scc'];
                $txtscc= $_POST['txtscc'];
                $ea= $_POST['ea'];
                $txtea= $_POST['txtea'];
                $carpet_co= $_POST['carpet_co'];
                $txtcarpet_co= $_POST['txtcarpet_co'];
                $cabin_cl= $_POST['cabin_cl'];
                $txtcabin_cl= $_POST['txtcabin_cl'];
                $ee= $_POST['ee'];
                $txtee= $_POST['txtee'];

                $sql="INSERT INTO cabin_tools (lavatory, txtlavatory, scc, txtscc, ea, txtea, carpet_co, txtcarpet_co, cabin_cl, txtcabin_cl, ee, txtee)
                VALUES ('$lavatory', '$txtlavatory', '$scc', '$txtscc', '$ea', '$txtea', '$carpet_co', '$txtcarpet_co', '$cabin_cl', '$txtcabin_cl', '$ee', '$txtee')";
                mysqli_query($conn, $sql);
                ?>