<?php
   include('connections.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Add</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
<form action="insert.php" method="post">
    <div class="container mt-5">
              <h3>Personal Information</h3> <br>
            <div class="row g-3">
              <div class="col-md-6">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="user_fullName" required>
              </div>
              <div class="col-md-6">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="user_userName" required>
              </div>
              <div class="col-md-6">
                  <label for="email" class="form-label">Email address</label>
                  <input type="text" class="form-control" name="user_email" required>
              </div>
              <div class="col-md-6">
                  <label for="gender" class="form-label">Gender</label>
                  <select class="custom-select" name="user_gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
              </div>
              <div class="col-md-6">
                  <label for="name" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" name="user_dob" required>
              </div>
              <div class="col-md-6">
                  <label for="username" class="form-label">Education Qualification</label>
                  <input type="text" class="form-control" name="user_qualification" required>
              </div>
              <div class="col-md-6">
                  <label for="email" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" name="user_phone" pattern="[0]{1}[1]{1}[0-9]{3}[0-9]{6}" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="user_password" placeholder="Password">
              </div>

              <div class="col-md-6">
                <label for="gender" class="form-label">Division</label>
                <select class="custom-select" name="user_div" id="slc1" onchange="populate(this.id,'slc2')" required>
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
                <select class="custom-select" name="user_dis" id="slc2" required>
                </select>
              </div>

              
            <div class="col-md-6">
                <label for="username" class="form-label">Upazila/Thana</label>
                <input type="text" class="form-control" name="user_upa" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Full Address</label>
                <input type="text" class="form-control" name="user_fullAddress" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Work Experience</label>
              <input type="text" class="form-control" name="user_workexp" required>
          </div>
      </div>
    </div>




    <div class="container mt-5">
      <h3>Job Information</h3> <br>
    <div class="row g-3">
      <div class="col-md-6">
          <label for="name" class="form-label">PIN Number</label>
          <input type="text" class="form-control" name="user_pin" required>
      </div>
      <div class="col-md-6">
          <label for="username" class="form-label">Role/Designation</label>
          <input type="text" class="form-control" name="user_designation" required>
      </div>
      <div class="col-md-6">
          <label for="email" class="form-label">Employment Type</label>
          <input type="text" class="form-control" name="user_empType" required>
      </div>
      <div class="col-md-6">
          <label for="gender" class="form-label">Joining Date</label>
          <input type="date" class="form-control" name="user_joinDate" required>
      </div>
</div>
</div>



<div class="container mt-5">
  <h3>Branch Information</h3> <br>
<div class="row g-3">
  <div class="col-md-6">
      <label for="name" class="form-label">Branch Name</label>
      <input type="text" class="form-control"  name="user_branchName" required>
  </div>
  <div class="col-md-6">
      <label for="username" class="form-label">RM Name</label>
      <input type="text" class="form-control" name="user_rm" required>
  </div>
  <div class="col-md-6">
      <label for="email" class="form-label">DM Name</label>
      <input type="text" class="form-control" name="user_dm" required>
  </div>
  <div class="col-md-6">
      <label for="gender" class="form-label">AM Name</label>
      <input type="text" class="form-control" name="user_am" required>
  </div>
</div>
</div>



<div class="container mt-5">
  <h3>Project Information</h3> <br>
<div class="row g-3">
  <div class="col-md-6">
      <label for="name" class="form-label">Project Name</label>
      <input type="text" class="form-control" name="user_projectName" required>
  </div>
  
  <div class="col-md-6">
    <label for="gender" class="form-label">Division</label>
    <select class="custom-select" name="user_pdiv" id="slct1" onchange="populate(this.id,'slct2')" required>
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
      <input type="text" class="form-control" name="user_pupa" required>
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
  </body>
</html>