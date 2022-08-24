<?php
  require 'connections.php';

  $srch= $_GET['id'];
  $city_query = 'SELECT * FROM user WHERE (user_email LIKE "%'.$srch.'%") ';
  $get_data= mysqli_query($conn,$city_query);
  $abc = mysqli_fetch_assoc($get_data);


      $fullName =  $abc['user_fullName'];
      $userName =  $abc['user_userName'];
      $email =  $abc['user_email'];
      $gender =  $abc['user_gender'];
      $dob =  $abc['user_dob'];
      $qualification =  $abc['user_qualification'];
      $phone =  $abc['user_phone'];
      $password =  $abc['user_password'];
      $div =  $abc['user_div'];
      $dis =  $abc['user_dis'];
      $upa =  $abc['user_upa'];
      $fullAddress =  $abc['user_fullAddress'];
      $workexp =  $abc['user_workexp'];
      $pin =  $abc['user_pin'];
      $designation =  $abc['user_designation'];
      $empType =  $abc['user_empType'];
      $joinDate =  $abc['user_joinDate'];
      $branchName =  $abc['user_branchName'];
      $rm =  $abc['user_rm'];
      $dm =  $abc['user_dm'];
      $am =  $abc['user_am'];
      $projectName =  $abc['user_projectName'];
      $pdiv =  $abc['user_pdiv'];
      $pdis =  $abc['user_pdis'];
      $pupa =  $abc['user_pupa'];

      
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>
    
<form action="update.php" method="post">
    <div class="container mt-5">
              <h3>Personal Information</h3> <br>
            <div class="row g-3">
              <div class="col-md-6">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="user_fullName" value="<?php echo $fullName ?>"required>
              </div>
              <div class="col-md-6">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="user_userName" value="<?php echo $userName ?>"required>
              </div>
              <div class="col-md-6">
                  <label for="email" class="form-label">Email address</label>
                  <input type="text" class="form-control" name="user_email" value="<?php echo $email ?>" required>
              </div>
              <div class="col-md-6">
                  <label for="gender" class="form-label">Gender</label>
                  <select class="custom-select" name="user_gender" value="<?php echo $gender ?>" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
              </div>
              <div class="col-md-6">
                  <label for="name" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" name="user_dob" value="<?php echo date('Y-m-d', strtotime($dob)) ?>" required>
              </div>
              <div class="col-md-6">
                  <label for="username" class="form-label">Education Qualification</label>
                  <input type="text" class="form-control" name="user_qualification" value="<?php echo $qualification ?>" required>
              </div>
              <div class="col-md-6">
                  <label for="email" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" name="user_phone" value="<?php echo $phone ?>" pattern="[0]{1}[1]{1}[0-9]{3}[0-9]{6}" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="user_password" placeholder="Password" value="<?php echo $password ?>">
              </div>

              <div class="col-md-6">
                <label for="gender" class="form-label">Division</label>
                <select class="custom-select" name="user_div" id="slc1" onchange="populate(this.id,'slc2')"  required>
                  <option value="">-- Choose Division --</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Barisal">Barisal</option>
                  <option value="Chittagong">Chittagong</option>
                  <option value="Khulna">Khulna</option>
                  <option value="Mymensingh">Mymensingh</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Rangpur">Rangpur</option>
                  <option value="Sylhet">Sylhet</option>
                </select>
            </div>

              

              <div class="col-md-6">
                  <label for="email" class="form-label">District</label>
                <select class="custom-select" name="user_dis" id="slc2"  required>
                </select>
              </div>

              
            <div class="col-md-6">
                <label for="username" class="form-label">Upazila/Thana</label>
                <input type="text" class="form-control" name="user_upa"  required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Full Address</label>
                <input type="text" class="form-control" name="user_fullAddress" value="<?php echo $fullAddress ?>"  required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Work Experience</label>
              <input type="text" class="form-control" name="user_workexp" value="<?php echo $workexp ?>" required>
          </div>
      </div>
    </div>




    <div class="container mt-5">
      <h3>Job Information</h3> <br>
    <div class="row g-3">
      <div class="col-md-6">
          <label for="name" class="form-label">PIN Number</label>
          <input type="text" class="form-control" name="user_pin" value="<?php echo $pin ?>" required>
      </div>
      <div class="col-md-6">
          <label for="username" class="form-label">Role/Designation</label>
          <input type="text" class="form-control" name="user_designation" value="<?php echo $designation ?>" required>
      </div>
      <div class="col-md-6">
          <label for="email" class="form-label">Employment Type</label>
          <input type="text" class="form-control" name="user_empType" value="<?php echo $empType ?>" required>
      </div>
      <div class="col-md-6">
          <label for="gender" class="form-label">Joining Date</label>
          <input type="date" class="form-control" name="user_joinDate" value="<?php echo date('Y-m-d', strtotime($joinDate)) ?>" required>
      </div>
</div>
</div>



<div class="container mt-5">
  <h3>Branch Information</h3> <br>
