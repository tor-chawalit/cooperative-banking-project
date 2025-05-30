<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("connect.php");
if(isset($_SESSION["acc_num"]))
{
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>deposit</title>
</head>
<body>
<?php
         $acc = $_SESSION["acc_num"];
         $sql_user         =  "SELECT * FROM `user` WHERE `acc_num` = '$acc'";
         $res_user         =   mysqli_query($conn, $sql_user)or die("[ERROR]");
         $row_user         =   mysqli_fetch_array($res_user);
?>
<header>
        <div class="banner">
            <img src="https://www.citypng.com/public/uploads/preview/free-round-blue-bank-icon-png-11640250737wqyhgimzkr.png" alt="LOGO">
            <h1>Banking &#129689;<p><?php echo "Hi! ". $f_name = $row_user["first_name"]." ".$l_name = $row_user["last_name"]; ?></p></h1>
        </div>
</header>
<div class="form-group">
    <form action="check_deposit.php" method="post">
    <h2>Enter the amount you wish to deposit</h2>
    <p>Bank 1000</p>
    <input type="number" placeholder="Bank Amount..." name="bank_1000">
    <p>Bank 500</p>
    <input type="number" placeholder="Bank Amount..." name="bank_500">
    <p>Bank 100</p>
    <input type="number" placeholder="Bank Amount..." name="bank_100"><br><br>
    <input type="submit" name="submit" value="ENTER">
    </form>
    <a href="banking.php"><button class="cancel">CANCEL</button></a>
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