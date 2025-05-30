<?php
session_start();

include ("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <title>ADMIN</title>
</head>
<body>
<div style="width:400px; background-color:#FFFFFF; height:450px; margin-top:50px" class="container">
    <h2 style="text-align:center;">Login Admin</h2>
    <form action="check_admin.php" method="post">
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password"maxlength="4">
        </div>
        <div> <br>
            <input type="submit" class="btn btn-primary" name="Submit" value="Login">
            <input type="reset" class="btn btn-danger" value="Reset">
        </div>
    </form>
    </div>
</body>
</html>