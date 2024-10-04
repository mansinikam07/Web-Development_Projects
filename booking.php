<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Trains</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Grand Tour Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1 class="mt-md-0 mt-2"> <a href="booking.php"><span class=""></span> Railway Management System</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="index.php">Home</a></li>
				<li class=""><a href="about.php">About Us</a></li>
				<li class=""><a href="packages.php">Packages</a></li>
				<li class=""><a href="contact.php">Contact</a></li>
				<li class=""><a href="login.php">Logout</a></li>
				<li class="booking"><a href="booking.php">Book Now</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


<!-- Booking -->
<section class="contact py-5">
	<div class="container py-lg-5 py-sm-4">
		<h2 class="heading text-capitalize text-center mb-lg-5 mb-4"> Book Your Tour</h2>
		<div class="contact-grids">
			<div class="row">
				<div class="col-lg-7 contact-left-form">
					<form action="#" method="post" class="row">
						<div class="col-sm-6 form-group contact-forms">
						  <input type="number" class="form-control" placeholder="Enter Train Number" name="id" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Enter train Name" name="trn_name" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Enter Source" name="src" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Enter Destination" name="dest" required="">
						</div>	
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Name" name="name" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="email" class="form-control" placeholder="Email" name="email" required="">
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Phone" name="phone" required=""> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
						  <input type="text" class="form-control" placeholder="Date" name="date" required=""> 
						</div>
						<div class="col-sm-6 form-group contact-forms">
							<select class="form-control" id="adults">
								<option>Adults</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5 or more</option>
							</select>
						</div>
						<div class="col-sm-6 form-group contact-forms">
							<select class="form-control" id="kids">
								<option>Kids</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5 or more</option>
							</select>
						</div>
						<div class="col-md-12 booking-button">
							<button class="btn btn-block sent-butnn" name="book">Book Now</button>
						</div>
					</form>
				</div>
				<div class="col-lg-5 contact-right pl-lg-5">
				
					<div class="image-tour position-relative">
						<img src="images/ker.jpg" alt="" class="img-fluid" />
					
					</div>
					
					<h4>Tour Description</h4>
					<p class="mt-3">Embrace your passion for railways on this incredible journey. "The Railway Explorer's Journey" promises a blend of history, adventure, and scenic beauty that will leave you with a deeper appreciation for the art of rail travel. Secure your seat today and let the world of railways come to life before your eyes.</p>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Booking -->


<!--footer -->
<footer>
<section class="footer footer_w3layouts_section_1its py-5">
	<div class="container py-lg-4 py-3">
		<div class="row footer-top">
			<div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Address</h3>
				</div>
				<div class="footer-text">
					<p>Location : Pune Railway Station,Maharashtra</p>
					<p>Phone : +12 534894364</p>
					<p>Email : <a href="mailto:info@example.com">info@example.com</a></p>
					<p>Fax : +12 534894364</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
				<div class="footer-title">
					<h3>About Us</h3>
				</div>
				<div class="footer-text">
					<p>Our mission is simple yet profound: to inspire and facilitate unforgettable railway adventures. We believe that the magic of a journey lies in the moments experienced along the way.</p>
				</div>
				<!--<ul class="social_section_1info">
					<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
					<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
					<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
					<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
				</ul>-->
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<div class="footer-title">
					<h3>Travel Places</h3>
				</div>
				<div class="row">
					<ul class="col-6 links">
						<li><a href="#choose" class="scroll">Hyderabad </a></li>
						<li><a href="#overview" class="scroll">Pune </a></li>
						<li><a href="#pricing" class="scroll">Chennai</a></li>
						<li><a href="#faq" class="scroll"> Mumbai</a></li>
						<li><a href="#testimonials" class="scroll">Himachal Pradesh </a></li>
						<li><a href="#contact" class="scroll"> Delhi</a></li>
					</ul>
					<ul class="col-6 links">
						<li><a href="#">Nashik </a></li>
						<li><a href="#">Aurangabad</a></li>
						<li><a href="#faq" class="scroll">Rajashtan </a></li>
						<li><a href="#">Aasam </a></li>
						<li><a href="#">Odisha </a></li>
					</ul>

				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
				<!--<div class="footer-title">
					<h3>Newsletter</h3>
				</div>
				<div class="footer-text">
					<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>-->
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- //footer -->



<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

	
</body>
</html>

<?php
include('config.php');
if (isset($_POST['book'])) {
	$id=$_POST['id'];
	$trn_name=$_POST['trn_name'];

	$sql="select * from trains where id='$id' and trn_name='$trn_name'";
	$result=mysqli_query($connect,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if ($count==1) 
	{
		 include('config.php');
		 if (isset($_POST['book'])) 
		 {	
  			extract($_POST);

  			echo $asd= "insert into booking(id,trn_name,src,dest,name,email,phone,date) value ('$id','$trn_name','$src','$dest','$name','$email','$phone','$date')";
  			$add=mysqli_query($connect,$asd) or die(mysqli_error($connect));
  			if ($asd) 
  			{
    			echo "<script>;";
    			echo "window.alert('Booking successful');";
    			echo "</script>";
    		}
    		else
    		{
      			echo "<script>;";
      			echo "window.alert('Data Error..!');";
    			echo "</script>";
    		}
   		}

  	}
	else
	{
		echo '<script>
			  window.location.href="booking.php";
			   alert("Please Enter valid Train id or name")
			   </script>';
	}
}
?>