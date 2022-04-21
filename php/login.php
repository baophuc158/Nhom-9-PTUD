<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="javascript/jquery-3.6.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/dangnhap.js"></script>

    <body>
        <div class="main">

            <form action="" method="POST" class="form" id="form-1">
                <fieldset style="border:0;">
                    <legend>
                    </legend>
                    <h4 class="heading">Đăng nhập</h4>


                        <div class="spacer"></div>

                        <div class="form-group">
                            <label for="Name" class="form-label">Tên đăng nhập</label>
                            <input id="Name" name="Name" type="text" placeholder="VD: hien2308" class="form-control" onblur="kiemtraten()">
                            <span class="form-message" id="tbName"></span>
                        </div>


                        <div class="form-group">
                            <label for="pass" class="form-label">Mật khẩu</label>
                            <input id="pass" name="pass" type="password" placeholder="Nhập mật khẩu" class="form-control" onblur="kiemtrapass()">
                            <span class="form-message" id="tbpass"></span>
                        </div>
                        <div class="form-group">
                            <label for="txtxnmk" class="form-label">Nhập lại mật khẩu</label>
                            <input id="txtxnmk" name="txtxnmk" placeholder="Nhập lại mật khẩu" type="password" class="form-control" onblur="kiemtraxnmk();">
                            <span class="form-message" id="xnmk"></span>
                        </div>


                        <button onclick="dn()" class="form-submit">Đăng nhập</button>
                        <div style="margin-top: 10px; font-size:12px; text-align: center ;display: flex;">
                            <h4>Click <a href="dki.html" title="Đăng Kí">Đăng kí </a>nếu bạn chưa có tài khoản</h4>
                        </div>
                </fieldset>
            </form>

            <script src="javascript/dangki.js"></script>



    </body>

</html>