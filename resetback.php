<?php 
session_start(); 
include "config/conn.php";
use PHPMailer\PHPMailer\PHPMailer;
 require_once "PHPMailer/src/Exception.php";
 require_once "PHPMailer/src/PHPMailer.php";
 require_once "PHPMailer/src/SMTP.php";

$mail = new PHPMailer(true);

if (isset($_POST['email']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
    $sql = "SELECT * FROM 	verified WHERE email='$email' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = "tls";
        $mail->Port = '587';
        $mail->Username = "bgthadj@gmail.com";
        $mail->Password = "cbgsynwgpcoiavxd";
        $mail->setFrom("bgthadj@gmail.com", "STAGET");
        $mail->addAddress($email, $email);
        $verificationCode = rand(100000, 999999);
        $mail->Subject = "Verification code ";
        $mail->Body = "your STAGET verification code is :".$verificationCode;
        $mail->send();
        $sql2 = "UPDATE verified SET code = '$verificationCode'  WHERE email='$email'";
        $result2 = mysqli_query($conn, $sql2);
        if ( $result2) {
            $_SESSION['email'] = $email;
        }
        header("Location: code.php?mchkl froha llcode");
        exit();

    }else{
        header("Location: reset.php?mknchfbd");
        exit();
    } 

}else{
        header("Location: reset.php?ftdkhalta3email");
        exit();
    } 
      