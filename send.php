<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    //Notice the '.' not '@'
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //Enter your Email 
    $mail->Username = 'Enter your email';
    //Get your app Password from Google Accounts under 2 step verification
    $mail->Password = 'Enter Your App Password';   
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    
    $mail->setFrom($_POST['email']);

    $mail->addAddress(''Enter recipient email'');
    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];
    
    $mail->Body ='Name:'.$_POST['second'].'<br> Other:'.$_POST['first'].'<br>'.$_POST['message'];

    $mail->send();

    echo 
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'index.php';
    </script>
    ";
}
?>
