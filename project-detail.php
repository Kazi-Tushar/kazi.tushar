<?php 

include('../back_end/class/dbconfig.php');
include("../back_end/class/project.php");
include('../back_end/class/about.php');

include("../back_end/class/gallery.php");
include('../back_end/class/heading_description.php');

    $id = $_REQUEST['id'];

    $obj = new Project();
    $project = $obj->getSingleProject($id);
    
    $obj = new HeadingDescription();
    $hdds = $obj->getHdingDes(); 

 ?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Project Details</title>
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
                        <h1 itemprop="headline">Project Details</h1>
                    </div>
                    <ul class="bredcrumbs">
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        
                        <li>Project Details</li>
                    </ul>
                </div>
            </div>
        </div><!-- Page Top -->

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-9">
                                    <div class="blg-dtl  style4">
                                        <div class="prj-dtl4">
                                            <img src="../back_end/uploads/project_img/<?php echo $project['image']; ?>" alt="" itemprop="image" style="width: 870px;height: 410px;" />
                                            <div class="blg-mta">
                                                <h1 itemprop="headline"><?php echo $project['headline']; ?></h1>
                                                <span class="dnt-gl"><span class="price"><?php echo $project['donated']; ?></span> Donation Goal</span>
                                                <div class="prj-inf-btm">
                                                    <div class="prj3-sndr">
                                                        <img src="../back_end/uploads/project_img/<?php echo $project['manager_img']; ?>" alt="" itemprop="image" style="width: 65px;height: 65px;"/>
                                                        <span class="sndr-nm"><?php echo $project['project_manager']; ?> <i>(Project Manager)</i></span>
                                                    </div>
                                                    <ul class="pst-meta">
                                                        <li><?php echo $project['project_address']; ?></li>
                                                        <li><i class="fa fa-calendar-o"></i> <?php echo $project['project_date']; ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <p itemprop="description" style="text-align: justify;"><?php echo $project['project_details']; ?>
                                                
                                            </p>
                                        
                                        
                                    <div class="shar-tag">
                                        <div class="share">
                                            <span>Share This:</span>
                                            <a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-tumblr"></i></a>
                                            <a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="#" title="" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </div>
                                      
                                    </div><!-- Share And Tags -->
                                    
                                    <!-- <div class="comments">
                                        <div class="title">
                                            <span>What You Get From Us</span>
                                            <h4 itemprop="headline"><span>Rescue</span> Comments <span>(01)</span></h4>
                                        </div>
                                        <ul class="comments-thred">
                                            <li>
                                                <div class="comment">
                                                    <div class="comment-thumb">
                                                        <img src="images/resource/comment1.jpg" alt="" itemprop="image" />
                                                        <a href="#" title="" itemprop="url" class="comment-reply-link">Replay</a>
                                                    </div>
                                                    <div class="comment-detail">
                                                        <h2 itemprop="headline"><a href="#" title="" itemprop="url">Peter Parker</a></h2>
                                                        <span>January 7, 2017 at 12:21 am</span>
                                                        <p itemprop="description">Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sewid commodo are risus in euismod varius nullam feugiat ultrices. Sed condimentum est libero</p>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="comment">
                                                            <div class="comment-thumb">
                                                                <img src="images/resource/comment2.jpg" alt="" itemprop="image" />
                                                                <a href="#" title="" itemprop="url" class="comment-reply-link">Replay</a>
                                                            </div>
                                                            <div class="comment-detail">
                                                                <h2 itemprop="headline"><a href="#" title="" itemprop="url">Christian Baine</a></h2>
                                                                <span>January 7, 2017 at 12:21 am</span>
                                                                <p itemprop="description">Integer sollicitudin ligula non enim sodales, non lacinia nunc ornare. Sewid commodo are risus in euismod varius nullam feugiat ultrices.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> -->

                                    <!-- Comments -->

                                    <!-- <div class="reply-comment">
                                        <div class="title">
                                            <span>Looking For A Good Place</span>
                                            <h4 itemprop="headline">Leave A <span>Comment</span></h4>
                                        </div>
                                        <form>
                                            <div class="row mrg5">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Full Name" />
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" placeholder="Email Address" />
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Subject" />
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea placeholder="Comment"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn1">Comment Now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> -->

                                    <!-- Reply Comment -->
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
    <script src="js/isotope.min.js" type="text/javascript"></script><!-- Isotope -->
    <script src="js/isotope-int.js" type="text/javascript"></script><!-- Isotope --> 
    <script src="js/jquery.downCount.js" type="text/javascript"></script><!-- Down Count -->
    <script src="js/bootstrap-datepicker.js" type="text/javascript"></script><!-- Bootstrap Datepicker -->
    <script src="js/moment.min.js" type="text/javascript"></script><!-- Moments -->    
    <script src="js/fullcalendar.min.js" type="text/javascript"></script><!-- Full Calendar -->
    <script src="js/script.js" type="text/javascript"></script><!-- Custom -->
</body>
</html>