<?php 
session_start();
include "connect.php";

$status       =   $rowi['status'] = 0;
$sql_check   =   "UPDATE user SET status = '$status' WHERE acc_num = ".$_GET['acc_num']."";
$res_check   =   mysqli_query($conn, $sql_check)or die("[ERROR]");
header('location: status.php');
?>