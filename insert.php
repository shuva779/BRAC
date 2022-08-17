<?php
  require 'connections.php';

  //echo($_POST['user_gender']);


      $user_fullName =  $_POST['user_fullName'];
      $user_userName =  $_POST['user_userName'];
      $user_email =  $_POST['user_email'];
      $user_gender =  $_POST['user_gender'];
      $user_dob =  $_POST['user_dob'];
      $user_qualification =  $_POST['user_qualification'];
      $user_phone =  $_POST['user_phone'];
      $user_password =  $_POST['user_password'];
      $user_div =  $_POST['user_div'];
      $user_dis =  $_POST['user_dis'];
      $user_upa =  $_POST['user_upa'];
      $user_fullAddress =  $_POST['user_fullAddress'];
      $user_workexp =  $_POST['user_workexp'];
      $user_pin =  $_POST['user_pin'];
      $user_designation =  $_POST['user_designation'];
      $user_empType =  $_POST['user_empType'];
      $user_joinDate =  $_POST['user_joinDate'];
      $user_branchName =  $_POST['user_branchName'];
      $user_rm =  $_POST['user_rm'];
      $user_dm =  $_POST['user_dm'];
      $user_am =  $_POST['user_am'];
      $user_projectName =  $_POST['user_projectName'];
      $user_pdiv =  $_POST['user_pdiv'];
      $user_pdis =  $_POST['user_pdis'];
      $user_pupa =  $_POST['user_pupa'];

      //print_r($_POST['user_gender']);
     
      $sql="INSERT INTO user(`user_fullName`,`user_userName`,`user_email`,`user_gender`,`user_dob`,`user_qualification`,`user_phone`,`user_password`,`user_div`,`user_dis`,`user_upa`,`user_fullAddress`,`user_workexp`,`user_pin`,`user_designation`,`user_empType`,`user_joinDate`,`user_branchName`,`user_rm`,`user_dm`,`user_am`,`user_projectName`,`user_pdiv`,`user_pdis`,`user_pupa`)
      values('$user_fullName','$user_userName','$user_email','$user_gender','$user_dob','$user_qualification','$user_phone','$user_password','$user_div','$user_dis','$user_upa','$user_fullAddress','$user_workexp','$user_pin','$user_designation','$user_empType','$user_joinDate','$user_branchName','$user_rm','$user_dm','$user_am','$user_projectName','$user_pdiv','$user_pdis','$user_pupa')";
$result=mysqli_query($conn,$sql);




//CHECK DATA UPDATED OR NOT
if($result){

    header('Location: '.'welcome.php');

}else{
    echo "<h3>Opps something wrong!</h3>";
}

?>