<?php 
session_start();
require 'connection.php';
$id=$_SESSION['id'];
$program=trim($_POST['program']);
$pol=trim($_POST['pol']);
$visina=$_POST['visina'];
$tezina=$_POST['tezina'];
$sql="UPDATE users SET tip_programa='$program', pol='$pol', visina='$visina', tezina='$tezina' WHERE id=$id";
$query=mysqli_query($conn, $sql);
header('Location: profile.php');

?>