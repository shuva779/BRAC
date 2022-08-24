<?php 
require 'connections.php';

function get_all_data($conn){
    $srch= $_POST["find"];
    $city_query = 'SELECT * FROM user WHERE (user_email LIKE "%'.$srch.'%") ';
    $get_data= mysqli_query($conn,$city_query);
    $abc = mysqli_fetch_assoc($get_data);
    if(mysqli_num_rows($get_data) > 0){
        echo '<table class="table table-bordered ml-5">
 
      <tbody >

        <tr>
        <th scope="row">Full Name</th>
          <td>'.$abc['user_fullName'].'</td>
        </tr>
        <tr>
        <th scope="row">Username</th>
          <td>'.$abc['user_userName'].'</td>
        </tr>
        <tr>
        <th scope="row">Email address</th>
          <td>'.$abc['user_email'].'</td>
        </tr>
        <tr>
        <th scope="row">Gender</th>
          <td>'.$abc['user_gender'].'</td>
        </tr>
        <tr>
        <th scope="row">Date of Birth</th>
          <td>'.date('Y-m-d', strtotime($abc['user_dob'])).'</td>
        </tr>
        <tr>
        <th scope="row">Education Qualification</th>
          <td>'.$abc['user_qualification'].'</td>
        </tr>
        <tr>
        <th scope="row">Phone Number</th>
          <td>'.$abc['user_phone'].'</td>
        </tr>
        <tr>
        <th scope="row">Division</th>
          <td>'.$abc['user_div'].'</td>
        </tr>
        <tr>
        <th scope="row">District</th>
          <td>'.$abc['user_dis'].'</td>
        </tr>
        <tr>
        <th scope="row">Upazila/Thana</th>
          <td>'.$abc['user_upa'].'</td>
        </tr>
        <tr>
        <th scope="row">Full Address</th>
          <td>'.$abc['user_fullAddress'].'</td>
        </tr>
        <tr>
        <th scope="row">Work Experience</th>
          <td>'.$abc['user_workexp'].'</td>
        </tr>
        <tr>
        <th scope="row">PIN Number</th>
          <td>'.$abc['user_pin'].'</td>
        </tr>
        <tr>
        <th scope="row">Role/Designation</th>
          <td>'.$abc['user_designation'].'</td>
        </tr>
        <tr>
        <th scope="row">Employment Type</th>
          <td>'.$abc['user_empType'].'</td>
        </tr>

        

        <tr>
        <th scope="row">Joining Date</th>
        <td>'.date('Y-m-d', strtotime($abc['user_joinDate'])).'</td>
        </tr>
        <tr>
        <th scope="row">Branch Name</th>
        <td>'.$abc['user_branchName'].'</td>
        </tr>
        <tr>
        <th scope="row">Region</th>
        <td>'.$abc['user_region'].'</td>
        </tr>
        <tr>
        <th scope="row">RM Name</th>
        <td>'.$abc['user_rm'].'</td>
        </tr>
        <tr>
        <th scope="row">DM Name</th>
        <td>'.$abc['user_dm'].'</td>
        </tr>
        <tr>
        <th scope="row">AM Name</th>
        <td>'.$abc['user_am'].'</td>
        </tr>
        <tr>
        <th scope="row">Project Name</th>
        <td>'.$abc['user_projectName'].'</td>
        </tr>
        <tr>
        <th scope="row">Division</th>
        <td>'.$abc['user_pdiv'].'</td>
        </tr>
        <tr>
        <th scope="row">District</th>
        <td>'.$abc['user_pdis'].'</td>
        </tr>
        <tr>
        <th scope="row">Upazila/Thana</th>
        <td>'.$abc['user_pupa'].'</td>
        </tr>


        
      </tbody>


              </table>
              
        <a class="btn btn-primary mb-md-5 ml-3" role="button" href="welcome.php?id='.$abc['user_email'].'">GO Back</a>
        <a class="btn btn-primary mb-md-5" role="button" href="edit.php?id='.$abc['user_email'].'">Edit</a> 
              '
              
              ;
    }else{
        echo '<h6 class="ml-md-3">No records found. Please insert some records</h6>';
        ?>
          <a class="btn btn-primary ml-md-3" role="button" href="add.php">Add user</a>
        <?php
    }
}

?>





<!doctype html>
<html lang="en">
  <head>
    <title>View</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    
<h3 class="navbar navbar-expand-lg navbar-light bg-light">View Data</h3>
<?php
// calling get_all_data function
get_all_data($conn);
?>
<!-- END OF SHOW DATA SECTION -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
