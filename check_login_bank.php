<?php
session_start();
include("connect.php");

    if(isset($_POST["Submit"]))
    {
        $acc_num =  $_POST["acc_num"];
        $sql     =  "SELECT * FROM `user` WHERE `acc_num` = '$acc_num' ";
        $res     =  mysqli_query($conn, $sql)or die("[ERROR]");
        $row     =  mysqli_fetch_array($res);
        if ($row) 
        {
            $_SESSION['acc_num'] = $row['acc_num'];
            if($row['status'] == 3)
            {
                echo "บัญชีถูกระงับ";
                header("refresh: 1.5; url=login_bank.php");
            }
            else
            {
                header("refresh: 1.5; url=password_bank.php");
            }
        }
        else 
        {
            echo '<script>alert("กรอกเลขบัญชีไม่ถูกต้อง")</script>';
            header("refresh: 1.5; url=login_bank.php");
        }
    }
   
?>