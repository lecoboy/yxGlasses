<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);

//相关产品
$sql = "SELECT * FROM yx_products ORDER BY id desc";
$result = mysql_query($sql);
$lat_products = array();
$i = 0;
while($lat_products[$i] = mysql_fetch_assoc($result)) {
    if($i==5){
        break;
    }
    $i++;
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>翊训眼镜-首页</title>
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
        <style type="text/css">
            .menu-container .nav-item a{
                color: #000;
            }
            .comfort-ul{
                list-style: none;
                padding: 0px;
            }
            .swiper-slide{
                height: 200px;line-height: 200px;
            }
            .swiper-slide img{
                display: inline-block;
            }
        </style>
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
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.php">首页</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="news.php">新闻</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="products.php">产品</a></li>
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

        <!--========== SLIDER ==========-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Flying Eyes</h1>
                                <p style="color: #333;">The World’s Most Comfortable Sunglasses
                                    <br/>for Every Adventure</p>
                            </div>
                            <a href="products.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="item">
                    <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">Hi-Tech Design</h2>
                                <p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Explore</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <!-- <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <h2 style="text-align: center;">As Seen In</h2>
                <div class="row row-space-1 margin-b-2">
                    <div class="col-sm-4 sm-margin-b-2">
                        <img src="img/seen/1.gif" style="width: 100%;" />  
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <img src="img/seen/2.gif" style="width: 100%;" />  
                    </div>
                    <div class="col-sm-4 sm-margin-b-2">
                        <img src="img/seen/3.gif" style="width: 100%;" />  
                    </div>
                </div>

                <div class="row row-space-1">
                    <div class="col-sm-3 sm-margin-b-2">
                        <img src="img/seen/3.png" style="width: 100%;" />  
                    </div>
                    <div class="col-sm-3 sm-margin-b-2">
                        <img src="img/seen/4.gif" style="width: 100%;" />  
                    </div>
                    <div class="col-sm-3 sm-margin-b-2">
                        <img src="img/seen/5.gif" style="width: 100%;" />  
                    </div>
                    <div class="col-sm-3 sm-margin-b-2">
                        <img src="img/seen/6.gif" style="width: 100%;" />  
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Service -->
        <!-- 舒适设计引擎 -->
        <div class="content-lg container">
            <div class="row margin-b-50">
                <div class="col-sm-8 sm-margin-b-50">
                    <img class="img-responsive" src="img/design/0.jpg" alt="member">
                </div>
                <div class="col-sm-4"><!-- col-sm-offset-1"> -->
                    <div class="margin-b-30">
                        <h2>Engineered for Comfort</h2>
                        <hr>
                        <ul class="comfort-ul">
                            <li class="margin-b-10">›› Polycarbonate UV400 lenses</li>
                            <li  class="margin-b-10">›› Micro-thin temples</li>
                            <li  class="margin-b-10">›› Lightweight design</li>
                            <li  class="margin-b-10">›› Impact resistant protection</li>
                            <li  class="margin-b-10">›› Flexibility without compromise</li>
                            <li  class="margin-b-10">›› Virtually unbreakable</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End 舒适设计引擎 -->
        <!-- Latest Products -->
        <div class="content-lg container">
            <div class="row margin-b-40">
                <div class="col-sm-6">
                    <h2>最新产品</h2>
                    <p>本栏目展示我们最新的几样产品</p>
                </div>
            </div>
            <!--// end row -->

            <div class="row">
                <!-- Latest Products -->
                <?php
                foreach ($lat_products as $lat) {
                ?>
                <div class="col-sm-4 sm-margin-b-50">
                    <div class="margin-b-20">
                        <div class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <img class="img-responsive" src="admin/server/upload/<?php echo $lat['altImg']?>" alt="Latest Products Image">
                        </div>
                    </div>
                    <h4><a href="product-detail.php?id=<?php echo $lat['id']?>"><?php echo $lat['name']?></a> <span class="text-uppercase margin-l-20">眼镜</span></h4>
                    <p><?php echo $lat['doller']?></p>
                    <a class="link" href="product-detail.php?id=<?php echo $lat['id']?>">Read More</a>
                </div>
                <?php
                }
                ?>
            </div>
            <!--// end row -->
        </div>
        <!-- End Latest Products -->


		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费网站模板</a></div>
        
        <!-- Clients -->
        <div class="bg-color-sky-light">
            <div class="container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/seen/1.gif" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/seen/3.gif" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/seen/2.gif" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/seen/5.gif" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/seen/4.gif" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="img/seen/3.png" alt="Clients Logo">
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- General Questions -->
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>我们的设计</h2>
                </div>
            </div>

            <div class="row margin-b-50">
                <div class="col-sm-5 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2>Designed for comfort</h2>
                        <p>›› Every pair of Flying Eyes are designed for comfort, allowing you to wear your glasses for hours without strain, fatigue or pain.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <img class="img-responsive" src="img/design/1.jpg" alt="member">
                </div>
            </div>
            <div class="row margin-b-50">
                <div class="col-sm-6 sm-margin-b-50">
                    <img class="img-responsive" src="img/design/2.jpg" alt="member">
                </div>
                <div class="col-sm-5col-sm-offset-1">
                    <div class="margin-b-30">
                        <h2>Safety meets comfort</h2>
                        <p>›› Uncompromised, impact-resistant polycarbonate lens quality with optical clarity.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5 sm-margin-b-50">
                    <div class="margin-b-30">
                        <h2>Headset compatible</h2>
                        <p>›› Flying Eyes surpasses traditional eyewear by engineering headset compatible sunglasses for no pain or noise leaks</p>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <img class="img-responsive" src="img/design/3.jpg" alt="member">
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End General Questions -->

        <!-- Work -->
        <div class="bg-color-sky-light overflow-h">
            <div class="content-lg container">
                <div class="row margin-b-40">
                    <div class="col-sm-12">
                        <h2>About Flying Eyes</h2>
                        <p>“Classic aviator sunglasses are one of the iconic symbols that defines a pilot,” said Dean Siracusa, president and founder of Flying Eyes. “…well, they used to.”Even though aviator sunglasses look stylish, and maintain that persona, most pilots will tell you that, “wearing a modern headset with traditional aviators can become extremely painful.”
So, why is there a disconnect between a pilot’s gear and their iconic eyewear?</p>
                    </div>
                    <div class="col-sm-8">
                        <p>Aviator style sunglasses were designed in the 1930s, and it wasn’t until the 1970s that pilots began wearing headsets designed to block out ambient flight noise. Today’s modern headsets are engineered for a very specific purpose. Wearing “regular” aviators or other common sunglasses with an active noise reduction headset creates discomfort, and prevents proper function.

Flying Eyes was founded to design and engineer the world’s lightest, most comfortable aviator sunglasses. By redesigning the temples, Flying Eyes has created eyewear with thin temples that improve fit and comfort while wearing noise-canceling headsets.

“Our temples are made from Resilamide™, a patented, flexible polymer originally designed for the aerospace industry,” said Siracusa. “The glasses fit perfectly with any helmet or headset, with minimal pressure or irritation to the sides of the head.”</p>
                    </div>
                    <div class="col-sm-4">
                        <img class="img-responsive" src="img/about/1.jpg" alt="about">
                    </div>
                    <div class="col-sm-4">
                        <img class="img-responsive" src="img/about/2.jpg" alt="about">
                    </div>
                    <div class="col-sm-8">
                        <p>Today, Flying Eyes are sold throughout the world in the United Kingdom, Australia, New Zealand, Canada, South Africa, and China.

With a year over year increase in US motorcycle sales, and more people wearing over-ear headphones than ever before, Flying Eyes is in front of a very big shift in the sunglasses market, as more people look for comfort around their ears as much as protection for their eyes. In addition to the updated aviators, Flying Eyes continues to expand their frame styles with new innovations including updated beach frames, sport frames, readers, and protective wear.

Experience the Flying Eyes difference, and order your pair of the world’s most comfortable sunglasses to wear with a helmet or headset. Shop here, and check out our new line up of frame styles. Find yours, today!</p>
                    </div>
                </div>
                <!--// end row -->

                
            </div>
        </div>
        <!-- End Work -->
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
                                <li class="footer-list-item"><a class="footer-list-link" href="about.html">关于</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="contact.html">联系我们</a></li>
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
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>