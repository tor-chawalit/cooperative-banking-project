<?php 
session_start();
include("connect.php");

if(isset($_POST["submit"])&&isset($_SESSION["acc_num"]))
{
   
    $amount =  $_POST["amount"];
    if($amount > 100000)
    {
        echo '<script>alert("สามารถถอนได้ไม่เกิน 1แสนบาท")</script>';
        session_destroy();
        header("refresh: 2; url=banking.php");
    }
    elseif($amount!=""&&$amount>0&&$amount%100==0)
    { 
     
        $acc_num     =   $_SESSION["acc_num"];
        $sql_user         =  "SELECT * FROM `user` WHERE `acc_num` = '$acc_num'";
        $res_user         =   mysqli_query($conn, $sql_user)or die("[ERROR]");
        $row_user         =   mysqli_fetch_array($res_user);
        $balance          =   $row_user['balance'];

        if($amount<=$balance)
        {
            $bank_1000 = floor($amount/1000);
            $bank_500 = floor(($amount%1000) / 500);
            $bank_100 = floor(($amount%500) / 100);
            
            $sql = "SELECT * FROM `bank_atm`";
            $res = mysqli_query($conn, $sql)or die("[ERROR]");
            $row = mysqli_fetch_assoc($res);
            $bank_1000_int = intval($row["bank_1000"]);
            $bank_500_int = intval($row["bank_500"]);
            $bank_100_int = intval($row["bank_100"]);

            if($bank_1000_int >= $bank_1000 && $bank_500_int >= $bank_500 && $bank_100_int >= $bank_100 )   
            {
                $f_name = $row_user['first_name'];
                $l_name = $row_user['last_name'];
                
                $sql_transaction = "INSERT INTO `transaction`(`acc_num`, `amount`, `datetime`, `type`) VALUES ('$acc_num' , '$amount' , NOW(), 'ถอนเงิน')";
                $res_transaction =  mysqli_query($conn, $sql_transaction)or die("[ERROR]");
                
                if($bank_1000==0)
                {
                    $sql_atm =  "UPDATE `bank_atm` SET  `bank_500`= $bank_500_int - $bank_500 , `bank_100`= $bank_100_int - $bank_100 WHERE `bank_atm_id`= 1";
                    $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
                }
                elseif($bank_1000==0&&$bank_500==0)
                {
                    $sql_atm =  "UPDATE `bank_atm` SET  `bank_100`= $bank_100_int - $bank_100 WHERE `bank_atm_id`= 1";
                    $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
                }
                elseif($bank_500==0&&$bank_100==0)
                {
                    $sql_atm =  "UPDATE `bank_atm` SET  `bank_1000`= $bank_1000_int - $bank_1000 WHERE `bank_atm_id`= 1";
                    $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
                }
                elseif($bank_100==0&&$bank_1000==0)
                {
                    $sql_atm =  "UPDATE `bank_atm` SET  `bank_500`= $bank_500_int - $bank_500 WHERE `bank_atm_id`= 1";
                    $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
                }
                elseif($bank_1000==0&&$bank_500==0)
                {
                    $sql_atm =  "UPDATE `bank_atm` SET  `bank_100`= $bank_100_int - $bank_100 WHERE `bank_atm_id`= 1";
                    $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
                }
                else
                {
                    $sql_atm =  "UPDATE `bank_atm` SET `bank_1000`= $bank_1000_int - $bank_1000, `bank_500`= $bank_500_int - $bank_500 , `bank_100`= $bank_100_int - $bank_100 WHERE `bank_atm_id`= 1";
                    $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");
                }

      
                $sql_atm =  "UPDATE `user` SET `balance`= $balance - $amount WHERE `acc_num` = '$acc_num'";
                $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");

                echo '<script>alert("=============\nSTY Banking\n----------------------\nรายการ\n----------------------\nแบงค์ 1000 : '.$bank_1000.' ใบ\nแบงค์ 500 : '.$bank_500.' ใบ\nแบงค์ 100 : '.$bank_100.' ใบ\n=============");</script>';
                session_destroy();
                header("refresh: 0; url=banking.php");
                    
            }
            else
            {
                echo '<script>alert("จำนวนเงินในATMไม่เพียงพอ")</script>';
                session_destroy();
                header("refresh: 2; url=banking.php");
            }
        }
        else
        {
            echo '<script>alert("จำนวนเงินในบัญชีไม่เพียงพอ")</script>';
            session_destroy();
            header("refresh: 2; url=banking.php");
        }
    }
    else
    {
        echo '<script>alert("กรุณากรอกข้อมูลให้ถูกต้อง")</script>';
        header("refresh: 1.5; url=withdraw.php");
    }
   
}
else
{
    echo '<script>alert("Error")</script>';
    header("refresh: 1.5; url=banking.php");
}
?>