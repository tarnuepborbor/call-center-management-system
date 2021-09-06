
<!-- The Modal -->
<div class="modal fade" id="call_details" style="background: rgba(0,0,0,0);">
	<div class="modal-dialog model-center modal-xl">
		<div class="modal-content">
			<!-- Modal body -->
			<div class="modal-body bg-info" id="call_details_div">
				<div class="card shadow-lg bg-white">
					<div class="card-header py-5 city_header">
						<div class="py-2"></div>
					</div>
					<div class="row px-5" style="margin-top: -60px">
						<div class="col-5">
							<center>
								<img src="imgs/logo.PNG">
							</div>
							<div class="col-7 text-right">
								<a href="dashboard.php" class="my-btn btn btn-lg">Exit detail</a>
							</div>
						</div>

						<div class="card-body py-5" id="callData">
							<div class="row">
								<div class="col-md-5 text-center">
									<div class="card" style="border:none; border-right: 2px dotted black;">
										<div class="card-body">
											<h3 class="">Call Summary</h3> <hr>
											<p class="lead mb-0" id="cName">James S. Gaye</p>
											<p class="text-secondary mt-0 mb-2" >Male | <span id="ccatt"></span></p>
											<table class="table table-sm mt-4">
												<tr>
													<td><i class="fa fa-mobile" aria-hidden="true"></i></td>
													<td id="cContact"></td>
												</tr>
												<tr>
													<td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
													<td id="cTime"></td>
												</tr>
												<tr>
													<td><i class="fa fa-calendar" aria-hidden="true"></i></td>
													<td id="cDate"></td>
												</tr>
												<tr>
													<td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
													<td id="dress"></td>
												</tr>
												<tr>
													<td><i class="fa fa-globe" aria-hidden="true"></i></td>
													<td id="cntY"></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="card" style="border:none;">
										<div class="card-body">
											<div>
												<h2>Case Description</h3><hr>
													<p id="descri"></p>
													<p class="text-secondary" ><span id="agt"></span>, Agent reporting</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12 px-4 text-right">
										<button class="btn btn-secondary rounded-0 shadow-sm" onclick="print_this('callData')"> <i class="fa fa-print" aria-hidden="true"></i> Print</button>
										<button class="btn btn-primary rounded-0 shadow-sm"> <i class="fa fa-envelope" aria-hidden="true"></i>Sent as mail</button>
										<?php
											if($_SESSION['userType'] == "Administrator"){
												?>
													<span class="btn btn-danger" id="del"></span>
												<?php 
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="bg-white px-4 ">
			<img src="imgs/bookspingk.jpg" class="img-responsive w-100 my-2">
			<div class="table-responsive">
				<table id="example" class="table table-sm" >
					<thead class="mt-1" >
						<tr>
							<th>Caller Name</th>
							<th>Contact </th>
							<th>Address</th>
							<th>Case Category</th>
							<th>Date</th>
							<th>Reported By</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						include('model.php');
						$pdoObj = new Query();
						$recordBy = $_SESSION['name'];
						$record = $pdoObj->load_agent_log();

						while ($rows = $record->fetch()) {
							?>
							<tr>
								<td><?php echo $rows['callerName'] ?></td>
								<td><?php echo "+231".$rows['phone']; ?></td>					
								<td><?php echo $rows['address'] ?></td>
								<td><?php echo $rows['case_cat'] ?></td>
								<td><?php echo $rows['_date'] ?></td>					
								<td><button id="<?php echo $rows['id'] ?>" class="view btn btn-block btn-sm btn-outline-primary rounded-0">View Details</button></td>
							</tr>
							<?php 
						}
						?>
						<tfoot>
							<tr>
								<th>Member Name</th>
								<th>Amount </th>
								<th>Currency</th>
								<th>Payment for</th>
								<th>Date</th>
								<th>Details</th>
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
				$.ajax({
					type: "POST",
					url: "includes/call_detail_card.php",
					data:{
						call_id: pId,
						view_product:1
					},
					success: function(datas){
						info = JSON.parse(datas);

						$("#cName").html(info[1]);
						$("#cContact").html(info[2]);
						$("#cDate").html(info[3]);
						$("#cTime").html(info[4]);
						$("#dress").html(info[5]);
						$("#county").html(info[6]);
						$("#ccatt").html(info[8]);
						$("#descri").html(info[12]);
						$("#agt").html(info[11]);
						let del_link = "<a class='btn-dange' href = 'deletor.php?table=call_log&id="+info[0]+"'> Delete </a>";
						$("#del").html(del_link);


						$("#call_details").modal('show');
					}
				});
			});

		</script>