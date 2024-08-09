<?php
    session_start();
    $con=mysqli_connect('localhost','root','','ptud') or die ('Connect Failed!');
?>
<style>
    body{
        text-align: center;
    }
    .field{
        margin-bottom: 20px;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcom Login</h2>
    <div>
        <form action="trangchu.php" method="POST" >
            <input type="text" class="field" name="username" placeholder="Tên tài khoản"><br>
            <input type="password" class="field" name="password" placeholder="Mật khẩu"><br>
            <input type="submit" class="field" name="login" value="Login">

        </form>
    </div>
        <?php
        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $sql="SELECT * FROM taikhoan WHERE username='$username' AND password='$password' ";
            $select=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($select);
        if(is_array($row)){
            $_SESSION["username"]=$row['username'];
            $_SESSION["password"]=$row['password'];
        }
        else{
            echo 'Thất bại';
        }
        }
        if(isset($_SESSION["username"])){
            header("location:dn.php");
        }
        ?>
</body>
</html>