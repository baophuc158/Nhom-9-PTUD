
<?php
class login
{
	
	public function mylogin($user,$pass)
	{
        $con=mysqli_connect("localhost","root","","ptud");
		$pass=md5($pass);
		$sql="select id, username, password from taikhoanqtt where username='$user' and password='$pass' limit 1";
		$ketqua=mysqli_query($con, $sql);
		$i=mysqli_num_rows($ketqua);
		if($i==1)
		{
			while($row=mysqli_fetch_array($ketqua))
			{
				$id=$row['id'];
				$username=$row['username'];
				$password=$row['password'];	
				session_start();
				$_SESSION['id']=$id;		
				$_SESSION['user']=$username;		
				$_SESSION['pass']=$password;
			}
			return 1;
			
		}
		else
		{
			return 0;	
		}
	}
	function confirmlogin($id,$user,$pass)
	{
        $con=mysqli_connect("localhost","root","","ptud");
		$sql="select id from taikhoanqtt where id='$id' and username='$user' and password='$pass' limit 1";
		$ketqua=mysqli_query($con,$sql);
		$i=mysqli_num_rows($ketqua);
		if($i!=1)
		{
			header('location:loginquantri.php');
		}
			
	}	
}

?>