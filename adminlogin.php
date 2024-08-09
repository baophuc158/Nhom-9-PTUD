
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>Login Administrator  </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="css/index.css">

    <style>
      body{
        display: flex;
        height: calc(100%);
        width: calc(100%);
        justify-content: center;
        align-items: center;
      }
      .login-form {
  display: block;
  position: fixed;
  border:5px solid grey;
  border-radius: 20px;
  padding: 30px;
  width: 500px;
  background-color: white;
  left:550px;
  top:200px;
 } 
 .erlert{
  display:block;
  border-radius:5px;
  background-color:rgba(230, 103, 42, 0.37);
  padding: 5px;
}
    </style>
  </head>
<body>
  
  <div class="content">
        <div class="login-box">
            <h2>Administrator Login</h2>
            <form class="myfrom" method="POST" role="form">
                <div class="user-box">
                    <label for="user"></label>
                    <input type="text" id="user" name="user" placeholder="Enter User" autocomplete="off">
                </div>
                <div class="user-box">
                    <label for="pwd"></label>
                    <input type="password" id="pwd" name="pwd" placeholder="Enter password">
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
                </form>
                  <?php
                    include("connect.php");
                  ?>
          </div>
  </div>

   </div>          
</div>


   
  
</html>
