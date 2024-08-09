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
        
        #tieude {
            margin-top: 10px;
        }

        #thongbao{
            text-align: center;
            padding: 50px;
        }

        .nutxn{
            padding-top: 20px;
            text-align: center;
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
                <center><b>LÀM BÀI KIỂM TRA</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="form-control">
            <form action="../index.php" method="post">
                <div class="row">
                    <div class="col-4"></div>
                    <div id="thongbao" class="col-4">
                        <div class="form-control">
                            <p style="padding-top: 10px">Điểm của bạn là: 8.5/10</p>
                            <p>Số câu đúng là 13/15 câu</p>
                        </div>
                        <div class="nutxn">
                            <button type="submit" class="btn btn-success">Xác nhận</button>
                        </div>
                    </div>
                    <div class="col-4"></div>
            </form>
        </div>
    </div>
</body>

</html>