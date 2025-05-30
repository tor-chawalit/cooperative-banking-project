<?php 
session_start();

include ("connect.php");
if(isset($_POST["submit"]))
{
    $id_num = $_POST["id_num"];
    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $lname = $_POST["lname"];
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
    elseif(empty($fname))
    {
        echo '<div class="container">';
        echo '<div class="alert alert-danger text-center" role="alert">กรุณากรอกชื่อ...</div>';
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
    elseif(empty($lname))
    {
        echo '<div class="container">';
        echo '<div class="alert alert-danger text-center" role="alert">กรุณากรอกนามสกุล...</div>';
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
        echo '<div class="alert alert-danger text-center" role="alert">มีข้อมูลในระบบแล้ว...</div>';
        header("refresh: 2; url=register.php");        
        echo '</div>';
    }
    else
    {
    $sql      = "SELECT * FROM user";
    $res      = mysqli_query($conn, $sql)or die("[ERROR]");
    $rowcheck = mysqli_fetch_array($res);
    if($rowcheck == null)
    {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
        $first    = "00001";
        $sql_user = "INSERT INTO `user`(`email`,`card_id`,`first_name`,`last_name`,`password`, `acc_num`,`balance`) VALUES ('$email','$id_num','$fname', '$lname', '$password', '$first','0')";
        $res_user =  mysqli_query($conn, $sql_user)or die("[ERROR]");
        echo "<h1 style='text-align:center;'>สมัครบัญชีสำเร็จ</h1>";
        echo '<div style = background:#F1F1F1;>
        <p style = margin:2em>เลขบัตร : '.$id_num.'</p>
        <p style = margin:2em>อีเมล : '.$email.'</p>
        <p style = margin:2em>ชื่อ : '.$fname.'</p>
        <p style = margin:2em>นามสกุล : '.$lname.'</p>
        <p style = margin:2em>รหัสผ่าน : '.$password.'</p>
                </div>';
        echo '<a href="login.php" class="btn btn-primary btn-lg btn-block">Login</a>';
    }
    else
    {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
        $check          =   "SELECT acc_num FROM user ORDER BY user_id DESC LIMIT 1";
        $res_check      =   mysqli_query($conn, $check)or die("[ERROR]");
        $row            =   mysqli_fetch_array($res_check);
        $acc_num        =   $row["acc_num"];
        $new        =       "";
        $intq       =       intval($acc_num) + 1;
        $intlen     =       strlen(strval($intq));

        for($j = 1; $j <= (strlen($acc_num) - $intlen); $j++)
        {
            $new    =   $new . "0";
        }
        $new       =    $new.strval($intq);
        
        $sql_user = "INSERT INTO `user`(`email`,`card_id`,`first_name`,`last_name`,`password`, `acc_num`,`balance`) VALUES ('$email','$id_num','$fname', '$lname', '$password', '$new','0')";
        $res_user =  mysqli_query($conn, $sql_user)or die("[ERROR]");
        echo "<h1 style='text-align:center;'>สมัครบัญชีสำเร็จ</h1>";
        echo '<div style = background:#F1F1F1;>
        <p style = margin:2em>เลขบัตร : '.$id_num.'</p>
        <p style = margin:2em>อีเมล : '.$email.'</p>
        <p style = margin:2em>ชื่อ : '.$fname.'</p>
        <p style = margin:2em>นามสกุล : '.$lname.'</p>
        <p style = margin:2em>รหัสผ่าน : '.$password.'</p>
                </div>';
        echo '<a href="login.php" class="btn btn-primary btn-lg btn-block">Login</a>';
        //header("refresh: 5; url=login.php");        
    }
    }
}
?>