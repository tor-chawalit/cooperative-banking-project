<?php
session_start();

include ("connect.php");
if(isset($_SESSION['email']))
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font.css">    
    <title>Balance</title>
</head>

<body>
<?php 
include "./templates/header.php";
?>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-6 circle-box"><br><br>
        <p>
            ยอดเงินคงเหลือ
            <?php echo $row['balance'];?> 
        </p>
      </div>
    </div>
  </div> <br>
  <?php
    echo "<p class=text-center>ข้อมูล ณ.วันที่ " . date("Y-m-d") . "</p>";?>
</body>
<!-- Footer -->
<?php
include "./templates/footer.php";
?>
<style>
.circle-box {
  background-color: #F1F1F1;
  border-radius: 50%;
  text-align: center;
  padding: 20px;
  width:200px;
  height:200px;
  border:2px solid black;
}


.circle-box p {
  color: #black;
  font-size: 20px;
}
</style>
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