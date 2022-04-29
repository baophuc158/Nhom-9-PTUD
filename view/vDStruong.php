<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Danh sách các trường</title>
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
                    <thead>
                        <tr style="text-align: center;">
                            <th>Tên trường</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đăng kí</th>
                            <th>Mã trường</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        include("../controller/cTruong.php");
                        $p=new cTruong();
                                                   
                            $hien = $p->truong();
                            if($hien){                          
                                if(mysqli_num_rows($hien)>0){
                                    while($cot=mysqli_fetch_assoc($hien)){?>
                                    <tr>
                                        <td><center><a href="vTTtruong.php?MaTruong=<?php echo $cot['MaTruong']; ?>"><?php echo $cot['TenTruong']; ?></a></center></td>
                                        <td><center><a href="vTTtruong.php?MaTruong=<?php echo $cot['MaTruong']; ?>"><?php echo $cot['DiaChi']; ?></a></center></td>
                                        <td><center><a href="vTTtruong.php?MaTruong=<?php echo $cot['MaTruong']; ?>"><?php echo $cot['NgayDK']; ?></a></center></td>
                                        <td><center><a href="vTTtruong.php?MaTruong=<?php echo $cot['MaTruong']; ?>"><?php echo $cot['MaTruong']; ?></a></center></td>        
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
            </div>
        </div>
    </div>
</body>

</html>