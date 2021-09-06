
		<div class="bg-white px-4 ">
			<img src="imgs/bookspingk.jpg" class="img-responsive w-100 my-2">
			<div class="table-responsive">
				<table id="example" class="table table-sm" >
					<thead class="mt-1" >
						<tr>
							<th>User Name</th>
							<th>Contact </th>
							<th>Position</th>
							<th>View Profile</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						include('model.php');
						$pdoObj = new Query();
						$recordBy = $_SESSION['name'];
						$record = $pdoObj->load_users();

						while ($rows = $record->fetch()) {
							?>
							<tr>
								<td><?php echo $rows['name'] ?></td>
								<td><?php echo "+231".$rows['phoneNo']; ?></td>					
								<td><?php echo $rows['userType'] ?></td>				
								<td><button id="<?php echo $rows['email'] ?>" class="view btn btn-block btn-sm btn-outline-primary rounded-0">View Details</button></td>
							</tr>
							<?php 
						}
						?>
						<tfoot>
							<tr>
							<th>User Name</th>
							<th>Contact </th>
							<th>Position</th>
							<th>View Profile</th>
						</tr>
						</tfoot>

					</tbody>
				</table>
			</div>
		</div>


		<script type="text/javascript">

			$(document).on('click', '.view', function(){
				let info;
				var pId = $(this).attr('id');
				window.location = "user_detail.php?email="+pId+"";

			});

		</script>