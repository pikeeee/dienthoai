﻿<?php 
   session_start();
   if(!isset($_SESSION['username'])   or ($_SESSION['phanquyen']==1))
   {
		
		header('location:login.php');
		exit();
   }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="ckeditor/ckeditor.js"></script>
<title> Hùng Lâm mobile Admin </title>
<link rel="stylesheet" type="text/css" href="css/css1.css">



        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        
        <!-- Font -->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/owl.carousel.css">
        <link rel="stylesheet" href="css/style2.css">




</head>
<?php 
	include("../include/connect.php");
?>
<body>
<div id="wapper">
	<div id="header">
		<div id="bg-header">
		</div><!-- End .bg-header -->
	</div><!-- End .header -->
	<div id="content">
		<div id="top-content">
						<p><font color="#be2edd"><b><u><?= $_SESSION['username']?></u></b></font><a href="logout.php"> | Thoát</a></p>
		</div>
		<div id="main-content">
					
				<div class="mainmenu-area" style="background-color:lightblue">
                        <div class="container">
                            <div class="row">
                                <div class=" navbar-collapse collapse">
                                    <ul class=" nav navbar-nav">
                                        <li ><a href="admin.php">Trang chủ</a></li>
                                        <li><a href="?admin=hienthidt"> Doanh thu</a></li>
                                        <li><a href="?admin=hienthisp"> Sản phẩm</a></li>
                                        <li><a href="?admin=hienthidm"> Danh mục</a></li>
                                        <li><a href="?admin=hienthihd"> Hóa đơn</a></li>
                                        <li><a href="?admin=hienthind"> Người dùng</a></li>
                                        <li><a href="?admin=hienthitt"> Tin tức</a></li>
                                        <li><a href="?admin=hienthiht"> Hỗ trợ</a></li>
                                    </ul>
                                </div>
                            </div>
						</div> <!--End .menu -->
				</div>


			<!---------------- Hiển trị content-admin------------------->
			<div id="center-content">
                <?php
                    include("content_admin.php");
                ?>
			</div>
		</div><!-- End .main-content -->
	</div><!-- End .content -->
	
</div><!-- End .wapper -->
</body>

<script src="https://code.jquery.com/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/jquery.sticky.js"></script>
        
        <script src="../js/main.js"></script>
        
        <!-- Slide -->
        <script type="text/javascript" src="../js/bxslider.min.js"></script>
		<script type="text/javascript" src="../js/script.slider.js"></script>


</html>
