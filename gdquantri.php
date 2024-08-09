<?php
session_start();
if(isset($_SESSION['id']) && ($_SESSION['user']) && ($_SESSION['pass']))
{
	include ("class/clsloginquantri.php");
	$q=new login();
	$q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass']);
}
else
{
	header('location:loginquantri.php');	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header>
        <a class="home" href="index.php"><img src="img/home.jpg" style="height:40px; width:40px;" /></a>
        <div class="header-tt">
            <p>Tel: 0286.555.444 <br> Email: <a href="">ttqt@gmail.com</a></p>
        </div>
        <div class="header-login">
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
                <li><a href="#">Tin tức &nbsp; - Thông  báo</a></li>
                <li><a href="#">Các khóa học</a></li>
                <li><a href="index.php">Trang chủ</a></li>
            </ul>
        </div>

    </nav>
    <!--hết banner-->
        <aside>
            <img src="img/banner school.jpg" alt="" style="height: 700px;">
        </aside>
    <section>
    </section>





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
            <a href="mailto:nguyenhoangmy2701@gmail.com"></a> <br> <b style="color: #FFF;"></b> </p>
        <p id="footer-right">Copyright © 2020 - Phát triển bởi Trung tâm Quản trị Hệ thống</p>

    </div>
    <!---hết chân webstie----->
</body>

</html>