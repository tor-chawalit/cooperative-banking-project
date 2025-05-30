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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>atm</title>
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
<?php
        $sql_select =   "SELECT * FROM bank_atm";
        $res_select =   mysqli_query($conn,$sql_select)or die("[ERROR]");
        $row        =   mysqli_fetch_array($res_select);
        $_SESSION["bank_atm_id"] = $row["bank_atm_id"];
        echo "<table class='table table-bordered table-striped container m-5'>";
        echo "<tr bgcolor='#CCCCCC'>
                <td>แบงค์ 100</td>
                <td>แบงค์ 500</td>
                <td>แบงค์ 1000</td>
                </tr>";
        echo "<tr>";
        echo "<td>".$row["bank_100"]."</td>";
        echo "<td>".$row["bank_500"]."</td>";
        echo "<td>".$row["bank_1000"]."</td>";
        echo "</tr>";
        echo "</table>";
        ?>
        <div style="text-align:center">
        <form>
            <p>แบงค์ 100 : <input type="number" name="bank_100"></p>
            <p>แบงค์ 500 : <input type="number" name="bank_500"></p>
            <p>แบงค์ 1000 : <input type="number" name="bank_1000"></p>
            <input type="submit" class="btn btn-primary" name="Submit" value="ยืนยัน" onclick="return confirm('ยืนยันการเพิ่ม?')">
            <input type="reset" class="btn btn-danger" name="Submit" value="เคลียร์">
        </form>
        </div>
        <?php
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
    </form>
</body>

</html>