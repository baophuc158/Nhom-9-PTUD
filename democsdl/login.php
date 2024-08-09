<?php
    $host="localhost";
    $user="root";
    $dbpass="";
    $database="ptud";
    $con=mysqli_connect($host,$user,$dbpass,$database);

    // Truy vấn login 
    $u=$_POST['username'];
    $pass=md5($_POST['password']);
    $sql="select * from taikhoan where username='$u' and password='$pass'";
    //Thực thi truy vấn
    $ketqua=mysqli_query($con, $sql);
    $i=mysqli_num_rows($ketqua);
    
    if($i > 0){
        header("location:systemadmin.php");
    }

    else{
            echo 'Thất bại';
    }
?>