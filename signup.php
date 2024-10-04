<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Sign Up</title>

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
					<a class="brand-logo" href="signup.php">Signup</a>
				</div>
				<div class="form-section">
					<h3>Signup</h3>
					<form action="#" method="post" class="signin-form">
						<div class="form-input">
							<input type="text" name="name" placeholder="Enter Name" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="email" name="email" placeholder="Enter Email" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="text" name="phone" placeholder="Enter Mobile No." required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Password" required="">
						</div>
						<div class="form-input">
							<input type="password" name="confirmpassword" placeholder="Confirm Password" required="">
						</div>
						<button type="submit" class="btn btn-primary theme-button mt-4" name="signup">Signup</button>
					</form>
					<p class="signup">Already have account? <a href="login.php" class="signuplink">Login</a></p>
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
if (isset($_POST['signup'])) 
{
  extract($_POST);

  echo $asd= "insert into login(name,username,phone,password) value ('$name','$email','$phone','$password')";
  $add=mysqli_query($connect,$asd) or die(mysqli_error($connect));
  if ($asd) 
  {
    echo "<script>;";
    echo "window.alert('You Have Register successfully');";
    echo "</script>";
    }
    else
    {
      echo "<script>;";
      echo "window.alert('Data Error..!');";
    echo "</script>";
    }
   }
?>