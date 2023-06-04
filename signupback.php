<?php 
session_start(); 
include "config/conn.php";

use PHPMailer\PHPMailer\PHPMailer;
 require_once "PHPMailer/src/Exception.php";
 require_once "PHPMailer/src/PHPMailer.php";
 require_once "PHPMailer/src/SMTP.php";

$mail = new PHPMailer(true);

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['password'])
    && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);
    $domain = "@univ-constantine2.dz";
    




	if (empty($fname)) {
		header("Location: signup.php?error=firstname is required");
	    exit();
	}else if(empty($lname)){
        header("Location: signup.php?error=lastname is required");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required");
	    exit();
	}else if(empty($email)){
        header("Location: signup.php?error=email is required");
	    exit();
	}else if (substr_compare($email, $domain, -strlen($domain)) === 0){

		// hashing the password1
        $pass = md5($pass);

	    $sql = "SELECT * FROM 	student WHERE email_student='$email' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=This email has an account try another");
	        exit();
		}else{
		$mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = "tls";
        $mail->Port = '587';
        $mail->Username = "bgthadj@gmail.com";
        $mail->Password = "cbgsynwgpcoiavxd";
        $mail->setFrom("bgthadj@gmail.com", "STAGET");
        $mail->addAddress($email, $fname);
        $verificationCode = rand(100000, 999999);
        $mail->Subject = "Verification code ";
        $mail->Body = "your STAGET verification code is :".$verificationCode;
        $mail->send();

        $sql2 = "SELECT * FROM 	verified WHERE email='$email' ";
		$result2 = mysqli_query($conn, $sql2);
		if (mysqli_num_rows($result2) > 0) {
            $sql3 = "UPDATE verified SET code = '$verificationCode'  WHERE email='$email'";
            $result3 = mysqli_query($conn, $sql3);
        }else {
            $sql4 = "INSERT INTO 	verified(email,code) VALUES('$email', '$verificationCode')";
            $result4 = mysqli_query($conn, $sql4);
      
        }
          
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;



        header("Location: signup2.php");
        exit();
		}
	}else {
        header("Location: signup.php?error=mhoch email ta3 jami3a ");
	    exit(); 
    }
	
}else{
	header("Location: signup.php");
	exit();
}