<?php
class logincsdl
{
	private function connect()
	{
		$con=mysql_connect("localhost","ptud","123456");
		if(!$con)
		{
			echo 'Không kết nối được csdl';
			exit();
		}
		else
		{
			mysql_select_db("ptud");
			mysql_query("SET NAMES UTF8");
			return $con;
		}
	}
	public function mylogin($user,$pass)
	{
		$pass=md5($pass);
		$link=$this->connect();
		$sql="select id, username, password from taikhoan where username='$user' and password='$pass' limit 1";
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i==1)
		{
			while($row=mysql_fetch_array($ketqua))
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
	function conformlogin($id,$user,$pass)
	{
		$link=$this->connect();
		$sql="select id from taikhoan where id='$id' and username='$user' and password='$pass' limit 1";
		$ketqua=mysql_query($sql,$link);
		$i=mysql_num_rows($ketqua);
		if($i!=1)
		{
			header('location:login.php');
		}
			
	}	
}

?>