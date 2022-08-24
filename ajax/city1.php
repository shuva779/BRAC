<?php
include '../connection.inc.php';

$state_id =  $_POST['state_data'];

$city = "SELECT * FROM upazilas WHERE district_id = $state_id ORDER BY name";
$city_qry = mysqli_query($conn, $city);


$output = '<option value="">Select State</option>';
while ($city_row = mysqli_fetch_assoc($city_qry)) {
    $output .= '<option value="' . $city_row['id'] . '">' . $city_row['name'] . '</option>';
}
echo $output;
