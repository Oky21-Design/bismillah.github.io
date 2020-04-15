<?php
    session_start();
    include 'koneksi.php';

    // mengambil isian dari form login
    $username = addslashes($_POST['username']);
    $password = $_POST['password'];

    $query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    $result = mysqli_num_rows($query);
    
    if ($result > 0) {
        session_start();
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row['user_id'];
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $row['_nama'];
        $_SESSION['status'] = "login";
        header("Location: ../Data_Aircraft/AllAircraft/AllAircraft.php");
    } 
    else {
        header("location:login.php?pesan=failed");
   };
?>