

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
    <link rel="stylesheet" href="Style/gallery.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Script/gallery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>  
    <style>
    
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url("Img/loader.gif") center no-repeat #fff;
    }
    </style>

    <?php
        if($_SESSION != NULL)
        echo '<script src="Script/session.js"> </script>' ; 
    ?>

    <title>Gallery</title>
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
                        <a class="nav-link text-success" href="gallery.php" active>gallery</a>
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

    <div id="mainDiv3">

        <div id="slicice">


            <div class="row">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica1" src="Gallery/1.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica2" src="Gallery/2.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica3" src="Gallery/3.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica4" src="Gallery/4.jpg" alt="">
            </div>
            <div class="row">

                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica5" src="Gallery/5.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica6" src="Gallery/6.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica7" src="Gallery/7.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica8" src="Gallery/8.jpg" alt="">
            </div>
            <div class="row">

                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica9" src="Gallery/9.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica10" src="Gallery/10.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica11" src="Gallery/11.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica12" src="Gallery/12.jpg" alt="">
            </div>

            <div class="row">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica13" src="Gallery/13.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica14" src="Gallery/14.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica15" src="Gallery/15.jpg" alt="">
                <img class="img-fluid col-md-3 mt-3 mb-3 gallery" id="slicica16" src="Gallery/16.jpg" alt="">
            </div>
        <script>
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>

        </div>
        <div id="slika">


        </div>


    </div>









</body>

</html>
