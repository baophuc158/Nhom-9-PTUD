<?php
include("class/clslogin.php");
$p=new logincsdl();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập admin</title>
</head>

<body>
<form action="" method="post" id="myfm">
  <table width="800" border="10	" align="center" cellpadding="12" cellspacing="10">
    <tr>
      <td colspan="2" align="center"><strong><em>ĐĂNG NHẬP</em></strong></td>
    </tr>
    <tr>
      <td align="left">Nhập username</td>
      <td align="left"><label for="txtuser"></label>
      <input type="text" name="txtuser" id="txtuser" /></td>
    </tr>
    <tr>
      <td align="left">Nhập password</td>
      <td align="left"><label for="txtpass"></label>
      <input type="password" name="txtpass" id="txtpass" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="nut" id="nut" value="Đăng nhập" /></td>
    </tr>
  </table>
  <div align="center">
  <?php
  		switch($_POST['nut'])
		{
		case'Đăng nhập':
		{
			$user=$_REQUEST['txtuser'];	
			$pass=$_REQUEST['txtpass'];	
			if($user!='' && $pass!='')
			{
				if($p->mylogin($user,$pass)==1)
				{
					header('location:systemadmin.php');
				}
				else
				{
					echo 'Đăng nhập không thành công';	
				}
			}
			else
			{
				echo '<br>';
				echo 'Vui lòng nhập đầy đủ thông tin';		
			}
			break;
		}	
	}
  ?>
  </div>
</form>
</body>
</html>