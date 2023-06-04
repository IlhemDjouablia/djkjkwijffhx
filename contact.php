<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";

if (isset($_POST['email']) && isset($_POST['msg'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $msg = validate($_POST['msg']);
    $sub = validate($_POST['subject']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "bgthadj@gmail.com";
        $mail->Password = "cbgsynwgpcoiavxd";
        $mail->setFrom($email, "STAGET");
        $mail->addAddress("bgthadj@gmail.com", "STAGET");
        $mail->Subject = $sub;
        $mail->isHTML(true);
        $mail->Body = "<h4>You have a message from: " . $email . "</h4><br><h3>" . $msg . "</h3>";
        $mail->send();
        echo "<script>alert('Email sent successfully.'); window.location.href = 'index.html';</script>";
        exit();
    } catch (Exception $e) {
        echo "<script>alert('There was an error sending the email. Please try again later.');</script>";

    }

}
