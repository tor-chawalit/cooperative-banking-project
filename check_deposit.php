<?php 
session_start();
include("connect.php");

if(isset($_POST["submit"])&&isset($_SESSION["acc_num"]))
{ 
    $bank_100 = 0;
    $bank_500 = 0;
    $bank_1000 = 0;
    $bank_1000 = intval($_POST["bank_1000"]);
    $bank_500 = intval($_POST["bank_500"]);
    $bank_100 = intval($_POST["bank_100"]);

    if($bank_1000 == "")
    {
        $bank_1000 = 0;
    }
    elseif($bank_500 == "")
    {
        $bank_500 = 0;
    }
    elseif($bank_500 == "")
    {
        $bank_100 = 0;
    }

    if($bank_100>=1||$bank_500>=1||$bank_1000>=1)
    {
        $amount = ($bank_1000 * 1000) + ($bank_500 * 500) + ($bank_100 * 100);

        if($amount > 200000)
        {
            echo '<script>alert("สามารถฝากได้ไม่เกิน 2แสนบาท")</script>';
            session_destroy();
            header("refresh: 2; url=banking.php");
        }
        else
        {
            $acc_num          =   $_SESSION["acc_num"];
            $sql_user         =   "SELECT * FROM `user` WHERE `acc_num` = '$acc_num'";
            $res_user         =   mysqli_query($conn, $sql_user)or die("[ERROR]");
            $row_user         =   mysqli_fetch_array($res_user);

            $f_name          =  $row_user['first_name'];
            $l_name          =  $row_user['last_name'];
            $sql_transaction =  "INSERT INTO `transaction`(`acc_num`, `amount`, `datetime` , `type`) VALUES ('$acc_num' , '$amount' , NOW(), 'ฝากเงิน')";
            $res_transaction =  mysqli_query($conn, $sql_transaction)or die("[ERROR]");

            
            
            $sql = "SELECT * FROM `bank_atm`";
            $res = mysqli_query($conn, $sql)or die("[ERROR]");
            $row = mysqli_fetch_assoc($res);
            $bank_1000_int = intval($row["bank_1000"]);
            $bank_500_int = intval($row["bank_500"]);
            $bank_100_int = intval($row["bank_100"]);
            
            $sql_atm =  "UPDATE `bank_atm` SET `bank_1000`= $bank_1000_int + $bank_1000, `bank_500`= $bank_500_int + $bank_500 , `bank_100`= $bank_100_int + $bank_100 WHERE `bank_atm_id`= 1";
            $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
            
            if($res_transaction && $res_atm)
            {
                $balance     =   $row_user["balance"];
            
                $sql_atm =  "UPDATE `user` SET `balance`= $balance + $amount WHERE `acc_num` = '$acc_num'";
                $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
                
                echo '<script>alert("=============\nBanking\n----------------------\nรายการ\n----------------------\nยอดเงินทั้งหมด : '.$amount.' บาท");</script>' ;
                session_destroy();
                header("refresh: 0; url=banking.php");
            }
        }
    }
    else
    {
        echo '<script>alert("กรุณากรอกข้อมูลให้ถูกต้อง")</script>';
        header("refresh: 2; url=deposit.php");
    }
}
else
{
    echo '<script>alert("Error")</script>';
    session_destroy();
    header("refresh: 1.5; url=banking.php");
}
?>