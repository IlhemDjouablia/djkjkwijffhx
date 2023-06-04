<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/style2.css">

        <title>STAGET</title>
<style>


.wrapper {
    
    background: #8041f5ab;}
</style>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo" style=" color:#8041f5ab;">STAGET</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                       
                        <li class="nav__item"><a href="index.html" id="myOtherButton" class="button" style=" background-color:#8041f5ab;">Go Back</a></li>

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
                                <img src="assets/img/login1.png" alt="">
                            </div>
        
                    <form action="loginback.php" method="post">
                        <h2>Login</h2>
                        <div class="input-box">
                    <span class="icon"> <ion-icon name="mail"></ion-icon></span>
                    <input type="email" required name="email">
                    <label> Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"> <ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" required name="password">
                            <label> Password</label>
                                </div>
                           <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="reset.php" id="myOtherButton6">Forgot Password? </a>
                    </div> 
                    <button type="submit" style=" background-color:#fff; color:#8041f5ab;  font-weight: 550;">Login</button>  
                    
                    <div class="register-link">
                        <p> Don't have an account ?<a href="signup.php" id="myOtherButton5">  Register</a></p>
                    </div>
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