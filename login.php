<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/font.css">
    <title>Login</title>
</head>
<div style="width:400px; background-color:#FFFFFF; height:450px; margin-top:50px" class="container">
    <h2 style="text-align:center;">Login</h2>
    <form action="check_login.php" method="post">
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password"maxlength="4">
        </div> <br>
        <div>
            <input type="submit" class="btn btn-primary m-1" name="Submit" value="Login">
            <input type="reset" class="btn btn-danger m-1" value="Reset">
            <a href="register.php" class="link-secondary m-1">Register</a>
            <a href="forgot.php" class="link-secondary m-1">Forgot Password</a>
        </div>

    </form>
    </div>
</body>
<!-- Footer -->
<?php
include "./templates/footer.php";
?>
</html>