<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $cor= $_POST['cor'];
                $cor= date('Y-m-d', strtotime($cor));
                $coa= $_POST['coa'];
                $coa= date('Y-m-d', strtotime($coa));
                $aasl= $_POST['aasl'];
                $aasl= date('Y-m-d', strtotime($aasl));
                $ci= $_POST['ci'];
                $ci= date('Y-m-d', strtotime($ci));

                $sql="INSERT INTO certificate (cor, coa, aasl, ci)
                VALUES ('$cor', '$coa', '$aasl', '$ci')";
                mysqli_query($conn, $sql);
                ?>