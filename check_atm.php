<?php
session_start();
include("connect.php");
if(isset($_SESSION["username"]))
{
    if(isset($_POST["Submit"]))
    {
        $bank_100    =   $_POST["bank_100"];
        $bank_500    =   $_POST["bank_500"];
        $bank_1000   =   $_POST["bank_1000"];
        if($bank_1000 >= 0 && $bank_500 >= 0 && $bank_100 >= 0)
        {
            if($bank_1000 > 0 || $bank_500 > 0 || $bank_100 > 0)
            {
                $sql_update  =   "UPDATE bank_atm SET bank_100 = '$bank_100', bank_500 = '$bank_500', bank_1000 = '$bank_1000' WHERE bank_atm_id = ".$_SESSION["bank_atm_id"]."";
                $res_update  =   mysqli_query($conn,$sql_update)or die("[ERROR]");
            
                if($res_update)
                {
                    echo '<script>alert("แก้ไขข้อมูลเรียบร้อย")</script>';
                    header("refresh: 2; url=atm.php");
                }
            }
            else
            {
                echo '<script>alert("แก้ไขข้อมูลให้ถูกต้อง")</script>';
                header("refresh: 2; url=atm.php");
            }

        }
        else
        {
            echo '<script>alert("แก้ไขข้อมูลให้ถูกต้อง")</script>';
            header("refresh: 2; url=atm.php");
        }
    }
}
else
{
    echo '<script>alert("คุณไม่ได้login")</script>';
    header("refresh: 2; url=login_admin_sty.php");
}
?>