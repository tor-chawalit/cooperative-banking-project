<?php
session_start();
include("connect.php");

if (isset($_SESSION['email'])) {
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>เงินปันผล</title>
</head>
<body>
<?php 
include "./templates/header.php";
?>

<?php
    $email = $_SESSION['email'];
    $sql = "SELECT `acc_num` FROM `user` WHERE `email` = '$email' ";
    $res = mysqli_query($conn, $sql)or die("[ERROR]");
    $row = mysqli_fetch_assoc($res);

    $acc_num = $row['acc_num'];
    $date_Y = date("Y");

    $sql = "SELECT MIN(datetime) as checktime FROM transaction WHERE acc_num = '$acc_num' and YEAR(datetime) = '$date_Y'";
    $res = mysqli_query($conn, $sql)or die("[ERROR]");
    $row =  mysqli_fetch_array($res);


    if($row['checktime'] != null)
    { 
        $d1 = $row['checktime'];
        $d2 = date("Y-m-d"); 

        $dArr1    = preg_split("/-/", $d1);
        list($year1, $month1, $day1) = $dArr1;
        $Day1 =  mktime(0,0,0,$month1,$day1,$year1);
        $dArr2    = preg_split("/-/", $d2);
        list($year2, $month2, $day2) = $dArr2;
        $Day2 =  mktime(0,0,0,$month2,$day2,$year2);
            
        $date =   round(abs( $Day2 - $Day1 ) / 86400 )+1;
        

        if($date >= 30)
        {
            $sql_balance =  "SELECT balance FROM user WHERE acc_num = '$acc_num'";
            $res_balance = mysqli_query($conn, $sql_balance)or die("[ERROR]");
            $row_balance = mysqli_fetch_assoc($res_balance);

            $row_balance['balance'];

            echo "<table class='table table-bordered table-striped container m-5''>";
            echo "<tr align='center' bgcolor='#CCCCCC'><td>เดือน</td><td>ค่าหุ้นรายเดือน</td><td>ปันผล</td></tr>";

                $balance = $row_balance['balance'];
            
                $sum = 0;
                if($date > 360 and $balance >= 12000)
                {
                    $dividend = (1000 * 5.25 * 0)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>ธันวาคม</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                    
                }
                if($date >= 330 and $balance >= 11000)
                {

                    
                    $dividend = (1000 * 5.25 * 1)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>พฤศจิกายน</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                
                }
                if($date >= 300 and $balance >= 10000)
                {
                    
                    $dividend = (1000 * 5.25 * 2)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>ตุลาคม</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;

                }
                if($date >= 270 and $balance >= 9000)
                {
                    
                    $dividend = (1000 * 5.25 * 3)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>กันยายน</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                    
                }
                if($date >= 240 and $balance >= 8000)
                {
                    
                    $dividend = (1000 * 5.25 * 4)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>สิงหาคม</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                    
                }
                if($date >= 210 and $balance >= 7000)
                {
                    
                    $dividend = (1000 * 5.25 * 5)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>กรกฎาคม</td>"; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                    
                }
                if($date >= 180 and $balance >= 6000)
                {
                    
                    $dividend = (1000 * 5.25 * 6)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>มิถุนายน</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                    
                }
                if($date >= 150 and $balance >= 5000)
                {
                    
                    $dividend = (1000 * 5.25 * 7)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>พฤษภาคม</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
            
                }
                if($date >= 120 and $balance >= 4000)
                {
                    
                    $dividend = (1000 * 5.25 * 8)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>เมษายน</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                
                }
                if($date >= 90 and $balance >= 3000)
                {
                    
                    $dividend = (1000 * 5.25 * 9)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>มีนาคม</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
                
                }
                if($date >= 60 and $balance >= 2000)
                {
                    
                    $dividend = (1000 * 5.25 * 10)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>กุมภาพันธ์</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;

                }
                if($date >= 30 and $balance >= 1000)
                {
                    $dividend = (1000 * 5.25 * 11)/(12*100);
                    $date = $date - 30;
                    echo "<tr>";
                    echo "<td>มกราคม</td> "; 
                    echo "<td>1000</td> "; 
                    echo "<td>" .$dividend.  "</td> ";
                    $sum = $sum + $dividend;
        
                }
                else
                {
                    echo "ไม่";
                }
                
                echo "<tr>";
                echo "<td></td> "; 
                echo "<td>ยอดรวม</td> ";
                echo "<td>".$sum."</td> ";  
                echo "</table>";

                $sql_dividend =  "SELECT amount FROM dividend WHERE acc_num = '$acc_num' ORDER BY dividend_id desc LIMIT 1;";
                $res_dividend =  mysqli_query($conn, $sql_dividend)or die("[ERROR]");
                $row_dividend =  mysqli_fetch_assoc($res_dividend);

                if($sum > 0)
                {
                    if($row_dividend == null || $row_dividend['amount'] != $sum )
                    {
                        $sql_dividend1 =  "INSERT INTO `dividend`(`acc_num`, `datetime`, `amount`) VALUES ('$acc_num' , NOW() , '$sum')";
                        $res_dividend1 =  mysqli_query($conn, $sql_dividend1)or die("[ERROR]");

                        $sql_atm =  "UPDATE user SET balance =$balance + $sum WHERE acc_num = '$acc_num'";
                        $res_atm =  mysqli_query($conn, $sql_atm)or die("[ERROR]");

                    }
                }
            


        }
        else
        {
            echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
            echo '<div class="container">';
            echo '<div class="alert alert-danger text-center" role="alert">ยังไม่ได้รับเงินปันผลเนื่องจากเงินฝากยังไม่ครบ 30วัน ! ...</div>';
            echo '<a href="index.php" class="btn btn-primary btn-sm btn-block ">Back</a>';
            echo '</div>';
        }
    }
    else
    {
        echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
        echo '<div class="container">';
        echo '<div class="alert alert-danger text-center" role="alert">ไม่พบรายการเงินฝาก ! ...</div>';
        echo '<a href="index.php" class="btn btn-primary btn-sm btn-block ">Back</a>';
        echo '</div>';
    }

?>

</body>
<?php
include "./templates/footer.php";
?>
</html>
<?php
}
else
{
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';

  echo '<div class="container">';
  echo '<div class="alert alert-danger text-center" role="alert">เกิดความผิดพลาด...</div>';
  echo '<a href="login.php" class="btn btn-primary btn-sm btn-block ">เข้าสู่ระบบ</a>';
  echo '</div>';
}
?>