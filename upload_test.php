<?php 
include("connect.php");

if(isset($_POST["submit"])) 
{
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $usr_img = $_POST['usr_img'];
    
$picture = $_FILES['picture'];
$lasspic1 = pathinfo(basename($picture['name']), PATHINFO_EXTENSION);
$newnamepic = mt_rand(00000, 99999) . '.' . $lasspic1;
if($id!='')
{
    $sql="UPDATE user SET first_name='".$firstname."',
    last_name='".$lastname."',
    usr_img='".$newnamepic."'
    WHERE user_id = '".$id."'
    ";
}
$row = mysqli_query($conn, $sql);
if($row)
{
$up1 = copy($picture['tmp_name'], 'upload/'.$newnamepic);
echo "<script language='JavaScript'>
alert('แก้ไขข้อมูลสำเร็จแล้ว');
window.location.href = 'index.php';
</script>";
}
else
{
echo "ไม่สามารถแก้ไขสมาชิกได้ [".$sql."]";
}
}

?>