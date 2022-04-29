<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("ketnoidl.php");
class mDiem{
    function chonlop($gvl){
		$conn=mysqli_connect('localhost','ptud','123456','ptud');
        $p = new ketnoi($conn);
        if($p->ketnoidl($conn))
        {
            $sql="select Tenlop from phancong where MaGV ='$gvl'";
            $qr=mysqli_query($conn, $sql);
            if(!$qr){
                echo mysqli_error($conn);
            }
            return $qr;

            $p->ngatketnoi($conn);
        }
        else{
            return false;
        }
    }
    function mon($magv){
		$conn=mysqli_connect('localhost','ptud','123456','ptud');
        $p = new ketnoi($conn);
        if($p->ketnoidl($conn))
        {
            $sql="select MaMH from giangvien where MaGV ='$magv'";
            $qr=mysqli_query($conn, $sql);
            if(!$qr){
                echo mysqli_error($conn);
            }
            return $qr;

            $p->ngatketnoi($conn);
        }
        else{
            return false;
        }
    }
    function ttmon($mamonhoc){
		$conn=mysqli_connect('localhost','ptud','123456','ptud');
        $p = new ketnoi($conn);
        if($p->ketnoidl($conn))
        {
            $sql="select * from monhoc ";
            $qr=mysqli_query($conn, $sql);
            if($qr){
                while($cot=mysqli_fetch_array($qr)){
                    return $cot['TenMonhoc'];
                }
            }
            /*return $qr;*/

            $p->ngatketnoi($conn);
        }
        else{
            return false;
        }
    }
    function tths($tenlop){
        $conn=mysqli_connect('localhost','ptud','123456','ptud');
        $p= new ketnoi($conn);
        if($p->ketnoidl($conn))
        {
            $sql="select * from hocsinh where Tenlop='$tenlop'";
            $qr=mysqli_query($conn, $sql);
            if(!$qr){
                echo mysqli_error($conn);
            }
            return $qr;

            $p->ngatketnoi($conn);
        }
        else{
            return false;
        }
    }
    function diemtn($mahs, $loaibai){
        $conn=mysqli_connect('localhost','ptud','123456','ptud');
        $p= new ketnoi($conn);
        if($p->ketnoidl($conn))
        {
            $sql="select * from baiktvabttracnghiem where MaHS='$mahs' and Loaibai='$loaibai'";
            $qr=mysqli_query($conn, $sql);
            if(!$qr){
                echo mysqli_error($conn);
            }
            return $qr;

            $p->ngatketnoi($conn);
        }
        else{
            return false;
        }
    }
    function diemtl($mahs, $loaibai){
        $conn=mysqli_connect('localhost','ptud','123456','ptud');
        $p= new ketnoi($conn);
        if($p->ketnoidl($conn))
        {
            $sql="select * from baiktvabttuluan where MaHS='$mahs' and Loaibai='$loaibai'";
            $qr=mysqli_query($conn, $sql);
            if(!$qr){
                echo mysqli_error($conn);
            }
            return $qr;

            $p->ngatketnoi($conn);
        }
        else{
            return false;
        } 
    }
}