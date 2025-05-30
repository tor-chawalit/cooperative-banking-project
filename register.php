<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body style="background-color:#E8E8E8;">
    <h2 style="text-align:center;">Create Account</h2>
    <!-- <form action="check_register.php" method="post">
        <p>Card Id Number</p>
        <input type="text" name="id_num">
        <p>Firstname</p>
        <input type="text" name="fname">
        <p>Lastname</p>
        <input type="text" name="lname">
        <p>password</p>
        <input type="password" name="password">
        <input type="submit" name="submit">
        <form> -->
    <div style="width:400px; background-color:#FFFFFF; height:450px; margin-top:50px" class="container">        
    <form action="check_register.php" method="post">
        <div class="form-group">
            <label>Card Id Number</label>
            <input type="text" class="form-control" name="id_num" placeholder="Your card number" maxlength="13">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your email">
        </div>

        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname" placeholder="Your Firstname">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lname" placeholder="Your Lastname">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password"maxlength="4">
        </div>
        <div class="form-group">
            <label>Comfirm your password</label>
            <input type="password" class="form-control" name="c_password" placeholder="Confirm password" maxlength="4">
        </div> <br>
        <div class="container">
            <input type="submit" class="btn btn-primary m-1" name="submit" value="Confirm">
            <input type="reset" class="btn btn-danger m-1"value="Reset">
            <a href="login.php" class="link-secondary m-1">Back</a>
        </div>
    </form>
    </div>
</body>
<?php
include "./templates/footer.php";
?>
</html>