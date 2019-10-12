<?php

require 'connection.php';
$user_id=$_GET['id'];
$datum_sada = date('Y-m-d');
$sql1 = "INSERT INTO uplate VALUES(NULL, '$user_id', '$datum_sada')";
$query1 = mysqli_query($conn, $sql1);
$sql2 = "UPDATE users SET uplata='$datum_sada' WHERE id=$user_id";
$query2 = mysqli_query($conn, $sql2);
if($query1 && $query2){
    header('Location: admin_panel.php');
}

mysqli_close($conn);

?>