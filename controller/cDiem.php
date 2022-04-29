<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("../model/mDiem.php");
class cDiem{
	function dslop($gvl){
		$p=new mDiem();
		$xem=$p->chonlop($gvl);
		return $xem;
	}
	function monauto($magv){
		$p=new mDiem();
		$xem=$p->mon($magv);
		return $xem;
	}
    function ttmonauto($mamonhoc){
        $p=new mDiem();
        $xem=$p->ttmon($mamonhoc);
        return $xem;
    }
	function gettths($tenlop){
		$p=new mDiem();
		$xem=$p->tths($tenlop);
		return $xem;
	}
	function getdiemtn($mahs, $loaibai){
		$p=new mDiem();
		$xem=$p->diemtn($mahs, $loaibai);
		return $xem;
	}
	function getdiemtl($mahs, $loaibai){
		$p=new mDiem();
		$xem=$p->diemtl($mahs, $loaibai);
		return $xem;
	}
}
?>
</body>
</html>