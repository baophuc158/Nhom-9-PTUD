<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Bảng điểm giáo viên</title>
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
                <center><b>QUẢN LÍ ĐIỂM</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <?php
            include("../controller/cDiem.php");
            $p=new cDiem();
            $magv = 'giaovien';
            $k = $p->monauto($magv);
            while($row=mysqli_fetch_array($k))
            {
                 $r = $row['MaMH'];
            }                       
            $kq =$p->ttmonauto($r);                                   
            $hien =$p->gettths($_GET['Tenlop']);
            if($hien)
            {
                if(mysqli_num_rows($hien)>0)
                {
        ?>
        <div class="row">
            <div style="border: 1px solid;">
                <center>MÔN: <?php echo $kq; ?></center>
            </div>
        </div>

        <div class="row">
            <div class="form-control">
                <form action="index.php" method="post">
                    <center><b>Bảng điểm</b></center>
                    <table border="1" cellspacing="0" style="width: 100%;">
                        <thead>    
                            <tr style="text-align: center;">
                                <th>Mã HS</th>
                                <th>Họ và tên</th>
                                <th>KT Miệng</th>
                                <th colspan="2">KT 15P</th>
                                <th colspan="2">KT 1 tiết</th>
                                <th>Thi GK1</th>
                                <th>Thi CK1</th>
                                <th>Thi GK2</th>
                                <th>Thi CK2</th>
                                <th>TB Môn</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $CK2= 'CK2';
                            $GK2= 'GK2';
                            $GK1= 'GK1';
                            $CK1= 'CK1';
                            $mottiet1= '1T1';
                            $mottiet2= '1T2';
                            $mieng= 'mieng';
                            $muoilamp1= '15P1'; 
                            $muoilamp2= '15P2'; 
                            while($cot=mysqli_fetch_assoc($hien))
                            {
                        ?>
                            <tr style="text-align: center;">
                                <td><?php echo $cot['MaHS']; ?></td>
                                <td><?php echo $cot['TenHS']; ?></td>
                                <?php
                                    $diem15p1=$p->getdiemtn($cot['MaHS'], $muoilamp1);
                                    $diem15p2=$p->getdiemtn($cot['MaHS'], $muoilamp2);
                                    $diem1T1=$p->getdiemtn($cot['MaHS'], $mottiet1);
                                    $diem1T2=$p->getdiemtn($cot['MaHS'], $mottiet2);
                                    $diemGK1=$p->getdiemtn($cot['MaHS'], $GK1);
                                    $diemGK2=$p->getdiemtn($cot['MaHS'], $GK2);
                                    $diemCK1=$p->getdiemtn($cot['MaHS'], $CK1);
                                    $diemCK2=$p->getdiemtn($cot['MaHS'], $CK2);
                                    $diemM=$p->getdiemtn($cot['MaHS'], $mieng);
                                    if($diemM)
                                    {
                                        if(mysqli_num_rows($diemM)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diemM))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php        
                                            } 
                                        }
                                    }
                                ?>
                                <?php
                                    if($diem15p1)
                                    {
                                        if(mysqli_num_rows($diem15p1)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diem15p1))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                                <?php
                                    if($diem15p2)
                                    {
                                        if(mysqli_num_rows($diem15p2)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diem15p2))
                                            {?> 
                                                <td><?php echo $row['DiemTN']?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                                <?php
                                    if($diem1T1)
                                    {
                                        if(mysqli_num_rows($diem1T1)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diem1T1))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                                <?php
                                    if($diem1T2)
                                    {
                                        if(mysqli_num_rows($diem1T2)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diem1T2))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                                <?php
                                    if($diemGK1)
                                    {
                                        if(mysqli_num_rows($diemGK1)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diemGK1))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                                <?php
                                    if($diemCK1)
                                    {
                                        if(mysqli_num_rows($diemCK1)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diemCK1))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                                <?php
                                    if($diemGK2)
                                    {
                                        if(mysqli_num_rows($diemGK2)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diemGK2))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                                <?php
                                    if($diemCK2)
                                    {
                                        if(mysqli_num_rows($diemCK2)>0)
                                        {
                                            while($row=mysqli_fetch_assoc($diemCK2))
                                            {?> 
                                                <td><?php echo $row['DiemTN'] ?></td>
                                <?php            
                                            }
                                        }
                                    }
                                ?>
                            </tr>
                        <?php
                            }
                }
                        else{
                            echo "<script>alert('Không có dữ liệu')</script>";
                        }
                }
                    ?>
                        </tbody>
                    </table>
                    <div class="nutluu">
                        <button type="submit" class="btn btn-success">Lưu</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>