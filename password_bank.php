<?php
session_start();
include("connect.php");

if(isset($_SESSION["acc_num"]))
{
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Password page</title>
    </head>
    <body style="background:#4B4B4B">
        <div style="margin-top:50px" class="container">
    <form action="check_password.php" method="POST">
        <div class="form-group">
            <label style="color:white;">Password</label>
            <input type="password" class="form-control form-control-lg" name="password" maxlength="6" placeholder="Your Password" >
        </div>
        <div> <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <input type="submit" class="btn-lg btn-primary lg" name="Submit" value="Enter">
            <input type="reset" class="btn-lg btn-danger" value="Clear">
            </div>
        </div>
    </form>
    </div>
    </body>
    </body>
    </html>
<?php
}
else 
{
    echo '<script>alert("คุณยังไม่ได้กรอกข้อมูล")</script>';
    header("refresh: 1.5; url=login.php");
}
?>