<?php 
session_start();
include("includes/header.php");
?>


<div class="container bg-white py-4">
	<div class="row  align-items-center">
		<div class="col-md-12 ">
			<div class="card-header" >
				<img src="imgs/bookspingk.jpg" class="w-100 mb-4">
			</div>
			<div id="card-body bg-white p-4 shadow-lg" style="background: white; ">
				<div class="text-right pr-4">
					<a href="dashboard.php" class="btn btn-success rounded-0 shadow-lg mt-4">Dashboard</a>
				</div>
				<?php 
					include("includes/user_contract.php");
				?>
			</div>
		</div>
	</div>
</div>



<?php 
include("includes/footer.php");
