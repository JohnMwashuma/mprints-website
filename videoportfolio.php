<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio | MPrints</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <?php 
    $page = 'portfolio' ; include('header.php');
    ?>



    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">MPrints Portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->
    


    <section id="projects" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h3>Project Categories</h3>
                            <ul class="nav navbar-stacked">
                                <li><a href="portfolio.php">Graphic Designs<span class="pull-right">(6)</span></a></li>
                                <li><a href="photographyporfolio.php">Photography<span class="pull-right">(4)</span></a></li>
                                <li><a href="#">Printing<span class="pull-right">(0)</span></a></li>
                                 <li class="active"><a href="videoportfolio.php">Video<span class="pull-right">(2)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-item  recent">
                            <h3>Recent Projects</h3>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="project4-details.php"><img src="images/portfolio/GAME%20POSTER%20small.png" class="img-thumbnail" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="project4-details.php">MPrint design company porfolio/profile banners..</a></h4>
                                    <p>posted on 07 March 2014</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <a href="project3-details.php"><img src="images/portfolio/Ecess%20monday%20small.jpg" class="img-thumbnail" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4><a href="project3-details.php">Mprints also not only brand products but also...</a></h4>
                                    <p>posted on 07 March 2014</p>
                                </div>
                            </div>

                        </div>
                        <div class="sidebar-item popular">
                            <h3>Popular Projects</h3>
                            <ul class="gallery">
                                <li>
                                    <a href="project1-details.php"><img src="images/portfolio/Mbaks Fashions small.png" class="img-thumbnail" alt=""></a>
                                </li>
                                <li>
                                    <a href="project3-details.php"><img src="images/portfolio/Ecess%20monday%20small.jpg" class="img-thumbnail" alt=""></a>
                                </li>
                                <li>
                                    <a href="project4-details.php"><img src="images/portfolio/GAME%20POSTER%20small.png" class="img-thumbnail" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                      
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                         <div class="col-md-6">
                        <h2 class="page-header">Wedding Video Shooting</h2>
                        <iframe src="https://player.vimeo.com/video/95995577"></iframe>
                    </div>
                         <div class="col-md-6">
                        <h2 class="page-header">Product Advertising</h2>
                        <iframe src="https://www.youtube.com/embed/4x-aHGCD8Pc" ></iframe>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#projects-->


   
     <?php 
    require("footer.php")
    ?>



    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
