<?php
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$email = $_POST['email'];
$confirmpassword = $_POST['confirmpassword'];

$obj = [ 
    $fullname,
    $email,
    $password,
    $confirmpassword
];

echo json_encode($obj)

?>