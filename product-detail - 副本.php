<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "SELECT * FROM yx_products where id=".$_GET['id'];
$result = mysql_query($sql);
if ($result->num_rows > 0) {
    $row = mysql_fetch_assoc($result);
}else{
    header('Location:products.php');
}
if($row['imgs'] == "" || $row['imgs'] == null){
    $imgs = array();
}else{
    $imgs = explode(";", $row['imgs']);    
}
?>
<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>郑州黑珍珠计算机科技有限公司</title>
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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.html">Pricing</a></li>
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
                <h1 class="carousel-title">产品详情</h1>
                <p>我们会在这个版块对单个产品进行详细介绍 <br/> 如有疑问，请通过<a href="contact.html">联系我们</a>版块与我们取得联系</p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->

        <!--========== PAGE LAYOUT ==========-->

        <!-- 新闻 -->
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2><?php echo $row['name']?>-<?php echo $row['type']?></h2>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive margin-b-30" src="admin/server/upload/<?php echo $row['altImg'];?>" alt="product img">
                    <?php
                        foreach ($imgs as $img) {
                            echo "<img class='img-responsive margin-b-30' src='admin/server/upload/{$img}' alt='product img'>";
                        }
                    ?>
                </div>
                <div class="col-sm-7 sm-margin-b-50 col-sm-offset-1">
                    <?php echo $row['txt'];?>
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End 新闻 -->

        <!-- Service -->
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>翠鸟专题</h3>
                                    <p class="margin-b-5">翠鸟专题，翠鸟产品基本信息</p>
                                </div>
                                <a href="info-cuiniao.html" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3>红隼专题</h3>
                                    <p class="margin-b-5">红隼专题，红隼产品基本信息</p>
                                </div>
                                <a href="info-hongsun.html" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>库伯专题</h3>
                                    <p class="margin-b-5">库伯专题，库伯产品基本信息</p>
                                </div>
                                <a href="info-kubo.html" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-1">
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Hawk鹰专题</h3>
                                    <p class="margin-b-5">Hawk鹰专题，Hawk鹰产品基本信息</p>
                                </div>
                                <a href="info-hawkying.html" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>金鹰专题</h3>
                                    <p class="margin-b-5">金鹰专题，金鹰产品基本信息</p>
                                </div>
                                <a href="info-jinying.html" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Service -->

        <!-- Testimonials -->
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Notes From CEO</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.
                                    </div>
                                    <div class="margin-b-20">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret tempor incididunt dolore magna consequat siad minim aliqua.
                                    </div>
                                    <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                    <div class="margin-b-20">
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                    <p><span class="fweight-700 color-link">Alex Clarson</span>, Metronic Customer</p>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->

        <!-- Team -->
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-6">
                        <h2>Meet the Team</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/01.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">Alicia Keys</a> <span class="text-uppercase margin-l-20">Project Manager</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/02.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">James Millner</a> <span class="text-uppercase margin-l-20">Lead Developer</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Team -->

                    <!-- Team -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="bg-color-white margin-b-20">
                            <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="img/770x860/03.jpg" alt="Team Image">
                            </div>
                        </div>
                        <h4><a href="#">Scarlet Johanson</a> <span class="text-uppercase margin-l-20">Designer</span></h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                        <a class="link" href="#">Read More</a>
                    </div>
                    <!-- End Team -->
                </div>
                <!--// end row -->
            </div>
        </div>
        <!-- End Team -->
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
                                <li class="footer-list-item"><a class="footer-list-link" href="#">首页</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">新闻</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">产品</a></li>
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
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
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
                        <p class="margin-b-0"><a class="color-base fweight-700" href="#preview/asentus/">Asentus</a> More Templates <a href="http://case.hzzkj.com/" target="_blank" title="黑珍珠模版">更多模版</a> - Collect from <a href="http://case.hzzkj.com/" target="_blank" title="黑珍珠模版">更多模版</a></p>
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
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>