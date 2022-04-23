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
    </style>
</head>

<body>
    <div class="container-fluid">
        <div id="nav" class="row">
            <div class="col-2">
                <img id="back" src="../img/arrowleft.jpg" alt="">
            </div>
            <div id="tieude" class="col-8">
                <center><b>QUẢN LÍ ĐIỂM</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div style="border: 1px solid;">
                <center>MÔN: TOÁN</center>
            </div>
        </div>

        <div class="row">
            <div class="form-control">
                <div class="form-control">
                    <center><a href="vBangDiemGV.php">LỚP 6A1</a></center>
                </div>
                <div class="form-control">
                    <center><a href="vBangDiemGV.php">LỚP 6A2</a></center>
                </div>
                <div class="form-control">
                    <center><a href="vBangDiemGV.php">LỚP 7A3</a></center>
                </div>
                <div class="form-control">
                    <center><a href="vBangDiemGV.php">LỚP 7A8</a></center>
                </div>
                <div class="form-control">
                    <center><a href="vBangDiemGV.php">LỚP 8A1</a></center>
                </div>
                <div class="form-control">
                    <center><a href="vBangDiemGV.php">LỚP 9A7</a></center>
                </div>
            </div>
        </div>

    </div>
</body>

</html>