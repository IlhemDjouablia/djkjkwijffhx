<?php 
session_start();
include "config/conn.php";

if (isset($_SESSION['email'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpassword</title>
    <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/style2.css">

</head>
<body>
<a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">STAGET</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                       
                        <li class="nav__item"><a href="#login" id="myOtherButton11" class="button">Go Back</a></li>

                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
           
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    

                    
                        <div class="wrapper">
                            <div class="home__img">
                                <img src="assets/img/password.png" alt="">
                            </div>
        
                            <form action="" method="post">
                        <h2>Update Password</h2>
   
                       
                                <div class="input-box">
                                    <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                    <input type="password" required name="password1" pattern=".{6,}" title="Password must be at least 6 characters long">
                                    <label>New Password</label>
                                        </div>
                                        <div class="input-box">
                                            <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                                            <input type="password" required name="password2" pattern=".{6,}" title="Password must be at least 6 characters long">
                                            <label>Confirm Password</label>
                                                </div>
                                <button type="submit">Update Password</button> 
                            </form>
                    
                  
                    </div>
                    </div>   
                </div>
            </section>
        </main>
        <script src="https://unpkg.com/scrollreveal"></script>

<!--========== MAIN JS ==========-->
<script src="assets/js/main.js"></script>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 
</body>
</html>

<?php 
} else {
    header("Location: code.php?flnewpass");
    exit();
}

if (isset($_POST['password1']) && isset($_POST['password2'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $email = $_SESSION['email'] ;
    $pass = validate($_POST['password1']);
    $repass = validate($_POST['password2']);


    if(empty($pass)){
        header("Location: newpassword.php?error=Password is required");
	    exit();
	}
	else if(empty($repass)){
        header("Location: newpassword.php?error=Re Password is required");
	    exit();
	}

	else if($pass !== $repass){
        header("Location: newpassword.php?error=The confirmation password1  does not match");
	    exit();
	}else{

		// hashing the password1
        $pass = md5($pass);
        // hnaaa lmchkl

        $sql1 = "SELECT * FROM student WHERE email_student='$email'";
		$result1 = mysqli_query($conn, $sql1);
		
		$sql2 = "SELECT * FROM head WHERE email_hod='$email'";
		$result2 = mysqli_query($conn, $sql2);
		
		$sql3 = "SELECT * FROM manager WHERE email_manager='$email'";
		$result3 = mysqli_query($conn, $sql3);

		$sql4 = "SELECT * FROM admin WHERE email_admin='$email'";
		$result4 = mysqli_query($conn, $sql4);

        if (mysqli_num_rows($result1) === 1) {
			$row = mysqli_fetch_assoc($result1);
            if ($row['email_student'] === $email) {
                $sql5 = "UPDATE student SET password_student = '$pass'  WHERE email_student='$email'";
                $result5 = mysqli_query($conn, $sql5);
                header("Location: login.php");
                exit();

            
            }else{
                    header("Location: newpassword.php?flsql3");
                    exit();
                }   }else if (mysqli_num_rows($result2) === 1) {
                    $row = mysqli_fetch_assoc($result2);
                    if ($row['email_hod'] === $email) {
                        $sql6 = "UPDATE head SET password_hod = '$pass'  WHERE email_hod='$email'";
                        $result6 = mysqli_query($conn, $sql6);
                        header("Location: login.php");
                        exit();
        
                    
                    }else{
                            header("Location: newpassword.php?flsql3");
                            exit();
                        }   }else if (mysqli_num_rows($result3) === 1) {
                            $row = mysqli_fetch_assoc($result3);
                            if ($row['email_manager'] === $email) {
                                $sql7 = "UPDATE manager SET password_manager = '$pass'  WHERE email_manager='$email'";
                                $result7 = mysqli_query($conn, $sql7);
                                header("Location: login.php");
                                exit();
                
                            
                            }else{
                                    header("Location: newpassword.php?flsql3");
                                    exit();
                                }   }else if (mysqli_num_rows($result4) === 1) {
                                    $row = mysqli_fetch_assoc($result4);
                                    if ($row['email_admin'] === $email) {
                                        $sql8 = "UPDATE admin SET password_admin = '$pass'  WHERE email_admin='$email'";
                                        $result8 = mysqli_query($conn, $sql8);
                                        header("Location: login.php");
                                        exit();
                        
                                    
                                    }else{
                                            header("Location: newpassword.php?flsql3");
                                            exit();
                                        }   }else{
                                            header("Location: newpassword.php?flsql3");
                                            exit();
                                        }




        // $sql2 = "UPDATE student SET password_student = '$pass'  WHERE email_student='$email'";
        // $result2 = mysqli_query($conn, $sql2);
        // header("Location: login.php");
	    // exit();

 


}}
?>
