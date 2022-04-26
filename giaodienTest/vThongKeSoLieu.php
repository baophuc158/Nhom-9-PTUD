<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Thong ke so lieu truong hoc</title>
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
        .nut{
            padding-top: 10px;
            padding-bottom: 25px;
        }
        #tieude {
            margin-top: 10px;
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
                <center><b>Quản lý danh sách các trường THCS</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>

        <div class="row">
            <div class="form-control">
            <form action="../index.php" method="post">
                <center><b>Danh Sach</b></center>
                <table border="1" cellspacing="0" style="width: 100%;">
                    <tr style="text-align: center;">
                        <th>STT</th>
                        <th>Tên</th>
                        <th>Số lớp</th>
                        <th>Số lượng học sinh</th>
                        <th>Số lượng giáo viên</th>
                    </tr>
                    <tr style="text-align: center;">
                        <td>1</td>
                        <td>THCS Lê Quý Đôn</td>
                        <td>20</td>
                        <td>775</td>
                        <td>59</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>2</td>
                        <td>THCS Quang Trung</td>
                        <td>9</td>
                        <td>325</td>
                        <td>27</td>
                    </tr>
                    <tr style="text-align: center;">
                        <td>3</td>
                        <td>THCS Lê Lợi</td>
                        <td>20</td>
                        <td>650</td>
                        <td>40</td>
                    </tr>
                </table>
                <div class="nut" style="float: right;">
                                <input type="submit" name="submit" value="Xác nhận">
                                <input type="reset" name="huybo" value="Hủy bỏ">
                            </div>
            </form>  
            </div>
        </div>
    </div>
</body>

</html>