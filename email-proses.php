<?php

use PHPMailer\PHPMailer\PHPMailer;
//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = 0;                                       //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                        //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'ting48753@gmail.com';                     //SMTP username
$mail->Password   = 'wkyq lzcm ngjd teyo';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
$mail->Port       = 465;

//Recipients
$mail->setFrom('ting48753@gmail.com', 'Tutorial rafif teknologi');
$mail->addAddress($_POST['email_penerima']);     //penerima
$mail->addReplyTo('ting48753@gmail.com', 'Tutorial rafif teknologi');

$mail->Subject = $_POST['subject'];
$mail->Body    = $_POST['pesan'];

if ($mail->send()) {
    echo "<script>
        alert('email berasil di kirimkan woi');
        document.location.href='email.php';
        </script>";
} else {
    echo " <script>
        alert('aduh email nya gagal di krim kasihan yaa');
        document.location.href='email.php';
        </script>";
}
