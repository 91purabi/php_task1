<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Login</title>
   <link rel="stylesheet" href="bootstrap.css">
   <link rel="stylesheet" href="bootstrap.min.css">
   </style>
</head>
<body class="background" style="background-color: #b3d9d9;">
  <div class="container  vh-100">
    <div class="row justify-content-center h-100">
      <div class="card w-25 my-auto shadow rounded">
        <div class="card-header text-center bg-info text-white">
          Employee Login
        </div>
        <div class="card-body">
          <form action="" method="" class="was-validated">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="username" id="username" class="form-control rounded" name="uname" required/>
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
</body>
</html>