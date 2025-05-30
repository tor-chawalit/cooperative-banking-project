<?php 
    session_start();

    include("connect.php");
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
    if(isset($_POST["Submit"])) 
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `password` = '$password'";
        $res = mysqli_query($conn, $sql)or die("[ERROR]");
        $row = mysqli_fetch_assoc($res);

        if ($row)
        {   
            $_SESSION["email"] = $row['email'];
            $_SESSION["password"] = $row['password'];
            
            echo '<div class="alert alert-success d-flex align-items-center my-5">';
            echo '<h3 class="center">กำลังเข้าสู่ระบบ รอสักครู่...</h3>';
            echo '</div>';
            header("refresh: 2; url=admin.php");
        }
        else
        {
            echo '<div class="container">';
            echo '<div class="alert alert-danger text-center" role="alert">ข้อมูลผู้ใช้งานไม่ถูกต้อง กรุณาเข้าสู่ระบบอีกครั้ง...</div>';
            echo '<a href="login_admin_sty.php" class="btn btn-primary btn-sm btn-block ">Back</a>';
            echo '</div>';
        }
           
    }
    
?>