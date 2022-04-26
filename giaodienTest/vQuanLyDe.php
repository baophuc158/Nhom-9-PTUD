<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../javascript/jquery-3.6.0.min.js"></script>
    <title>Quan ly De</title>
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
                <center><b>DANH SÁCH ĐỀ</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="form-control">
            <div class="form-control">
                <center><b>QUẢN LÝ ĐỀ</b></center>
            </div>
            <div class="row">
                <div class="col-5"></div>
                <div style="border: 1px solid" class="col-3">
                    <form action="../index.php" method="POST">
                        <div class="formnhap">
                            <div class="form-group row ">
                                <div class="col-8">
                                    <select class="form-control" name="khoi" id="k">
                                        <option value="none">Khối...</option>
                                        <option value="k6">Khối 6</option>
                                        <option value="k7">Khối 7</option>
                                        <option value="k8">Khối 8</option>
                                        <option value="k9">Khối 9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-8">
                                <select class="form-control" name="monhoc" id="mh">
                                        <option value="none">Môn...</option>
                                        <option value="toan">Toán học</option>
                                        <option value="van">Ngữ văn</option>
                                        <option value="anh">Anh văn</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <div class="col-8">
                                    <select class="form-control" name="hinhthucthi" id="htt">
                                        <option value="none">Hình thức thi...</option>
                                        <option value="gk">Giữ kì</option>
                                        <option value="ck">Cuối kì</option>
                                    </select>
                                </div>
                            </div>
                            <div class="nut" style="float: right;">
                                <input type="submit" name="submit" value="Xác nhận">
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