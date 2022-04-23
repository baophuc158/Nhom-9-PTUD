<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
        a{
            color: black;
        }
        a:hover{
            text-decoration: none;
            color: black ;
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
                <center><b>XEM DANH SÁCH TRƯỜNG HỌC</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <table border="1" cellspacing="0" style="width: 100%;">
                    <tr style="text-align: center;">
                        <th>Tên trường</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đăng kí</th>
                        <th>Mã trường</th>
                    </tr>
                    <tr style="text-align: center;">
                        <td><a href="vTTtruong.php">THCS ABC</a></td>
                        <td><a href="vTTtruong.php">Đường ABC, xã ABC, huyện ABC, tỉnh ABC</a></td>
                        <td><a href="vTTtruong.php">11/11/2021</a></td>
                        <td><a href="vTTtruong.php">ABC01</a></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td><a href="vTTtruong.php">THCS XYZ</a></td>
                        <td><a href="vTTtruong.php">Đường XYZ, phường XYZ, quận XYZ, Thành phố XYZ</a></td>
                        <td><a href="vTTtruong.php">24/12/2021</a></td>
                        <td><a href="vTTtruong.php">XYZ02</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>