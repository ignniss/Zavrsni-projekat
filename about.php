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
    <link rel="stylesheet" href="Style/about.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="Script/about.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php
        if($_SESSION != NULL)
        echo '<script src="Script/session.js"> </script>' ; 
   ?>



    <title>About</title>
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
                        <a class="nav-link text-success" href="about.php">about us</a>
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

    <div id="mainDivAbout" class="container">
        <!--Kada se prikaze dugme, onda se javlja praznina izmedju footer-a i glavnog diva-->
        <!-- <button class="btn btn-warning">KLIK</button>
        <p id="klik"></p> -->
        <h3 class="font-weight-bolder mt-4">O NAMA</h3>

        <div id="oNama" class="  container mt-4 mb-4">

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum amet, aliquid perferendis libero illo
                atque eius temporibus maiores soluta voluptas facilis! Totam veniam officia asperiores minima
                reprehenderit non animi eaque!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ad impedit doloremque hic? At sapiente,
                praesentium architecto ea molestiae error perferendis modi asperiores voluptatibus suscipit officiis
                voluptate quaerat, perspiciatis totam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, neque asperiores dolore, beatae mollitia
                blanditiis quibusdam consequuntur explicabo accusantium possimus, recusandae eius excepturi impedit ad
                nostrum cumque? Beatae, incidunt molestiae!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, doloremque voluptates architecto esse
                explicabo dolorum eum a nisi at laborum molestias ab? Exercitationem eos maxime doloremque natus minima
                impedit aut.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae laborum distinctio, sunt consectetur
                quos amet repudiandae voluptate cupiditate perspiciatis eos aut aspernatur nemo exercitationem
                voluptatem voluptatibus quidem quo deleniti voluptas!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, quaerat atque iure eveniet distinctio
                necessitatibus odio enim asperiores, repellendus sunt omnis quia illo fugit dolores, placeat molestiae
                id voluptas modi!
                <p>
        </div>

        <h3 class="font-weight-bolder mt-4 mb-4">TRENERI</h3>


        <div id="treneri" class="row container">
            <div id="trener1" class="trener">
                <div class="row">
                    <div class="col col-sm-5 mr-4"><img src="Img/Marko1.png" alt=""></div>
                    <h4 class="col col-sm-5-offset-1">Nikola Medic </h4>
                </div>

                <div>
                    
                    <div>
                        <p>
                            <b> Tренер 2</b> је особа која води, подучава и тренира спортисте или спортске клубове. Поред
                            физичке и техничке припреме, тренер такође може да врши и психичку припрему спортиста у циљу што
                            боље припреме истог за такмичења која
                            му предстоје. 
                        </p>
                        <h6 id="flip" style="cursor: pointer; font-weight: bold;">saznaj vise...</h6>
                    </div>

                    <div id="panel" style="display: none;">
                        Кад се ради о тимским спортовима, тренер, поред већ поменутих функција, врши и
                        одабир стратегије коју ће тим применити у предстојећим утакмицама. Такође, тренер је задужен да
                        посматра и проучава ривале и ривалске
                        стратегије.
                    </div>
                    
                </div>
            </div>

            <div id="trener2" class="trener">
                <div class="row">
                    <div class="col col-sm-5 mr-4"><img src="Img/Marko1.png" alt=""></div>
                    <h4 class="col col-sm-5-offset-1">Nikola Medic</h4>
                </div>

                <div>
                    <div>
                        <b> Tренер 2</b> је особа која води, подучава и тренира спортисте или спортске клубове. Поред
                        физичке и техничке припреме, тренер такође може да врши и психичку припрему спортиста у циљу што
                        боље припреме истог за такмичења која
                        му предстоје. 
                    </div>

                    <div style="display: none;">
                        Кад се ради о тимским спортовима, тренер, поред већ поменутих функција, врши и
                        одабир стратегије коју ће тим применити у предстојећим утакмицама. Такође, тренер је задужен да
                        посматра и проучава ривале и ривалске
                        стратегије.
                    </div>
                </div>
            </div>

            <div id="trener3" class="trener">
                <div class="row">
                    <div class="col col-sm-5 mr-4"><img src="Img/Marko1.png" alt=""></div>
                    <h4 class="col col-sm-5-offset-1">Nikola Medic</h4>
                </div>

                <div>
                    <div id="">
                        <b> Tренер 2</b> је особа која води, подучава и тренира спортисте или спортске клубове. Поред
                        физичке и техничке припреме, тренер такође може да врши и психичку припрему спортиста у циљу што
                        боље припреме истог за такмичења која
                        му предстоје. 
                    </div>

                    <div id="" style="display: none;">
                        Кад се ради о тимским спортовима, тренер, поред већ поменутих функција, врши и
                        одабир стратегије коју ће тим применити у предстојећим утакмицама. Такође, тренер је задужен да
                        посматра и проучава ривале и ривалске
                        стратегије.
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