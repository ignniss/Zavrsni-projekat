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
    <link rel="stylesheet" href="Style/kids.css">
    <link rel="stylesheet" href="Style/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Script/kids.js"></script>

    <?php
        if($_SESSION != NULL)
        echo '<script src="Script/session.js"> </script>' ; 
   ?>

    <title>Cross sport kids</title>
</head>

<body>
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
                        <a class="nav-link  text-success" href="cross_sport_kids.php">cross sport kids</a>
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

    <div id="main_div_kids">
        <div id="kontejner" class="container">
            <div id="naslov">
                <h1 class="text-center  mb-4 mt-4">CROSS SPORT KIDS</h1>
            </div>

            <div class="row">

                <div id="struktura_casova" class="col col-md-7  ">

                    <div class="row">
                        <div class="col text">
                            <h4>Struktura časova</h4>
                            Osnovni program za decu od 4 do 10 godina obuhvata tri časa nedeljno u velikoj fiskulturnoj sali. Dva časa u trajanju od 60 minuta usmerena na razvoj motorike i koordinacije dece kroz osnove bazičnih sportova (gimnastika, atletika…), sportova sa loptom,
                            ritmike i plesa kao i borenja. Treći čas u trajanju od 30 minuta obuhvata korektivnu gimnastiku (vežbe jačanja, istezanja i korektivne vežbe). Program za trogodišnjake obuhvata 2 časa nedeljno usmerena na razvoj motorike i
                            koordinacije, u trajanju od 30 minuta. Na svakom času sa decom radi profesor fizičkog vaspitanja sa velikim iskustvom u radu sa decom. Tokom cele godine organizuju se izleti koji imaju bogat i interesantan sportski sadržaj,
                            a uz to i značajnu vaspitno obrazovnu ulogu.
                        </div>
                    </div>
                    <div class="row">
                        <div id="plan_i_program" class="col col-md-6 col-sm-12 text">
                            <h4>Godišnji ciklus obuhvata</h4>
                            <ul>
                                <li>Bazične sportove <br> (gimanstika, atletika,...)</li>
                                <li>Osnove sportova sa loptom <br> (fudbal, košarka, rukomet,...)</li>
                                <li>Osnove borenja</li>
                            </ul>
                        </div>
                        <div id="dodatne_aktivnosti" class="col col-md-5 col-sm-12 offset-md-1 text">
                            <h4>Dodatne aktivnosti</h4>
                            <ul>
                                <li>Obuka vožnje rolera, bicikla</li>
                                <li>Alpinizam</li>
                                <li>Streljaštvo</li>
                                <li>Orijentiring</li>
                                <li>Obuka klizanja</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div id="foto" class="col-sm-12 col-md-4 offset-md-1 ">
                    <img class="img-fluid image" id="img_kids1" src="Img/kids1.jpg" alt="">
                    <img class="img-fluid image mt-2" src="Img/kids2.jpg" alt="">
                </div>
            </div>
            <div class="row">
                <div id="prednost_programa" class="col text">
                    <h4>Prednost ovog programa</h4>
                    <p>
                        Prednost ovog programa je što detetu daje svestranost, tj. veliku širinu u smislu motorike i koordinacije, što predstavlja daleko veći kvalitet u odnosu na usmeravanje deteta u samo jednu sportsku disciplinu. U radu sa decom zastupljen je metod igre i
                        sve aktivnosti su prilagođene uzrastu i sposobnostima dece.
                    </p>
                </div>
            </div>
            <div class="row">
                <div id="slicice">

                    <h1 class=" ml-3" id="galerija">Galerija</h1>

                    <div class="row">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica1" src="GalleryKids/1.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica2" src="GalleryKids/2.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica3" src="GalleryKids/3.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica4" src="GalleryKids/4.jpg" alt="">
                    </div>

                    <div class="row">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica5" src="GalleryKids/5.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica6" src="GalleryKids/6.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica7" src="GalleryKids/7.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica8" src="GalleryKids/8.jpg" alt="">
                    </div>

                    <div class="row">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica9" src="GalleryKids/9.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica10" src="GalleryKids/10.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica11" src="GalleryKids/11.jpg" alt="">
                        <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica12" src="GalleryKids/12.jpg" alt="">
                    </div>

                </div>

                <div id="slika">
                </div>



            </div>
        </div>




    </div>




    </div>

    <div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>








</body>

</html>