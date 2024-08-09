<?php
    require('connect/db_connect.php');
    require('Classes/PHPExcel.php');
    if(isset($_POST['btngui']))
    {
        $file=$_FILES['file']['tmp_name'];
        $objReader=PHPExcel_IOFactory::createReaderForFile($file);
        $objReader->setLoadSheetsOnly('10A1');

        $objExcel=$objReader->Load($file);
        $sheetData=$objExcel->getActiveSheet()->toArray('null',true,true,true,true);

        $highestRow=$objExcel->setActiveSheetIndex()->getHighestRow();
        for($row=2;$row<=$highestRow; $row++)
        {
            $id_lop=1;
            $name=$sheetData[$row]['A'];
            $toan=$sheetData[$row]['B'];
            $ly=$sheetData[$row]['C'];
            $hoa=$sheetData[$row]['D'];

            $sql = "INSERT INTO diem(id_lop,name,toan,ly,hoa) VALUES ($id_lop,'$name','$toan','$ly','$hoa')";
            
            $mysqli->query($sql);
        }
        echo "INSERT Thành công <3";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <button type="submit" name="btngui";>Import</button>
    </form>
</body>
</html>