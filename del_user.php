<?php 
session_start();
include "connect.php";

if(isset($_POST))
{
    $user_id = $_POST['user_id'];
    $sql = "DELETE FROM user WHERE user_id = $user_id";
    $res = mysqli_query($conn, $sql) or die("[ERROR]");

    if($res)
    {
        echo "ลบข้อมูลสำเร็จ รอสักครู่...";
    }
    else
    {
        echo "ลบข้อมูลไม่สำเร็จ รอสักครู่...";
    }
}
?>