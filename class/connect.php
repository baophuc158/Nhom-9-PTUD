<?php
$host="localhost";
$user="root";
$pass="";
$database="ptud";

$con=mysqli_connect($host,$user,$pass,$database);
mysqli_set_charset($con,'utf8');
if(!$con){
    echo 'Connect Failed!'.mysqli_connect_error();
    exit;
}
echo 'Connect Successfully!';
mysqli_close($con);
?>