<div class="row g-3">
  <div class="col-md-6">
      <label for="name" class="form-label">Branch Name</label>
      <select class="custom-select multiple-select" name="user_branchName[]" required multiple>
      <?php
          $query1="SELECT * FROM branch";
          $get_data1= mysqli_query($conn,$query1);
          if(mysqli_num_rows($get_data1)>0)
          {
            foreach($get_data1 as $roww){
              ?>
                <option value="<?php echo $roww['branch_name'];?>"><?php echo $roww['branch_name']?></option>
              <?php
            }           
          }
      ?>
      </select>
  </div>

  <div class="col-md-6">
      <label for="username" class="form-label">RM Name</label>
      <input type="text" class="form-control" name="user_rm" value="<?php echo $rm ?>" required>
  </div>
  <div class="col-md-6">
      <label for="email" class="form-label">DM Name</label>
      <input type="text" class="form-control" name="user_dm" value="<?php echo $dm ?>" required>
  </div>
  <div class="col-md-6">
      <label for="gender" class="form-label">AM Name</label>
      <input type="text" class="form-control" name="user_am" value="<?php echo $am ?>" required>
  </div>
</div>
</div>



<div class="container mt-5">
  <h3>Project Information</h3> <br>
<div class="row g-3">

  <div class="col-md-6">
      <label for="name" class="form-label">Project Name</label>
      <select class="custom-select multiple-select" name="user_projectName[]"  required multiple>
      <?php
          $query="SELECT * FROM project";
          $get_data= mysqli_query($conn,$query);
          if(mysqli_num_rows($get_data)>0)
          {
            foreach($get_data as $row){
              ?>
                <option value="<?php echo $row['project_name'];?>"><?php echo $row['project_name']?></option>
              <?php
            }           
          }
      ?>
      </select>
  </div>
  
  <div class="col-md-6">
    <label for="gender" class="form-label">Division</label>
    <select class="custom-select" name="user_pdiv" id="slct1" onchange="populate(this.id,'slct2')"  required>
      <option value="">-- Choose Division --</option>
      <option value="Dhaka">Dhaka</option>
      <option value="Barisal">Barisal</option>
      <option value="Chittagong">Chittagong</option>
      <option value="Khulna">Khulna</option>
      <option value="Mymensingh">Mymensingh</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="Rangpur">Rangpur</option>
      <option value="Sylhet">Sylhet</option>
    </select>
</div>



    
  
  <div class="col-md-6">
      <label for="email" class="form-label">District</label>
    <select class="custom-select" name="user_pdis" id="slct2" required>
    </select>
    <script>
      function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
          s2.innerHTML ="";
          if(s1.value == 'Dhaka'){
            var optionarray = ['Dhaka|Dhaka','Gazipur|Gazipur','Kishoreganj|Kishoreganj','Manikganj|Manikganj','Munshiganj|Munshiganj','Narayanganj|Narayanganj','Narsingdi|Narsingdi','Tangail|Tangail','Faridpur|Faridpur','Gopalganj|Gopalganj','Madaripur|Madaripur','Rajbari|Rajbari','Shariatpur|Shariatpur']
          }

          else if(s1.value == 'Barisal'){
            var optionarray = ['Barisal|Barisal','Barguna|Barguna','Bhola|Bhola','Jhalokati|Jhalokati','Patuakhali|Patuakhali','Pirojpur|Pirojpur']
          }
          else if(s1.value == 'Chittagong'){
            var optionarray = ['Brahmanbaria|Brahmanbaria','Comilla|Comilla','Chandpur|Chandpur','Lakshmipur|Lakshmipur','Noakhali|Noakhali','Feni|Feni','Khagrachhari|Khagrachhari','Rangamati|Rangamati','Bandarban|Bandarban','Cox Bazar|Cox Bazar']
          }
          else if(s1.value == 'Khulna'){
            var optionarray = ['Bagerhat|Bagerhat','Chuadanga|Chuadanga','Jashore|Jashore','Jhenaidah|Jhenaidah','Khulna|Khulna','Kushtia|Kushtia','Magura|Magura','Meherpur|Meherpur','Narail|Narail','Satkhira|Satkhira']
          }
          else if(s1.value == 'Mymensingh'){
            var optionarray = ['Mymensingh|Mymensingh','Jamalpur|Jamalpur','Netrokona|Netrokona','Sherpur|Sherpur']
          }
          else if(s1.value == 'Rajshahi'){
            var optionarray = ['Rajshahi|Rajshahi','Sirajganj|Sirajganj','Pabna|Pabna','Bogura|Bogura','Chapainawabganj|Chapainawabganj','Naogaon|Naogaon','Joypurhat|Joypurhat','Natore|Natore']
          }
          else if(s1.value == 'Rangpur'){
            var optionarray = ['Dinajpur|Dinajpur','Kurigram|Kurigram','Gaibandha|Gaibandha','Lalmonirha|Lalmonirha','Nilphamari|Nilphamari','Panchagarh|Panchagarh','Rangpur|Rangpur','Thakurgaon|Thakurgaon']
          }
          else if(s1.value == 'Sylhet'){
            var optionarray = ['Habiganj|Habiganj','Moulvibazar|Moulvibazar','Sunamganj|Sunamganj','Sylhet|Sylhet']
          }
          

          for(var option in optionarray){
            var pair = optionarray[option].split("|");
            var newoption =document.createElement("option");

            newoption.value = pair[0];
            newoption.innerHTML= pair[1];
            s2.options.add(newoption);
          }

      }

    </script>
  </div>
  <div class="col-md-6">
      <label for="gender" class="form-label">Upazila/Thana</label>
      <input type="text" class="form-control" name="user_pupa"  required>
  </div>  <br>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">I have added all data correctly. </label>
  </div>
</div>
</div>

<div class="container mt-5">
  <button type="submit" class="btn btn-primary mb-md-5 ">Submit</button>
</div>

</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
      $(".multiple-select").select2({
  //maximumSelectionLength: 2
  });







  
    </script>

  </body>
</html>