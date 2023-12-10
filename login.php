<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Login</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
  </script>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">

</head>

<body class="background" style="background-color: #b3d9d9;">
  <div class="container  vh-100">
    <div class="row justify-content-center h-100">
      <div class="card w-25 my-auto shadow rounded">
        <div class="card-header text-center bg-info text-white">
          Employee Login
        </div>
        <div class="card-body">
          <form class="was-validated">
            <div class="form-group">
              <label for="mobile_number">Mobile Number</label>
              <input type="tel" id="mobile_number" class="form-control rounded" name="mobile_number" pattern="[0-9]+" title="Please enter only numbers" required />
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" class="form-control rounded" name="pswd" required />
            </div>
            <input type="submit" class="btn btn-primary w-100 bg-info text-white" value="Login" name="">
            <div class="footer">New User? <a href="signup.php">Sign up</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $("form").submit(function(event) {

        event.preventDefault();

        $.ajax({
          type: "POST",
          url: "checkLogin.php",
          data: {
            mobilenum: $("#mobile_number").val(),
            password: $("#password").val()
          },
          success: function(response) {
            //var returnedData = JSON.parse(response);
            console.log(response);
            if(response == 'Success'){
              //alert ("Valid user")
              window.location='./success.php';

            } else {
              alert ("Invalid user")
            }
          }
        })

      });
    });
  </script>
  </head>

  <body>



  </body>

</html>