<?php
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
                $last=$sheetData[$row]['A'];
                $first=$sheetData[$row]['B'];
                $user=$sheetData[$row]['C'];
                $pass=$sheetData[$row]['D'];
                $user_type=$sheetData[$row]['E'];

                $sql="INSERT INTO user(ID_Mien,LASTNAME,FIRSTNAME,USER,PASSWORD,USER_TYPE) VALUES ($id_mien,'$last','$first',$user,'$pass','$user_type')";
                $mysqli->query($sql);
           }
        }
        echo "<script>
        alert('Cấp quyền thành công!');
        locarion.href = 'admin.php?page=users'
        </script>";
    }
                
    

?>