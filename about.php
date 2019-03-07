<?php 
include('../back_end/class/dbconfig.php');
include('../back_end/class/about.php');

include("../back_end/class/gallery.php");
include('../back_end/class/heading_description.php');
include('../back_end/class/member.php');

    $obj = new About();
    $about = $obj->getAbout();

    $obj = new HeadingDescription();
    $hdds = $obj->getHdingDes();  

    $obj = new Member();
    $members = $obj->getMember();

 ?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>About us</title>
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
                        <h1 itemprop="headline">About Information</h1>
                    </div>
                    <ul class="bredcrumbs">
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        
                        <li>About Information</li>
                    </ul>
                </div>
            </div>
        </div><!-- Page Top -->


        <section>
            <div class="block blu-bg">
                <div class="container">
                    <div class="row">
                       <div class="col-md-12 custom_about">
                          <h4>About Us :</h4>
                          <hr>
                          <div class="about">
                                <p><?php echo $about[0]['about_us']; ?></p>
                          </div> 
                       </div>

                       <div class="col-md-6">
                           <h3>HOTLINE : <strong> <?php echo $about[0]['phone']; ?></strong></h3>
                           <h3>EMAIL : <strong> <?php echo $about[0]['email']; ?></strong></h3>
                       </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 address">
                            <h4>Our Address :</h4>
                            <address>
                                <strong><?php echo $about[0]['address']; ?></strong>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title-style2 center-align">
                                <h4 itemprop="headline">Search For Humanity <i>Members</i></h4>
                                <span>Social Foundation</span>
                                <p style="text-align: justify;"><?php echo $hdds[0]['description']; ?></p>
                            </div>
                            <div class="remove-ext">
                                <div class="tem-carousel">
                                    <?php foreach ($members as $key => $member): ?>
                                        
                                    <div class="member-box">
                                        <img src="../back_end/uploads/member_img/<?php echo $member['image']; ?>" alt="" itemprop="image" style="width: 240px; height: 240px;" />
                                        <div class="member-detail">
                                            <h2 itemprop="headline"><a href="volunteer-detail.html" title="" itemprop="url"><?php echo $member['name']; ?></a></h2>
                                            <span><?php echo $member['member_type']; ?></span>
                                        </div>
                                    </div><!-- Member Box -->
                                   
                                    <?php endforeach ?>
                                </div>
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
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script><!-- LightBox -->
    <script src="js/slim-scrollbar.min.js" type="text/javascript"></script><!-- Scroll Bar -->
    <script src="js/jquery.downCount.js" type="text/javascript"></script><!-- Down Count -->
    <script src="js/isotope.min.js" type="text/javascript"></script><!-- Isotope -->
    <script src="js/isotope-int.js" type="text/javascript"></script><!-- Isotope --> 
    <script src="js/script.js" type="text/javascript"></script><!-- Custom -->
</body>
</html>