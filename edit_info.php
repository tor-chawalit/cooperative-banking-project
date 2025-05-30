<?php
include('connect.php');
    $user_id=isset($_GET['user_id']) ? $_GET['user_id']: '';

    if($user_id!='') {
        $sql = "SELECT * FROM user WHERE user_id='".$user_id."' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/info.css">
    <title>Profile Setting</title>
</head>
<body>
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
				<?php
            if($row['usr_img'] != null) { 
            ?>
              <img src="upload/<?php echo $row["usr_img"];?> "width=80 height=80 class=rounded-circle float-sm-right>

            <?php }
            else 
            { ?>
              <img src = img/default_profile.jpg width=80 height=80 class=rounded-circle float-sm-right>
            <?php }
            ?>
				</div>
				<h5 class="user-name"><?php echo $row['first_name'];?></h5>
				<h6 class="user-email"><?php echo $row['card_id'];?></h6>
			</div>
			<div class="about">
				<h5>Account Number</h5>
				<p><?php echo $row['acc_num'];?></p>
			</div>
		</div>
	</div>
</div>
</div>
<form class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12" action="upload.php" method="POST" enctype="multipart/form-data" > 
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">แก้ไขข้อมูลบัญชี</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Firstname</label>
                    <input type="hidden" name="id" value="<?php echo$row['user_id'];?>">
					<input type="text" class="form-control" name="firstname" id="fullName" placeholder="<?php echo $row['first_name'];?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Lastname</label>
					<input type="text" class="form-control" name="lastname" id="eMail" placeholder="<?php echo $row['last_name'];?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">CardID</label>
					<input type="text" class="form-control" name="carid" id="phone" placeholder="<?php echo $row['card_id'];?>" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">AccNum</label>
					<input type="text" class="form-control" name="accnum" id="website" placeholder="<?php echo $row['acc_num'];?>" disabled>
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">ข้อมูลอื่นๆ</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Balance</label>
					<input type="text" class="form-control" name="balance" id="Street" placeholder="<?php echo $row['balance'];?>" disabled>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">Account Status</label>
					<input type="text" class="form-control" name="status" id="ciTy" placeholder="<?php echo $row['status'];?>" disabled>
				</div>
			</div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="ciTy">เปลี่ยนรูปโปรไฟล์</label>
            <input class="form-control" name="picture" type="file">
            </div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
				<div class="text-right">
                    <a class="btn btn-secondary" href="index.php">ยกเลิก</a>
					<button type="submit" id="submit" name="submit" class="btn btn-primary">อัพเดต</button>
                    
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</form>
</div>
</div>
</body>
<!-- Footer -->
<?php
include "./templates/footer.php";
?>
</html>
<?php
?>