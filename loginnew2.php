<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="loginnew.css">
    <title>Modern Login Page | AsmrProg</title>
     
    <script>document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', function() {
        container.classList.add("active");
    });

    loginBtn.addEventListener('click', function() {
        container.classList.remove("active");
    });
});
</script>


</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="Username" name="t1">
                <input type="email" placeholder="Email" name="t2">
                <input type="password" placeholder="Password" name="t3">
                <input type="submit" name="bt1" value="Sign Up" style="background-color:#63F; color:#FFF;">
           </form>
        </div>
        <div class="form-container sign-in">
            <form action="loginnew3.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <a href="#">Forget Your Password?</a>
                <input type="submit" name="bt2" value="Sign In" style="background-color:#63F; color:#FFF;">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

   
   
</body>

</html>

<?php
if(isset($_POST['bt1']))
{
$un=$_POST['t1'];
$em=$_POST['t2'];
$pwd=$_POST['t3'];

	$conn=mysqli_connect('127.0.0.1','root',"") or die('Connection Failed'.mysqli_error());
	mysqli_select_db($conn,"tech") or die("Failed to connect with database".mysqli_error());
	$sql="insert into tech values('$un','$em','$pwd')";
	$res=mysqli_query($conn,$sql);
	if($res==true)
	{
		echo "<script>alert('Sign Up Successfully')</script>";
		die();
	}
	else
	{
		echo "<script>alert('There is some error in Sign Up')</script>";
	}
	
}
?>
