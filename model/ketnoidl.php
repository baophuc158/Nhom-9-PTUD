<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class ketnoi{
	function ketnoidl($conn){
		$conn=mysqli_connect('localhost','ptud','123456','ptud');
		mysqli_set_charset($conn ,'utf8');
		if($conn){
			return mysqli_select_db($conn ,'ptud');
		}
		else{
			return false;
		}
		
	}
    function ngatketnoi($conn){
        mysqli_close($conn);
    }
}


?>
</body>
</html>