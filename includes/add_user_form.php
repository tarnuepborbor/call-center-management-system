  <!-- The Modal -->
  <div class="modal fade " id="addUserForm">
    <div class="modal-dialog modal-xl bg-transparent modal-dialog-centered">
      <div class="modal-content bg-transparent" style="border:none;">
        <!-- Modal body -->
        <div class="modal-body bg-info p-4">
          <div class="card-header  city_header">
            <h3 class="display-3 text-white text-center">Add new user to system </h3>
          </div>
          <div class="card-body bg-white">
            <form action="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
              <div class="row col-equal-height bg-white ">
                <div class="col-md-4">
                  <div class="card-body ">
                    <img src="imgs/placehoder.jpg" class="img w-100 shadow-sm mb-4" id="imgOutput">
                    <input type="file" name="fileToUpload" class="form-control" accept="image/*" aria-label="coverImg"  onchange="document.getElementById('imgOutput').src = window.URL.createObjectURL(this.files[0])" required>  
                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Profile Pic</label>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="modal-body mx-3">
                    <div class="md-form  mb-2"> 
                      <input type="text" id="orangeForm-name" name="name" class="form-control validate" required>
                      <label data-error="wrong" data-success="right" class="text-success" for="orangeForm-name">User Full Name</label>
                    </div>
                    <div class="md-form mb-2"> 
                      <input type="email" name="email" id="orangeForm-email" class="form-control validate" required>
                      <label data-error="wrong"  data-success="right"  for="orangeForm-email">User's email</label>
                    </div>
                    <div class="md-form mb-2"> 
                      <input type="number" name="phoneNo" id="orangeForm-email" class="form-control validate" required>
                      <label data-error="wrong"  data-success="right" class="text-success" for="orangeForm-email">User's phone #</label>
                    </div>

                    <div class="md-form mb-2"> 
                      <div class="row">
                        <div class="col">
                          <input type="password" name="password1" id="orangeForm-pass" class="form-control validate" required>
                          <label data-error="wrong"  data-success="right" class="text-success" for="orangeForm-pass">Create password</label>
                        </div>
                        <div class="col">
                          <input type="password"name="password2" id="orangeForm-pass" class="form-control validate" required>
                          <label data-error="wrong" data-success="right" class="text-success" for="orangeForm-pass">Verify Password</label>
                        </div>
                      </div>
                    </div>
                    <div class="md-form mb-2"> 
                      <select name="shift" class="form-control form-control-lg" required>
                        <option value="" class="">choose shift...</option>
                        <option value="One" class="">Shift One</option>
                        <option value="Two" class="">Shift Two</option> 
                        <option value="Three" class="">Shift Three</option> 
                        <option value="Not specified" class="">Not Specified</option> 
                      </select>
                      <label data-error="wrong"  data-success="right" class="text-success" for="orangeForm-pass">Choose the user sex</label>
                    </div>
                    <div class="md-form mb-2"> 
                      <div class="row">
                        <div class="col">
                          <select name="sex" class="form-control form-control-lg" required>
                            <option value="" class="">choose sex...</option>
                            <option value="Male" class="">Male</option>
                            <option value="Female" class="">Female</option> 
                          </select>
                          <label data-error="wrong"  data-success="right" class="text-success" for="orangeForm-pass">Choose the user sex</label>
                        </div>
                        <div class="col">
                          <select name="userType" class="form-control form-control-lg" required>
                            <option  value="" class="">select...</option>
                            <option value="Administrator" class="">Supervisor</option>
                            <option value="Call center agent" class="">Call Agent</option> 
                            <option value="Administrator" class="">Call Agent but admin to this platform</option> 
                          </select>
                          <label data-error="wrong"  data-success="right" class="text-success" for="orangeForm-pass">Choose account type</label>
                        </div>
                      </div>
                    </div>

                    <div class="md-form mb-2"> 
                      <div class="row"> 
                        <div class="col">
                          <textarea class="form-control " name="address" row="3" placeholder="Enter the agent's address" required></textarea>
                          <label data-error="wrong" data-success="right" class="text-success" for="orangeForm-pass">Give detail address of the user</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 ">
                        <button class="btn btn-lg btn-block btn-outline-info  btn-block" style="border-radius: 20px">Add User</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include_once('includes/model.php');
    $target_dir = "uploads/"; 
    $target_file = $target_dir .rand(10,10000). basename($_FILES["fileToUpload"]["name"]);

    $name = $_POST['name'];
    $phoneNo = $_POST['phoneNo'];
    $email = $_POST['email'];
    $password = $_POST['password1'];
    $shift = $_POST['shift'];
    $userType = $_POST['userType']; 
    $address = $_POST['address'];
    $sex = $_POST['sex'];

    $data = [

      'name' => $name,
      'phoneNo' => $phoneNo,
      'email' => $email,
      'password' => $password,
      'shift' => $shift,
      'userType' => $userType, 
      'address' => $address,
      'sex' => $sex, 
      'pic' => $target_file 
    ];


    $pdo = new Query();
    $check = $pdo->load_user_details($email);

    if ($check->rowCount() == 0) {
      // file upload  handlerr

      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }


// Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }



// Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "<script>alert(Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
      $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "<script>alert(Sorry, your file was not uploaded.)</script>";
// if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

       if($pdo->save_user()->execute($data)){

        echo "<script>alert('New User Have been added successfully.'); window.location = 'users.php'</script>";

      };
    } else {
      echo "<script>alert(Sorry, there was an error uploading your file.)</script>";
    }
  }
      // file upload handler ends here


}else{
  echo "<script>alert('A user already has that email. Please try another email')</script>";
}



}

?>