<?php 
session_start();
$title = "home";
include('includes/header.php');
?>



<nav class="navbar navbar-expand-lg bg-white">
	<div class="container-fluid px-4">
		<!-- Brand -->
		<a class="navbar-brand ml-3" href="#">
			<img src="imgs/logo.PNG" style="max-width: 200px">
		</a>

		<!-- Links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="btn bgn-lg my-btn py-3  m-3 px-5" href="#" href="login.php" style="border-radius: 20px">Contact</a>
			</li>
			<li class="nav-item">
				<a class="btn bgn-lg btn-outline-danger py-3 fw-bold m-3 px-5" href="login.php" style="border-radius: 20px">Login</a>
			</li>
		</ul>
	</div>
</nav>
<div class="hero_rapper">
	<div class="container py-5">
		<div class="row align-items-center py-5">
			<div class="col-md-8  px-5 text-white">
				<div>
					<h2 class="display-4">Gender based violence, Maternal Health and Child Protection Call Center </h2>
					<i><h3>We serve the nation..</h3></i>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12 px-2" >
						<div class="card round-card" data-aos="fade-up"
						data-aos-duration="3000">
						<div class="card-body">
							<h2 class="bolder text-danger">What we do?</h2>
							<br>
							<ul class="mb-3  text-secondary mylist1" >
								<li>Receive emergency calls</li>
								<li>Refer the caller report</li>
								<li>Do followup</li>
								<li>Save victim(s)</li>
								<li>Secure caller info</li>
								<li>Serve the nation</li>
							</ul>

							<?php 
								if(isset($_SESSION['isLogin'])){
									?>
										<a href="dashboard.php" name="login" class="btn  shadow-lg btn-lg btn-block btn-lg btn-primary" style="border-radius: 20px;">Dash Board</a>
									<?php 
								}else{
									?>
										<a href="login.php" name="login" class="btn btn-lg btn-block btn-lg my-btn">Login the system</a>

									<?php 
								}
							?>

							<div class="text-center p-2">
								<small class="mt-3">
									NOTE: Never tell this call center address nor your name to caller(s). This is highly risky for both center and you!
								</small>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="bg-white">
	<div class="container py-3">
		<div class="row py-5">
			<div class="col-12" data-aos="zoom-in-right">
				<div class="owl-carousel owl-theme owl-loaded" >
					<div class="item   text-center" >
						<img src="imgs/logo4.jfif" class="img-thumbnail" style=" height: 150px;">
					</div>
					<div class="item   text-center" >
						<img src="imgs/unwomen.png" class="img-thumbnail" style="height: 150px;">
					</div>
					<div class="item   text-center" >
						<img src="imgs/logo5.jpg" class="" style=" height: 150px;">
					</div>
					<div class="item   text-center" style="border:none;">
						<img src="imgs/logo3.png" class="img-thumbnail " style=" height: 150px;">
					</div>
					<div class="item   text-center" >
						<img src="imgs/Liberia-flag.png" class="card-img-top " style=" height: 150px;">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid py-5" style="background: rgba(217,238,225,.3)">
	<div class="row py-5">
		<div class="col-8 offset-md-2 text-center text-secondary py-3 mb-4">
			<h3 class="display-4">Dos and Dos Not!</h3>
			<p class="lead">You should always observe these ethics listed below for the security of both you, your co-workers and Gender Based violence, Maternal Health and Child Protection Call Center at large plus your job.</p>
		</div>
		<div class="col-md-8 offset-md-2 py-5 mt-3">
			<div class="container-fluid bg-white " style="border-top-left-radius: 20px; border-top-right-radius: 20px">
				<div class="row px-5 pb-4">
					<div class="col-md-6">
						<div class="card bg-info upcoming_card">
						<div class="card-body text-white">
							<h3 class="bolder">Do not...</h3>
							<ul class="mylist1">
								<li>Tell your name to caller</li>
								<li>Give your address out</li>
								<li>Give this center's address</li>
								<li>Give your contact info out</li>
								<li>Call caller without supervisor mandate</li>
								<li>Hangup before the caller</li>
								<li>Insult callers</li>
								<li>Give medical prescriptions</li>
								<li>Promise caller</li>
								<li>Cancel any call</li>
								<li>Leave without logging out</li>
							</ul>

							<a class="btn bgn-lg btn-block text-white px-5" style="border:3px dotted white" href="#">Report a case</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card " style="border: none;">
						<div class="card-body text-info">
							<h3 class="bolder">Always do...</h3>
							<ul class="mylist1">
								<li>Get call name & contact</li>
								<li>Get caller address</li>
								<li>Caller Emergency</li>
								<li>Log in every call</li>
								<li>Call caller by his/her name</li>
								<li>Transfer call you can't handle</li>
								<li>Warn prank callers</li>
								<li>Speak with simpathy</li>
								<li>Inform supervisor if any complication</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4 offset-md-4 text-center">
		<small>
			By clicking the "Get started for free" button, you agree to New georgia baptist church' Terms of Service and Privacy Policy
		</small>
	</div>
</div>
</div>

<div class="row">
	<div class="col-md-6 offset-md-3 py-4 text-center text-secondary">
		<p>© 1999 - 2021 by New Georgia Baptist Church. All rights reserved. Cookie policy, Privacy and Terms.</p>
		Don't sent abusive content help us keep Spaces safe. 
	</div>
</div>








<?php 

include("includes/footer.php");