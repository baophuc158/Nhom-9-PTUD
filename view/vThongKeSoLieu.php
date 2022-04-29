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
        <div class="form-control">
            <form action="../index.php" method="post">
            <center><b>Danh Sach</b></center>
            <?php
                include("../controller/cTruong.php");
                $p=new cTruong();
                                           
                    $hien = $p->truong();
                    if($hien){                          
                        if(mysqli_num_rows($hien)>0){
                            while($cot=mysqli_fetch_assoc($hien)){?>
            <div class="form-control">
                <center style="text-tranform: uppercase">TRƯỜNG <?php echo $cot['TenTruong']; ?></center> 
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div id="tt" style="border: 1px solid" class="col-6">
                    <p style="border-bottom: 1px solid;">Mã trường: <?php echo $cot['MaTruong']; ?></p>
                    <p style="border-bottom: 1px solid;">Địa chỉ: <?php echo $cot['DiaChi']; ?></p>
                    <p style="border-bottom: 1px solid;">Ngày đăng kí sử dụng hệ thống: <?php echo $cot['NgayDK']; ?></p>
                    <p style="border-bottom: 1px solid;">Tổng số lớp: <?php echo $cot['Tongsolop']; ?> lớp</p>
                    <p style="border-bottom: 1px solid;">Mã người quản lí trường: <?php echo $cot['MaQTT']; ?></p>
                </div>
                <div class="col-3"></div>
            </div>
            <?php
                            }
                        }
                        else{
                            echo "<script>alert('Không có dữ liệu')</script>";
                        }
                    }
                
            ?>
            <div class="nut" style="float: right;">
                                <input type="submit" name="submit" value="Xác nhận">
                                <input type="reset" name="huybo" value="Hủy bỏ">
                            </div>
            </form>  
        </div>
    </div>
</body>

</html>