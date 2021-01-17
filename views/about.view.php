<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/404-NOT-FOUND-animated.css">
    <link rel="stylesheet" href="../assets/css/Animated-CSS-Waves-Background-SVG.css">
    <link rel="stylesheet" href="../assets/css/Background-motion1-1.css">
    <link rel="stylesheet" href="../assets/css/Background-motion1.css">
    <link rel="stylesheet" href="../assets/css/Bootstrap-4---Photo-Gallery.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="../assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="../assets/css/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Drag-Drop-File-Input-Upload.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="../assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styleAccueil.css">
    <link rel="stylesheet" href="../assets/css/Swiper-Slider-Card-For-Blog-Or-Product-1.css">
    <link rel="stylesheet" href="../assets/css/Swiper-Slider-Card-For-Blog-Or-Product.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" id="CSsites" href="#page-top">CloudStudio</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                  <?php
                    if (empty($_SESSION['User'])){ ?>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/home.ctrl.php">Home</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/login.ctrl.php">Log In</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/signUp.ctrl.php">Sign Up</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/help.ctrl.php">Help</a></li>
                      <?php
                    }else{
                  ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/home.ctrl.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/projects.ctrl.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/logout.ctrl.php">Log Out</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/help.ctrl.php">Help</a></li>
                  <?php }?>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" id="arianneCont">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="../controler/home.ctrl.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" id="arianne" href="#">About</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="CardZone">
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <div class="blog-slider__item swiper-slide">
                    <div></div>
                    <div class="blog-slider__img"><img src="../assets/img/studio.jpg"></div>
                    <div class="blog-slider__content"><div class="blog-slider__title">Team and Company</div><div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div><a class="class=&quot;blog-slider__button" href="#">READ MORE</a></div>
                </div>
                <div class="blog-slider__item swiper-slide">
                    <div></div>
                    <div class="blog-slider__img"><img src="../assets/img/jesman-fabio-1zwJqd5cNys-unsplash.jpg"></div>
                    <div class="blog-slider__content"><div class="blog-slider__title">Terms and conditions</div><div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div><a class="class=&quot;blog-slider__button" href="#">READ MORE</a></div>
                </div>
                <div class="blog-slider__item swiper-slide">
                    <div></div>
                    <div class="blog-slider__img"><img src="../assets/img/CSLogo.png"></div>
                    <div class="blog-slider__content"><div class="blog-slider__title">Contact</div><div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div><a class="class=&quot;blog-slider__button" href="#">READ MORE</a></div>
                </div>
                <div class="blog-slider__pagination"></div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">F.A.Q</a></li>
                            <li><a href="#">How to Start ?</a></li>
                            <li><a href="#">You have an issue ?</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="../controler/team.ctrl.php">Team</a></li>
                            <li><a href="../controler/contact.ctrl.php">Contact</a></li>
                            <li><a href="../controler/termscondition.ctrl.php">Terms And Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>CloudStudio</h3>
                        <p>CloudStudio is a music project management platform.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">CloudStudio © 2020</p>
            </div>
        </footer>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/creative.js"></script>
    <script src="../assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="../assets/js/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.js"></script>
    <script src="../assets/js/Profile-Edit-Form.js"></script>
    <script src="../assets/js/Swiper-Slider-Card-For-Blog-Or-Product.js"></script>
</body>

</html>
