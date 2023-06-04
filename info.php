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

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/information.css">

        <title>STAGET</title>

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
                       
                        <li class="nav__item"><a href="#login" id="myOtherButton15" class="button">Go Back</a></li>

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
                    


                    
                    <div class="container">
                        <div class="title">Complete your informations</div>
                        <div class="content">
                        <form action="infoback.php" method="post"  enctype="multipart/form-data" >
                            <div class="user-details">
                            <div class="input-box">
                                <span class="details">Profile Picture:</span>
                                <input type="file" id="profile-picture" class="profile-picture" name="pp">
                                <label for="profile-picture">Choose a profile picture</label>
                              </div>
                              <div class="input-box">
                                <img id="img" src="assets/img/student.jpg" height="145px" width="145px" style="border-radius: 25px;">
                              </div> 
                              <script>
                                let img = document.getElementById("img");
                                let input = document.getElementById('profile-picture');
                                input.onchange = (e) => {
                                  if (input.files[0])
                                    img.src = URL.createObjectURL(input.files[0]);
                                };
                              </script>
                              <div class="input-box">
                                <span class="details">date of birth :</span>
                                <input type="date"  required name="bd">
                              </div> 
                              <div class="select-box">
                                <span class="details">  Departement :</span>
                                <select  name="departement" >
                                  <option hidden> Select your Departement :</option>
                                  
                          <option value="MI">MI</option>
                           <option value="IFA">IFA</option>
                           <option value="TLSI">TLSI</option>
                           </select>
                              </div>

                              <div class="select-box">
                                <span class="details">  Speciality :</span>
                                <select name="speciality">
                                  <option hidden>
                                    Select your Speciality :</option>
                                    <option value="MI">MI</option>
    <option value="TI">TI</option>
    <option value="GL">GL</option>
    <option value="SCI">SCI</option>
    <option value="SI">SI</option>
    <option value="STIC">STIC</option>
    <option value="RSD">RSD</option>
    <option value="SITW">SITW</option>
                                  
                                </select>
                              </div>
                              <div class="select-box">
                                <span class="details">  Level :</span>
                                <select name="level">
                                  <option hidden> Select your Level :</option>
                                  <option value="L1">L1</option>
    <option value="L2">L2</option>
    <option value="L3">L3</option>
    <option value="M1">M1</option>
    <option value="M2">M2</option>
                                  
                                </select>
                              </div>
                            
                              <div class="input-box">
                                <span class="details">semester</span>
                                <input type="number" placeholder="Enter your semester" required name="dur">
                              </div>

                              <div class="input-box">
                                <span class="details">academic year :</span>
                                <input type="number" placeholder="Enter your academic year" required  name="year">
                              </div>

                            </div>
                            
                            </div>
                            <button type="submit" class="button" style="border: none;">Send</button>
                           
                            <!-- <div class="information">
                              <input type="submit" value="Register">
                            </div> -->
                          </form>
                        </div>
                      </div>
                    
                </div>
            </section>
        </main>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <div class="footer__container bd-container bd-grid">
                <div class="footer__content">
                    <h3 class="footer__title">
                        <a href="#" class="footer__logo">STAGET</a>
                    </h3>
                    <p class="footer__description">get your internship<br> online</p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Streamlined App</a></li>
                        <li><a href="#" class="footer__link">online applying</a></li>
                        <li><a href="#" class="footer__link">Tracking & Evaluation</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Company</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Blog</a></li>
                        <li><a href="#" class="footer__link">About us</a></li>
                        <li><a href="#" class="footer__link">Our offers</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Social</h3>
                    <a href="https://www.facebook.com/hadjer.bgt/" class="footer__social" target="_blank"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="https://twitter.com/projects_code" class="footer__social" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://www.instagram.com/hadjer_bgt/" class="footer__social" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">copyright &copy; 2023 | Staget made with ❤️ by girls team | all right reserved.</p>
        </footer>

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
     header("Location: signup2.php?flinfo");
     exit();}
