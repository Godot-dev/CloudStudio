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
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="../assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="../assets/css/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.css">
    <link rel="stylesheet" href="../assets/css/Drag-Drop-File-Input-Upload.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="../assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="../assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="../assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="../assets/css/styleAccueil.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" id="CSsites" href="#page-top">CloudStudio</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                  <?php
                    if (empty($_SESSION['User'])){ ?>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/home.ctrl.php">Home</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/home.ctrl.php">About</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/login.ctrl.php">Log In</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/signUp.ctrl.php">Sign Up</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/help.ctrl.php">Help</a></li>

                  <?php
                    }else{
                  ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/home.ctrl.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="pagesSite" href="../controler/settings.ctrl.php">Account</a></li>
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
                    <li class="nav-item"><a class="nav-link" id="arianne" href="#">Contact</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row d-flex justify-content-xl-center" id="GreyRow" style="margin-right: 0px;margin-left: 0px;">
        <div class="col" style="max-width: 60%;">
          <h1><strong><span style="text-decoration: underline;">TERMS AND CONDITIONS</span></strong><br></h1>
            <p id="TermsAndCondi">These general conditions govern the use of the site <a href="http://www.cloudstudio.fr">www.cloudstudio.fr</a>
              This site is owned and operated by CloudStudio.
              By using this site, you indicate that you have read and understood the terms of use and that you agree to abide by them at all times.
              <br><br>
              <strong><span style="text-decoration: underline;">Intellectual property</span></strong>
              <br>
              Any content shared and made available in a project belongs to the project manager and not to CloudStudio. This includes audio tracks, titles, logos, documents, downloadable files, and anything that contributes to the composition of the project.
              <br><br>
              <strong><span style="text-decoration: underline;">Acceptable use</span></strong>
              <br>
              As a user, you agree to use our site legally and not to use this site for illegal purposes, namely:
              Harass or mistreat other users of the site.
              Violate the rights of other users of the site.
              Violate the intellectual property rights of the site owners or any third party to the site.
              Hack into the account of another user of the site.
              Act in any way that could be considered fraudulent.
              Participate in any illegal activity on the site.
              Share any material that may be deemed inappropriate, offensive, <strong><em><span style="text-decoration: underline;">stolen</span></em></strong>, copyrighted and without the owner's consent.
              If we believe that you are using this site illegally or in a way that violates the&nbsp;acceptable terms of use above, we reserve the right to limit,&nbsp;suspend or terminate your access to CloudStudio and thus to any component material&nbsp;any projects that you will own. We also reserve the&nbsp;right to take all necessary legal steps to prevent you&nbsp;from accessing CloudStudio.
              <br><br>
              <strong><span style="text-decoration: underline;">Accounts</span></strong>
              <br>
              When you create an account on our site, you agree to the following :
              You are solely responsible for your account and the security and privacy of your account, including passwords or sensitive information attached to that account.
              You must provide up-to-date, accurate and truthful personal information through your account, and that you will update it if it changes.
              Your personal information and your pseudonym must in no case be offensive, usurping, illegal or pornographic.

              <br><br>
              <strong><span style="text-decoration: underline;">Applicable laws</span></strong>
              <br>
              This document is subject to the laws applicable in France and aims to comply with its necessary rules and regulations. This includes the EU-wide regulations set out in the GDPR.
              <br><br>
              <strong><span style="text-decoration: underline;">Divisibility</span></strong>
              <br>
              If at any time any of the provisions set forth in this document is found to be inconsistent or invalid under applicable law, such provision will be deemed void and will be removed from this document. All other provisions will not be affected by the laws and the rest of the document will still be considered valid.
              <br><br>
              <strong><span style="text-decoration: underline;">Modifications</span></strong>
              <br>
              These terms and conditions may be amended to maintain compliance with the law and to reflect any changes in the way we operate our site and the way we expect users to behave on our site. We consider that users keep themselves informed about the update of the general conditions of use and they therefore come into force as of their publication.
              <br><br>
              <strong>-CloudStudio Team</strong>
              <br><br>
            </p>
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
    <script src="../assets/js/Profile-Edit-Form.js"></script>
    <script src="../assets/js/Drag-and-Drop-Multiple-File-Form-Input-upload-Advanced.js"></script>
</body>

</html>
