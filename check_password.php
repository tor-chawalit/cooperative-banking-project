<?php
session_start();

include("connect.php");
if(isset($_POST["Submit"]) && isset($_SESSION["acc_num"]) && $_POST["password"] != null) 
{
    $acc_num     =   $_SESSION["acc_num"];
    $password    =   $_POST["password"];
    $sql         =   "SELECT * FROM `user` WHERE `password` = '$password' AND `acc_num` = '$acc_num'";
    $res         =   mysqli_query($conn, $sql)or die("[ERROR]");
    $row         =   mysqli_fetch_array($res);
    if($row)
    {
        echo "กำลังเข้าสู่ระบบ...";
        if($_SESSION['log'] == 1)
        {
            header("refresh: 1.5; url=deposit.php");
        }
        else
        {
            header("refresh: 1.5; url=withdraw.php");
        }
    }
    else
    { 
        $sqli         =   "SELECT * FROM `user` WHERE `acc_num` = '$acc_num'";
        $resi         =   mysqli_query($conn, $sqli)or die("[ERROR]");
        $rowi         =   mysqli_fetch_array($resi);
        $status       =   $rowi['status'] + 1;
        $sql_check   =   "UPDATE user SET status = '$status' WHERE `acc_num` = '$acc_num'";
        $res_check   =   mysqli_query($conn, $sql_check)or die("[ERROR");
        $sqli        =   "SELECT * FROM `user` WHERE `acc_num` = '$acc_num'";
        $resi        =   mysqli_query($conn, $sqli)or die("[ERROR]");
        $rowi        =   mysqli_fetch_array($resi);
        if($rowi['status'] == 3)
        {
            echo "บัญชีคุณถูกระงับ";
            header("refresh: 1.5; url=login_bank.php");
        }
        else
        {
            echo "คุณมีโอกาสกรอกได้อีก " .(3 - $rowi['status']). " รอบ";
            header("refresh: 2; url=password_bank.php");
        }

    }
}
else
{
    echo "กรุณากรอก password";
    header("refresh: 1.5; url=password_bank.php");
}
?>