<?php 

include('../back_end/class/dbconfig.php');
include("../back_end/class/project.php");
include('../back_end/class/about.php');

include("../back_end/class/gallery.php");
include('../back_end/class/heading_description.php');

    $obj = new Project();
    $projects = $obj->getProject(); 

 ?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Our Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->
  

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
                        <h1 itemprop="headline">Projects Page</h1>
                    </div>
                    <ul class="bredcrumbs">
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        
                        <li>Projects Page</li>
                    </ul>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="remove-ext">
                                <div class="row">

                                    <?php foreach ($projects as $key => $project) {

                                    ?>
                                    <div class="col-md-4 col-sm-6 col-lg-3">
                                        <div class="prj-bx3">
                                            <img src="../back_end/uploads/project_img/<?php echo $project['image']; ?>" alt="" itemprop="image" style="width: 350px;height: 280px;" />
                                            <div class="prj3-inf">
                                                <div class="prj3-tl">
                                                    <h2 itemprop="headline"><a href="project-detail.php?id=<?php echo $project['id']; ?>" title="" itemprop="url"><?php echo $project['headline']; ?></a></h2>
                                                    <span class="dnt-gl"><span class="price"><?php echo $project['donated']; ?></span> Donation Amount</span>
                                                </div>
                                                <div class="prj3-sndr">
                                                    <img src="../back_end/uploads/project_img/<?php echo $project['manager_img']; ?>" alt="" itemprop="image" style="width: 65px;height: 65px;" />
                                                    <span class="sndr-nm"><?php echo $project['project_manager']; ?> <i>(Project Manager)</i></span>
                                                </div>
                                                <ul class="pst-meta">
                                                    <li><?php echo $project['project_address']; ?></li>
                                                    <li><i class="fa fa-calendar-check-o"></i> <?php echo $project['project_date']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                                    
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
    <script src="js/script.js" type="text/javascript"></script><!-- Custom -->
</body>
</html>