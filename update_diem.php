<?php 
include 'db.php';
$id = $_POST['id'];
$diem = $_POST['diemm'];
$user = $_SESSION['ID'];

$sql = "UPDATE bailambttl SET diem='$diem' WHERE BAILAMBT_ID='$id'";
mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
		VALUES ('Nhập điểm $id','$user',NOW() )");

if (mysqli_query($conn, $sql)) {
	header("location:".$_SERVER['HTTP_REFERER']);
} else {
    echo "Nhập điểm không thành công: " . mysqli_error($conn);
}

mysqli_close($conn);

 ?>


