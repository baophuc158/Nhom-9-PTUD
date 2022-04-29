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
                <div class="col-3"></div>
                <div style="border: 1px solid" class="col-6">
                    <form action="../index.php" method="POST">
                        <div class="formnhap">
                            <?php
                            include("../controller/cQLDe.php");
                            $p=new cQLDe();
                                                    
                                $hien = $p->De();
                                if($hien)
                                {?>                              
                            <div class="form-group row ">
                                <select class="form-control" name="khoi" id="k">
                                <?php
                                if(mysqli_num_rows($hien)>0)
                                {
                                    while($cot=mysqli_fetch_assoc($hien))
                                    {
                                ?>
                                    <option value="none">Khối...</option>
                                    <option><?php echo $cot['TenKhoi']; ?></option>
                                <?php
                                }
                            }
                                ?>
                                </select>

                                <select class="form-control" name="monhoc" id="mh">
                                <?php
                                if(mysqli_num_rows($hien)>0)
                                {
                                    while($cot=mysqli_fetch_assoc($hien))
                                    {
                                ?>
                                    <option value="none">Môn...</option>
                                    <option><?php echo $cot['MaMH']; ?></option>
                                    <?php
                                }
                            }
                                ?>
                                </select>

                                <select class="form-control" name="hinhthucthi" id="htt">
                                <?php
                                if(mysqli_num_rows($hien)>0)
                                {
                                    while($cot=mysqli_fetch_assoc($hien))
                                    {
                                ?>
                                    <option value="none">Hình thức thi...</option>
                                    <option><?php echo $cot['LoaiDe']; ?></option>
                                <?php
                                    }
                                }
                                ?>
                                </select>
                            </div>
                            <?php
                                }
                                        ?>
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