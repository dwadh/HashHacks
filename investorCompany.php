<?php include('function.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0">
      <meta name="apple-mobile-web-app-capable" content="yes">
    
      <!-- -Page Title- -->
      <title>investorCompany</title>
      <!-- ====== -Google Fonts- ====== -->
      <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
      <!-- ====== -End Google Fonts- ====== -->
      <!-- ====== -CSS- ====== -->
      <!-- -Normalize css- -->
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <!-- -Animate css- -->
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <!-- -Font Awesome- -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <!-- -Ionicons- -->
      <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
      <!-- -Bootstrap v3.3.1- -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- Slick -->
      <link rel="stylesheet" href="css/slick.css">
      <link rel="stylesheet" href="css/slick-theme.css">
      <!-- Magnific Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- -Custom style CSS- -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- -Custom responsive style CSS- -->
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <!-- ====== -End CSS- ====== -->
      <!-- -Favicon- -->
      <link rel="shortcut icon" href="img/favicon.png">
      <style>
            .video h1 {
                  text-align: center;
                  color: #fff;
                  font-family: 'Dosis', sans-serif;
                  position: absolute;
                  z-index: 100;
                  left: 0;
                  top: 40%;
                  right: 0;
                  text-transform: uppercase;
                  font-size: 90px;
            }

            .video img {
                  z-index: 100;
                  width: 200px;
                  position: absolute;
                  top: 25%;
                  left: 0;
                  right: 0;
                  margin: 0 auto;
            }

            .video p {
                  position: absolute;
                  top: 60%;
                  color: #fff;
                  font-family: 'Dosis', sans-serif;
                  left: 0;
                  right: 0;
                  width: 50%;
                  text-align: center;
                  margin: 0 auto;
            }

            .video {
                  overflow: hidden;
                  height: 100vh;
            }

            body {
                  background: #1a1919;
                    color:white;
            }

            .video .btn-custom-services {
                  position: absolute;
                  font-family: 'Dosis', sans-serif;
                  top: 70%;
                  left: 0;
                  right: 0;
                  margin: 0 auto;
                  width: 150px;
                  text-align: center;
            }

            #demo img{
                  width: 100%;
            }

            #demo .btn-custom-services {
                  text-align: center;
                  margin: 10px auto;
                  display: block;
                  width: 150px;
            }

            #demo {
                  padding: 80px 0;
            }

            #demo h1 {
                  margin-bottom: 10px;
                  text-align: center;
                  font-family: 'Dosis', sans-serif;
                  color: #f0f0f0;
                  text-transform: uppercase;
            }

            .devi {
                  background: #e19e20;
                  width: 150px;
                  height: 2px;
                  display: block;
                  margin: 0 auto;
                  margin-bottom: 40px;
            }


            .up {
                  margin-top: 40px;
            }

            .logo img {
               max-width: 200px;
            }

            @media screen and (max-width: 991px) {
               .video h1 {
                  font-size: 40px;
               }

               .video p {
                  top: 52%;
                  width: 85%;
                  font-size: 14px;
               }
            }
      </style>
   </head>
   <body>
       <header class="header">
         <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
               <div class="logo">
                  <img src="/img/logo.png" alt="Aya Agency Logo">
               </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
               <nav class="menu">
                  <ul>
                     <li><a href="#light" data-scroll>Light</a></li>
                     <li><a href="#dark" data-scroll>Dark</a></li>
                     <li><a href="#alive" data-scroll>Alive Gradient</a></li>
                     <li><a href="#404" data-scroll>404</a></li>
                     <li><a href="#coming" data-scroll>Coming soon</a></li>
                  </ul>
               </nav>
               <nav class="mobilenav">
                  <ul>
                     <li><a href="#light" data-scroll>Light</a></li>
                     <li><a href="#dark" data-scroll>Dark</a></li>
                     <li><a href="#alive" data-scroll>Alive Gradient</a></li>
                     <li><a href="#404" data-scroll>404</a></li>
                     <li><a href="#coming" data-scroll>Coming soon</a></li>
                  </ul>
               </nav>
               <a href="javascript:void(0)" class="icon">
                  <div class="hamburger">
                     <div class="menui top-menu"></div>
                     <div class="menui mid-menu"></div>
                     <div class="menui bottom-menu"></div>
                  </div>
               </a>
            </div>
         </div>
      </header>
      
      <?php companyDetails(); ?>
      <!--<section class="video">
            <div class="overlay"></div>
            <h1>Company Name</h1>
      </section>
      <section class="container">
            <div class="row">
               <div  class="col-md-4 col-sm-12 col-xs-12">
                  <div class="row">
                     <img src="img/logo.png" alt="Logo">
                  </div>
                  <div class="row">
                     <div  class="col-md-4 col-md-offset-5 col-sm-12 col-xs-12">
                        <a href="#demo" data-scroll class="btn-custom-services"> Pay </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12 col-xs-12">
                  <p style = "text-align: justify; font-size: 22px; padding: 10px;">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
               </div>
            </div>
      </section>-->

        <!-- ==== JAVASCRIPT FILES ==== -->
      <!-- Jquery -->
      <script src="js/jquery-2.2.4.min.js"></script>
      <!-- Owl Carousel -->
      <script src="js/owlcarousel/owl.carousel.min.js"></script>
      <!-- Slick Slider -->
      <script src="js/slick.min.js"></script>
      <!-- YouTube Video -->
      <script src="js/jquery.youtubebackground.js"></script>
      <!-- Smooth scroll -->
      <script src="js/smooth-scroll.js"></script>
      <!-- Parallax -->
      <script src="js/parallax.min.js"></script>
      <!-- Maginific Popup Modal -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- jQuery Filterizr -->
      <script src="js/jquery.filterizr.js"></script>
      <!-- Custom -->
      <script src="js/custom.js"></script>

      <script>
            $('header').parallax();
      </script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103797393-1', 'auto');
  ga('send', 'pageview');

</script>
      <!-- ==== END JAVASCRIPT FILES ==== -->
   </body>

<!-- Mirrored from aya.unomiathemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Aug 2017 06:13:12 GMT -->
</html>