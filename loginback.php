<?php 
session_start(); 
include "config/conn.php";


if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);
	$pass = md5($pass);

	if (empty($email)) {
		header("Location: login.php");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php");
	    exit();
	}else{
		$sql = "SELECT * FROM student WHERE email_student='$email' AND password_student='$pass'";
		$result = mysqli_query($conn, $sql);
		
		$sql2 = "SELECT * FROM head WHERE email_hod='$email' AND password_hod='$pass'";
		$result2 = mysqli_query($conn, $sql2);
		
		$sql3 = "SELECT * FROM manager WHERE email_manager='$email' AND password_manager='$pass'";
		$result3 = mysqli_query($conn, $sql3);

		$sql4 = "SELECT * FROM admin WHERE email_admin='$email' AND password_admin='$pass'";
		$result4 = mysqli_query($conn, $sql4);

         
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email_student'] === $email && $row['password_student'] === $pass) {
            	$_SESSION['idst'] = $row['id_student'];
				$_SESSION['fnamest'] = $row['firstname_student'];
				$_SESSION['lnamest'] = $row['lastname_student'];
				$_SESSION['birthdayst'] = $row['birthday_student'];
				$_SESSION['levelst'] = $row['level_student'];
            	$_SESSION['semesterst'] = $row['semester_student'];
            	$_SESSION['yearst'] = $row['acyear_student'];
				$_SESSION['pst'] = $row['profile_student'];
				$_SESSION['emailst'] = $row['email_student'];
				$_SESSION['sepst'] = $row['speciality_student'];
				$_SESSION['depst'] = $row['dep_student'];
            	header("Location: student/index.php?flsql2");
		        exit();
            }else{
				header("Location: login.php?flsql3");
		        exit();
			}
		}else if (mysqli_num_rows($result2) === 1) {
				$row = mysqli_fetch_assoc($result2);
				if ($row['email_hod'] === $email && $row['password_hod'] === $pass) {
					$_SESSION['idhod'] = $row['id_hod'];
					$_SESSION['fnamehod'] = $row['firstname_hod'];
					$_SESSION['lnamehod'] = $row['lastname_hod'];
					$_SESSION['emailhod'] = $row['email_hod'];
					$_SESSION['phod'] = $row['profile_hod'];
					$_SESSION['dephod']=$row['dep_hod'];
					$_SESSION['bdhod']=$row['bd_hod'];
					header("Location: head/index.php");
					exit();}else{
						header("Location: login.php");
						exit();
					}
				}else if (mysqli_num_rows($result3) === 1) {
						$row = mysqli_fetch_assoc($result3);
						if ($row['email_manager'] === $email && $row['password_manager'] === $pass) {
							$_SESSION['idm'] = $row['id_manager'];
							$_SESSION['namem'] = $row['name_manager'];
							$_SESSION['emailm'] = $row['email_manager'];
							$_SESSION['pm'] = $row['profile_manager'];
							$_SESSION['companym'] = $row['company_manager'];
						header("Location: manager/index.php");
							exit();}else{
								header("Location: login.php");
								exit();
							}
						
						}else if (mysqli_num_rows($result4) === 1) {
							$row = mysqli_fetch_assoc($result4);
							if ($row['email_admin'] === $email && $row['password_admin'] === $pass) {
								$_SESSION['idad'] = $row['id_admin'];
								$_SESSION['namead'] = $row['name_admin'];
								$_SESSION['emailad'] = $row['email_admin'];
								$_SESSION['pad'] = $row['profile_admin'];
							header("Location: admin/index.php");
								exit();}else{
									header("Location: login.php");
									exit();
								}
							
							}else{

			header("Location: login.php");
	        exit();}
		
	}
	
}else{
	header("Location: login.php");
	exit();
} 
  