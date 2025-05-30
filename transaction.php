<?php 
session_start();

include("connect.php");
if(isset($_SESSION["acc_num"]))
{
    $sql = "SELECT * FROM user WHERE email = '" . $_SESSION['email'] . "'";
    $res = mysqli_query($conn, $sql) or die("[ERROR]");
    $row = mysqli_fetch_array($res);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Transaction</title>
    </head>
    <body>
            <!-- Navbar -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center py-3 mb-4 border-bottom">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li style="margin:auto 1em;"><a href="index.php" class="nav-link px-2 link-secondary"><button><img src="img/home-icon.png" alt="โฮม" class="icon" width="100" height="80"><p>Home</p></a></li>
                    <li style="margin:auto 1em;"><a href="info.php?user_id=<?php echo $row["user_id"]; ?>" class="nav-link px-2 link-secondary"><button><img src="img/setting-icon.png" alt="โฮม" class="icon" width="100" height="80"><p>Setting</p></a></li>
                    <li style="margin:auto 1em;"><a href="index.php" class="nav-link px-2 link-secondary"><button><img src="img/map-icon.png" alt="โฮม" class="icon" width="100" height="80"><p>Location</p></a></li>
                    <li style="margin:auto 1em;"><a href="logout_user.php" class="nav-link px-2 link-secondary"><button><img src="img/logout-icon.png" alt="โฮม" class="icon" width="100" height="80"><p>Logout</p></a></li>
            </ul>
            <?php
            if($row['usr_img'] != null) 
            { 
            ?>  
              <img src="upload/<?php echo $row["usr_img"];?> "width=80 height=80 class=rounded-circle float-sm-right>
            <?php 
            }
            else 
            { 
            ?>
              <img src = img/default_profile.jpg width=80 height=80 class=rounded-circle float-sm-right>
            <?php 
            }
            ?>
    </div>
    </body>
    </html>
<?php
$acc_num = $_SESSION["acc_num"];
$sql         =  "SELECT * FROM `transaction` WHERE `acc_num` = '$acc_num'";
$res = mysqli_query($conn, $sql)or die("[ERROR]");
echo "<table class='table table-bordered table-striped container m-5''>";
echo "<tr bgcolor='#CCCCCC'>
<td>เลขบัตร</td>
</td><td>เวลา</td>
</td><td>ประเภท</td>
<td>ยอดเงิน</td>

</tr>";
 
while($row = mysqli_fetch_assoc($res)) 
{ 
    echo "<tr>";
    echo "<td>" .$row["acc_num"] .  "</td> "; 
    echo "<td>" .$row["datetime"] .  "</td> ";  
    echo "<td>" .$row["type"] .  "</td> ";
    echo "<td>" .$row["amount"] .  "</td> ";
}
echo "</table>";    
}
?>
<?php
include "./templates/footer.php";
?>