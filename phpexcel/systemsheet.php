<?php
    require('connect/db_connect.php');
    require('class/PHPExcel.php');
    if(isset($_POST['btngui']))
    {
            $file=$_FILES['file']['tmp_name'];

            $objReader =PHPExcel_IOFactory::createReaderForFile($file);
            $listWorkSheets= $objReader->listWorksheetNames($file); 



            foreach($listWorkSheets as $user){
                $sql="INSERT INTO phanquyen(tenmien) VALUES('$user')";
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

                $sql="INSERT INTO taikhoan(id_mien,username,password,tentruong) VALUES ($id_mien,$user,'$pass','$ten')";
                $mysqli->query($sql);
           }
        }
        echo 'INSERT thành công';
            
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> WECOMLE SYSTEM ADMIN </h1>


<form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <button type="submit" name="btngui";>Gửi</button>
</body>
</html>