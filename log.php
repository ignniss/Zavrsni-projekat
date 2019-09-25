<?php
session_start();
if(isset($_POST['btnLog'])){
    require "connection.php";

    $korisnickoIme = $_POST['korisnicko'];
    $password = $_POST['pass'];

    $sql = "SELECT id FROM users WHERE korisnicko_ime = '$korisnickoIme' AND sifra = '$password'";
    $query = mysqli_query($conn, $sql);

    $id = mysqli_fetch_assoc($query)['id'];

    if($id){
        $_SESSION['id'] = $id;
        
        header("location: profile.php");
    }else{
        header("location: login.php");
        // echo "ne valja";
    } 
}

?>
