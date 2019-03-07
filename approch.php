<?php 
include('../back_end/class/dbconfig.php');
include('../back_end/class/about.php');
include('../back_end/class/approch.php');
include("../back_end/class/gallery.php");
include('../back_end/class/heading_description.php');
include('../back_end/class/member.php');

    $obj = new About();
    $about = $obj->getAbout();

    $obj = new Approch();
    $approch = $obj->getApproch();

    $obj = new HeadingDescription();
    $hdds = $obj->getHdingDes();  

    $obj = new Member();
    $members = $obj->getMember();

 ?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Our Approch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /><!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/icons.css" /><!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/style.css" /><!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" /><!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/color.css" /><!-- Color -->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body itemscope>
    <div class="pageloader">
        <div class="loader">
            <div class="loader-inner ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div><!-- Pageloader -->
    <div class="web-lyut">
        <?php include("include/header.php");
              include("include/responsive_header.php"); 
        ?>

        

        <div class="page-top paddtb100 style2 blackish2 mdm-opc">
            <div class="fixed-bg2" style="background:url(images/page-top.jpg);"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <span>Social Foundation</span>
                        <h1 itemprop="headline">Approch Information</h1>
                    </div>
                    <ul class="bredcrumbs nav">
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        
                        <li>Approch</li>
                    </ul>
                </div>
            </div>
        </div><!-- Page Top -->


        <section>
            <div class="block blu-bg">
                <div class="container">
                    <div class="row">
                       <div class="col-md-12 custom_about">
                        <?php foreach ($approch as $key => $approchs): ?>
                            
                        
                          <h4>" <?php echo $approchs['heading']; ?> "</h4>
                          <hr>
                          <div class="about">
                                <p><?php echo $approchs['approch']; ?></p>
                          </div>

                          <?php endforeach ?>

                       </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 address">
                            
                            <address>
                                <strong style="font-size: 13px;"><?php echo $approchs['details']; ?></strong>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </section>




<?php include("include/footer.php"); ?>

    </div><!-- Web Layout -->

    <!-- Scripts -->
    <script src="js/jquery.min.js" type="text/javascript"></script><!-- jQuery -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script><!-- Bootstrap -->
    <script src="js/owl.carousel.min.js" type="text/javascript"></script><!-- Owl Carousel -->
    <script src="js/select2.full.min.js" type="text/javascript"></script><!-- Select2 -->
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script><!-- LightBox -->
    <script src="js/slim-scrollbar.min.js" type="text/javascript"></script><!-- Scroll Bar -->
    <script src="js/jquery.downCount.js" type="text/javascript"></script><!-- Down Count -->
    <script src="js/isotope.min.js" type="text/javascript"></script><!-- Isotope -->
    <script src="js/isotope-int.js" type="text/javascript"></script><!-- Isotope --> 
    <script src="js/script.js" type="text/javascript"></script><!-- Custom -->
</body>
</html>