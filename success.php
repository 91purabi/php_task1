<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location:invaliduser.php");
    die();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>

<body>
    <h1>Success Page!</h1>
    <button onclick="employeeUpdate()">Status off</button>


    <button onclick="employeeDelete()">Delete</button>
    <script>
        function employeeUpdate() {
            console.log("Function working")
            $.ajax({
                type: "POST",
                url: "updatestatus.php",
                data: {
                     mobile_number: "<?php echo $_SESSION['username']; ?>"
                },
                success: function(response) {
                    //var returnedData = JSON.parse(response);
                    console.log(response);
                    
                    if (response == 'Success') {
                         alert('Status is off!');
                         window.location = './login.php';

                    } else {
                        alert("Error.");
                    }
                }
            })
        }

        function employeeDelete() {
            console.log("Function working")
            $.ajax({
                type: "POST",
                url: "deletestatus.php",
                data: {
                     mobile_number: "<?php echo $_SESSION['username']; ?>"
                },
                success: function(response) {
                    //var returnedData = JSON.parse(response);
                    console.log(response);
                    
                    if (response == 'Success') {
                         alert('Delete Successfully!')
                         window.location = './login.php';

                    } else {
                        alert("Error.")
                    }
                }
            })
        }
    </script>
</body>

</html>