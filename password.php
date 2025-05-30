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
    <title>Password page</title>
</head>
<body>
    <form action="check_password.php" method="post">
    <h3>กรอกรหัสผ่านของคุณ</h3><input type="password" id="password" maxlength="4" name="password" placeholder = "กรอกรหัสผ่านของคุณ4ตัว" ><br><br>
    <input type="submit" name="Submit" value = "ตกลง">
    </form>
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