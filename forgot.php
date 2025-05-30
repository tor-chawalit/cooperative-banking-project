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
    <h2 style="text-align:center;">Forgot Password</h2>
    <div style="width:400px; background-color:#FFFFFF; height:450px; margin-top:50px" class="container">        
    <form action="check_forgot.php" method="post">
        <div class="form-group">
            <label>Card Id Number</label>
            <input type="text" class="form-control" id="id_num" name="id_num" placeholder="Your card number" maxlength="13" pattern="[0-9]+">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Your E-mail">
        </div>

        <div class="form-group">
            <label>New Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="New Password" maxlength="6" pattern="[0-9]+">
        </div>
        <div class="form-group">
            <label>Comfirm your password</label>
            <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Confirm New password" maxlength="6" pattern="[0-9]+">
        </div>
        <input type="submit" value="submit" class="btn btn-primary" name="submit">
        <input  type="reset" value="reset"class="btn btn-danger">
        <a href="login.php" class="link-secondary m-1">Back</a>
    </form>
    </div>
</body>
</html>