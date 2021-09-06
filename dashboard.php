<?php 
session_start();



if (!isset($_SESSION['isLogin'])) {
	echo "<script>window.location = 'index.php'</script>";
}
$title = "dashboard";
include("includes/header.php");
?>

<div id="mySidebar" class="sidebar bg-info shadow-lg">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="imgs/logo.PNG" class="img-fluid img-responsive img-thumbnail"></a><br><br><br>
	<div class="p-4">
		<a href="dashboard.php" class="active"><i class="fa fa-tachometer " aria-hidden="true"></i> Dashboard</a>
		<?php 
			if($_SESSION['userType'] == 'Administrator'){
				?>
					<a href="users.php"><i class="fa fa-users" aria-hidden="true"></i> Users</a>
				<?php 
			}
		?>
		<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
		<a href="#" data-toggle="modal" data-target="#myProfile"><i class="fa fa-user" aria-hidden="true"> </i> Profile</a>
		<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"> </i> Logout</a>
	</div>
</div>

<div id="main" class="pt-0 h-100">
	<div class="container py-5 mt-2">
		<div class="row py-2" style="margin-bottom: -5px">
			<div class="col-md-8">
				<?php 
				if(isset($_GET['message'])){
					?>
					<div class="alert alert-success alert-dismissible" data-aos="fade-right" data-aos-duration="2000">
						<?php  echo $_GET['message'] ?>
					</div>
					<?php 
				}else{
					?>
					<h2 class="text-left text-danger " data-aos="fade-right" data-aos-duration="2000" style="font-family: myFirstFont;">All times call log</h2>
					<?php ;
				}
				?>
			</div>
			<div class="col-md-4 text-right ">
				<span class="clip_bar bg-info p-4" data-aos="fade-left" data-aos-duration="3000" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
					<span class="py-3 px-2">
						<button class=" rounded-0 btn btn-info mr-3 " onclick="openNav()">☰ Open Sidebar</button>  
						<button class=" btn rounded-0 btn-info" data-toggle="modal" data-target="#myModal" style="border-left: 2px solid white"> Log A Call</button>
					</span>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 " >
				<div class="card shadow-lg rounded-0" style="border:none;">
					<div class="card-body bg-danger p-3 text-left" >
						<?php include("includes/user_call_log.php"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	function print_this(el){

		var page = document.body.innerHTML;
		var printEl = document.getElementById(el).innerHTML;
		document.body.innerHTML = printEl;
		window.print();
		document.body.innerHTML = page;
	}

	$(document).ready(function(){
		openNav();
	})
</script>




<?php 
include("includes/profile.php");
include("includes/entry_form.php");
include("includes/footer.php");