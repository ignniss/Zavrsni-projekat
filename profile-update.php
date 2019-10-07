<?php 
session_start();
require 'connection.php';
$id=$_SESSION['id'];
$program=trim($_POST['program']);
$pol=trim($_POST['pol']);
$visina=$_POST['visina'];
$tezina=$_POST['tezina'];
$Email =$_POST['Email'];
$username=$_POST['korisnicko_ime'];
$sql="UPDATE users SET tip_programa='$program', korisnicko_ime='$username', pol='$pol', visina='$visina', tezina='$tezina', Email='$Email' WHERE id=$id";
$query=mysqli_query($conn, $sql);
header('Location: profile.php');

?>