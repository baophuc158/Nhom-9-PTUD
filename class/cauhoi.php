<?php
   require('connect/db_connect.php');
    require('class/PHPExcel.php');
    if(isset($_POST['btngui']))
    {
            $file=$_FILES['file']['tmp_name'];

            $objReader =PHPExcel_IOFactory::createReaderForFile($file);
            $listWorkSheets= $objReader->listWorksheetNames($file); 



            foreach($listWorkSheets as $user){
                $sql="INSERT INTO khoi(tenkhoi) VALUES('$user')";
                $mysqli->query($sql);
                $id_khoi=$mysqli->insert_id;
            
            

                $objReader->setLoadSheetsOnly($user);

            $objExcel =$objReader->load($file);
            $sheetData=$objExcel->getActiveSheet()->toArray('null',true,true,true);
             
            $highestRow=$objExcel->setActiveSheetIndex()->getHighestRow();
            
            for($row =2; $row<=$highestRow; $row++){
                $unit=$sheetData[$row]['A'];
                $cauhoi=$sheetData[$row]['B'];
                $da1=$sheetData[$row]['C'];
                $da2=$sheetData[$row]['D'];
                $da3=$sheetData[$row]['E'];
                $da4=$sheetData[$row]['F'];
                $dad=$sheetData[$row]['G'];

                $sql="INSERT INTO cau_hoi(id_khoi,unit,cau_hoi,da_1,da_2,da_3,da_4,da_dung) VALUES ($id_khoi,'$unit','$cauhoi',$da1,'$da2','$da3', '$da4', '$dad')";
                $mysqli->query($sql);
           }
        }
        echo "<script>
        alert('Thêm file thành công!');
        locarion.href = 'admin.php?page=users'
        </script>";
    }
                
    

?>