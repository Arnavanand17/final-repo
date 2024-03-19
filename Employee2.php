<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form>
<table width="30%" border="2" align="center">
<tr>
<td colspan="3" text align="center">Form handling</td>
</tr>
<tr>
<td text align="center">Code</td>
<td text align="center">Name</td>
<td text align="center">Salary</td>
</tr>



<?php

$conn=mysqli_connect('localhost','root',"") or die("Connect Failed".mysqli_error());
mysqli_select_db($conn,"emp") or die("Connection Failed ".mysqli_error());

$sql="select * from emp";
$res=mysqli_query($conn,$sql);

while($row=mysqli_fetch_object($res))
{
?>
<tr>
<td text align="center"><?php echo $row->code ?></td>
<td text align="center"><?php echo $row->name ?></td>
<td text align="center"><?php echo $row->salary ?></td>
</tr>
	
<?php	
}

?>
</table>
</form>
</body>
</html>

