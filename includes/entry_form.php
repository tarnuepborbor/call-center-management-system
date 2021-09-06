  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog modal-xl bg-transparent modal-dialog-centered">
      <div class="modal-content bg-transparent" style="border:none;">
        <!-- Modal body -->
        <div class="modal-body bg-info p-4">
          <div class="card-body">

            <div class="row col-equal-height bg-white ">
              <div class="col-md-12">
                <div class="alert bg-light alert-sm mt-3 p-2 text-info  shadow-sm" style="border-left: 8px solid red;">
                    <div id="info2"></div>
                </div>
              </div>
              <div class="col-md-8 ">
                <div class="card card-body " style="border:none;">
                  <input type="text" id="callerName" class="form-control p-4 mt-2 mb-3" placeholder="Caller's full id ">

                  <div class="row">
                    <div class="col-md-6">
                      <input type="number" id="phone" class="form-control p-4 mt-2 mb-3" placeholder="Caller's contact ">
                    </div>
                    <div class="col-md-6">
                      <input type="date" id="date" class="form-control p-4 mt-2 mb-3">
                    </div>
                    <div class="col-md-6">
                      <input type="time" id="time" class="form-control p-4 mt-2 mb-3">
                    </div>
                    <div class="col-md-6">
                       <select id="sex" class="form-control form-control-lg">
                          <option value="">...Sex</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" id="address" class="form-control p-4 mt-2 mb-3" placeholder="Caller address ">
                    </div>
                    <div class="col-md-6 pt-2">
                      <div class="form-group">
                        <select id="county" class="form-control form-control-lg">
                          <option value="">Call origin</option>
                          <option value="Montserrado">Montserrado</option>
                          <option value="Lofa">Lofa</option>
                          <option value="Margibi">Margibi</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <input type="text" id="landMark" class="form-control p-4 mt-2 mb-3" placeholder="Nearby Land Mark">

                  <div class="row">
                    <div class="col-md-6 pt-2">
                      <div class="form-group">
                        <select id="call_cat" class="form-control form-control-lg">
                          <option value="">Call Category</option>
                          <option>Sucessful</option>
                          <option>Unsuccessful</option>
                          <option>Prank Call</option>
                          <option>Wrong Call</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pt-2">
                      <div class="form-group">
                        <select id="case_cat" class="form-control form-control-lg">
                          <option value="">Case Category</option>
                          <option>Gender Based Violence</option>
                          <option>Child Abuse/Protection</option>
                          <option>Maternal Health</option>
                          <option>Others</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 p-2 pt-2">
                      <div class="form-group">
                        <select id="shift" class="form-control form-control-lg">
                          <option value="">Choose Shift</option>
                          <option value="1">Shift One</option>
                          <option value="2">Shift Two</option>
                          <option value="3">Shift Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 p-2 pt-2">
                      <div class="form-group">
                        <select id="supervisor" class="form-control form-control-lg">
                          <option>Shift Supervisor</option>
                          <option>Mr. Sylvestrees A. Johnson</option>
                          <option>Menyeh</option>
                        </select>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div class="col-md-4">
                <div class="card-body ">

                  <div class="text-danger" id="info">
                    
                  </div>
                  <center>
                  <input type="text" placeholder="" id="editor" class="form-control form-control-lg p-4 mb-4">
                    <button id="save_calllog" class="btn btn-block btn-info mt-4 mb-3">Save Call Info</button>
                    <p><small class="text-secondary mb-0">By clicking save, means you dld kfd fkefe fkef </small></p>
                    <input type="reset" value="Clear/Reset Form" class="btn btn-outline-info">
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $("#info2").html("<p class='lead'>Fill out the form fields to log a call detail</p>");

    $('#save_calllog').click(function(){
      let Msg = "";
      let error = 0;
      let callerName = $('#callerName').val();
      let phone = $('#phone').val();
      let date = $('#date').val();
      let time = $('#time').val();
      let address = $('#address').val();
      let county = $('#county').val();
      let landMark = $('#landMark').val();
      let case_cat = $('#case_cat').val();
      let call_cat = $('#call_cat').val();
      let shift = $('#shift').val(); 
      let caseDescription = $('#editor').val();
      let supervisor = $('#supervisor').val();
      let recordBy = "<?php echo $_SESSION['name'] ?>";
      console.log(recordBy);

      function check(var_name, err_msg){
        if(var_name == ""){
          error += 1;
          Msg += "<li>"+err_msg+"</li>";
      }
    }
      let phone_start = phone.slice(0,1);

      if( !phone_start == '77' || !phone_start == '88'){
        error += 1;
        Msg += '<li>phone number should start with 77 or 88 not 0</li>';
      }

      if(phone.length !== 9){
        error += 1;
        Msg += '<li>Phone number is short</li>';
      }

    check(callerName, "Caller name is a must!");
    check(phone, "Caller phone number must be provided");
    check(date, "Date of call is required");
    check(time, "The time of call is requird");
    check(address, "Caller address is required");
    check(case_cat, "Please choose case category");
    check(shift, "What shift are you one");
    check(supervisor, "Please choose your shift supervisor");
    check(call_cat, "Call category cannot be blank"); 
    check(caseDescription, "Case description is required");
    if(error == 0){

      $.ajax({
        type: "POST",
        url: "includes/saveCall.php",

        data:{

          _callerName: callerName,
          _phone:phone,
          _date:date,
          _time:time,
          _address:address,
          _county:county,
          _landMark:landMark,
          _case_cat:case_cat,
          _call_cat:call_cat,
          _shift:shift,
          _supervisor:supervisor,
          _recordBy:recordBy,
          _caseDescription:caseDescription,
          save_call_log:0

        },
        success: function(datas){

        if(datas.indexOf("success") == 0){
            $("#info").html("");
            Msg  = '<h3>'+recordBy+'you have successfully log a call! </h3>';
            $("#info2").html(Msg);
            setTimeout(function(){ window.location = 'dashboard.php'; }, 3000);
        }
        console.log(datas)
      }
    })


    }else{
      $("#info2").html("<h3 class='class:text-danger'>"+error+" erros deteted. fix them and proceed</h3>");
      $("#info").html(Msg);
    }



  });
</script>