<?php
session_start();

if(isset($_GET['status'])) 
{
    if($_GET['status'] == 'deposit')
    {
        $_SESSION['log'] = 1;
    }
    else
    {
        $_SESSION['log'] = 2;
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewp   ort" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body style="background:#4B4B4B">
    <div style="margin-top:50px" class="container">
    <form action="check_login_bank.php" method="POST">
        <div class="form-group">
            <label style="color:white;">Account Number</label>
            <input type="text" class="form-control form-control-lg" name="acc_num" placeholder="Your Account Number">
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
    </html>
<?php
}
else
{
    echo '<script>alert("Error")</script>';
    header("refresh: 1.5; url=banking.php");
}
?>