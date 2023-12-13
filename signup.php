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
        // Javascript function for form validation
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
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name:" pattern="[A-Za-z\s]+" title="Please enter a valid name (letters only)" required>
                <div class="invalid-feedback">Please enter a valid name (letters only).</div>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile number:" pattern="[0-9]+" title="Please enter a valid mobile number (numeric characters only)" required>
                <div class="invalid-feedback">Please enter a valid mobile number (numeric characters only).</div>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password:" pattern=".{8,}" title="Password must be at least 8 characters long" required>
                <div class="invalid-feedback">Password must be at least 8 characters long.</div>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="confirmpassword" name="confirm_password" placeholder="Confirm Password:" pattern=".{8,}" title="Password must be at least 8 characters long" required>
                <div class="invalid-feedback">Password must be at least 8 characters long.</div>
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
                    data: {
                        fullname: $("#fullname").val(),
                        mob_no: $("#mobile_number").val(),
                        password: $("#password").val(),
                        confirmpassword: $("#confirmpassword").val()
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.trim() == "Success") {
                            window.location = './login.php';
                            
                        } else if (response.trim() == 'Exist') {
                            alert('User already exist')
                        } else {
                            alert('Error!')
                        }

                    }
                })

            });
        });
    </script>

</body>

</html>