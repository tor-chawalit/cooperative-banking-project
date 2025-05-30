<?php
    session_start();

    include("connect.php");
    if(isset($_SESSION["email"]))
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
</head>
<body>
<div style="background-color:#F1F1F1">
        <header class="d-flex flex-wrap align-items-center justify-content-center py-3 mb-4 border-bottom">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li style="margin:auto 2em;"><a href="atm.php" class="nav-link px-2 link-secondary"><button><img
                                src="img/money-bag-icon.png" alt="โฮม" class="icon" width="100" height="80">
                            <p>Bank update</p></a></li>
            <li style="margin:auto 2em;"><a href="dividend_admin.php" class="nav-link px-2 link-secondary"><button><img
                                src="img/dividend-icon.png" alt="โฮม" class="icon" width="100" height="80">
                            <p>Dividend</p></a></li>
                <li style="margin:auto 2em;"><a href="admin.php" class="nav-link px-2 link-secondary"><button><img
                                src="img/transaction-icon.png" alt="โฮม" class="icon" width="100" height="80">
                            <p>Transaction</p></a></li>
                <li style="margin:auto 2em;"><a href="status.php"
                        class="nav-link px-2 link-secondary"><button><img src="img/status-icon.png" alt="โฮม" class="icon"
                                width="100" height="80">
                            <p>Status</p></a></li>
                <li style="margin:auto 2em;"><a href="admin_edit.php"
                        class="nav-link px-2 link-secondary"><button><img src="img/edit-user-icon.png" alt="โฮม" class="icon"
                                width="100" height="80">
                            <p>Edit user</p></a></li>
                <li style="margin:auto 2em;"><a href="logout.php" onclick="return confirm('ยืนยันการออกจากระบบ')" class="nav-link px-2 link-secondary"><button><img
                                src="img/logout-icon.png" alt="โฮม" class="icon" width="100" height="80">
                            <p>Logout</p></a></li>
            </ul>
    </div>
</body>
</html>
<?php 
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
 $sql = "SELECT * FROM `user` WHERE `status` = 3 ";
 $res = mysqli_query($conn, $sql)or die("[ERROR]"); 
 echo "<table class='table table-bordered table-striped container m-5'>";
 echo "<tr bgcolor='#CCCCCC'> 
        <td>เลขบัตร</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>เลขขัญชี</td>
        <td>สถานะ</td>
        <td>ปลดระงับบัญชี</td>
         </tr>";
         $keyword = "";
         if(isset($_GET['sSubmit']) && $_GET['sSubmit'] == 'ค้นหา')
         {
         $keyword = $_GET['keyword'];
         $sql = "SELECT * FROM `user` WHERE `card_id` LIKE '%$keyword%' OR `first_name` LIKE '%$keyword%' OR `last_name` LIKE '%$keyword%' OR `acc_num` LIKE '%$keyword%'";
         $res = mysqli_query($conn, $sql)or die("[ERROR]"); 
         }
         echo "<form action='{$_SERVER['PHP_SELF']}' method='GET'>";
         echo "คำค้น : <input type='text' name='keyword' value='$keyword' class='mt-3'>";
         echo "<input type='submit' name='sSubmit' value='ค้นหา' class='btn btn-primary m-2'>";
         echo "<input type='submit' name='cSubmit' value='เคลียร์' class='btn btn-danger' onclick='location.href=\"./\"'>";
         echo "</form>";
        while($row = mysqli_fetch_assoc($res)) 
        { 
            echo "<tr>";
            echo "<td>" .$row["card_id"] .  "</td> "; 
            echo "<td>" .$row["first_name"] .  "</td> ";  
            echo "<td>" .$row["last_name"] .  "</td> ";
            echo "<td>" .$row["acc_num"] .  "</td> ";
            echo "<td>" ."ถูกระงับ" .  "</td> ";
            echo "<td><button class = 'btn btn-danger'>
                <a href='del_status.php?acc_num=".$row['acc_num']."' style ='text-decoration: none;color:white;'>"."ปลดระงับ"."</a>
                </button>
                </td>";
        }
            echo "</table>";
    }
            else
            {
                echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">';
                echo '<div class="container">';
                echo '<div class="alert alert-danger text-center" role="alert">กรุณาล๊อคอิน...</div>';
                echo '<a href="login_admin_sty.php" class="btn btn-primary btn-sm btn-block ">เข้าสู่ระบบ</a>';
                echo '</div>';
            }
        
?>