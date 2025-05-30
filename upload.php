<?php 
include("connect.php");

$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$picture = $_FILES['picture'];
$lasspic1 = pathinfo(basename($picture['name']), PATHINFO_EXTENSION);
$newnamepic = mt_rand(00000, 99999) . '.' . $lasspic1;
if($id!='')
{
    $sql="UPDATE user SET first_name = $firstname WHERE user_id = $id";
}
elseif($id!='')
{
    $sql="UPDATE user SET first_name = $lastname WHERE user_id = $id";
}
elseif($id!='')
{
    $sql="UPDATE user SET  usr_img = $newnamepic";
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


?>
if($id!='')
{
    $sql="UPDATE user SET first_name='".$firstname."',
    last_name='".$lastname."',
    usr_img='".$newnamepic."'
    WHERE user_id = '".$id."'
    ";
}