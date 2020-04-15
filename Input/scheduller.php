<?php
    include 'koneksi.php';
    $query = mysqli_query($connect,"SELECT cor FROM tampung_all ");

    if (date('Y-m-d') == 30) {
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
$mail->Body = "ALERT ALERT ALERT MELEBIHI 15*";
$mail->AddAddress("andyminoz98@gmail.com");
//$mail->addCC('okyhindrawan@gmail.com');
//$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png');

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message has been sent";
}
    } else {
        if (date('Y-m-d') == 21) {
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
$mail->Body = "ALERT ALERT ALERT MELEBIHI 15*";
$mail->AddAddress("andyminoz98@gmail.com");
//$mail->addCC('okyhindrawan@gmail.com');
//$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png');

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message has been sent";
}
        } else {
            if (date('Y-m-d') == 14) {
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
          $mail->Body = "ALERT ALERT ALERT MELEBIHI 15*";
          $mail->AddAddress("andyminoz98@gmail.com");
          //$mail->addCC('okyhindrawan@gmail.com');
          //$mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png');
          
          if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo;
          } else {
          echo "Message has been sent";
          }
            }
        }
    }
?>