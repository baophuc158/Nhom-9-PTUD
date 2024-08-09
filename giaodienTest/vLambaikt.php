<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../javascript/jquery-3.6.0.min.js"></script>
    <title>Làm bài kiểm tra</title>
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

        #khungcauhoi{
            height: 130px;
            display: inline-block;
        }
        
        #cauhoi{
            height: 100%;
            float: left;
            width: 70%;
        }
        
        #dapan{
            height: 100%;
            padding: 20px;
            float: left;
            width: 30%;
            border-left: 1px solid;
        }

        #luudapan{
            width: 100%;
            height: 70%;
            border-bottom: 1px solid;
            padding-top: 20px;
        }

        #odapan{
            margin: 0;
            padding: 0;
            display: inline-block;
            width: 50px;
            height: 50px;
            text-align: center;
        }

        a{
            color: black;
        }
        
        a:hover{
            text-decoration: none;
            color: black ;
        }

        #tgian{
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
                <center><b>LÀM BÀI KIỂM TRA</b></center>
            </div>
            <div class="col-2">
                <img id="user" src="../img/user.jpg" alt="">
            </div>
        </div>
        <div class="form-control">
            <form action="vTBbaikt.php" method="post">
                <div class="row">
                    <div class="col-9">
                        <div id="mabaikt">
                            <p><b>15PTOAN1</b></p>
                        </div>
                        <div id="khungcauhoi" class="form-control">
                            <div id="cauhoi">
                                <p>Câu 1:</p>
                                <p>Tam giác cân có mấy cạnh bằng nhau ?</p>
                            </div>
                            <div id="dapan">
                                <div>
                                    <input type="radio" name="da" id="dapanA">
                                    <label style="padding-right: 40px;" for="dapanA">A. 1</label>
                                    <input type="radio" name="da" id="dapanB">
                                    <label for="dapanB">B. 2</label>
                                </div>
                                <div>
                                    <input type="radio" name="da" id="dapanC">
                                    <label style="padding-right: 40px;" for="dapanC">C. 3</label>
                                    <input type="radio" name="da" id="dapanD">
                                    <label for="dapanD">D. 4</label>
                                </div>
                            </div>
                        </div>
                        <div id="khungcauhoi" class="form-control">
                            <div id="cauhoi">
                                <p>Câu 2:</p>
                                <p>3 - x = 2 <br>x = ?</p>
                            </div>
                            <div id="dapan">
                                <div>
                                    <input type="radio" name="da2" id="dapanA">
                                    <label style="padding-right: 40px;" for="dapanA">A. 1</label>
                                    <input type="radio" name="da2" id="dapanB">
                                    <label for="dapanB">B. 2</label>
                                </div>
                                <div>
                                    <input type="radio" name="da2" id="dapanC">
                                    <label style="padding-right: 40px;" for="dapanC">C. 3</label>
                                    <input type="radio" name="da2" id="dapanD">
                                    <label for="dapanD">D. 4</label>
                                </div>
                            </div>
                        </div>
                        <div id="khungcauhoi" class="form-control">
                            <div id="cauhoi">
                                <p>Câu 3:</p>
                                <p>8 + 2x - 6 = 10 <br>x = ?</p>
                            </div>
                            <div id="dapan">
                                <div>
                                    <input type="radio" name="da3" id="dapanA">
                                    <label style="padding-right: 40px;" for="dapanA">A. 1</label>
                                    <input type="radio" name="da3" id="dapanB">
                                    <label for="dapanB">B. 2</label>
                                </div>
                                <div>
                                    <input type="radio" name="da3" id="dapanC">
                                    <label style="padding-right: 40px;" for="dapanC">C. 3</label>
                                    <input type="radio" name="da3" id="dapanD">
                                    <label for="dapanD">D. 4</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" style="border-left: 1px solid;">
                        <div id="luudapan">
                            <div id="odapan" class="form-control" >
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">1</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control" >
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">2</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">3</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">4</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">5</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <br><br>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">6</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">7</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">8</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">9</h6>
                                    <h6></h6>
                                </a>
                            </div>
                            <div id="odapan" class="form-control">
                                <a href="">
                                    <h6 style="border-bottom: 1px solid;">10</h6>
                                    <h6></h6>
                                </a>
                            </div>
                        </div>
                        <div id="tgian">
                            <p style="padding-bottom: 20px;">Thời gian còn: 00:10:09</p>
                            <button style="width: 100%;" type="submit" class="btn btn-success">Kết thúc và nộp bài</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>