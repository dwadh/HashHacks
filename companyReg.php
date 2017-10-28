<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="aYa Agency - One Page Creative Design Template">
    <meta name="keywords" content="aya agency, web design, creative design, html5, responsive">
    <meta name="author" content="Tsocho Tsochev, Iliyan Konakchiev | UnomiaThemes">
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
                <div class="logo"> <img src="/img/logo.png" alt="Logo"> </div>
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
    <div class="container" style="padding-top: 100px">
            <h1 style = "text-align: center">COMPANY REGISTRATION</h1>
            <form action = "formSubmit.php" method = "GET">
               <div class="row">
                <div class="form-group">
                    <label for="cname">Company Name</label>
                    <input type="text" class="form-control" id="cname" placeholder="Name"> </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" id="desc" rows = 5></textarea> </div>
                <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-2">
                           <label for="reqfund">Required Funding</label>
                       </div>
                       <div class = "col-md-4">
                           <input type="integer" class="form-control" id="reqfund" placeholder="">
                       </div>
                       <div class = "col-md-2">
                           <label for="currprofit">Current Profit</label>
                       </div>
                       <div class = "col-md-4">
                           <input type="integer" class="form-control" id="currprofit" placeholder="">
                       </div>
                   </div>
                </div>
                 <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-2">
                           <label for="noofcof">Number of Co-Founders: </label>
                       </div>
                       <div class = "col-md-4">
                           <input type="integer" class="form-control" id="noofcof" placeholder="">
                       </div>
                       <div class = "col-md-2">
                           <label for="noofadv">Number of Advisors: </label>
                       </div>
                       <div class = "col-md-4">
                           <input type="integer" class="form-control" id="noofadv" placeholder="">
                       </div>
                   </div>
                </div>
                
                 <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-2">
                           <label for="tsize">Team Size (Senior Leadership)</label>
                       </div>
                       <div class = "col-md-4">
                           <input type="integer" class="form-control" id="tsize" placeholder="">
                       </div>
                       <div class = "col-md-2">
                           <label for="noofrep">Number of Repeat Investors: </label>
                       </div>
                       <div class = "col-md-4">
                           <input type="integer" class="form-control" id="noofrep" placeholder="">
                       </div>
                   </div>
                </div>
                
                <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-3">
                           <label for="avgsize">Average size of Companies Worked for in the Past: </label>
                       </div>
                       <div class = "col-md-3">
                           <select id="avgsize" class="form-control">
                              <option>Small</option>
                              <option>Medium</option>
                              <option>Large</option>
                            </select>
                       </div>
                       <div class = "col-md-3">
                           <label for="base">Company Base: </label>
                       </div>
                      <div class = "col-md-3">
                           <select id="base" class="form-control">
                              <option>Product Based</option>
                              <option>Service Based</option>
                              <option>Both</option>
                            </select>
                       </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-3">
                           <label for="focus">Focus </label>
                       </div>
                       <div class = "col-md-3">
                           <select id="focus" class="form-control">
                              <option>Public</option>
                              <option>Private</option>
                            </select>
                       </div>
                       <div class = "col-md-3">
                           <label for="mob">Mobility </label>
                       </div>
                      <div class = "col-md-3">
                           <select id="mob" class="form-control">
                              <option>Cloud</option>
                              <option>Platform</option>
                            </select>
                       </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-3">
                           <label for="reach">Reach </label>
                       </div>
                       <div class = "col-md-3">
                           <select id="reach" class="form-control">
                              <option>Local</option>
                              <option>Global</option>
                            </select>
                       </div>
                    </div>
                </div>
                <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-3">
                           <label for="workcomp">Worked in Companies </label>
                       </div>
                      <div class = "col-md-3">
                           <select id="workcomp" class="form-control">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                       </div>
                       <div class = "col-md-3">
                           <label for="focconsdata">Focus on consumer data </label>
                       </div>
                      <div class = "col-md-3">
                           <select id="focconsdata" class="form-control">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                       </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class = "row">
                       <div class = "col-md-3">
                           <label for="crowdfund">Crowd funding based </label>
                       </div>
                      <div class = "col-md-3">
                           <select id="crowdfund" class="form-control">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                       </div>
                       <div class = "col-md-3">
                           <label for="mlbusiness">Machine Learning based business </label>
                       </div>
                      <div class = "col-md-3">
                           <select id="mlbusiness" class="form-control">
                              <option>Yes</option>
                              <option>No</option>
                            </select>
                       </div>
                   </div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
        
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
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o)
                , m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-103797393-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- ==== END JAVASCRIPT FILES ==== -->
</body>
<!-- Mirrored from aya.unomiathemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Aug 2017 06:13:12 GMT -->

</html>