
<?php
session_start();
if(isset($_SESSION['id']) && ($_SESSION['user']) && ($_SESSION['pass']))
{
	include ("class/clslogin.php");
	$q=new logincsdl();
	$q->confirmlogin($_SESSION['id'],$_SESSION['user'],$_SESSION['pass']);
}
else
{
	header('location:login.php');	
}





   require('connect/db_connect.php');
    require('class/PHPExcel.php');
    if(isset($_POST['btngui']))
    {
            $file=$_FILES['file']['tmp_name'];

            $objReader =PHPExcel_IOFactory::createReaderForFile($file);
            $listWorkSheets= $objReader->listWorksheetNames($file); 



            foreach($listWorkSheets as $user){
                $sql="INSERT INTO vungmien(tenmien) VALUES('$user')";
                $mysqli->query($sql);
                $id_mien=$mysqli->insert_id;

                $objReader->setLoadSheetsOnly($user);

            $objExcel =$objReader->load($file);
            $sheetData=$objExcel->getActiveSheet()->toArray('null',true,true,true);
             
            $highestRow=$objExcel->setActiveSheetIndex()->getHighestRow();
            
            for($row =2; $row<=$highestRow; $row++){
                $user=$sheetData[$row]['A'];
                $pass=$sheetData[$row]['B'];
                $ten=$sheetData[$row]['C'];
                $vaitro=$sheetData[$row]['D'];
                $mand=$sheetData[$row]['E'];

                $sql="INSERT INTO taikhoanqtt(id_mien,username,password,tentruong,vaitro,MaND) VALUES ($id_mien,$user,'$pass','$ten','$vaitro','$mand')";
                $mysqli->query($sql);
           }
        }
        echo '<h1 style="color:red; font-size:100px;">INSERT thành công</h1>';
            
    }

?>
<style>
    body{
        text-align: center;
    }
    h2{
        color:red;
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
<h1> WECOMLE SYSTEM ADMIN </h1><br>

<h2>Cấp quyền cho người quản trị từng trường</h2>
<form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <button type="submit" name="btngui";>Gửi</button>
</form>
</body>
</html>