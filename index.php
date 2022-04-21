<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
</head>
<style>
    @charset "utf-8";

/* CSS Document */

* {
    margin: 0;
    padding: 0;
}

body {
    font-family: "Arial,Arial,Helvetica,sans-serif";
    font-size: 14px;
    line-height: 20px;
    background: #f6f3e4;
}

.menutren {
    background-color:#88b77b;
    top: 0;
    margin: 0 auto;
    border-bottom: solid 3px #ede9d0;
}

.menutren ul {
    padding: 10px;
    padding-bottom: 5px;
    border-radius: 5px;
    margin: 0 auto;
    width: 1500px;
    overflow: hidden;
}

.menutren ul li {
    list-style: none;
    float: left;
    padding-top: 10px;
    position: relative;
}

.menutren ul li a {
    text-decoration: none;
    padding: 30px 5px;
    cursor: pointer;
    border-top: none;
    color: #444;
    font-size: 15px;
}

.menutren ul li a:hover {
    color: rgb(250, 249, 249);
}

.menutren ul li a.home:hover{
    background-color: #CCC;
}

.menutren ul li.active a:hover {
    background-color: #da4902;
}


/* END Menu ngang trên */


/* đăng kí đăng nhâp*/

h4 {
    padding: 2px;
    float: right;
    margin-right: 50px;
    color: #CCC;
}

h4 a {
    color: rgba(7, 4, 4, 0.199);
    text-decoration: none;
}

h4 a:hover {
    color: #999;
    text-decoration: underline;
}
/* Phần MENU*/

#nav {
    width: 1500px;
    margin: 0 auto;
    height: 800px;
}

#nav-logo {
    width: 1500px;
    height: 100px;
    background: #FFF;
}

.logo {
    width:30%;
    margin-left: 0px;
}

/*menu dưới banner */

#menu {
    height:100px;
    background-color: white;
    float: right;
    width: 80%;
    border-bottom: solid 3px #ede9d0;
}

#menu ul {
    list-style: none;
}

#menu ul li {
    padding:10px;
    margin-top:25px;
    text-align:center;
    float: right;
    position: relative;
}

#menu ul li a {
    display: block;
    color: black;
    text-decoration: none;
    width: 110px;
    font-size: 15px;
}

#menu ul li a:hover {
    background: #FFF;
    color: #666;
}





/*chân website */

#footer {
    font-family: "Comic Sans MS";
    float: left;
    width: 100%;
    height: 160px;
    border-top: 4px solid #ff6a80;
    color: #9e9e9e;
    background-color: #212121;
}

#footer a {
    margin-left: 3px;
}

#footer p {
    text-align: left;
    margin: 0;
    padding-top: 5px;
    font-size: 15px;
    margin-left: 10px;
}

#footer-right {
    color: #ff6a80;
    float: right;
    font-style: italic;
    padding-right: 15px;
}

#footer p a {
    color: #9e9e9e;
    text-decoration: none;
    font-size: 15px;
}

#footer p a:hover {
    color: #ff6a80;
}

.phan2 a {
    color: #f8f3f3;
    font-size: 15px;
    text-decoration: none;
    float: left;
}

.phan2 a:hover {
    color: #ff6a80;
}


/*end trang */


</style>

<body>
    <div class="menutren">
        <ul>
            <li>
                <a class="home" href="index.php"><img src="img/home.jpg" style="heght:50px; width:50px;" /></a>
            </li>
            <li><p>ĐT: 0563422001</p>
            Email:<a href="">duchien23082000@gmail.com</a>
            </li>
            <h4><img src="image/account.png" />&nbsp;<a href="dnhap.html">Đăng nhập</a> &nbsp;</h4>
        </ul>
    </div>

    <!--khung bao trang-->
    <div id="nav">
        <!--Banner-->
        <div id="nav-logo" style="background:#CCC">
            <div class="logo">
                <a href="index.php"><img src="img/logo.jpg" style="width:300px; height:100px; float:left;" />
            </div>
               <!--Tìm Kiếm-->      
               <div id="menu">
        	<ul>
            	<li><a href="index.php">Trang chủ</a></li>
                <li><a href="#">Các khóa học</a></li>
                <li><a href="#">Tin tức - Thông báo</a></li>
            </ul>
                </div>
        </div>  
    </div>
    <!--hết banner-->
        
        

        

    <div id="footer">


        <div class="phan2">
            <a href="ptthanhtoan.html">&nbsp;&nbsp; |</a>
            <a href="" target="_blank">&nbsp; &nbsp; | </a>
            <a href="ptthanhtoan.html">&nbsp; &nbsp;|</a>
            <a href="">&nbsp; &nbsp;|</a>
            <a href="">&nbsp; &nbsp;|</a>
            <a href="#Camnhan">&nbsp; &nbsp;|</a>
            <a href="">&nbsp; &nbsp;|</a>
        </div>
        <br />
        <p>
            <b style="color: #FFF;">ĐỊA CHỈ</b> : 656/74/21 Quang Trung, Phường 11, Quận Gò Vấp, TP.Hồ Chí Minh - Hotline: 0563400311 - 0888294749 <br /> <b style="color: #FFF;">Email:</b> <a href="mailto:duchien23082000@gmail.com">duchien23082000@gmail.com</a>&nbsp;|&nbsp;
            <a href="mailto:nguyenhoangmy2701@gmail.com">nguyenhoangmy2701@gmail.com</a> <br> <b style="color: #FFF;">Giờ mở cửa:</b> 8h - 21h Thứ hai đến thứ Bảy. Chủ nhật đặt hàng qua điện thoại </p>
        <p id="footer-right">Trần Đức Hiền - Nguyễn Hoàng Mỹ</p>

    </div>
    <!---hết chân webstie----->
</body>

</html>