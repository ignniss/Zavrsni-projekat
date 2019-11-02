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
    <link rel="stylesheet" href="Style/contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <?php
        if($_SESSION != NULL)
        echo '<script src="Script/session.js"> </script>' ; 
   ?>
  
    <style>
    
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url("Img/loader.gif")center no-repeat #fff;
    }
    </style>
   
    <title>Contact</title>
</head>

<body>
<div class="se-pre-con"></div>

    <nav id="navBar" class="navbar text-uppercase navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand text-success font-weight-bolder" href="index.php"><img id="logo" src="Img/logo.png" alt=""> ozon cross gym </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive">
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
                        <a class="nav-link text-success" href="contact.php">contact us</a>
                    </li>
                    <?php if(isset($_SESSION['id'])):  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">login/Register</a>
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
   

   <div id="prvi">
        <form class="container" id='formular' action='mail.php' method='POST'>
            <h3 class="mt-3">UKOLIKO IMATE NEKIH PITANJA MOZETE NAS KONTAKTIRATI </h3>
            <div class="form-group row mt-3">
                <div class="col-sm-5 col-lg-4">
                    <input type="text" class="form-control m-2" id="ime" placeholder="Ime i prezime*" name='ime' required>
                </div>
                <div class="col-sm-5 col-lg-4">
                    <input type="text" class="form-control m-2" id="telefon" placeholder="Telefon*" name='telefon' required>
                </div>
            </div>
            
            <div class="form-group row mb-3">
                <div class="col-sm-5 col-lg-4">
                    <input type="email" class="form-control m-2" id="email" placeholder="Email*" name='email' required>
                </div>
                <div class="col-sm-5 col-lg-4">
                    <input type="text" class="form-control m-2" id="naslov" placeholder="Naslov poruke*" name='naslov' required>
                </div>
            </div>
            
            <div class="form-group col-sm-10 col-lg-8">
                <textarea class="form-control" id="poruka" rows="4" placeholder="Poruka*" name='poruka' required></textarea>
            </div>            
            <div class="col-sm-10  col-lg-8 ">
                <button type="submit" id="posalji" class="btn btn-success" name='btnPosalji'>POSALJI</button>
            </div>                        
        </form>    
     </div>

     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.063179579135!2d20.375789715362902!3d44.84064668285368!
                  2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65c2f53eef55%3A0x9ce8fff28c8f4238!2z0KjQtdCy0LjQvdCwIDE1LCD
                  QkdC10L7Qs9GA0LDQtCAxMTA4MA!5e0!3m2!1ssr!2srs!4v1568462772329!5m2!1ssr!2srs" width="100%" height="450" frameborder="0"
             style="border:0;" allowfullscreen=""></iframe>
    <div id='drugi'>
        <div class="form-group row mt-0 mb-0 ml-3">
            <div class="col-sm-6 col-md-3 kontakt">
                <p>Adresa:<br>
                <span>Kneza Višeslava 120, Beograd</span></p>
            </div>
            <div class="col-sm-6 col-md-3 kontakt">
                <p>Kontakt telefon:<br>
                <span>069 55 84 857</span></p>
            </div>
            <div class="col-sm-6 col-md-3 kontakt">
                <p>E-mail:<br>
                <span>alexsd@yahoo.com</span></p>
            </div>
            <div class="col-sm-6 col-md-3 kontakt">
                <p>Radno vreme:<br>
                <span>radni dan: od 7:00-22:30<br>
                    vikend: od 08:00-18:00</span></p>
                </div>
            </div>
     </div>

     <script>
	    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	    });
    </script>


    <div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>

</body>
     </html>
