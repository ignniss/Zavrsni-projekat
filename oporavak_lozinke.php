<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Style/bootstrap.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel='stylesheet' href="Style/login.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <nav id="navBar" class="navbar text-uppercase navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand text-success font-weight-bolder" href="index.php"><img id="logo" src="Img/logo.png"
                    alt=""> ozon cross gym </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="training.php">cross gym training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cross_sport_kids.php">cross sport kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="gallery.php" active>gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">contact us</a>
                    </li>

                    <?php if(isset($_SESSION['id'])):  ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-success" href="logout.php">logout</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link text-success" href="profile.php">profile</a>
                    </li>

                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="login.php">login/Register</a>
                    </li>
                    <?php endif ?>

                    <li class="nav-item">
                        <img id="ser" src="Img/ser.png" alt="SER">
                        <img id="uk" src="Img/uk.png" alt="ENG">
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php
    echo "<p style='color:black;font-weight:bold;text-align:center'>Ups! Izgleda da ste zaboravili lozinku!<br>
    Ili je pogresno uneto korisnicko ime!<br>
    Proverite unete podatke!<br>
    Da li zelite da Vam prosledimo pomocnu lozinku na email adresu?</p>";  
    
    $lines = file('nova_lozinka.txt');
    $nova_sifra=$lines[0];
    $email=$lines[1];
    $korisnik=$lines[2];

    require 'phpmailer\PHPMailerAutoload.php';

$mail = new PHPMailer;
$admin='.\..\..\..\..\admin.txt';
//Enable SMTP debugging. 
                              
//Set PHPMailer to use SMTP.
$mail->isSMTP();   
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;         
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "aleksandrastamenkovic1004@gmail.com";                 
$mail->Password = file_get_contents($admin);                           
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "aleksandrastamenkovic1004@gmail.com";
$mail->FromName = "Ozon Cross Gym";";

$mail->addAddress($email, $korisnik);

$mail->isHTML(true);

$mail->Subject = "Obnavljanje lozinke";
$mail->Body = "Pomocna lozinka je ".$nova_sifra;
$mail->AltBody = "This is the plain text version of the email content";


 
?>
    <form action="" method="post">
    <div class='container'>
    <button type='submit' class="btn btn-success mb-4 mt-3" name="btnNovaLoz">POSALJI POMOCNU LOZINKU</button>
    <?php
    if(isset($_POST['btnNovaLoz'])) {
        if(!$mail->send()) {
            echo "<strong>Doslo je do greske! Ne postoji korisnik sa unetim korisnickim imenom!</strong>";
        } else {
            echo "<strong>Pomocna lozinka je poslata na Vasu email adresu.</strong>";
        }
    }
    
    ?>
    </div>
    
    </form>
<div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>
</body>

</html>
