<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$database_name = "employee_db";
$db_con = mysqli_connect($servername, $username, $password, $database_name);


$mob_no = $_POST['mobile_number'];
$sql = "UPDATE employee_details SET status='OFF' WHERE  mobile_number = '".$mob_no."'";
$result = mysqli_query($db_con, $sql);
if ($result) {
    echo "Success";
} else {
    echo "Fail";
}


