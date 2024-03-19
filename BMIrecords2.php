<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="73%" border="2" align="center">
<tr>
<td colspan="6" text align="center"><b><u>BMI Records</u></b></td>
</tr>
<tr>
<td text align="center">Name</td>
<td text align="center">Age</td>
<td text align="center">Gender</td>

<td text align="center">Height(in cm)</td>
<td text align="center">Weight(in kg)</td>
<td text align="center">BMI</td>
</tr>

</body>
</html>
<?php

$conn=mysqli_connect('localhost','root',"") or die("Connect Failed".mysqli_error());
mysqli_select_db($conn,"tech") or die("Connection Failed ".mysqli_error());

$sql="select * from bmi";
$res=mysqli_query($conn,$sql);

while($row=mysqli_fetch_object($res))
{
?>
<tr>
<td text align="center"><?php echo $row->Name ?></td>
<td text align="center"><?php echo $row->Age ?></td>
<td text align="center"><?php echo $row->Gender ?></td>
<td text align="center"><?php echo $row->Height?></td>
<td text align="center"><?php echo $row->Weight?></td>
<td text align="center"><?php echo $row->BMI?></td>
</tr>
	
<?php	
}

?>
