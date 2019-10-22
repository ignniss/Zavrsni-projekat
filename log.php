<?php
session_start();

function generisi_pomocnu_lozinku() {
    $loz=array();
    $niska='0123456789mnbvcxzlkjhgfdsapoiuytrewqMNBVCXZLKJHGFDSAPOIUYTREWQ';
    for($i=0;$i<5;$i++){
        $char=$niska[rand(0,61)];
        array_push($loz,$char);
    }
    return implode('',$loz);
}


if(isset($_POST['btnLog'])){
    require "connection.php";
    $korisnickoIme = $_POST['korisnicko'];
    $password = $_POST['pass'];

    $sql = "SELECT id, sifra FROM users WHERE korisnicko_ime = '$korisnickoIme'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $hashed_password = $result['sifra'];
    
    if(password_verify($password, $hashed_password)){
        $_SESSION['id'] = $result['id'];
        
        header("location: profile.php");
    }else{
        $sql2 = "SELECT email FROM users WHERE korisnicko_ime = '$korisnickoIme'";
        $query = mysqli_query($conn, $sql2);
        $email = mysqli_fetch_assoc($query)['email'];
        $nova_sifra=generisi_pomocnu_lozinku();
        $filename='nova_lozinka.txt';
        $ispis=$nova_sifra."\n".$email."\n".$korisnickoIme;
        file_put_contents($filename,$ispis);
        $sql3="UPDATE users SET sifra='$nova_sifra' WHERE korisnicko_ime='$korisnickoIme'";
        $query=mysqli_query($conn, $sql3);
        header('Location:oporavak_lozinke.php');
        }
       
}


?>

