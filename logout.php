<?php 
session_start();

session_unset();
session_destroy();
// setcookie("cookie_name", "", time() - 365*24*3600);

header("Location: login.php");