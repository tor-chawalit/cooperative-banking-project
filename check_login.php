<?php
session_start();

include("connect.php");
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
    if(isset($_POST["Submit"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];

       
        $sql = "SELECT * FROM `user` WHERE `password` = '$password' AND `email` = '$email'";  
        $res = mysqli_query($conn, $sql)or die("[ERROR]");
        $row = mysqli_fetch_array($res);
        if(empty($email))
        {
            echo "กรุณากรอกอีเมล";
            header("refresh: 1.5; url=login.php");
        }
        elseif(empty($password))
        {
            echo "กรุณากรอกรหัสผ่าน";
            header("refresh: 1.5; url=login.php");
        }
        elseif(empty($row))
        {
            echo '<div class="container">';
            echo '<div class="alert alert-danger text-center" role="alert">ข้อมูลผู้ใช้งานไม่ถูกต้อง กรุณาเข้าสู่ระบบอีกครั้ง...</div>';
            echo '<a href="login.php" class="btn btn-primary btn-sm btn-block ">BACK</a>';
            echo '</div>';
        }
        elseif($row['status'] == 3)
        {
            echo '<div class="container">';
            echo '<div class="alert alert-danger text-center" role="alert">คุณถูกบล็อคเพราะใส่รหัสผ่านผิดเกิน3ครั้งกรุณาแจ้งแอดมิน...</div>';
            echo '<a href="login.php" class="btn btn-primary btn-sm btn-block ">BACK</a>';
            echo '</div>';
        }
        else
        {
            $acc_num = $row["acc_num"];
            $_SESSION["email"] = $email;
            $_SESSION["acc_num"] = $acc_num;
            echo '<div class="alert alert-success d-flex align-items-center my-5">';
            echo '<h3 class="center">กำลังเข้าสู่ระบบ รอสักครู่...</h3>';
            echo '</div>';
            header("refresh: 2; url=index.php");
        
        }  
        }   
    else
    {
        echo "กรุณากรอกข้อมูล";
        header("refresh: 1.5; url=login.php");
    }
?>