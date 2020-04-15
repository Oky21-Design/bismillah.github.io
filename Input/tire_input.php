<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $due_dates= $_POST['due_dates'];
                $due_dates= date('Y-m-d', strtotime($due_dates));
                $nw_bi= $_POST['nw_bi'];
                $nw_ai= $_POST['nw_ai'];
                $nw_bii= $_POST['nw_bii'];
                $nw_aii= $_POST['nw_aii'];
                $lmw_bi= $_POST['lmw_bi'];
                $lmw_ai= $_POST['lmw_ai'];
                $lmw_bi_rl= $_POST['lmw_bi_rl'];
                $lmw_bii= $_POST['lmw_bii'];
                $lmw_aii= $_POST['lmw_aii'];
                $lmw_bii_rl= $_POST['lmw_bii_rl'];
                $rmw_biii= $_POST['rmw_biii'];
                $rmw_aiii= $_POST['rmw_aiii'];
                $rmw_biii_rl= $_POST['rmw_biii_rl'];
                $rmw_biv= $_POST['rmw_biv'];
                $rmw_aiv= $_POST['rmw_aiv'];
                $rmw_biv_rl= $_POST['rmw_biv_rl'];

                $sql="INSERT INTO tire_pressure (due_dates, nw_bi, nw_ai, nw_bii, nw_aii, lmw_bi, lmw_ai, lmw_bi_rl, lmw_bii, lmw_aii, lmw_bii_rl, rmw_biii, rmw_aiii, rmw_biii_rl, rmw_biv, rmw_aiv, rmw_biv_rl)
                VALUES ('$due_dates', '$nw_bi', '$nw_ai', '$nw_bii', '$nw_aii', '$lmw_bi', '$lmw_ai', '$lmw_bi_rl', '$lmw_bii', '$lmw_aii', '$lmw_bii_rl', '$rmw_biii', '$rmw_aiii', '$rmw_biii_rl', '$rmw_biv', '$rmw_aiv', '$rmw_biv_rl')";
                mysqli_query($conn, $sql);

                if( $nw_bi && $nw_bii && $nw_ai && $nw_aii < 60.1 ){

                    require("PHPmailer/PHPmailer.php");
                    require("PHPmailer/SMTP.php");
    
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->IsSMTP(); // enable SMTP
    
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "andyminoz16@gmail.com";
        $mail->Password = "b!Nu$1616";
        $mail->SetFrom("AIR@developer.com");
        $mail->Subject = "ALERT NOSE WHEEL PRESSURE";
        include 'koneksi.php';
        $query = mysqli_query($connect,"SELECT * FROM tampung_all ORDER BY id DESC LIMIT 1");
        while($data = mysqli_fetch_array($query)){
        $mail->Body = "$data[kode] <br/> Before: $nw_bi - After: $nw_ai <br/> Before: $nw_bii - After: $nw_aii";
        };
        $mail->AddAddress("andyminoz98@gmail.com");
        $mail->addCC('okyhindrawan@gmail.com');
        //$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png');
    
         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            echo "Message has been sent";
         }
        }

        if( $lmw_bi && $lmw_ai && $lmw_bii && $lmw_aii && $rmw_biii && $rmw_aiii && $rmw_biv && $rmw_aiv  < 120.1 ){

            require("PHPmailer/PHPmailer.php");
            require("PHPmailer/SMTP.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "andyminoz16@gmail.com";
$mail->Password = "b!Nu$1616";
$mail->SetFrom("AIR@developer.com");
$mail->Subject = "ALERT LH & RH MAIN WHEEL PRESSURE";
include 'koneksi.php';
$query = mysqli_query($connect,"SELECT * FROM tampung_all ORDER BY id DESC LIMIT 1");
while($data = mysqli_fetch_array($query)){
$mail->Body = "$data[kode] <br/> LH MAIN WHEEL Before #1: $lmw_bi - LH MAIN WHEEL #1 After: $lmw_ai <br/> LH MAIN WHEEL Before #2: $lmw_bii - LH MAIN WHEEL #2 After: $lmw_aii
<br/> RH MAIN WHEEL Before #1: $rmw_biii - RH MAIN WHEEL #1 After: $rmw_aiii <br/> RH MAIN WHEEL Before #2: $rmw_biv - RH MAIN WHEEL #2 After: $rmw_aiv";
};
$mail->AddAddress("andyminoz98@gmail.com");
$mail->addCC('okyhindrawan@gmail.com');
//$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png');

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
}
                ?>