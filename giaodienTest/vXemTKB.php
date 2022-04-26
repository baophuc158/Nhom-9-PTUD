<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>THỜI KHÓA BIỂU</title>
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
        .nutluu{
            float: right;
            text-align: center;
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
                <center><b>THỜI KHÓA BIỂU</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <div style="border: 1px solid;">
                        <center>LỊCH THEO TUẦN</center>
                    </div>
                <form action="../index.php" method="post">
                    <table border="1" cellspacing="0" style="width: 100%;">
                        <tr style="text-align: center;">
                            <th></th>
                            <th>T2</th>
                            <th>T3</th>
                            <th>T4</th>
                            <th>T5</th>
                            <th>T6</th>
                            <th>T7</th>
                            <th>CN</th>
                        </tr>
                        <tr style="text-align: center;">
                            <td rowspan="5">Sáng</td>
                            <td>Chào cờ</td>
                            <td>Toán</td>
                            <td>Anh</td>
                            <td>MT</td>
                            <td>Toán</td>
                            <td></td>
                            <td></td>        
                        </tr>   
                        <tr style="text-align: center;">
                            <td>Văn</td>
                            <td>Toán</td>
                            <td>Anh</td>
                            <td>MT</td>
                            <td>Toán</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Văn</td>
                            <td>Tin</td>
                            <td>CN</td>
                            <td>CN</td>
                            <td>Lý</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>SHCN</td>
                            <td>Hóa</td>
                            <td>Sử</td>
                            <td>Nhạc</td>
                            <td>Lý</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td></td>
                            <td>Hóa</td>
                            <td>Sử</td>
                            <td>Nhạc</td>
                            <td>Anh</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td rowspan="5  ">Chiều</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td></td>
                            <td>Văn</td>
                            <td>Địa</td>
                            <td>TD</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td></td>
                            <td>Văn</td>
                            <td>Địa</td>
                            <td>TD</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td></td>
                            <td></td>
                            <td>Sinh</td>
                            <td>Tin</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td></td>
                            <td></td>
                            <td>Sinh</td>
                            <td>Tin</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>