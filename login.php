<?php

session_start();

if(isset($_SESSION['isLogin'])){
	header("Location: dashboard.php");
}
$title = "login";

$error = "";
$email_error = "";

include 'includes/header.php';

if(isset($_POST['login'])){

	$email = $_POST['email'];
	$password = $_POST['password'];

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = 0;
	} else {
		$email_error = "Your email is not valid";
		$error = 1;
	}


	include("includes/model.php");

	$loginobj = new Query();

	if($error !== 1){

		if($loginobj->login($email, $password) > 0 ){

			$user_data = $loginobj->load_user_details($email);

			while ($row = $user_data->fetch()) {

				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['phoneNo'] = $row['phoneNo'];
				$_SESSION['shift'] = $row['shift'];
				$_SESSION['pic'] = $row['pic'];
				$_SESSION['userType'] = $row['userType'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['sex'] = $row['sex'];
				$_SESSION['id'] = $row['id'];
			}

			$_SESSION['isLogin'] = 'Yes';

			echo "<script>window.location = 'dashboard.php'</script>";

		}else{
			echo "<script>alert('Your credentials does not match any user of our system')</script>";
		}
	}



}

?>

<div class="container-fluid  " style="height: 100vh;">
	<div class="row h-100 align-items-center">
		<div class="col-md-4 offset-md-4" >
			<div class="card p-4 " style="border-radius: 20px" >
				<div class="card-header text-left bg-white" style="border: none;">
					<h3 class="display-4 my-color"><strong>Log in</strong></h3>
				</div>
				<form method="POST" action="login.php">
					<div class="card-body text-center" style="padding-bottom: 100px">
						<input type="email" name="email" placeholder="Email" class=" text-white bg- transparent text-primary form-control form-control-lg rounded-0 p-4 required">
						<small class="text-danger mb-4"><?php echo $email_error; ?></small>
						<br><br>
						<input type="password" name="password" placeholder="Password" class="text-white bg-transparent text-primary form-control mb-4 form-control-lg rounded-0 p-4 required">
						<button name="login" class="btn btn-lg btn-block my-btn">Login</button>
						<a href="#" class="text-secondary lead mt-3" style="">Forgot password</a>
						<a href="index.php" class="btn btn-block my-btn-outline mt-3" style="">cancel</a>
						
					</div>
				</form>

			</div>
		</div>
	</div>
</div>




