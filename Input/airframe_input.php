<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $seo_one= $_POST['seo_one'];
                $seo_two= $_POST['seo_two'];
                $bwpb_one= $_POST['bwpb_one'];
                $bwpa_one= $_POST['bwpa_one'];
                $bwpb_two= $_POST['bwpb_two'];
                $bwpa_two= $_POST['bwpa_two'];
                $hydra= $_POST['hydra'];
                $fob= $_POST['fob'];
                $cop= $_POST['cop'];
                $rc= $_POST['rc'];
                $txtrc= $_POST['txtrc'];
                $sol= $_POST['sol'];
                $txtsol= $_POST['txtsol'];
                $before_com= $_POST['before_com'];
                $txtbefore_com= $_POST['txtbefore_com'];
                $after_com= $_POST['after_com'];
                $txtafter_com= $_POST['txtafter_com'];

                $sql="INSERT INTO airframe (seo_one, seo_two, bwpb_one, bwpa_one, bwpb_two, bwpa_two, hydra, fob, cop, rc, txtrc, sol, txtsol, before_com, txtbefore_com, after_com, txtafter_com)
                VALUES ('$seo_one', '$seo_two', '$bwpb_one', '$bwpa_one', '$bwpb_two', '$bwpa_two', '$hydra', '$fob', '$cop', '$rc', '$txtrc', '$sol', '$txtsol', '$before_com', '$txtbefore_com', '$after_com', '$txtafter_com')";
                mysqli_query($conn, $sql);
                ?>