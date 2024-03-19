<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<Form method="post" action"">
<table width="25%"  align="center" border="2">
<tr>
<td text align="center" colspan="2">Employee Registration Form</td>
</tr>


<tr>
<td text align="center">Code</td>
<td><input type="text" name="t1" /></td>
</tr>
<tr>
<td text align="center">Name</td>
<td><input type="text" name="t2" /></td>
</tr>

<tr>
<td text align="center">Salary</td>
<td><input type="text" name="t3" /></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="bt1" value="Save" /></td>
<a href="Employee2.php">Show record</a>
</tr>

</table>
</Form>
<body>
</body>
</html>

<?php
if(isset($_POST['bt1']))
{
$cd=$_POST['t1'];
$nm=$_POST['t2'];
$sl=$_POST['t3'];

	$conn=mysqli_connect('127.0.0.1','root',"") or die('Connection Failed'.mysqli_error());
	mysqli_select_db($conn,"emp") or die("Failed to connect with database".mysqli_error());
	$sql="insert into emp values('$cd','$nm','$sl')";
	$res=mysqli_query($conn,$sql);
	if($res==true)
	{
		echo "<script>alert('Record Saved Successfully')</script>";
	}
	else
	{
		echo "<script>alert('There is some error in insert command')</script>";
	}
	


}





?>