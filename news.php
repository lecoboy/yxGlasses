<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);


$sql = "SELECT * FROM yx_news ORDER BY id DESC";
$result = mysql_query($sql);
?>
<!DOCTYPE html>
<!-- saved from url=(0057)http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html# -->
<html lang="en">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>
            翊训眼镜-新闻
        </title>
        <!-- Google Fonts -->
        <link href="./Blog_files/css" rel="stylesheet"/>
        <link href="./Blog_files/css(1)" rel="stylesheet"/>
        <link href="./Blog_files/css(2)" rel="stylesheet"/>
        <link href="./Blog_files/css(3)" rel="stylesheet"/>
        <!-- Stylesheet -->
        <link href="./Blog_files/font-awesome.min.css" rel="stylesheet"/>
        <link href="./Blog_files/slicknav.min.css" rel="stylesheet"/>
        <link href="./Blog_files/main.css" rel="stylesheet"/>
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
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="share/share.css"/>
    </head>

<body>
    <!-- Header -->
    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top" style="top: -10px;">
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
                            <li class="nav-item">
                                <a class="nav-item-child nav-item-hover active" href="news.php">
                                    新闻
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item-child nav-item-hover" href="products.php">
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
                新闻公告
            </h1>
            <p style="color: #a6a7aa;">
                我们会在这个版块推出我们的新闻公告
                <br/>
                敬请期待
            </p>
        </div>
    </div>
    <!--========== PARALLAX ==========-->
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Container -->
        <div class="container main-container blog-page">
            <div class="row">
                <div class="col-md-9">
                    <!-- Main Content -->
                    <main class="main" id="main">
                        <?php 
                            $i = 0;
                            while($row = mysql_fetch_assoc($result)) {
                        ?>
                        <article class="post-item clearfix format-standard has-post-thumbnail hentry">
                            <div class="post-thumbnail">
                                <a href="news-detail.php?id=<?php echo $row['id']?>">
                                    <img alt="Post Thumb" class="img-responsive" src="admin/server/upload/<?php echo $row['headImg']?>"/>
                                </a>
                            </div>
                            <header class="entry-header">
                                <div class="entry-meta clearfix">
                                    <div class="post-cat">
                                        <a href="javascript:;">
                                            <?php echo $row['note']?>
                                        </a>
                                    </div>
                                    <div class="post-author">
                                        <div class="author-info-wrap">
                                            <h4 class="author-title">
                                                <?php echo $row['author']?>
                                            </h4>
                                            <span class="posted-on">
                                                <?php echo $row['addTime']?>
                                            </span>
                                        </div>
                                        <!-- <img alt="Peter Blalock" class="author-image" src="./Blog_files/a-1.jpg">
                                            </img> -->
                                    </div>
                                </div>
                                <h2 class="entry-title">
                                    <a href="news-detail.php?id=<?php echo $row['id']?>" rel="bookmark">
                                        <?php echo $row['title']?>
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-summary clearfix">
                                <?php echo $row['summary']?>
                            </div>
                        </article>
                        <?php
                                if($i == 2){
                                    break;
                                }
                                $i++;
                            }
                        ?>
                        
                        <!-- <nav class="pagination-nav">
                            <ul class="pagination">
                                <li>
                                    <a aria-label="Previous" href="http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html#">
                                        <span aria-hidden="true">
                                            <
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html#">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <a href="http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html#">
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a href="http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html#">
                                        3
                                    </a>
                                </li>
                                <li>
                                    <span>
                                        ...
                                    </span>
                                </li>
                                <li>
                                    <a href="http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html#">
                                        6
                                    </a>
                                </li>
                                <li>
                                    <a aria-label="Next" href="http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html#">
                                        <span aria-hidden="true">
                                            >
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                    </main>
                </div>
                <!-- Sidebar -->
                <div class="col-md-3">
                    <aside class="sidebar" id="sidebar">
                        <section class="widget widget_search">
                            <form action="http://demo.cssmoban.com/cssthemes4/dntp_27_lg/blog.html#" class="search-form clearfix" method="get">
                                <input name="s" placeholder="搜索..." type="text" value="">
                                    <input class="searchsubmit" type="submit" value="">
                                    </input>
                                </input>
                            </form>
                        </section>
                        <section class="widget widget_recent_posts">
                            <h2 class="widget-title" style="font-size: 14px;">
                                新闻列表
                            </h2>
                            <ul>
                                <?php 
                                    //分页处理
                                    //获取总记录数:  
                                    $sqls  = "SELECT COUNT(*) as total from yx_news";  
                                    $sqlcount = mysql_query($sql);  
                                    $pagecount  = mysql_fetch_array($sqlcount);  
                                    $pagecount = sizeof($pagecount);
                                    $pagecount -= 3;
                                    if($pagecount < 0){
                                        $pagecount = 0;
                                    }
                                    mysql_free_result($sqlcount);   //查询完记得释放空间  
                                    //获取页数,判断是否符合要求  
                                    if(isset($_GET['page'])){
                                        $page = intval($_GET['page']);  
                                    }else{
                                        $page = 1;
                                    }
                                    //定义每页显示的页数：  
                                    $pageshow = 3;  
                                    //计算总页数:  
                                    $numpages = ceil($pagecount/$pageshow);   //向上取整
                                    if($page <=0) {$page= 1;}  
                                    elseif($page > $numpages){ $page = $numpages; } 
                                    
                                    $pagesize = ($page-1) * $pageshow;  
                                    
                                    $pagesize += 3;

                                    $sql = "SELECT * FROM yx_news ORDER BY id DESC limit $pagesize,$pageshow"; 
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_assoc($result)) {
                                ?>
                                <li>
                                    <div class="post-thumb">
                                        <a href="news-detail.php?id=<?php echo $row['id']?>">
                                            <img width="110" height="80" alt="#" src="admin/server/upload/<?php echo $row['headImg']?>"/>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="news-detail.php?id=<?php echo $row['id']?>">
                                                <?php echo $row['title']?>
                                            </a>
                                        </h3>
                                        <span class="post-date">
                                            <?php echo $row['addTime']?>
                                        </span>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </section>
                        <nav class="pagination-nav" style="text-align: left;">
                            <ul class="pagination">
                                <li>
                                    <a href="?page=<?php echo $page-1?>" aria-label="Previous">
                                        <span aria-hidden="true">&lt;</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;"><?php echo $page?></a></li>
                                <li>
                                    <a href="?page=<?php echo $page+1?>" aria-label="Next">
                                        <span aria-hidden="true">&gt;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="share-platform" style="padding-left: 15px;">
                    <div class="share-platform-l">社交平台：</div>
                    <div class="share-platform-r">
                        <div class="bdsharebuttonbox">
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        </div>
                        <div class="share-platform-text">
                            您可以直接复制短链，分享给朋友，也可直接点击社交平台图标，指定分享。
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
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
    <a class="js-back-to-top back-to-top" href="javascript:void(0);">
        Top
    </a>
    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="vendor/jquery.min.js" type="text/javascript">
    </script>
    <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
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
    <script src="js/layout.min.js" type="text/javascript">
    </script>
    <script src="js/components/wow.min.js" type="text/javascript">
    </script>
    <script src="js/components/swiper.min.js" type="text/javascript">
    </script>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"翊训眼镜","bdMini":"1","bdMiniList":["bdxc","tqf","douban","bdhome","sqq","thx","ibaidu","meilishuo","mogujie","diandian","huaban","duitang","hx","fx","youdao","sdo","qingbiji","people","xinhua","mail","isohu","yaolan","wealink","ty","iguba","fbook","twi","linkedin","h163","evernotecn","copy","print"],"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

    <!-- <script src="share/jquery-1.11.1.min.js"></script> -->
    <script src="share/ZeroClipboard.js"></script>
    <script>
        var g_url = window.location.href;
        $('.share-copy-c input').val(g_url);
        var clip = new ZeroClipboard( document.getElementById("btnCopy"));
    </script>
</body>
</html>