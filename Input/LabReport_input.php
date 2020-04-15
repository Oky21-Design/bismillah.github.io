<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $pesawat= $_POST["pesawat"];
                $kode= $_POST['kode'];
                $sampling_date= $_POST['sampling_date'];
                $next_date= $_POST['next_date'];
                $no_or= $_POST['no_or'];
                $tan= $_POST['tan'];
                $action_tan= $_POST['action_tan'];
                $wc= $_POST['wc'];
                $action_wc= $_POST['action_wc'];
                $density= $_POST['density'];
                $action_density= $_POST['action_density'];
                $kv= $_POST['kv'];
                $action_kv= $_POST['action_kv'];
                $cc= $_POST['cc'];
                $action_cc= $_POST['action_cc'];
                $ec= $_POST['ec'];
                $action_ec= $_POST['action_ec'];
                $nas_class= $_POST['nas_class'];
                $particle_i= $_POST['particle_i'];
                $particle_ii= $_POST['particle_ii'];
                $particle_iii= $_POST['particle_iii'];
                $particle_iv= $_POST['particle_iv'];
                $particle_v= $_POST['particle_v'];
                $action_particle= $_POST['action_particle'];

                $sql="INSERT INTO lab_report (pesawat, kode, sampling_date, next_date, no_or, tan, action_tan, wc, action_wc, density, action_density, kv, action_kv, cc, action_cc, ec, action_ec, nas_class, particle_i, particle_ii, particle_iii, particle_iv, particle_v, action_particle)
                VALUES ('$pesawat', '$kode', '$sampling_date', '$next_date', '$no_or', '$tan', '$action_tan', '$wc', '$action_wc', '$density', '$action_density', '$kv', '$action_kv', '$cc', '$action_cc', '$ec', '$action_ec', '$nas_class', '$particle_i', '$particle_ii', '$particle_iii', '$particle_iv', '$particle_v', '$action_particle')";
                mysqli_query($conn, $sql);
                ?>