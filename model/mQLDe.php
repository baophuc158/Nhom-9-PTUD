<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("ketnoidl.php");
class mDe{
    function xemde(){
		$conn=mysqli_connect('localhost','ptud','123456','ptud');
        $p = new ketnoi($conn);
        if($p->ketnoidl($conn))
        {
            $sql="select * from dethi";
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


?>
</body>
</html>