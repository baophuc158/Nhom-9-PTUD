<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'db.php';
	$cauhoi = $_POST['cauhoi'];
	$da1 = $_POST['da_1'];
    $da2 = $_POST['da_2'];
	$da3 = $_POST['da_3'];
	$da4 = $_POST['da_4'];

	$da_d = $_POST['da_d'];
    $type = $_POST['type'];


		$sql = "INSERT INTO cau_hoi (id_khoi,cau_hoi,da_1,da_2,da_3,da_4,da_dung)
	VALUES ('$type','$cauhoi','$da1', '$da2', '$da3' ,'$da4','$da_d')";

	if (mysqli_query($conn, $sql)) {
    echo "<script>
	alert('Thêm câu hỏi thành công!');
	locarion.href = 'admin.php?page=list_cauhoi'
	</script>";


} else {
    echo "Đã tồn tại câu hỏi: " . $cauhoi . "<br>" . mysqli_error($conn);
}
}
	
	mysqli_close($conn);
?>