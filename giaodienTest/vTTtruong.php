<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Thông tin trường</title>
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
        
        #tieude {
            margin-top: 10px;
        }
        #tt{
            padding-top: 30px;
            padding-bottom: 5px;
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
                <center><b>THÔNG TIN TRƯỜNG HỌC</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="form-control">
            <div class="form-control">
                <center><b>TRƯỜNG THCS ABC</b></center>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div id="tt" style="border: 1px solid" class="col-6">
                    <p style="border-bottom: 1px solid;">Mã trường: ABC01</p>
                    <p style="border-bottom: 1px solid;">Địa chỉ: Đường ABC, xã ABC, huyện ABC, tỉnh ABC</p>
                    <p style="border-bottom: 1px solid;">Ngày đăng kí sử dụng hệ thống: 11/11/2021</p>
                    <p style="border-bottom: 1px solid;">Tổng số lớp: 40 lớp</p>
                    <p style="border-bottom: 1px solid;">Tổng số học sinh: khoảng 900hs</p>
                    <p style="border-bottom: 1px solid;">Mã người quản lí trường: QLABC01</p>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</body>

</html>