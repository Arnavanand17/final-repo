<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
if(!empty($_POST['bt2']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	if(!empty($email) && !empty($password) && !empty($email))
	{
		
    $conn=mysqli_connect('127.0.0.1','root',"") or die('Connection Failed'.mysqli_error());
	mysqli_select_db($conn,"tech") or die("Failed to connect with database".mysqli_error());
	$sql="select * from tech where email = '$email' limit 1 ";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		if($result && mysqli_num_rows($result) > 0)
		{
			
			$data = mysqli_fetch_assoc($result);
		
			if($data['password'] == $password)
			{
				header("location: index1,php.php");
				die();
				
			}
			
			else
			{
				echo "<script>alert('Invalid email or password')</script>";
				die();
			}
			
		}
	}
}
}
?>
<body>
</body>
</html>