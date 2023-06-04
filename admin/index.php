<?php 
session_start();

if (isset($_SESSION['idad']) && isset($_SESSION['namead'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello admin , <?php echo $_SESSION['namead']; ?></h1>
     <p>
    <?php echo $_SESSION['idad'] .
$_SESSION['namead'] ?>
     </p>
     <a href="../logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: ../login.php");
     exit();
}
 ?>