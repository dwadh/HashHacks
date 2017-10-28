<?php include('function.php');?>
<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <!-- -Page Title- -->
      <title>Listing</title>
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
           
            body {
                  background: #1a1919;
                color: white;
            }

            .logo img {
               max-width: 200px;
            }
      </style>
   </head>
   <body>
       <header class="header">
         <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
               <div class="logo">
                  <img src="img/logo.png" alt="Logo">
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
      
      <div class="container" style = "padding-top: 150px">
        <div class="row">
                   <h1 style = "text-align: center">List of Companies</h1>
                    <table class="table table-bordered">
                    <thead style="font-weight: bold">
                        <td>Id</td>
                        <td>Company Name</td>
                    </thead>
                    <?php listComp(); ?>
            </table>
        </div>
    </div>
      
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