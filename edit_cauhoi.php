<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'db.php';
	$id = $_POST['id'];
	$cauhoi = $_POST['cauhoi'];
	$da1 = $_POST['da_1'];
	$da2 = $_POST['da_2'];
	$da3 = $_POST['da_3'];
	$da4 = $_POST['da_4'];
	$da_dung = $_POST['da_dung'];


	$sql = mysqli_query($conn,"UPDATE cau_hoi Set cau_hoi = '$cauhoi', da_1 ='$da1', da_2='$da2', da_3='$da3', da_4='$da4', da_dung='$da_dung' Where id_cauhoi= '$id'");
	
    if($sql){
			echo "<script>
			alert('Thay đổi thành công !');
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