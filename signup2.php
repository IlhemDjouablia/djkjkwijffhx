<?php 
include "config/conn.php";
session_start();

if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>
            <!--========== SCROLL TOP ==========-->
            <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">STAGET</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                       
                        <li class="nav__item"><a href="#login" id="myOtherButton9" class="button">Go Back</a></li>

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
                                <img src="assets/img/login3.png" alt="">
                            </div>
        <form action="" method="post">
            <div id="verification-form">
                <h2>verify</h2>
                <div class="input-box">
                    <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="code" >
                    <label> code</label>
                </div>
                <button type="submit">verify</button> 
            </div> 
        </form>
    </div>

    
            <!--========== SCROLL REVEAL ==========-->
            <script src="https://unpkg.com/scrollreveal"></script>

<!--========== MAIN JS ==========-->
<script src="assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 
</body>
</html>

<?php 
} else {
     header("Location: signup.php?flsinuptalya");
     exit();
}

if (isset($_POST['code'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $fname = $_SESSION['fname'] ;
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'] ;
    $pass = $_SESSION['pass'] ;

    $code = validate($_POST['code']);
    $sql = "SELECT * FROM verified WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['code'] === $code && $row['email'] === $email) {
            $sql3 = "INSERT INTO student(firstname_student, lastname_student, email_student,password_student) VALUES('$fname','$lname', '$email', '$pass')";
            $result3 = mysqli_query($conn, $sql3);
            if ($result3) {
                      $sql4 = "UPDATE verified SET code = 0  WHERE email='$email'";
                      $result4 = mysqli_query($conn, $sql4);
                header("Location: info.php?fl roha ll info");
              exit();
            }else {
                header("Location: signup2.php?flinsertta3namewga3");
                 exit();
            }





        } else {
            header("Location: signup2.php?mchnfslcode");
            exit();
        }
    }else {
        header("Location: signup2.php?ftdkhalta3code");
        exit();
    }
} 
?>
