<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Quản lý điểm</title>
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
        <?php
            include("../controller/cDiem.php");
            $p=new cDiem();
                $magv = 'giaovien';
                $k = $p->monauto($magv);
                while($row=mysqli_fetch_array($k)){
                     $r = $row['MaMH'];
                }                       
                
                $hien =$p->ttmonauto($r);
                $l = $p->dslop($magv);
                if($hien){?>
        <div class="row">
            <div style="border: 1px solid;">
                <center>MÔN: <?php echo $hien;?></center>
            </div>
        </div>
        <?php
                    }
                
                else{
                    echo "<script>alert('Không có dữ liệu')</script>";
                }
                  
        ?>
        <div class="row">
            <div class="form-control">
                <?php
                    if($l){
                        if(mysqli_num_rows($l)>0){
                            while($donglop=mysqli_fetch_assoc($l)){?>
                <div class="form-control">
                    <center><a href="vBangDiemGV.php?Tenlop=<?php echo $donglop['Tenlop']; ?>">LỚP <?php echo $donglop['Tenlop'] ?></a></center>
                </div>
                <?php
                            }
                        }
                        else{
                            echo "<script>alert('Không có dữ liệu')</script>";
                        }
                    }
                    ?>
            </div>
            </div>
        </div>

    </div>
</body>

</html>