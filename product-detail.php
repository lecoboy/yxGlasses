<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);

$sql = "SELECT * FROM yx_products where id=".$_GET['id'];
$result = mysql_query($sql);
if (sizeof($result) > 0) {
    $row = mysql_fetch_assoc($result);
}else{
    header('Location:products.php');
}
if($row['imgs'] == "" || $row['imgs'] == null){
    $imgs = array();
}else{
    $imgs = explode(";", $row['imgs']);    
}

//相关产品
$sql = "SELECT * FROM yx_products ORDER BY id desc";
$result = mysql_query($sql);
$rel_products = array();
$i = 0;
while($rel_products[$i] = mysql_fetch_assoc($result)) {
    if($i==3){
        break;
    }
    $i++;
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>
            翊训眼镜-产品详情
        </title>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css"/>
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet"/>
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
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
                        <button class="navbar-toggle" data-target=".nav-collapse" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <span class="toggle-icon">
                            </span>
                        </button>
                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.php">
                                <img alt="Asentus Logo" class="logo-img logo-img-main" src="img/logo.png">
                                    <img alt="Asentus Logo" class="logo-img logo-img-active" src="img/logo-dark.png">
                                    </img>
                                </img>
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item">
                                    <a class="nav-item-child nav-item-hover" href="index.php">
                                        首页
                                    </a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-item-child nav-item-hover" href="pricing.html">
                                        Pricing
                                    </a>
                                </li>-->
                                <li class="nav-item">
                                    <a class="nav-item-child nav-item-hover" href="news.php">
                                        新闻
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child nav-item-hover active" href="products.php">
                                        产品
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child nav-item-hover" href="about.html">
                                        关于
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item-child nav-item-hover" href="contact.html">
                                        联系我们
                                    </a>
                                </li>
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
        <div class="parallax-window" data-image-src="img/1920x1080/01.jpg" data-parallax="scroll">
            <div class="parallax-content container">
                <h1 class="carousel-title">
                    产品详情
                </h1>
                <p style="color: #a6a7aa;">
                    我们会在这个版块对单个产品进行详细介绍
                    <br/>
                    如有疑问，请通过
                    <a href="contact.html">
                        联系我们
                    </a>
                    版块与我们取得联系
                </p>
            </div>
        </div>
        <!--========== PARALLAX ==========-->
        <!--========== PAGE LAYOUT ==========-->
        <!-- 新闻 -->
        <div class="content-lg container">
            <div class="row margin-b-20">
                <div class="col-sm-6">
                    <h2>
                    </h2>
                </div>
            </div>
            <!--// end row -->
            <div class="row">
                <div class="col-sm-6">
                    <img alt="product img" style="width: 455px;margin: 0 auto;" id="bigImg" class="img-responsive margin-b-30" src="admin/server/upload/<?php echo $row['altImg']?>"/>
                    <a href="javascript:;" style="font-size: 48px;float: left;">
                        
                    </a>
                   <!--  <ol class="flex-control-nav flex-control-thumbs">
                        <?php
                            foreach ($imgs as $img) {
                                ?>
                                <li>
                                    <img src="admin/server/upload/<?php echo $img?>"/>
                                </li>
                                <?php
                            }
                        ?>
                    </ol> -->
                    <div id="myCarousel" class="carousel slide" style="margin-bottom: 15px;">
                        <!-- 轮播（Carousel）指标 -->
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>    -->
                        <!-- 轮播（Carousel）项目 -->
                        <div class="carousel-inner">
                            <?php 
                            if(sizeof($imgs)%4==0){
                                $lsize = floor(sizeof($imgs)/4);
                            }else{
                                $lsize = floor(sizeof($imgs)/4) + 1;
                            }
                            // echo "$lsize";
                            for ($i=0; $i < $lsize ; $i++) { 
                                ?>
                                <div class="item<?php 
                                    if($i==0){
                                        echo " active";
                                    }
                                ?>">
                                    <ol style="list-style:none;margin-top: 10px;">
                                <?php
                                for ($j=$i*4; $j<$i*4+4 ; $j++) { 
                                    if($j >= sizeof($imgs)){
                                        break;
                                    }
                                    ?>
                                    <li style="float: left;margin-right: 15px;height:100px;line-height:100px;<?php if($j==0 || $j%4==0) echo "margin-left: 15px;";?>">
                                        <a href="javascript:;" onclick="showImg('<?php echo $imgs[$j];?>')"><img width="100" src="admin/server/upload/<?php echo $imgs[$j]?>"/></a>
                                    </li>
                                    <?php
                                }
                                echo "</ol>";
                                echo "</div>";
                            }
                            ?>
                            <!-- <div class="item active">
                                <ol style="list-style:none;margin-top: 10px;">
                                    <?php
                                        foreach ($imgs as $img) {
                                            ?>
                                            <li style="float: left;margin-right: 15px;">
                                                <img width="100" height="100" src="admin/server/upload/<?php echo $img?>"/>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                </ol>
                            </div>
                            <div class="item">
                                
                                <ol style="list-style:none;margin-top: 10px;">
                                    <?php
                                        foreach ($imgs as $img) {
                                            ?>
                                            <li style="float: left;margin-right: 15px;">
                                                <img width="100" height="100" src="admin/server/upload/<?php echo $img?>"/>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                </ol>
                            </div>
                            <div class="item">
                                <ol style="list-style:none;margin-top: 10px;">
                                    <?php
                                        foreach ($imgs as $img) {
                                            ?>
                                            <li style="float: left;margin-right: 15px;">
                                                <img width="100" height="100" src="admin/server/upload/<?php echo $img?>"/>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                </ol>
                            </div> -->
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background: rgba(255,255,255,0)">
                            <span style="font-size: 28px;line-height: 124px;" aria-hidden="true">&lt;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background: rgba(255,255,255,0)">
                            <span style="font-size: 28px;line-height: 124px;" aria-hidden="true">&gt;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> 
                </div>
                <div class="col-sm-6 sm-margin-b-50">
                    <h1 class="product_title entry-title">
                        <?php echo $row['name']?>
                    </h1>
                    <p class="price">
                        <?php echo $row['doller']?>
                    </p>
                    <div class="woocommerce-product-details__short-description">
                        <hr/>
                        <h3 style="font-weight: 500">
                            每份购买的眼镜中包含:
                        </h3>
                        <ul style="padding-left: 15px;">
                            <li>
                                太阳镜本体
                            </li>
                            <li>
                                三角折叠盒
                            </li>
                            <li>拉链式太阳镜盒</li>
                            <li>软质超纤维简易太阳镜袋</li>
                            <li>太阳镜布及精美礼盒包装</li>
                        </ul>
                        <h3 style="font-weight: 500">
                            产品特点
                        </h3>
                        <ul style="padding-left: 15px;">
                            <?php echo $row['trait']?>
                        </ul>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End 新闻 -->
            <div class="row margin-b-20 tabs-wrapper">
                <!-- <ul class="tabs-nav">
                    <li class="active">
                        <a href="javascript:;">
                            产品描述
                        </a>
                    </li>
                    <li class="unuse">
                        <a href="javascript:;">
                            产品特点
                        </a>
                    </li>
                    <li class="unuse">
                        <a href="javascript:;">
                            产品具体信息
                        </a>
                    </li>
                </ul> -->
                <div class="tabs-content">
                    <h2>
                        产品描述
                    </h2>
                    <?php echo $row['describe']?>
                    <h3>
                        产品特点
                    </h3>
                    <ul>
                        <?php echo $row['trait']?>
                    </ul>
                    <h3>
                        产品具体信息
                    </h3>
                    <ul>
                        <?php echo $row['detail']?>
                    </ul>
                    <p>
                    </p>
                </div>
            </div>
            <div style="clear: both;">
            </div>
            <div class="row margin-b-20">
                <h2>
                    相关产品
                </h2>
                <ul class="products columns-4">
                    <?php 
                        foreach ($rel_products as $rel) {
                    ?>
                        <li class="col-sm-3">
                        <a href="product-detail.php?id=<?php echo $rel['id']?>">
                            <img alt="" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" src="admin/server/upload/<?php echo $rel['altImg']?>">
                            </img>
                        </a>
                        <h2 class="woocommerce-loop-product__title">
                            <?php echo $rel['name']?>
                        </h2>
                        <span class="price">
                            <?php echo $rel['doller']?>
                        </span>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        function showImg(imgNames){
            $("#bigImg").attr("src","admin/server/upload/"+imgNames);
        }
    </script>
</html>
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
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                首页
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                新闻
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                产品
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                Pricing
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                Clients
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                Careers
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                联系我们
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                Terms
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-4 sm-margin-b-30">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                Twitter
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                Facebook
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                Instagram
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a class="footer-list-link" href="#">
                                YouTube
                            </a>
                        </li>
                    </ul>
                    <!-- End List -->
                </div>
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white">
                        Send Us A Note
                    </h2>
                    <input class="form-control footer-input margin-b-20" placeholder="Name" required="" type="text">
                        <input class="form-control footer-input margin-b-20" placeholder="Email" required="" type="email">
                            <input class="form-control footer-input margin-b-20" placeholder="Phone" required="" type="text">
                                <textarea class="form-control footer-input margin-b-30" placeholder="Message" required="" rows="6">
                                </textarea>
                                <button class="btn-theme btn-theme-sm btn-base-bg text-uppercase" type="submit">
                                    Submit
                                </button>
                            </input>
                        </input>
                    </input>
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
<a class="js-back-to-top back-to-top" href="javascript:void(0);">
    Top
</a>
<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- CORE PLUGINS -->
<script src="vendor/jquery.min.js" type="text/javascript">
</script>
<script src="vendor/jquery-migrate.min.js" type="text/javascript">
</script>
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript">
</script>
<!-- PAGE LEVEL PLUGINS -->
<script src="vendor/jquery.easing.js" type="text/javascript">
</script>
<script src="vendor/jquery.back-to-top.js" type="text/javascript">
</script>
<script src="vendor/jquery.smooth-scroll.js" type="text/javascript">
</script>
<script src="vendor/jquery.wow.min.js" type="text/javascript">
</script>
<script src="vendor/jquery.parallax.min.js" type="text/javascript">
</script>
<script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript">
</script>
<!-- PAGE LEVEL SCRIPTS -->
<!-- <script src="js/layout.min.js" type="text/javascript">
</script> -->
<script src="js/components/swiper.min.js" type="text/javascript">
</script>
<script src="js/components/wow.min.js" type="text/javascript">
</script>
<script type="text/javascript">
var Layout = function() {
    "use strict";
    var t = function() {
            $(window).scrollTop() > 60 ? $("body").addClass("page-on-scroll") : $("body").removeClass("page-on-scroll")
        };
    return {
        init: function() {
            t(), $(window).scroll(function() {
                t()
            })
        }
    }
}();
$(document).ready(function() {
    Layout.init()
});
</script>
<!-- END BODY -->
