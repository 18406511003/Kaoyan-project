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
        <script type="text/javascript">
            function showSchool(){
                var schoolName = [
                ["北京大学","清华大学","中国人民大学"],
                ["山西大学","太原理工大学","山西农业大学"],
                ]
                var province  = document.getElementById("pprovince");
                var school  = document.getElementById("sschool");
                var proSchool  = schoolName[province.selectedIndex-1];
                school.length = 1;
                for(var i =0;i<proSchool.length;i++){
                    school[i+1] = new Option(proSchool[i],proSchool[i]);
                }
            }
            function startNone(){
                document.getElementById("xinxi").style.display="none"
            }
            
        </script>

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
                                <a  href="logout.php">
                                 注销
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
                        </div>';
                        ?>
                        <<?php 
                        if($_GET['action'] == "logout"){  
                       
                        echo '注销登录成功！点击此处 <a href="login.html">登录</a>';  
     
                            }  

                         ?>
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
  
      
 <div class="search"  style="text-align: center">

<br><br></br></br>
  <form  method="get" accept-charset="utf-8">
   <a style="color: #9D9D9D"> 院校信息：</a>    &nbsp; &nbsp; &nbsp; <select name="pprovince" id="pprovince" onchange="showSchool()" style="width:318px;" >
      <option value="空">省份</option>
        <option value="北京">北京</option>
        <option value="山西" >山西</option>
        <option value="天津">天津</option>
    </select>   &nbsp; &nbsp; &nbsp; 

        <select id = "sschool" style="width:318px;"  name="sschool">
            <option value="空">学校</option>
       <!--  <option value="北京大学">北京大学</option>
        <option value="清华大学" <?php echo $rs['type']=='中'?'selected':'' ?>>清华大学</option>
        <option value="复旦大学" <?php echo $rs['type']=='下'?'selected':'' ?>>复旦大学</option> -->
        </select>   &nbsp; &nbsp; &nbsp; 

        <select name="ccollege" style="width:318px;" >
         <option value="空" > 院系</option>
        <option value="光华管理学院" >光华管理学院</option>
        <option value="" >下</option>
        </select>   &nbsp; &nbsp; &nbsp; 
        <button type="submit" style="display: inline-block;
  border-radius: 4px;
  background-color: #7B7B7B;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 80px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;" id= 'submit1' name= 'submit1' value="提交">搜索</button>
  </form>  
  </div>
        <br></br><br></br>
        <?php
            const HOST = 'localhost';
            const USER = 'root';
            const PASS = '305290744';
            const DBNAME = 'project1';
            $wherelist = array();
            if($_GET['sschool']){
                $name = $_GET['sschool'];
         
            if(!empty($_GET['sschool'])){
                $wherelist[] = "name = '{$_GET['sschool']}'";
            }
            if(!empty($_GET['ccollege'])){
                $wherelist[] = "college = '{$_GET['ccollege']}'";
            }
            // if(!empty($_GET['mmajor'])){
            //     $wherelist[] = "major = '{$_GET['mmajor']}'";
            // }
      
            if(count($wherelist)>0){
                $where=' where '.implode("and ", $wherelist);
            } else{
                $where="1";
            }
            $con = mysql_connect(HOST,USER,PASS);
            mysql_select_db(DBNAME);
            mysql_query('set names utf8');
            $sql1 = "select schoolinfo,majorinfo,score from university".$where;
            $result = mysql_query($sql1);
            $school = mysql_fetch_assoc($result);
            
            if(!empty($school)) { 
                $Schoolinfo = $school['schoolinfo'];
            $Majorinfo =  $school['majorinfo'];
            $Score = $school['score'];
            echo "<div style='text-align:center '> <h1>{$name}</h1></div> <br></br> <div style='position:relative;left:260px;  width:1350px' > <h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{$Schoolinfo}<br></br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{$Majorinfo}<br></br><h4>分数线：{$Score}</h4></h3> </div><br></br> ";
            } else{
               echo "暂无查询数据！";
            }
            $sql2 = "select teacher,email,teacherinfo from university".$where;
            $result2 = mysql_query($sql2);
            // $rresult = mysql_fetch_assoc($result2);
            while($row = mysql_fetch_array($result2)){
            // $teacher_name = $rresult['teacher'];
            // $teacher_email = $rresult['email'];
             //排版代码
            echo "<div style='position:relative;left:260px;  width:1350px;font-size:20px'  >" . $row['teacher'] . "&nbsp&nbsp&nbsp&nbsp" . $row['email'] . "&nbsp&nbsp&nbsp&nbsp" . $row['teacherinfo'] .  "</div><br>";;
          
            
            // echo "<h4>{$teacher_name}<br></br>{$teacher_email}</h4>";
           }
                }

            ?>  
            <br><br><br>
        <!-- <div class = "startt" id="startt" style="display: block;">
            <h1>这是关于院校资讯的一个展示</h1>
            <h2>用户可以通过选择地域和院校来得到相关信息</h2>
            <h2>其中包括学校的介绍、专业的介绍、负责专业的联系方式、历年分数线以及个别老师简介</h2>
        </div> -->

        <!-- volunter end -->
        <!-- footer area start -->
      <footer  style="position:absolute;width:100%;bottom:0; height:100px;background: #3C3C3C; text-align: center">
           
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
