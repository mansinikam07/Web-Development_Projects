<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Login</title>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Style -->
	<link rel="stylesheet" href="css/b1.css" type="text/css" media="all" />
</head>

<body>
	<!-- login form -->
	<section class="w3l-login">
		<div class="overlay">
			<div class="wrapper">
				<div class="logo">
					<a class="brand-logo" href="login.php">Login</a>
				</div>
				<div class="form-section">
					<h3>Login</h3>
					<form action="#" method="post" class="signin-form">
						<div class="form-input">
							<input type="text" name="username" placeholder="Username" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" required="">
						</div>
						<button type="submit" class="btn btn-primary theme-button mt-4" name="login">Log in</button>
					</form>
					<p class="signup">Don’t have account yet? <a href="signup.php" class="signuplink">Sign Up</a></p>
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>


	</section>

	<!-- /login form -->
</body>

</html>
<?php
include('config.php');
if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from login where username='$username' and password='$password'";
	$result=mysqli_query($connect,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if ($count==1) {
		header("Location:index.php");
	}
	else{
		echo '<script>
			   window.location.href="login.php";
			   alert("Login Failed. Invalid username or password!!")
			   </script>';
	}
}
?>