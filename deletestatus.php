<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$database_name = "employee_db";
$db_con = mysqli_connect($servername, $username, $password, $database_name);


$mobile_num = $_POST['mobile_number'];
$sql = "DELETE FROM employee_details WHERE mobile_number = '".$mobile_num."'";

$result = mysqli_query($db_con, $sql);
if ($result) {
    echo "Success";
} else {
    echo "Fail";
}







