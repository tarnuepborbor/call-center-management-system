<?php 
$title = "dashboard";
include("includes/header.php");

if(isset($_GET['email'])){

	$email = $_GET['email'];
}else{
	header('Location: users.php');
}

include("includes/model.php");
$loginobj = new Query();
$user_data = $loginobj->load_user_details($email);

while ($row = $user_data->fetch()) {

	?>

	<div class="container-fluid h-100">
		<div class="row align-items-center h-100">
			<div class="col-md-8 offset-md-2">

				<div class="card shadow-lg bg-white">
					<div class="card-header py-5 city_header">
						<div class="py-2"></div>
					</div>
					<div class="row px-5" style="margin-top: -60px">
						<div class="col-5">
							<center >
								<img src="<?php echo $row['pic'] ?>" class="rounded-circle shadow-lg" style="width:150px; height: 150px;">
							</div>
							<div class="col-7 text-right">
								<a href="users.php" class="my-btn btn btn-lg">Exit detail</a>
							</div>
						</div>

						<div class="card-body py-5">
							<div class="row py-5">
								<div class="col-md-5 text-center" id="userData">
									<div class="card" style="border:none; border-right: 2px dotted black;">
										<div class="card-body">
											<h3 id="cName"><?php echo $row['name']; ?></h3>
											<p class="text-secondary mb-2" ><?php echo $row['sex']; ?> | <?php echo $row['userType']; ?> <span id="ccatt"></span></p>
											<table class="table table-sm mt-4">
												<tr>
													<td><i class="fa fa-mobile" aria-hidden="true"></i></td>
													<td id="cContact"><?php echo $row['phoneNo']; ?></td>
												</tr>
												<tr>
													<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
													<td id="dress"><?php echo $row['email']; ?></td>
												</tr>

												<tr>
													<td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
													<td id="dress"><?php echo $row['address']; ?></td>
												</tr>
												<tr>
													<td><i class="fa fa-globe" aria-hidden="true"></i></td>
													<td id="cntY"><?php echo $row['shift']; ?></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="card" style="border:none;">
										<div class="card-body">
											<div>
												<h2 class="text-primary">Contract Summary</h3>
													<p id="descri"></p>
													<p class="text-secondary" ><span id="agt">
														This AGREEMENT is made  and entered into as of this  10th day of August, A.D.2021 by and between «names» residing in Monrovia of Montserrado County (hereinafter called Call Agent/ Social Worker and the Ministry of Gender, Children and \social Protection  (MGCSP) , Gender based violence, Maternal Health and Child Protection Call Center hereinafter called the “MGCSP, GMHCPCC”  having its principal office at LIBTELCO, Lynch Street, Monrovia-Liberia  represented by and through its Minister of Gender, Children and Social Protection,(Williametta E. Saydee-Tarr) and  of the City of Monrovia, Montserrado County, Republic of Liberia hereinafter known and referred to as the “MGCSP GMHCPCC ” and they shall jointly be referred to as the “Parties  
													</span></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 px-4 text-right">
										<button class="btn btn-secondary rounded-0 shadow-sm" onclick="print_this('userData')"> <i class="fa fa-print" aria-hidden="true"></i> Print</button>
										<a href="deletor.php?table=users&id=<?php echo $row['id'] ?>" class="btn btn-danger rounded-0 shadow-sm"> <i class="fa fa-trash" aria-hidden="true"></i>Delete</a>

									</div>
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
			</script>
			<?php 
		}
		include("includes/footer.php");