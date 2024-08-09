<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'db.php';
	$id = $_POST['id'];
	$khoi = $_POST['khoi'];
	$tenmon = $_POST['tenmon'];

	$sql = mysqli_query($conn,"UPDATE chuongtrinhhoc Set khoi = '$khoi', tenmon = '$tenmon' Where CTH_ID= '$id'");
	if($sql){
			echo "<script>
			alert('Thay đổi thông tin người dùng thành công !');
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