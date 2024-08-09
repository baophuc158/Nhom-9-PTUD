<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'db.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$user = $_POST['user'];
	$pwd = md5($_POST['pwd']);
	$type = $_POST['type'];
	

		$sql = "INSERT INTO user (LASTNAME,FIRSTNAME, PASSWORD, USER, USER_TYPE)
	VALUES ('$lname','$fname', '$pwd', '$user' ,'$type')";

	if (mysqli_query($conn, $sql)) {
    echo "<script>
	alert('Thêm người dùng thành công!');
	locarion.href = 'admin.php?page=users'
	</script>";


} else {
    echo "Đã tồn tại user: " . $user . "<br>" . mysqli_error($conn);
}
}
	
	mysqli_close($conn);
?>