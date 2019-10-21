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

    $sql = "SELECT id FROM users WHERE korisnicko_ime = '$korisnickoIme' AND sifra = '$password'";
    $query = mysqli_query($conn, $sql);
    $id = mysqli_fetch_assoc($query)['id'];
        if($id){
            $_SESSION['id'] = $id;       
            header("location: profile.php");
            } else{
        $sql2 = "SELECT Email FROM users WHERE korisnicko_ime = '$korisnickoIme'";
        $query = mysqli_query($conn, $sql2);
        $email = mysqli_fetch_assoc($query)['Email'];
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

