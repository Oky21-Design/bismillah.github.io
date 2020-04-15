<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $sgb_one= $_POST['sgb_one'];
                $last_inspect_one= $_POST['last_inspect_one'];
                $sgb_two= $_POST['sgb_two'];
                $last_inspect_two= $_POST['last_inspect_two'];
                $fct_afh= $_POST['fct_afh'];
                $fct_normal= $_POST['fct_normal'];
                $fdt_afh= $_POST['fdt_afh'];
                $fdt_normal= $_POST['fdt_normal'];
                $cct_afh= $_POST['cct_afh'];
                $cct_normal= $_POST['cct_normal'];
                $cmt_afh= $_POST['cmt_afh'];
                $cmt_normal= $_POST['cmt_normal'];
                $cdt_afh= $_POST['cdt_afh'];
                $cdt_normal= $_POST['cdt_normal'];
                $fueldraining= $_POST['fueldraining'];
                

                $sql="INSERT INTO weekly_Report (sgb_one, last_inspect_one, sgb_two, last_inspect_two, fct_afh, fct_normal, fdt_afh, fdt_normal, cct_afh, cct_normal, cmt_afh, cmt_normal, cdt_afh, cdt_normal, fueldraining)
                VALUES ('$sgb_one', '$last_inspect_one', '$sgb_two', '$last_inspect_two', '$fct_afh', '$fct_normal', '$fdt_afh', '$fdt_normal', '$cct_afh', '$cct_normal', '$cmt_afh', '$cmt_normal', '$cdt_afh', '$cdt_normal', '$fueldraining')";
                mysqli_query($conn, $sql);

                #UPDATE
                
                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.sgb_one = weekly_report.sgb_one WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.last_inspect_one = weekly_report.last_inspect_one WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.sgb_two = weekly_report.sgb_two WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.last_inspect_two = weekly_report.last_inspect_two WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.fct_afh = weekly_report.fct_afh WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.fct_normal = weekly_report.fct_normal WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.fdt_afh = weekly_report.fdt_afh WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.fdt_normal = weekly_report.fdt_normal WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.cct_afh = weekly_report.cct_afh WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.cct_normal = weekly_report.cct_normal WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.cmt_afh = weekly_report.cmt_afh WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.cmt_normal = weekly_report.cmt_normal WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.cdt_afh = weekly_report.cdt_afh WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.cdt_normal = weekly_report.cdt_normal WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);

                $sql = "UPDATE tampung_all, weekly_report SET tampung_all.fueldraining = weekly_report.fueldraining WHERE tampung_all.id = weekly_report.id";
                mysqli_query($conn, $sql);
                
                //ALERT

                if( $sgb_one && $sgb_two < 6.1 ){

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
    $mail->Subject = "ALERT STARGEN BRUSH";
    include 'koneksi.php';
    $query = mysqli_query($connect,"SELECT * FROM tampung_all ORDER BY id DESC LIMIT 1");
    while($data = mysqli_fetch_array($query)){
    $mail->Body = "$data[kode] Stargen Brush #1 = $sgb_one <br/> Stargen Brush #2 = $sgb_two";
    };
    $mail->AddAddress("andyminoz98@gmail.com");
    $mail->addCC('okyhindrawan@gmail.com');

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
    }

    if( $fdt_afh && $fdt_normal && $cdt_afh && $cdt_normal > 15 ){

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
    $mail->Subject = "ALERT DUCT TEMP";
    include 'koneksi.php';
    $query = mysqli_query($connect,"SELECT * FROM tampung_all ORDER BY id DESC LIMIT 1");
    while($data = mysqli_fetch_array($query)){
    $mail->Body = "AC Pesawat $data[kode] Melebihi 15";
    };
    $mail->AddAddress("andyminoz98@gmail.com");
    $mail->addCC('okyhindrawan@gmail.com');

   if(!$mail->Send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
   echo "Message has been sent";
      }
   }
?>