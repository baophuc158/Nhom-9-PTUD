<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../javascript/jquery-3.6.0.min.js"></script>
    <title>Quan ly Diem</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        #nav {
            border: 1px solid;
            height: 50px;
            
        }
        
        #back {
            border-right: 1px solid;
            height: 100%;
            float: left;
        }
        
        #user {
            border-left: 1px solid;
            height: 100%;
            float: right;
        }
        
        #mon {
            border: 1px solid;
        }
        
        #lop {
            border: 1px solid;
        }
        
        #tieude {
            margin-top: 10px;
        }
        .nut{
            padding-top: 10px;
            padding-bottom: 20px;
        }
        .formnhap{
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div id="nav" class="row">
            <div class="col-2">
                <img id="back" src="../img/arrowleft.jpg" alt="">
            </div>
            <div id="tieude" class="col-8">
                <center><b>CẤP TÀI KHOẢN, QUYỀN CHO GV, TTCM, HS</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="form-control">
            <div class="form-control">
                <center><b>FORM THÔNG TIN TÀI KHOẢN</b></center>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div style="border: 1px solid" class="col-6">
                    <form action="" method="POST">
                        <div class="formnhap">
                            <div class="form-group row ">
                                <div class="col-4">
                                    <label style="width: 100%; text-align: center;" for="mand">Mã người dùng</label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" type="text" id="mand">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-4">
                                    <label style="width: 100%; text-align: center;" for="mk">Mật khẩu</label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" type="password" id="mk">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-4">
                                    <label style="width: 100%; text-align: center;" for="vaitro">Vai trò</label>
                                </div>
                                <div class="col-8">
                                    <select class="form-control" name="vaitro" id="vt">
                                        <option value="none">Chọn...</option>
                                        <option value="gv">Giáo viên</option>
                                        <option value="ttcm">Tổ trưởng chuyên môn</option>
                                        <option value="hs">Học sinh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="nut" style="float: right;">
                                <input type="submit" name="submit" value="Xác nhận">
                                <input type="reset" name="huybo" value="Hủy bỏ">
                            </div>   
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</body>

</html>