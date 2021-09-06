  <!-- The Modal -->
  <div class="modal fade " id="myProfile">
    <div class="modal-dialog modal-xl bg-transparent modal-dialog-centered">
      <div class="modal-content bg-transparent" style="border:none;">
        <!-- Modal body -->
        <div class="modal-body bg-white">
          <div class="h-100 profile-container">
            <div class="row align-items-center h-100 p-4">
              <div class="col-md-10 offset-md-1">
                <div class="card shadow-lg">
                  <div class="card-header py-5 city_header">
                    <div class="py-2"></div>
                  </div>
                  <div class="row px-5" style="margin-top: -60px">
                    <div class="col-5">
                      <center>
                        <img src="<?php echo $_SESSION['pic']; ?>" style="width: 150px; height: 150px;" class="rounded-circle">
                        </center>
                      </div>
                      <div class="col-7 text-right">
                        <a href="dashboard.php" class="my-btn btn btn-lg">Exit Profile</a>
                      </div>
                    </div>

                    <div class="card-body" id="my_prifile">
                      <div class="row py-3">
                        <div class="col-md-5 text-center">
                          <div class="card" style="border:none; border-right: 2px dotted black;">
                            <div class="card-body">
                              <h3><?php echo $_SESSION['name']; ?></h3>
                              <p class="text-secondary mb-2" ><?php echo $_SESSION['sex']; ?> | <?php echo $_SESSION['userType']; ?></p>
                              <table class="table table-sm mt-4">
                                <tr>
                                  <td><i class="fa fa-mobile" aria-hidden="true"></i> Contact</td>
                                  <td><?php echo $_SESSION['phoneNo']; ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-envelope" aria-hidden="true"></i> Email</td>
                                  <td><?php echo $_SESSION['email']; ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-key" aria-hidden="true"></i>Pswd. </td>
                                  <td><button class="btn btn-sm btn-outline-success">click to view</i></button></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-user" aria-hidden="true"></i> Acc'nt.</td>
                                  <td><?php echo $_SESSION['userType']; ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-calendar" aria-hidden="true"></i> Shift</td>
                                  <td><?php echo $_SESSION['shift']; ?></td>
                                </tr>
                                <tr>
                                  <td><i class="fa fa-map-marker" aria-hidden="true"></i>Address</td>
                                  <td><?php echo $_SESSION['address']; ?></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div class="card" style="border:none;">
                            <div class="card-body">
                              <div>
                                <h1 class="text-primary">Contract Summary</h1>
                                  <p class="text-secondary"> Tarnue P. Borbor,Agent</p>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 px-4 text-right">
                            <button class="btn btn-secondary rounded-0 shadow-sm" onclick="print_this('my_prifile')"> <i class="fa fa-print" aria-hidden="true"></i> Print</button>
                            <?php 
                              if($_SESSION['userType'] == "Administrator"){
                                ?>
                                  <a href="deletor.php?table=users&id=<?php echo $_SESSION['id'] ?>" class="btn btn-danger rounded-0 shadow-sm"> <i class="fa fa-trash" aria-hidden="true"></i>Delete</a>
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
          </div>
        </div>
      </div>
