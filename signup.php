<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Here</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="mt-5 text-center">Register</h1>
    <div class="container">
        <!-- <?php
         if (isset($_POST["submit"])) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $confirmpassword = $_POST["confirm_password"];
            $error = array();
            if (empty($fullName) OR empty($email) OR empty($password) OR empty($confirmpassword)) {
                array_push($errors,"All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if(strlen($password)<8){
                array_push($errors,"Password must be at least 8 characters long");
            }
            if($password!==$confirmpassword){
                array_push($errors,"Password does not match");
            }

            if (count($errors)>0) {
                foreach ($errors as $error){
                    echo "<div class='alert alert-danger'></div>";
                }
            }else{
                //We will insert the data into database
            }
         }
        ?> -->
        <form action="signup.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password:">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name="Register" placeholder="Submit">Already have an account?<a href="login.php">Login Here</a>
            </div>
        </form>
    </div>
</body>
</html>