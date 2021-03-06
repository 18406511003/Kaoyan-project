<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/et-line-icon.css">
        <link rel="stylesheet" href="assets/css/bicon.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
		<header class="header-area absolute-bar">
            
            <div class="header-top">
                <div class="container">
                    <div class="bar-border ptb-15">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="header-info">
                                    <ul>
                               <li>本·考研网欢迎您！</li>
                                    </ul>
                                </div>
                            </div>
                            <?php 
                        session_start();
                        if(!empty($_SESSION['logined']))//你已经赋值的ID
                            echo '<div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-social f-right">
                                <a href = "event-details.php">
                                    <i class="fa" >进入个人中心</i>
                                </a>
                                <a href = "logout.php">
                                    <i class="fa" >注销</i>
                                </a>
                                
                            </div>
                        </div>';
                        else
                            echo ' <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="header-social f-right">
                                <a href="register.php">
                                    <i class="fa" >注册</i>
                                </a>
                                <a href="land.php">
                                    <i class="fa" >登陆</i>
                                </a>
                                
                            </div>
                        </div>';?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <img src="assets/img/logo/1.png" alt="" />
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9 hidden-xs">
                            <div class="search-menu f-right">
                                <div class="search-bar-button search-2">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                    <div class="widget_searchform_content">
                                        <form action="#">
                                            <input type="text" placeholder="Search" name="s" value="">
                                            <button class="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu menu-style-2 f-right">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">主页</a></li>
                                        <li><a href="about-us.php">院校资讯</a></li>
                                        <li><a href="event.php">真题回顾</a></li>
                                        <li><a href="xinwen.php">实时热点</a></li>
                                        <li><a href="event-details.php">用户信息</a></li>
                                        <li><a href="contact.php">网站说明 </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
		</header>
		<!-- header end -->
		<!-- breadcrumb start -->
		<div class="breadcrumb-area pt-240 pb-125" style="background-image:url(assets/img/slider/4.jpg);" data-overlay="5">
		    <div class="container">
		        <div class="breadcrumb-text text-center z-index">
		            <h2>院校资讯</h2>
		        </div>

		    </div>
        
		</div>
  
      
          <div class="volunter-area pt-120 pb-90" id = 'xinxi' style="display: block" >
            <div class="container" style="width:1200px;height:800px">
                <div class="section-title text-center mb-75">
                    <h2>院校信息</h2><br><br><a style="text-align: center  ;font-size:20px"  href="search.php">进入院校信息搜索页面</a> <br>
                </div>

                <div  class="row">
                    <div class="col-md-6" style="width:380px;height:200px ">
                        <div style="border:10"; >
                            <img style="width:380px;height:200px" src="assets/img/banner/beishi.jpg" border="10"  alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">北京师范大学</a></h3>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" style="width:380px;height:200px">
                        <div >
                            <img style="width:380px;height:200px" src="assets/img/banner/shiyou.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">中国石油大学</a></h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="width:380px;height:200px">
                        <div >
                            <img style="width:380px;height:200px" src="assets/img/banner/beiwai.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">北京外国语大学</a></h3>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6" style="width:380px;height:200px" >
                        <div  >
                            <img style="width:380px;height:200px" src="assets/img/banner/shangda.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">上海大学</a></h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="width:380px;height:200px">
                        <div >
                            <img style="width:380px;height:200px" src="assets/img/banner/fudan.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">复旦大学</a></h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="width:380px;height:200px">
                        <div >
                            <img style="width:380px;height:200px" src="assets/img/banner/zhongshan.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">中山大学</a></h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="width:380px;height:200px">
                        <div >
                            <img style="width:380px;height:200px" src="assets/img/slider/2.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">清华大学</a></h3>
                                
                            </div>
                        </div>
                    </div><div class="col-md-6" style="width:380px;height:200px">
                        <div >
                            <img style="width:380px;height:200px" src="assets/img/slider/7.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">上海交通大学</a></h3>
                                
                            </div>
                        </div>
                    </div><div class="col-md-6" style="width:380px;height:200px">
                        <div >
                            <img style="width:380px;height:200px" src="assets/img/slider/8.jpg" alt="">
                            <div class="event-info">
                                <h3><a href="search.php?pprovince=%E5%8C%97%E4%BA%AC&sschool=%E5%8C%97%E4%BA%AC%E5%A4%A7%E5%AD%A6&ccollege=%E5%85%89%E5%8D%8E%E7%AE%A1%E7%90%86%E5%AD%A6%E9%99%A2&submit1=%E6%8F%90%E4%BA%A4">武汉大学</a></h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <br><br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="page-pagintion mt-20">
                            <ul>
                                <li class = "active">
                                    <a href="#">01</a>
                                </li>
                                <li >
                                    <a href="#">02</a>
                                </li>
                                <li>
                                    <a href="#">03</a>
                                </li>
                                <li>
                                    <a href="#">04</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><BR>
        <!-- volunter end -->
        <!-- footer area start -->
              <footer  style="position:absolute;width:100%;height:100px ;background: #3C3C3C; text-align: center">
           
                      <br>  <br>  <a style="color : white; font-size: 16px" >  &copy; 2017   &nbsp &nbsp  毕业设计</a>
              
        </footer>
        <!-- footer area end -->
        
        
        <!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
