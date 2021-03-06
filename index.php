<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>商品列表</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css?v=1" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Crude Oil  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---->
    <script src="js/bootstrap.min.js"></script>
    <!---->
    <!-- 导入页码js -->
    <!-- <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script> -->
        <script src="./pages.js?v=6"></script>
    <!--JS for animate-->
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/wow.min.js"></script>
            <script>
                new WOW().init();
            </script>
        <!--//end-animate-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>

    <style type="text/css">
        h1{
            font-size:48px;
            color:#930;
            text-align:center;
        }
        .user{
            color:#B0C4DE;
            text-align:right;

        }
    </style>
</head>
<body>
    <div class="banner">
    </div>
<!--header-->
    <div class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand logo wow fadeInLeft animated animated" data-wow-delay="0.4s">
								<h1><a href="login.html"><span>Ananke's</span> Blog</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse wow fadeInRight animated animated" data-wow-delay="0.4s" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav cl-effect-11">
                          <li class="active"><a href="login.html" data-hover="Home">Home </a></li>
							<li><a href="index.php" data-hover="About">Goods</a></li>
							<li><a href="services.html" data-hover="Services">Services(未上线)</a></li>
							 <li><a data-hover="Gallery" href="gallery.html">Gallery(未上线)</a></li>
							  <li><a  href="codes.html" data-hover="Codes">Codes(未上线)</a></li>
							 <li><a data-hover="Contact" href="contact.html">Contact(未上线)</a></li>

						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--header-->


<div class="user">
<?php
if ($_SESSION['logflag']) {
    print '<span>' . $_SESSION['name'] . '</span>';
    ?>
            <span>&nbsp|&nbsp</span>
            <a href=".\exitlog.php">退出登录</a>
            <?php
} else {
    ?>
            <a href=".\login.html">登录</a>
            <?php
}
?>
        <span>&nbsp|&nbsp</span>
        <a href=".\register.html">注册</a>
        </div>
        <hr/>
        <h1 align="center" >商品列表</h1>
        <br/>
        <hr border="5" color="#930"/>
        <br/>
        <br/>
        <br/>
        <div>
        <?php
if ($_SESSION['logflag']) {
    ?>
 <div id="tablelist">
            <!-- ajax会填充表格代码 -->
</div>

<div id="pagecount">
            <!-- ajax会填充表格代码 -->
</div>
            <?php
} else {
    print '<h2 align="center">' . '客官，想浏览数据请先登录哦↑' . '</h2>';
}
?>
        </div>
    </body>
</html>