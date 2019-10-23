<?php
session_start();
require 'connection.php';
$id = $_SESSION['id'];
$program = trim($_POST['program']);
$pol = trim($_POST['pol']);
$visina = $_POST['visina'];
$tezina = $_POST['tezina'];
$email = $_POST['email'];
$nova_lozinka = $_POST['nova_lozinka'];
$re_nova_lozinka = $_POST['re_nova_lozinka'];
$program_odrasli = $_POST['program_odrasli'];

function validatePassword($a){
    $duzina=strlen($a)>=5;
    $digitCounter=0;
    $upCounter=0;
    for($i=0;$i<strlen($a);$i++){
        $c=$a[$i];
        if ($c >= '0' && $c <= '9') {
            $digitCounter++;
        }
        if($c>='A' && $c<='Z'){
            $upCounter++;
        }
    }
    return $duzina && ($digitCounter > 0) && ($upCounter > 0);
}

if(validatePassword($nova_lozinka)===false){
    echo '<script>';
    echo 'alert("LOZINKA NE ZADOVOLJAVA USLOVE");';
    echo 'window.location= "profile.php";';
    echo '</script>';
}


if ($nova_lozinka == $re_nova_lozinka ) {
    $nova_lozinka = password_hash($nova_lozinka, PASSWORD_BCRYPT);
    $sql = "UPDATE users SET tip_programa='$program', pol='$pol', visina='$visina', tezina='$tezina', email='$email', sifra ='$nova_lozinka' ,program_odrasli='$program_odrasli' WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    header('Location: profile.php');
} else {
    echo '<script>';
    echo 'alert("LOZINKA I PONOVLJENA LOZINKA SE NE PODUDARAJU");';
    echo 'window.location= "profile.php";';
    echo '</script>';
}
