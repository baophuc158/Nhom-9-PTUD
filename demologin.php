<?php
include("class/clslogin.php");
$p=new logincsdl();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đăng nhập admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css">



</head>

<body>
    <header>
        <a class="home" href="index.php"><img src="img/home.jpg" style="height:40px; width:40px;" /></a>
        <div class="header-tt">
            <p>Tel: 0286.555.444 <br> Email: <a href="">ttqt@gmail.com</a></p>
        </div>
        <div class="header-login">
            <p>Bạn chưa đăng nhập.
                <a href=""></a>
            </p>
        </div>
    </header>
    <!--khung bao trang-->
    <nav>
        <!--Banner-->

        <div class="logo">
            <a href="index.php"><img src="img/logo.jpg" style="width:200px; height:80px; float:left;" />
        </div>
        <!--Tìm Kiếm-->
        <div class="menu">
            <ul>
                <li><a href="#">Tin tức &nbsp; - Thông báo</a></li>
                <li><a href="#">Các khóa học</a></li>
                <li><a href="index.php">Trang chủ</a></li>
            </ul>
        </div>

    </nav>
    <!--hết banner-->
    <div class="content">
        <div class="login-box">
            <h2>Administrator Login</h2>
            <form class="myfrom" method="POST" role="form">
                <div class="user-box">
                    <label for="username"></label>
                    <input type="text" name="username" id="username" placeholder="Tên tài khoản">
                </div>
                <div class="user-box">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Mật khẩu">
                </div>
                <p>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <input type="submit" name="login" id="login" value="Đăng nhập" style="width: 420px;
                        height: 50px;
                        background: #88b77b;
                        border-radius: 15px;" />
                    </a>


                </p>
                <div align="center">
  <?php
  		
    switch($_POST['login'])
	{
		case'Đăng nhập':
		{
			$user=$_REQUEST['username'];	
			$pass=$_REQUEST['password'];	
			if($user!='' && $pass!='')
			{
				if($p->mylogin($user,$pass)==1)
				{
					header('location:gdadmin.php');
				}
				else
				{
					echo 'Đăng nhập không thành công';	
				}
			}
			else
			{
				echo '<br>';
				echo 'Vui lòng nhập đầy đủ thông tin';		
			}
			break;
		}	
	}
  ?>
  </div>

        </form>
    </div>
</div>

    <div id="footer">


        <div class="phan2">
            <a href="#">&nbsp;&nbsp; Website nhà trường |</a>
            <a href="#" target="_blank">&nbsp; &nbsp; Website trung tâm | </a>
            <a href="#">&nbsp; &nbsp;Cổng thông tin học sinh|</a>
            <a href="">&nbsp; &nbsp;Các khóa học|</a>
        </div>
        <br />
        <p>
            <b style="color: #FFF;">ĐỊA CHỈ</b> : 2 Nguyễn Gia Bảo, Phường 4, Quận Gò Vấp, TP.HCM<br /> <b style="color: #FFF;">Email:</b> <a href="mailto:duchien23082000@gmail.com">ttqt@gmail.com&nbsp;|&nbsp;
                <a href="mailto:nguyenhoangmy2701@gmail.com"></a> <br> <b style="color: #FFF;"></b>
        </p>
        <p id="footer-right">Copyright © 2020 - Phát triển bởi Trung tâm Quản trị Hệ thống</p>

    </div>
</body>

</html>