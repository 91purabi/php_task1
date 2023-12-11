<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$database_name = "employee_db";
$db_con = mysqli_connect($servername, $username, $password, $database_name);




$fullname = $_POST['fullname'];
$mob_num = $_POST['mob_no'];
$user_password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$qryCheck = "select count(*) as count from employee_details where mobile_number='" . $mob_num . "'";
$run = mysqli_query($db_con, $qryCheck);
$row = mysqli_fetch_array($run);
$count = $row['count'];
if ($count <= 0) {
    $query = "INSERT INTO employee_details(name,mobile_number,password, status)VALUES ('" . $fullname . "', '" . $mob_num . "', '" . $user_password . "','ON')";
    $result = mysqli_query($db_con, $query);
    if ($result) {
        echo "Success";
    } else {
        echo "Fail";
    }
}else{
    echo "Exist";
}
