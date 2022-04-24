<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../javascript/jquery-3.6.0.min.js"></script>
    <title>Danh sách bài kiểm tra</title>
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
                <center><b>LÀM BÀI KIỂM TRA</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="form-control">
            <div class="form-control">
                <center><b>DANH SÁCH BÀI KIỂM TRA ĐANG MỞ</b></center>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <table border="1" style="text-align:center; width: 100%;">
                        <tr>
                            <th>MÔN</th>
                            <th>THỜI GIAN</th>
                            <th>MÃ BÀI KT</th>
                            <th>THỜI GIAN ĐÓNG</th>
                        </tr>
                        <tr>
                            <td><a href="vLambaikt.php">TOÁN</a></td>
                            <td><a href="vLambaikt.php">15 PHÚT</a></td>
                            <td><a href="vLambaikt.php">15PTOAN1</a></td>
                            <td><a href="vLambaikt.php">6 NGÀY 7 PHÚT</a></td>
                        </tr>
                        <tr>
                            <td><a href="vLambaikt.php">VĂN</a></td>
                            <td><a href="vLambaikt.php">30 PHÚT</a></td>
                            <td><a href="vLambaikt.php">15PVANKT1</a></td>
                            <td><a href="vLambaikt.php">9 NGÀY 8 PHÚT</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</body>

</html>