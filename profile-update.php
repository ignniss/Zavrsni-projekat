<?php
session_start();
require 'connection.php';
$id = $_SESSION['id'];
$program = trim($_POST['program']);
$pol = trim($_POST['pol']);
$visina = $_POST['visina'];
$tezina = $_POST['tezina'];
$email = $_POST['email'];
$program_odrasli = $_POST['program_odrasli'];


$sql = "UPDATE users SET tip_programa='$program', pol='$pol', visina='$visina', tezina='$tezina', email='$email', program_odrasli='$program_odrasli' WHERE id=$id";
$query = mysqli_query($conn, $sql);
header('Location: profile.php');

?>