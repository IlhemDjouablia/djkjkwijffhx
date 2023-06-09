<?php 
session_start();
include('../config/conn.php');
if (isset($_SESSION['idm']) && isset($_SESSION['namem'])) { 
    $id=$_GET['id'];
    if (isset($id)) {
       

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/consulte2.css">
  
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

  

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
    .home__title{
  font-size: 3rem;
  font-weight: 800;
  margin-bottom:1rem;
  color: #5B5757;
}

.DROP-PROFIL {
      position: relative;
    }
    
    .dropdown-menu-pro4 {
      display: none;
      position: absolute;
      top: 100%;
      right: 0;
     
      width: 210px;
      background: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
      border-radius: 10px;
      z-index: 1;
      animation: slideDown 0.3s ease-in-out;
      animation-fill-mode: forwards;
      opacity: 0;
      transform: translateY(-10px);
    }
    
    .MY-PROF {
      display: flex;
      align-items: center;
      padding: 20px;
      transition: all 0.2s ease-in-out;
      border-bottom: .1rem solid #aaa7a717;
      cursor:pointer;
      border-radius: 10px;
    }
    
    .MY-PROF:hover {
      background-color:#af9ef875;
      
    }
    
    .MY-PROF i {
      font-size: large;
      color: #8041f5ab;
      border-radius: 50%;
      margin-right: 10px;
    }
    
    .MY-PROF-text {
      flex: 1;
    }
    
    .MY-PROF-text p {
      margin: 0;
      font-size: 14px;
      font-weight: bold;
      color: #000000b6;
    }
    
    .notification-text span {
      font-size: 11px;
      color: #7884f5;
    }
    
    .DROP-PROFIL:hover .dropdown-menu-pro4 {
      display: block;
      opacity: 1;
      transform: translateY(0);
    }
    
    @keyframes slideDown {
      0% {
        opacity: 0;
        transform: translateY(-10px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    } 
</style>
</head>
<body>
   <div class="container" id="top">
    <!--start sidebar///////////////////////////////////////////////-->
    <aside class="sidebar-wrapper">
            <div class="sidebar-header">
                <img src="img/lgogoo2.png" alt="Logo">
                <h4>Staget</h4>
                <div class="close-menu">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <nav>
                <ul>
                    <li ><a href="index.php" data-section="home">
                            <i class="fas fa-home"></i>
                            <div class="title">Home  </div>
                           
                        </a></li>


                        <li>
                            <a href="#internship" class="dropdown-toggle">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <div class="title">internship Request</div>
                                <i class="fas fa-chevron-down dropdown-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li class="active"><a href="request.php"><i class='bx bx-send' style="font-size: 2rem;"></i>Request</a></li>
                                <li><a href="acc.php"><i class='bx bx-check-circle' style="font-size: 2rem;"></i>Accepted</a></li>
                                <li ><a href="ref.php"> <i class='bx bx-x-circle' style="font-size: 2rem;"></i>Refused</a></li>
                            </ul>
                        </li>
                    <li><a  href="intern.php" data-section="company">
                        <i class="fa-solid fa-briefcase"></i>
                            <div class="title">List Of intern</div>
                        </a></li>

                    <li><a href="contact.php"  data-section="contact">
                        <i class="fa-solid fa-message"></i>
                            <div class="title">Contact</div>
                        </a></li> 

                    
                  
                </ul>
            </nav>
        </aside>
    <!--end sidebar//////////////////////////////////////////////////-->
    <main class="content">
        <!--start header ////////////////////////////////////////////////-->
        <header>
            <div class="header-wrapper">
                <div class="header-left">
                    <div class="toggle-icon">
                        <i class="fas fa-bars"></i>
                    </div>
                    <i class="fa-solid fa-magnifying-glass fa-beat" style="color:#8041f5ab;"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="header-right">

<div class="dropdown dt">
    <div class="star-container bell">
        <i class='bx bx-bell'></i>
        <span class="count" ></span>
    </div>
    <div class="dropdown-content ">

    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		function load_unseen_notification(view = '') {
			$.ajax({
				url: "fetch.php",
				method: "POST",
				data: { view: view },
				dataType: "json",
				success: function(data) {
					$('.dropdown-content').html(data.notification);
					if (data.unseen_notification > 0) {
						$('.count').html(data.unseen_notification);
					}
				}
			});
		}

		load_unseen_notification();

		$(document).on('click', '.dt', function() {
			$('.count').html('');
			load_unseen_notification('yes');
		});

		setInterval(function() {
			load_unseen_notification();
		}, 5000);
	});
</script>

<a href="contact.php">
                    <div class="star-container chat">
                    <i class='bx bx-message-detail'></i>
                    </div></a>
                    
                    <div class="DROP-PROFIL">
                   <div class="photp-pro">
                   <img src="img/<?=$_SESSION['pm']?>" alt="avatar" style="height: 45px ;width:45px ;">
                    </div>
                    <div class="dropdown-menu-pro4">
                    
                      <div class="MY-PROF">
                        <a href="profile.php">
                        <i class='bx bx-user-circle'></i>
                        <div class="MY-PROF-text">
                            <p>My Profil</p>
                          </a>
                        </div></div>
                        <div class="MY-PROF">
                          <a href="security.php">
                          <i class='bx bxs-lock-alt'></i>
                          <div class="MY-PROF-text">
                              <p>Security</p>
                            </a>
                          </div></div>
                          <div class="MY-PROF">
                            <a href="../logout.php">
                            <i class='bx bx-log-out-circle'></i>
                            <div class="MY-PROF-text">
                                <p>Log Out</p>
                              </a>
                            </div></div>
                       
                    </div>
                  </div>
                </div>
            </div>
        </header>               

        <section  id="consulte-section" class="page-section ">
               <div class="row">
               <div class="profile-cardinfo" id="req">
     <?php
             $sql = "SELECT * FROM request INNER JOIN student ON student.id_student = request.id_student where id_req='$id'";  
             $result = mysqli_query($conn, $sql);  
              
             if (mysqli_num_rows($result) === 1) {
              $row = mysqli_fetch_assoc($result);
     ?>
                  <div class="containerinfo">
                    <div class="img-informa">
                    
                      <img src="../student/img/<?=$row['profile_student']?>" alt="profile-img" />
                    </div>
                    <div class="information-form">
                    <h1> <a href="request.php"><i class="fa-sharp fa-solid fa-circle-xmark"></i></a></h1>

                      <h1><?=$row['firstname_student']." ".$row['lastname_student']?></h1>
            
                      <p>
                        <span class="titreinfoform">Personal Details: </span>
                       
                      </p>
                     <p>
                        <span> Date of Birth: <?=$row['birthday_student']?></span>
                        
                      </p>
                      
                      <p>
                        <span>Speciality: <?=$row['speciality_student']?></span>
                        <span>Level: <?=$row['level_student']?></span>
                      </p>
                      
                     
                      <p><span> Semester: <?=$row['semester_student']?></span>
                        <span>Academic Year: <?=$row['acyear_student']?></span></p>
                      <p>
                        <p>
                          <span class="titreinfoform">information relating to the establishment: </span>
                         
                        </p>
                        <p>
                        <span>Name instution: <?=$row['name_comp']?></span>
                        
                        <span>Address: <?=$row['add_comp']?></span>
            
                      </p>
                      <p>
                        <span>phone number: <?=$row['phone_comp']?></span>
                        <span>EMAIL: <?=$row['email_comp']?></span>
                      </p>
                      <p>
                        <span>Internship manager: <?=$row['manager']?></span>
                        <span>Contact details: <?=$row['email_manager']?></span>
                      </p>
                      <p>
                        <span class="titreinfoform">Internship information: </span>
                       
                      </p>
                      <p><span>Duration  of the course: <?=$row['duration']?></span>
                        <span>work plan: <?=$row['work_plan']?></span>
                      </p>
                      <p>
                        <span>starting date: <?=$row['str_date']?></span>
                        <span>finishing date: <?=$row['end_date']?></span>
                      
                      </p>
                      
                    </div>
                    <div class="links-buttonconsult">
            
                  
                    <a href="#"><button class="btn-forminfo accepet-rq" id="accepet-rq">accepted</button></a>
                              <a href="#"><button class="btn-forminfo refuse-rq" id="refuse-rq"> refused </button></a>
            
                              <?php } ?>
                     
            
                     </div>
                   </div>
 
                 </div>
                 
             
                 <div class="popup_box">
   <h1>Are you sure to refus this request?</h1><br><br><br><br>
  
   <div class="btns-res">
     <a href="#" class="btn1-res"><i class='bx bx-arrow-back bx-tada'></i>&nbsp; Cancel </a>
     <a href="back/refuse.php?id=<?=$row['id_req']?>" class="btn2-res"><i class='bx bx-arrow-back bx-tada'></i>&nbsp; Confirm </a>
   </div>
 
 </div>
 
 
 
              
                 <div class="popup_box2">
                  <span> <i class='bx bx-check'></i></span>
                   <h1>Are you sure to accept this request?</h1>
                  
                   <div class="btns-ac">
                     <a href="#" class="btn1-ac"><i class='bx bx-arrow-back bx-tada' ></i>&nbsp;Cancel</a>
                     <a href="back/confirm.php?id=<?=$row['id_req']?>" class="btn2-ac"><i class='bx bx-check-circle bx-tada' ></i>&nbsp; Confirm</a>
                   </div>
                
             
                 </div>
        
                </div>
             
             </section>
 
 
         </div>
 <br><br><br>
         <footer>
             <div class="copyright">
                 copyright &copy; 2023 | Staget made with ❤️ by girls team | all right reserved.
             </div>
         </footer>
 
 
     </main>
    </div>
 
     <div class="switcher-container">
         <div class="switcher-icon">
             <i class="fas fa-cog"></i>
         </div>
         <div class="switcher-close">
             <i class="fas fa-times"></i>
         </div>
         <div class="switcher-header">
             <h3>theme customizer</h3>
             <h4>theme styles</h4>
         </div>
         <div class="switcher-body">
             <ul>
                 <li data-color="#f7f7f7" class="active"></li>
                 <li data-color="#212529"></li>
             </ul>
         </div>
     </div>
     <a href="#top" class="scroll-top">
         <i class="fas fa-arrow-up"></i>
     </a>
     
     
    </div>
    <!--incriment num-->
    
    <!--cicle bar-->
 
     

    <script>
    const dropdownToggle = document.querySelector(".dropdown-toggle");
    const activeListItem = document.querySelector(".submenu li.active");

    dropdownToggle.addEventListener("click", function (event) {
        event.preventDefault();
        const parentLi = this.parentElement;
        parentLi.classList.toggle("open");
    });

    // Check if there is an active list item and keep the dropdown open
    if (activeListItem) {
        const parentDropdown = activeListItem.closest(".submenu");
        const parentLi = parentDropdown.parentElement;
        parentLi.classList.add("open");
    }
</script>
   <script>


$(document).ready(function(){
        $('.refuse-rq').click(function(){
          $('.popup_box').css("display", "block");
        });
        $('.btn1-res').click(function(){
          $('.popup_box').css("display", "none");
        });
        $('.btn2-res').click(function(){
          $('.popup_box').css("display", "none");
          alert("error motif sent with seccess.");
        });
      });


      $(document).ready(function(){
        $('.accepet-rq').click(function(){
          $('.popup_box2').css("display", "block");
        });
        $('.btn1-ac').click(function(){
          $('.popup_box2').css("display", "none");
        });
        $('.btn2-ac').click(function(){
          $('.popup_box2').css("display", "none");
          alert(" seccess.");
        });
      });
</script>
 
 </body>
 </html>
 <?php 
                }else{
                     header("Location: ../login.php");
                     exit();
                }}
                 ?>
 