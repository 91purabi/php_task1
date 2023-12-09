<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Here</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
  </script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="signupstyle.css">
    <script>
        function validateForm() {
            var fullname = document.forms["signupForm"]["fullname"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["password"].value;
            var confirm_password = document.forms["signupForm"]["confirm_password"].value;

            if (fullname === "" || email === "" || password === "" || confirm_password === "") {
                alert("All fields must be filled out");
                return false;
            }

            if (password !== confirm_password) {
                alert("Passwords do not match");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <form name="signupForm" class="bg-light p-4 rounded">
            <h2 class="text-center mb-4">Register</h2>
            <div class="mb-3">
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name:" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email:" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password:" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="confirmpassword" name="confirm_password" placeholder="Confirm Password:" required>
            </div>
            <div class="form-btn">
                <button type="submit" class="btn btn-primary w-100 bg-info text-white">Register</button>
                <p class="mt-3">Already have an account? <a href="login.php">Login Here</a></p>
            </div>
        </form>
    </div>


    <script>
    $(document).ready(function() {
      $("form").submit(function(event) {
        
        event.preventDefault();

        $.ajax({
          type: "POST",
          url: "savesignupdata.php",
          data:{
            fullname:$("#fullname").val(),
            email:$("#email").val(),
            password:$("#password").val(),
            confirmpassword:$("#confirmpassword").val()
        },
          success: function(response) {
            console.log(response);
          }
        })

      });
    });
  </script>

</body>
</html>
