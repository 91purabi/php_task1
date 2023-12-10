<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$database_name = "employee_db";
$db_con = mysqli_connect($servername, $username, $password, $database_name);


$mobilenumber = $_POST['mobilenum'];
$password = $_POST['password'];

$query = "SELECT * FROM employee_details WHERE mobile_number='".$mobilenumber."' AND password='".$password."' AND status='ON'";
$result = mysqli_query($db_con, $query);
if($row=mysqli_fetch_array($result)){

	$user=$row["mobile_number"];
	$pass=$row["password"];
	
	$_SESSION["username"]=$user;
	$_SESSION["password"]=$pass;

	echo "Success";
}
else{	
	echo "Error";		
}




?>
