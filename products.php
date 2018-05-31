<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);


$sql = "SELECT * FROM yx_products ORDER BY id DESC";
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>翊训眼镜-产品</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.php">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="index.php">首页</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="news.php">新闻</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="products.php">产品</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.html">关于</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.html">联系我们</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h1 class="carousel-title">我们的产品</h1>
                <p>我们会在这个版块持续推出我们的新产品 <br/> 敬请期待</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Our Exceptional Solutions -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>我们的主要产品</h2>
                    <p>这个模块展示我们的主要产品——眼镜，如果想要查看相关配件，<a href="accessories.php">请点这里</a>。</p>
                </div>
            </div>
            <!--// end row -->
            
            <?php
                $i = 1;
                if (mysql_num_rows($result) > 0) {
                    // 输出数据
                    while($row = mysql_fetch_assoc($result)) {
                        if(($i+2) % 3 == 0){
                            echo '<div class="row margin-b-50">';
                        }
            ?>
                        <div class="col-sm-4 sm-margin-b-50">
                            <div class="margin-b-20">
                                <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                    <a href="product-detail.php?id=<?php echo $row["id"];?>"><img class="img-responsive" src="admin/server/upload/<?php echo $row["altImg"];?>" alt="Our Exceptional Solutions Image"></a>
                                </div>
                            </div>
                            <h3><a href="product-detail.php?id=<?php echo $row["id"];?>"><?php echo $row["name"];?></a></h3>
                            <p>零售价：<?php echo $row["doller"];?> 美元</p>
                            <a class="link" href="product-detail.php?id=<?php echo $row["id"];?>">Read More</a>
                        </div>       
            <?php
                        if($i % 3 == 0){
                            echo '</div>';
                        }
                        if($i == mysql_num_rows($result)){
                            echo "</div>";
                        }
                        $i = $i+1;
                    }
                }else{
                    echo "0 结果";
                }
            ?>

            
        </div>
        <!-- End Our Exceptional Solutions -->


        <!-- Promo Section -->
        <div class="promo-section overflow-h">
            <div class="container">
                <div class="clearfix">
                    <div>
                        <div>
                            <div>
                                <h2>Need Prescription Lenses?</h2>
                                <p>Find an optician near you</p>
                                <a href="accessories.php">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-section-img-right">
                <img class="img-responsive" src="img/lenses/1.jpg" alt="Content Image">
            </div>
        </div>
        <!-- End Promo Section -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="index.php">首页</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="news.php">新闻</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="products.php">产品</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Pricing</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Clients</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Careers</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">联系我们</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Terms</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a class="footer-list-link" href="#">联系我们</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Email:</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">support@flyingeyesoptics.com</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#"></a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Phone</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">512-213-2390</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Toll free:</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">888-568-8978</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <h2 class="color-white">Send Us A Note</h2>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                            <input type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                            <input type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                            <textarea class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                            <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="Asentus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700" href="#preview/asentus/">Flying Eyes</a> Glasses <a href="index.php" target="_blank" title="Flying Eyes">Flying Eyes</a> - Support by <a href="http://hzzkj.com/" target="_blank" title="黑珍珠科技">黑珍珠科技</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>