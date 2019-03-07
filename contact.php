<?php 
 session_start();
 include('../back_end/class/dbconfig.php'); 
 include('../back_end/class/about.php');

include("../back_end/class/gallery.php");
include('../back_end/class/heading_description.php');
 $obj = new HeadingDescription();
    $hdds = $obj->getHdingDes(); 

    $obj = new About();
    $about_us = $obj->getAbout();
 ?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact Us</title>
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
     <?php include("include/header.php"); ?>
        <?php include("include/responsive_header.php"); ?>

        <div class="page-top paddtb100 style2 blackish2 mdm-opc">
            <div class="fixed-bg2" style="background:url(images/page-top.jpg);"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <span>Community Foundation</span>
                        <h1 itemprop="headline">Contact Us</h1>
                    </div>
                    <ul class="bredcrumbs">
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        
                        <li>Contact Us</li>
                    </ul>
                    
                </div>
            </div>
            <?php echo @$_SESSION['contact']; ?>
        </div><!-- Page Top -->

        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="contact-inf4 center-align">
                                <div class="row mrg5">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="offic-info">
                                            <i class="flaticon-location"></i>
                                            <strong>Visit Us</strong>
                                            <span><?php echo $about_us[0]['address']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="offic-info">
                                            <i class="flaticon-clock"></i>
                                            <strong>Email Address</strong>
                                            <a href="#" title="" itemprop="url"><?php echo $about_us[0]['email']; ?></a>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="offic-info">
                                            <i class="flaticon-technology"></i>
                                            <strong>Phone No</strong>
                                            <span><i></i><?php echo $about_us[0]['phone']; ?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cnt-frm center-align">
                                <div class="cnt-frm-tl">
                                    <h4 itemprop="headline">Have Any Question <i>Contact Us!</i></h4>
                                    <p itemprop="description">Integer sollicitudin ligula non enim sodales Sewid commodo tempor are risus Lorime inInteger sollic itudin ligula noneuismod varius nullam Sed condimentum est noulas libero Integer sollicitudin ligula non enim sodales Sewid commod</p>
                                </div>

                    <?php echo @$_SESSION['message']; ?>

                    <form action="../back_end/controller/message_save_process.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mrg10">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <input type="text" required="" name="name" placeholder="Full Name" />
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <input type="email (optional)" name="email" placeholder="Email Id" />
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <input type="text" name="phone" required="" placeholder="Phone " />
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <textarea type="text" required="" name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button type="submit" class="btn1">Send Message</button>
                        </div>
                    </div>
                    </form>
                            </div>
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
    <script src="js/slim-scrollbar.min.js" type="text/javascript"></script><!-- Scroll Bar -->
    <script src="js/jquery.downCount.js" type="text/javascript"></script><!-- Down Count -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBdr4Rt_hvVLkKThBpbo0i6IlWTABk1NNI"></script><!-- Google Map -->
    <script src="js/google-map-int2.js" type="text/javascript"></script><!-- Google Map Int -->
    <script src="js/script.js" type="text/javascript"></script><!-- Custom -->
</body>
</html>
<?php unset($_SESSION['message']); ?>