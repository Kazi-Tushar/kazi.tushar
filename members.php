<?php 

include('../back_end/class/dbconfig.php');
include('../back_end/class/about.php');

include("../back_end/class/gallery.php");
include('../back_end/class/heading_description.php');
include("../back_end/class/member.php");
 $obj = new HeadingDescription();
    $hdds = $obj->getHdingDes();

    $obj = new Member();
    $members = $obj->getMember(); 

 ?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Our members</title>
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
    <link rel="stylesheet" type="text/css" href="style.css" /><!-- Color -->
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
                        <h1 itemprop="headline">Members Page</h1>
                    </div>
                    <ul class="bredcrumbs">
                        <li><a href="index.php" title="" itemprop="url">Home</a></li>
                        
                        <li>Members Page</li>
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

       
 <?php foreach ($members as $key => $member) { ?>
                                    
        <div class="col-md-4 col-sm-6 col-lg-3">
                                        
                <div class="prj-bx3">

                    <img id="myImg" src="../back_end/uploads/member_img/<?php echo $member['image']; ?>" alt="" style="width:100%;max-width:300px;height: 210px;">

                    <!-- The Modal -->
                 
                    <div id="myModal" class="modal">
                      <span class="close">&times;</span>
                      <img class="modal-content" id="img01">
                      
                      <p class="p-5"><?php echo $member['description']; ?> </p>
                    </div>
                    <!-- End The Modal -->

                        <div class="prj3-inf">
                            <div class="prj3-tl">
                            <h2 itemprop="headline"><p href="project-detail.php?id=<?php echo $members['id']; ?>" title="" itemprop="url"><?php echo $member['name']; ?></p></h2>
                            <span class="dnt-gl"><span class="price">
                                </span> Phone :</span>
                                <?php echo $member['member_phone']; ?>
                                <span class="sndr-nm"> <i>(<?php echo $member['member_type']; ?>)</i>
                                </span>
                            </div>
                                <div class="prj3-sndr">
                                <span class="sndr-nm">Email : <i style="font-size: 15px;"><?php echo $member['member_email']; ?></i>
                                </span>
                                </div>
                                    <ul class="pst-meta">
                                        <li><i class="fa fa-calendar-check-o"></i>
                                        <?php echo $member['address']; ?>
                                            
                                        </li>
                                       
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
                                    <div class="twitter-review">
                                        <div class="sndr-inf">
                                            <h4 itemprop="headline">Jm Ember,</h4>
                                            <span>- 2 Years Ago</span>
                                        </div>
                                        <p itemprop="description">The latest Template Release from JoomlaMan, with One Page Parallax Option, perfect for creatives -</p>
                                    </div>
                                    <div class="twitter-review">
                                        <div class="sndr-inf">
                                            <h4 itemprop="headline">Jm Ston,</h4>
                                            <span>- 1 Years Ago</span>
                                        </div>
                                        <p itemprop="description">The latest Template Release from JoomlaMan, with One Page Parallax Option, perfect for creatives -</p>
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
    <script src="js/slim-scrollbar.min.js" type="text/javascript"></script><!-- Scroll Bar -->
    <script src="js/jquery.downCount.js" type="text/javascript"></script><!-- Down Count -->
    <script src="js/script.js" type="text/javascript"></script><!-- Custom -->
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>
</html>