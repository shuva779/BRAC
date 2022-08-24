<?php require 'connections.php';


$user_fullName =  $_POST['user_fullName'];
$user_userName =  $_POST['user_userName'];
$user_email =  $_POST['user_email'];
$user_gender =  $_POST['user_gender'];
$user_dob =  $_POST['user_dob'];
$user_qualification =  $_POST['user_qualification'];
$user_phone =  $_POST['user_phone'];
$user_password =  $_POST['user_password'];


      $m1 =  $_POST['user_div'];
      $sql1 = "SELECT * FROM divisions WHERE id= $m1";
      $gd1= mysqli_query($conn,$sql1);
      $abc1 = mysqli_fetch_assoc($gd1);
      $user_div =  $abc1['name'];


      $m2 =  $_POST['user_dis'];
      $sql2 = "SELECT * FROM districts WHERE id= $m2";
      $gd2= mysqli_query($conn,$sql2);
      $abc2 = mysqli_fetch_assoc($gd2);
      $user_dis =  $abc2['name'];

      $m3 =  $_POST['user_upa'];
      $sql3 = "SELECT * FROM upazilas WHERE id= $m3";
      $gd3= mysqli_query($conn,$sql3);
      $abc3 = mysqli_fetch_assoc($gd3);
      $user_upa =  $abc3['name'];



$user_fullAddress =  $_POST['user_fullAddress'];
$user_workexp =  $_POST['user_workexp'];
$user_pin =  $_POST['user_pin'];
$user_designation =  $_POST['user_designation'];
$user_empType =  $_POST['user_empType'];
$user_joinDate =  $_POST['user_joinDate'];
$user_branchName =  implode(" ",$_POST['user_branchName']);
$user_region =  $_POST['user_region'];
$user_rm =  $_POST['user_rm'];
$user_dm =  $_POST['user_dm'];
$user_am =  $_POST['user_am'];
$user_projectName =  implode(" ",$_POST['user_projectName']);

$m4 =  $_POST['user_pdiv'];
$sql4 = "SELECT * FROM divisions WHERE id= $m4";
$gd4= mysqli_query($conn,$sql4);
$abc4 = mysqli_fetch_assoc($gd4);
$user_pdiv =  $abc4['name'];


$m5 =  $_POST['user_pdis'];
$sql5 = "SELECT * FROM districts WHERE id= $m5";
$gd5= mysqli_query($conn,$sql5);
$abc5 = mysqli_fetch_assoc($gd5);
$user_pdis =  $abc5['name'];

$m6 =  $_POST['user_pupa'];
$sql6 = "SELECT * FROM upazilas WHERE id= $m6";
$gd6= mysqli_query($conn,$sql6);
$abc6 = mysqli_fetch_assoc($gd6);
$user_pupa =  $abc3['name'];


$srch= $_POST['user_email'];
$sql="UPDATE user SET  

user.user_fullName='$user_fullName',
user.user_userName='$user_userName',
user.user_email='$user_email',
user.user_gender='$user_gender',
user.user_dob='$user_dob',
user.user_qualification='$user_qualification',
user.user_phone='$user_phone',
user.user_password='$user_password',
user.user_div='$user_div',
user.user_dis='$user_dis',
user.user_upa='$user_upa',
user.user_fullAddress='$user_fullAddress',
user.user_workexp='$user_workexp',
user.user_pin='$user_pin',
user.user_designation='$user_designation',
user.user_empType='$user_empType',
user.user_joinDate='$user_joinDate',
user.user_branchName='$user_branchName',
user.user_region='$user_region',
user.user_rm='$user_rm',
user.user_dm='$user_dm',
user.user_am='$user_am',
user.user_projectName='$user_projectName',
user.user_pdiv='$user_pdiv',
user.user_pdis='$user_pdis',
user.user_pupa='$user_pupa'




 WHERE user.user_email='$srch'";



$update_query = mysqli_query($conn,$sql);

                // UPDATE USER DATA
            

                //CHECK DATA UPDATED OR NOT
                if($update_query){

                    header('Location: '.'welcome.php');

                }else{
                    echo "<h3>Opps something wrong!</h3>";
                }
 
 ?>
