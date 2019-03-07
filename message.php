<?php 
 session_start();
 include('../back_end/class/dbconfig.php'); 
 include('../back_end/class/about.php');
 include("../back_end/class/heading_description.php");
 include("../back_end/class/gallery.php"); 
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
                
            </div>
            <?php echo @$_SESSION['contact']; ?>
        </div><!-- Page Top -->

        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            
                            <div class="cnt-frm center-align">
                               

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



       
<?php 


    $obj = new Gallery();
    $gallerylimit = $obj->getLimitGallery();



 ?>

  <footer>
            <div class="block dark2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="footer-data remove-ext65">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-lg-4">
                                        <div class="row">
                                            
                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                <div class="widget">
                                                    <div class="widget-data">
                                                        <ul>
                        <li><a href="message.php" title="" itemprop="url"> Message</a></li>
                        <li><a href="gallery2.php" title="" itemprop="url">Gallery</a></li>
                        <li><a href="about.php" title="" itemprop="url">About-Us</a></li>
                        <li><a href="projects_page.php" title="" itemprop="url">Projects</a></li>
                        <li><a href="<?php echo $about_us[0]['facebook']; ?>" title="" itemprop="url">Facebook</a></li>
                        
                                                        </ul>
                                                    </div>
                                                </div><!-- Widget -->
                                            </div>
                                        </div>
                                    </div>
                    <div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-lg-7 col-lg-offset-1">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-lg-5">
                    <div class="widget">
                        <h4 itemprop="headline" class="widget-title1">Contact Us</h4>
                        <div class="widget-data">
                            <ul class="cnt-lst">
                                <li class="addr">
                                    <i class="fa fa-home"></i> 
                                        <strong>Address :</strong>
                                            <span><?php echo$about_us[0]['address']; ?></span>
                                </li>
                                    <li>
                                        <strong>Call :</strong>
                                    <span><?php echo$about_us[0]['phone']; ?></span>
                                    </li>
                                        <li>
                                         <strong>Email:</strong>
                                     <a href="#" title="" itemprop="url"><?php echo$about_us[0]['email']; ?></a>
                                        </li>
                                        </ul>
                                        </div>
                                </div><!-- Widget -->
                            </div>
                <div class="col-md-7 col-sm-6 col-lg-7">
                        <div class="widget">
                            <div class="widget-data">
                                <div class="flickr-gallery paddl58 style2">
                                    <div class="row mrg10">
                                        <?php foreach ($gallerylimit as  $gallery) { ?>
                                        <div class="col-md-4">
                                           

                                                <img src="../back_end/uploads/gallery_img/<?php echo $gallery["images"]; ?>" style="padding: 3px;">

                                                
                                        </div>
                                        <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Footer Data -->
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- Footer -->

        <div class="bottom-bar">
            <div class="container">
                <div class="ft-lg">
                    <h1 itemprop="headline" style="display: inline-block;"><a href="index.html" title="" itemprop="url"><img src="../back_end/uploads/logo_img/<?php echo $logo[0]['logo']; ?>" alt="" itemprop="image" style='width: 160px;height: 100px; '/></a></h1>
                </div>
                <div class="copyright">
                   <!--  <span><a href="#" title="" itemprop="url">Terms of Use</a> & <a href="#" title="" itemprop="url">Privacy Policy.</a></span> -->
                    <p itemprop="description">Copyright &copy; <a href="index.php" title="" itemprop="url"><?php echo $hdds[0]['heading']; ?>.</a> All Rights Reserved</p>
                    <span>Developed By- <a href="https://www.facebook.com/Dlight.Tushar">Kazi Tushar</a> </span>
                </div>

            </div>

        </div>
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