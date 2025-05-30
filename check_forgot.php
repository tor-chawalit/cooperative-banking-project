<?php 
session_start();

include ("connect.php");
if(isset($_POST["submit"]))
{
    $id_num = $_POST["id_num"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $c_password = $_POST['c_password'];

    $sql         =   "SELECT * FROM user WHERE card_id = '$id_num' AND email = '$email' ";
    $res         =   mysqli_query($conn, $sql)or die("[ERROR]");
    $row         =   mysqli_fetch_array($res);
    if(empty($id_num))
    {
        echo '<div class="container">';
        echo '<div class="alert alert-danger text-center" role="alert">กรุณากรอกรหัสบัตรประชาชน...</div>';
        header("refresh: 2; url=register.php");        
        echo '</div>';
    }
    elseif(empty($email))
    {
        echo '<div class="container">';
        echo '<div class="alert alert-danger text-center" role="alert">กรุณากรอกอีเมล...</div>';
        header("refresh: 2; url=register.php");        
        echo '</div>';
    }
    elseif ($password != $c_password) 
    {
        echo '<div class="container">';
        echo '<div class="alert alert-danger text-center" role="alert">รหัสผ่านของคุณไม่ตรงกัน...</div>';
        header("refresh: 2; url=register.php");        
        echo '</div>';
    }
    elseif(!$row)
    {
        echo '<div class="container">';
        echo '<div class="alert alert-danger text-center" role="alert">ไม่มีข้อมูลในระบบ...</div>';
        header("refresh: 2; url=register.php");        
        echo '</div>';
    }
    else
    {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
        $sql_atm =  "UPDATE user SET  password =  '$password' WHERE card_id = '$id_num' ";
        $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");

        $sql_user = "SELECT * FROM user";
        $res_user =  mysqli_query($conn, $sql_user)or die("[ERROR]");
        $row_user            =   mysqli_fetch_array($res_user);

        echo "<h1 style='text-align:center;'>สมัครบัญชีสำเร็จ</h1>";
        echo '<div style = background:#F1F1F1;>
        <p style = margin:2em>เลขบัตร : '. $row_user['card_id'].'</p>
        <p style = margin:2em>อีเมล : '.$row_user['email'].'</p>
        <p style = margin:2em>หมายเลขบัญชี : '.$row_user['acc_num'].'</p>
        <p style = margin:2em>ชื่อ-นามสกุล : '.$row_user['first_name']." ".$row_user['last_name'].'</p>
        <p style = margin:2em>รหัสผ่านใหม่ : '.$row_user['password'].'</p>
                </div>';
        echo '<a href="login.php" class="btn btn-primary btn-lg btn-block">Login</a>';
        //header("refresh: 5; url=login.php");        
    }
}
?>