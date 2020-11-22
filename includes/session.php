<?php
ob_start();
session_start();

if (!isset($_SESSION['account_id'])){
header('location:index.php');
}

$account_id=$_SESSION['account_id'] ;
$account_username=$_SESSION['account_username'] ;
 $account_password=$_SESSION['account_password'];
 $full_name=$_SESSION['full_name'];

?>
