<?php 
session_start();
include('../back_end/class/dbconfig.php');
include("../back_end/class/about.php");
include("../back_end/class/gallery.php");
include("../back_end/class/slider.php"); 
include("../back_end/class/member.php"); 
include("../back_end/class/heading_description.php"); 
include("../back_end/class/approch.php"); 
include("../back_end/class/project.php"); 
include("../back_end/class/status.php"); 


    $obj = new Slider();
    $slide_img = $obj->getSlider();

    $obj = new HeadingDescription();
    $hdds = $obj->getHdingDes();

    $obj = new Member();
    $member = $obj->getMember();

    $obj = new Approch();
    $approch = $obj->getApproch();

    $obj = new Project();
    $project = $obj->getProject();

    $obj = new Gallery();
    $gallery = $obj->getGallery();

    $obj = new Status();
    $statuss = $obj->getLastStatus();

    $status = end($statuss);

?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Search For Humaity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /><!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/icons.css" /><!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/style.css" /><!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" /><!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/color.css" /><!-- Color -->
    <link rel="stylesheet" type="text/css" href="style.css" /><!-- style css -->
    <style type="text/css">
    div{
        margin: 0 auto;
    }
  
</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
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

        <section>
            <div class="block blackish2 mdm-opc">
                <!-- <div class="fixed-bg" style="background: url(images/resource/parallax1.jpg);"></div> -->

                <?php   ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12" >

                                <div class="slider" >
                                    <?php 

                                    foreach($slide_img as $s_images){
                                    ?>

                                      <img class="" src="../back_end/uploads/slider_img/<?php echo $s_images['images']; ?>" style="max-height: 450px;">  

                                      <?php } ?>
                                </div>

                            <div class="title-style9 center-align">
                                  
                                <span>Special Task Force</span> <h4 itemprop="headline"><?php echo $hdds[0]['heading']; ?> <span><i>BACK TO</i> HUMANITY</span></h4>
                                <p itemprop="description" style="text-align: justify;"><?php echo $hdds[0]['description']; ?></p>
                                <a href="message.php" title="" class="btn1 " >Message Now</a>
                            </div>
                            <div class="fun-facts remove-ext center-align paddlr170">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="fact-box">
                                            <i class="flaticon-tool"></i>
                                            <span><span class="counter">All</span>&nbsp;</span>
                                            <p itemprop="headline">Bangladesh</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="fact-box">
                                            <i class="flaticon-people-2"></i>
                                            <span><span class="counter"><?php echo $hdds[0]['member_no']; ?></span>&nbsp;</span>
                                            <p itemprop="headline">Active Members</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="fact-box">
                                            <i class="flaticon-hearts-outline-icon"></i>
                                            <span><span class="counter"><?php echo $hdds[0]['Y_help']; ?></span></span>
                                            <p itemprop="headline">Year of Help</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Fun Facts -->
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
                            <div class="remove-ext">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="srv-bx">
                                            <img src="../back_end/uploads/member_img/<?php echo $member[0]['image']; ?>" alt="" itemprop="image" style="width: 370px; height: 240px;"/>
                                            <div class="srv-inf lightbox">
                                                <h2 itemprop="headline"><?php echo $member[0]['faces_heading']; ?></h2>
                                                <p itemprop="description"><?php echo $member[0]['short_description']; ?></p>
                                                <a href="members.php" title="" class="btn1-drk" itemprop="url" data-poptrox="vimeo,800x480">Watch Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="srv-bx">
                                            <img src="../back_end/uploads/approch_img/<?php echo $approch[0]['image']; ?>" alt="" itemprop="image" style="width: 370px; height: 240px;" />
                                            <div class="srv-inf">
                                                <h2 itemprop="headline">Our Approch</h2>
                                                <p style="text-align: justify;" itemprop="description"><?php echo $approch[0]['heading']; ?></p>
                                                <a href="approch.php" title="" class="btn1-drk" itemprop="url">More Approch</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="srv-bx">
                                            <img src="../back_end/uploads/gallery_img/<?php echo $gallery[0]['images']; ?>" alt="" itemprop="image" style="width: 370px; height: 240px;" />
                                            <div class="srv-inf">
                                                <h2 itemprop="headline">Join Our Force</h2>
                                                <p itemprop="description">Please contact us for any donation.
                                                Send your details for join us</p>
                                                <a href="contact.php" title="" class="btn1-drk" itemprop="url">
                                                Join Force
                                                <?php $_SESSION['contact'] = "<div class='alert alert-success'>Send us your details to join !</div>"; ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block blu-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">

                            <div class="status_head mx-auto">
                                <strong style="color: white;">OUR RECENT POST :</strong>
                               <h4 class="mb-5" itemprop="headline"><?php echo $status['heading'];  ?></h4>
                               <img class="img-rounded img-thumbnail " src="../back_end/uploads/status_img/<?php echo $status['image']; ?>" style="max-height: 450px; max-width: 800px;margin-left: 69px;">

                               <p class="mt-5">
                                <strong style="color: tomato;">Details : <br></strong>
                                <?php echo $status['detail']; ?>
                                    
                                </p> 
                            </div>
                            
                            
                            <div class="remove-ext mt-4">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="serv-bx style2">
                                            <i><img src="images/resource/ser1.png" alt="" itemprop="image" /></i>
                                            <h2 itemprop="headline"><a href="donate-now.html" title="" itemprop=""><!-- Make Donation --></a></h2>
                                            <span>Help Poor People</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="serv-bx style2">
                                            <i><img src="images/resource/ser2.png" alt="" itemprop="image" /></i>
                                            <h2 itemprop="headline"><a href="about.html" title="" itemprop=""><!-- Rescue Missions --></a></h2>
                                            <span>What Is Rescue Aim?</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="serv-bx style2">
                                            <i><img src="images/resource/ser3.png" alt="" itemprop="image" /></i>
                                            <h2 itemprop="headline"><a href="become-volunteer.html" title="" itemprop=""><!-- Become A Volunteer --></a></h2>
                                            <span>Our Aim & Thinking</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <h4 itemprop="headline"><?php echo $hdds[0]['heading']; ?> <i>Projects</i></h4>
                                <span>Social Organization</span>
                                <p style="text-align: justify;" itemprop="description"><?php echo $project[0]['project_home_details']; ?></p>
                            </div>
                            <div class="remove-ext">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="prj-bx3">
                                            <img src="../back_end/uploads/project_img/<?php echo $project[0]['image']; ?>" alt="" itemprop="image" style="height: 280px;width: 305px;" />
                                            <div class="prj3-inf">
                                                <div class="prj3-tl">
                                                    <h2 itemprop="headline"><a href="project-detail.html" title="" itemprop="url"><?php echo $project[0]['headline']; ?></a></h2>
                                                    <span class="dnt-gl"><span class="price"><?php echo $project[0]['donated']; ?></span> Donation Amount</span>
                                                </div>
                                                <div class="prj3-sndr">
                                                    <img src="../back_end/uploads/project_img/<?php echo $project[0]['manager_img']; ?>" alt="" itemprop="image" style="height: 65px;width: 65px;" />
                                                    <span class="sndr-nm"><?php echo $project[0]['project_manager']; ?> <i>(Project Manager)</i></span>
                                                </div>
                                                <ul class="pst-meta">
                                                    <li><?php echo $project[0]['project_address']; ?></li>
                                                    <li><i class="fa fa-calendar-check-o"></i> <?php echo $project[0]['project_date']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="prj-bx3">
                                            <img src="../back_end/uploads/project_img/<?php echo $project[1]['image']; ?>" alt="" itemprop="image" style="height: 280px;width: 305px;" />
                                            <div class="prj3-inf">
                                                <div class="prj3-tl">
                                                    <h2 itemprop="headline"><a href="project-detail.html" title="" itemprop="url"><?php echo $project[1]['headline']; ?></a></h2>
                                                    <span class="dnt-gl"><span class="price"><?php echo $project[1]['donated']; ?></span> Donation Amount</span>
                                                </div>
                                                <div class="prj3-sndr">
                                                    <img src="../back_end/uploads/project_img/<?php echo $project[1]['manager_img']; ?>" alt="" itemprop="image" style="height: 65px;width: 65px;" />
                                                    <span class="sndr-nm"><?php echo $project[1]['project_manager']; ?> <i>(Project Manager)</i></span>
                                                </div>
                                                <ul class="pst-meta">
                                                    <li><?php echo $project[1]['project_address']; ?></li>
                                                    <li><i class="fa fa-calendar-check-o"></i> <?php echo $project[1]['project_date']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="prj-bx3">
                                            <img src="../back_end/uploads/project_img/<?php echo $project[2]['image']; ?>" alt="" itemprop="image" style="height: 280px;width: 305px;" />
                                            <div class="prj3-inf">
                                                <div class="prj3-tl">
                                                    <h2 itemprop="headline"><a href="project-detail.html" title="" itemprop="url"><?php echo $project[2]['headline']; ?></a></h2>
                                                    <span class="dnt-gl"><span class="price"><?php echo $project[2]['donated']; ?></span> Donation Amount</span>
                                                </div>
                                                <div class="prj3-sndr">
                                                    <img src="../back_end/uploads/project_img/<?php echo $project[2]['manager_img']; ?>" alt="" itemprop="image" style="height: 65px;width: 65px;" />
                                                    <span class="sndr-nm"><?php echo $project[2]['project_manager']; ?> <i>(Project Manager)</i></span>
                                                </div>
                                                <ul class="pst-meta">
                                                    <li><?php echo $project[2]['project_address']; ?></li>
                                                    <li><i class="fa fa-calendar-check-o"></i> <?php echo $project[2]['project_date']; ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="btns-grp center-align">
                                <a href="about.php" title="" class="btn1" itemprop="url">Ways To Give</a>
                                <a href="projects_page.php" title="" class="btn1-drk" itemprop="url">View More Projects</a>
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
                                    <img src="../back_end/uploads/logo_img/<?php echo $logo[0]['logo']; ?>" alt="" itemprop="image" style="margin-bottom: 10px; border-radius: 8px;" />
                                </div>
                                <div class="twitter-reviews">
                                        
                                    
                                    <div class="twitter-review">
                                        <div class="sndr-inf">
                                            <h4 itemprop="headline"><?php echo $hdds[0]['heading']; ?></h4>
                                            
                                        </div>
                                        <p itemprop="description"><?php echo $approch[0]['heading']; ?></p>
                                    </div>
                                    
                                </div>
                            </div><!-- Twitter Posts -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script type="text/javascript">
        $('.slider').bxSlider({
                  auto: true,
                  autoControls: false,
                  stopAutoOnClick: true,
                  pager: true,
                  slideWidth: 980,
                  captions: true,
                   slideWidth: 800,

                  speed: 1000
});

    </script>

</script>
</body>
</html>

