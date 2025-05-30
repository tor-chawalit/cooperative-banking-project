<!-- Header -->
<?php
$sql = "SELECT * FROM user WHERE email = '" . $_SESSION["email"] ."' ";
$res = mysqli_query($conn, $sql) or die("[ERROR]");
$row = mysqli_fetch_array($res); 
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@600&display=swap" rel="stylesheet">
<div style="background-color:#F1F1F1">
    <header class="d-flex flex-wrap align-items-center justify-content-center py-3 mb-4 border-bottom">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li style="margin:auto 2em;"><a href="index.php" class="nav-link px-2 link-secondary"><button><img
                            src="img/home-icon.png" alt="โฮม" class="icon" width="100" height="80">
                        <p>Home</p></a></li>
            <li style="margin:auto 2em;"><a href="info.php?user_id=<?php echo $row["user_id"]; ?>"
                    class="nav-link px-2 link-secondary"><button><img src="img/profileview_icon.png" alt="โฮม" class="icon"
                            width="100" height="80">
                        <p>Profile</p></a></li>
            <li style="margin:auto 2em;"><a href="edit_info.php?user_id=<?php echo $row["user_id"]; ?>"
                    class="nav-link px-2 link-secondary"><button><img src="img/setting-icon.png" alt="โฮม" class="icon"
                            width="100" height="80">
                        <p>Setting</p></a></li>
            <li style="margin:auto 2em;"><a href="map.php" class="nav-link px-2 link-secondary"><button><img
                            src="img/map-icon.png" alt="โฮม" class="icon" width="100" height="80">
                        <p>Location</p></a></li>
            <li style="margin:auto 2em;"><a href="logout_user.php" onclick="return confirm('ยืนยันการออกจากระบบ')" class="nav-link px-2 link-secondary"><button><img
                            src="img/logout-icon.png" alt="โฮม" class="icon" width="100" height="80">
                        <p>Logout</p></a></li>
        </ul>
        <!-- กำหนดรูปภาพให้เป็นค่าเริ่มต้น ถ้ายังไม่ได้ใส่รูปภาพ -->
        <?php
            if($row['usr_img'] != null) 
            { 
            ?>
        <img src="upload/<?php echo $row["usr_img"];?> " width=80 height=80 class=rounded-circle float-sm-right>
        <?php 
            }
            else 
            { 
            ?>
        <img src=img/default_profile.jpg width=80 height=80 class=rounded-circle float-sm-right>
        <?php 
            }
            
            ?>
</div>
</header>