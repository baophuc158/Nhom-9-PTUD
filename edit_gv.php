<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'db.php';
	$id = $_POST['id'];
	$tengv = $_POST['tengv'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$lpt = $_POST['lpt'];


	$sql = mysqli_query($conn,"UPDATE giaovien Set tengv = '$tengv', sdt = '$sdt',email='$email',lopphutrach='$lpt' Where GV_ID= '$id'");
	if($sql){
			echo "<script>
			alert('Thay đổi thông tin giáo viên thành công !');
			 location.replace(document.referrer);
			</script>";
	
	}
	else{
		echo "<script>
			alert('Không được bỏ trống');
			 location.replace(document.referrer);
			</script>";
	}

}
	
	mysqli_close($conn);
?>