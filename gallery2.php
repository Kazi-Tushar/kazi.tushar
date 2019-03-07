<?php 
    include('../back_end/class/dbconfig.php');
    include("../back_end/class/about.php");
    include("../back_end/class/gallery.php");
    include("../back_end/class/slider.php"); 
    include("../back_end/class/member.php"); 
    include("../back_end/class/heading_description.php"); 
    include("../back_end/class/approch.php"); 
    include("../back_end/class/project.php"); 
    include("../back_end/class/status.php"); 

        $obj = new HeadingDescription();
            $hdds = $obj->getHdingDes();

    $obj = new Gallery();
    $galleryes = $obj->getGallery(); 

    $obj = new Approch();
    $approch = $obj->getApproch();
 ?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /><!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/icons.css" /><!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/style.css" /><!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" /><!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/color.css" />
    <!-- Color -->
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
        <?php include("include/responsive_header.php"); ?><!-- Responsive Header -->

        <div class="page-top paddtb100 style2 blackish2 mdm-opc">
            <div class="fixed-bg2" style="background:url(images/page-top.jpg);"></div>
            <div class="container">
                <div class="page-title">
                    <div class="pg-tl">
                        <span><?php echo $hdds[0]['heading']; ?></span>
                        <h1 itemprop="headline">Our &nbsp; Images &nbsp;Gallery</h1>
                    </div>
                    <ul class="bredcrumbs">
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        <li>Gallery</li>
                        <li>Images</li>
                    </ul>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block gray">
                <div class="">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="fltrs center-align">
                                
                                <div class="paddlr8ps">
                                    <div class="row mrg10">
                                        <div class="masonry">
                                            <?php foreach ($galleryes as $key => $gallery): ?>
                                                
                                            
                                            <div class="col-md-4 col-sm-6 col-lg-3 flt-itm tb1 tb2">
                                                <div class="gallery-box">
                                                    <img src="../back_end/uploads/gallery_img/<?php echo $gallery['images']; ?>" alt="" itemprop="image" />
                                                    <div class="gallery-info">
                                                        <h2 itemprop="headline">Charity Fundraise</h2>
                                                        <span class="cate"><a href="#" title="" itemprop="url">Charity</a>, <a href="#" title="" itemprop="url">Kids</a>, <a href="#" title="" itemprop="url">Nature</a></span>
                                                        <span class="lightbox"><a href="../back_end/uploads/gallery_img/<?php echo $gallery['images']; ?>" title="" itemprop="url"><i class="fa fa-search"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>


                                <!-- <div class="pagination">
                                    <ul>
                                        <li class="prev-pg"><a href="#" title="" itemprop="url"><i class="fa fa-angle-double-left"></i></a></li>
                                        <li><a href="#" title="" itemprop="url">01</a></li>
                                        <li><a href="#" title="" itemprop="url">02</a></li>
                                        <li><a href="#" title="" itemprop="url">03</a></li>
                                        <li>..........</li>
                                        <li><a href="#" title="" itemprop="url">08</a></li>
                                        <li class="next-pg"><a href="#" title="" itemprop="url"><i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div> --><!-- Pagination -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="block no-padding blu-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="twitter-rev paddlr70">
                                <div class="twitter-lg">
                                    <img src="images/resource/twitter-lg.png" alt="" itemprop="image" />
                                </div>
                                <div class="twitter-reviews">
                                     <?php foreach ($approch as $key => $approchs): ?>
                                    <div class="twitter-review">
                                        <div class="sndr-inf">
                                            <h4 itemprop="headline"><?php echo $hdds[0]['heading']; ?></h4>
                                           
                                        </div>
                                       

                                            <p itemprop="description"><?php echo $approchs['heading']; ?></p>

                                        
                                        
                                    </div>
                                    <?php endforeach ?>
                                    
                                </div>
                            </div><!-- Twitter Posts -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("include/footer.php"); ?>

        <!-- Footer -->

    </div><!-- Web Layout -->

    <!-- Scripts -->
    <script src="js/jquery.min.js" type="text/javascript"></script><!-- jQuery -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script><!-- Bootstrap -->
    <script src="js/owl.carousel.min.js" type="text/javascript"></script><!-- Owl Carousel -->
    <script src="js/select2.full.min.js" type="text/javascript"></script><!-- Select2 -->
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script><!-- LightBox -->
    <script src="js/slim-scrollbar.min.js" type="text/javascript"></script><!-- Scroll Bar -->
    <script src="js/isotope.min.js" type="text/javascript"></script><!-- Isotope -->
    <script src="js/isotope-int.js" type="text/javascript"></script><!-- Isotope --> 
    <script src="js/jquery.downCount.js" type="text/javascript"></script><!-- Down Count -->
    <script src="js/script.js" type="text/javascript"></script><!-- Custom -->

</body>

</html>