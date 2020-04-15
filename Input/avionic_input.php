<?php
                $conn=mysqli_connect("localhost", "root", "", "air");

                $b_head= $_POST['b_head'];
                $head= $_POST['head'];
                $mbv= $_POST['mbv'];
                $ebv= $_POST['ebv'];
                $pec= $_POST['pec'];
                $txtpec= $_POST['txtpec'];
                $eec= $_POST['eec'];
                $txteec= $_POST['txteec'];
                $mfc= $_POST['mfc'];
                $txtmfc= $_POST['txtmfc'];

                $sql="INSERT INTO avionic (b_head, head, mbv, ebv, pec, txtpec, eec, txteec, mfc, txtmfc)
                VALUES ('$b_head', '$head', '$mbv', '$ebv', '$pec', '$txtpec', '$eec', '$txteec', '$mfc', '$txtmfc')";
                mysqli_query($conn, $sql);

                if( $mbv && $ebv < 25.6 ){

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
        $mail->SetFrom("AIR@Alert.com");
        $mail->Subject = "ALERT BATTERY";
        include 'koneksi.php';
        $query = mysqli_query($connect,"SELECT * FROM tampung_all ORDER BY id DESC LIMIT 1");
        while($data = mysqli_fetch_array($query)){
        $mail->Body = "Someone report with under minimum <br/> Main Battery: $mbv <br/> Emmergency Battery: $ebv";
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