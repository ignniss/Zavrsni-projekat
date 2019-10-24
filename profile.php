<?php
session_start();
$id = $_SESSION['id'];

if($_SESSION == NULL){
    header('Location: login.php');
}

require 'connection.php';
$sql = "SELECT * FROM users WHERE id= $id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$program = $result['tip_programa'];
$tezina = $result['tezina'];
$visina = $result['visina'];
$datum1 = $result['registrovanje'];
$datum_registracije = date_format(date_create($datum1), 'd. m. Y.');
$datum2 = $result['uplata'];
$datum_uplate = date_format(date_create($datum2), 'd. m. Y.');
$datum3 = date('Y-m-d');
$datum_sada = date_format(date_create($datum3), 'd. m. Y.');
$korisnicko_ime = $result['korisnicko_ime'];
$program_odrasli = $result['program_odrasli'];
$rok = 30 - date_diff(date_create($datum3), date_create($datum2))->format("%a");
$imejl = $result['email'];
$slika = $result['slike'];
$bmi = round($tezina / pow($visina / 100, 2), 2);




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
    <link rel='stylesheet' href="Style/profile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="Script/profile.js"></script>   
    <script src="Script/session.js"></script>   


    <title>profile</title>
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

                    <?php if (isset($_SESSION['id'])) :  ?>

                        <li class="nav-item">
                            <a class="nav-link text-success" href="profile.php">profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">logout</a>
                        </li>

                    <?php else : ?>
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
    <div class="container">
        <input id="admin_id" type="hidden" name="id" value="<?php echo $id ?>">
        <input id="rok" type="hidden" name="rok" value="<?php echo $rok ?>">
        <input id="program" type="hidden" name="program" value="<?php echo $program ?>">
        <input id="uplata" type="hidden" name="uplata" value="<?php echo $datum2 ?>">




        <div class="row">
            <div class="col-sm-4 text-center">

                <img class="mt-4 " id="profilna" src="<?php echo $slika ?>" alt="">

            </div>

            <div class="col-sm-8">
                <p id="dobrodosli" class="font-weight-bold display-4 text-center text-light">PROFIL KORISNIKA</p>

                <button id="admin_btn" class="btn btn-success form-control ">ADMIN PANEL</button>

                <p class="font-weight-bold">IME: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['ime'] . '</span>'  ?> </p>
                <p class="font-weight-bold">PREZIME: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['prezime'] . '</span>'  ?></p>
                <p class="font-weight-bold">VAŠ ID: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['id'] . '</span>'  ?></p>
                <p class="admin font-weight-bold">DATUM REGISTRACIJE: <?php echo '<span class=" text-success font-weight-bold text-light">' . $datum_registracije . '</span>'  ?></p>
                <p class="admin font-weight-bold">DATUM POSLEDNJE UPLATE:
                    <?php
                    if ($datum2 == NULL || $datum2 == '') {
                        echo '<span class="text-success font-weight-bold text-warning">nemamo podatke o uplatama</span>';
                    } else
                        echo '<span class="text-success font-weight-bold text-light">' . $datum_uplate . '</span>'
                        ?></p>
                <p id="istek" class="admin font-weight-bold">BROJ DANA DO ISTEKA ČLANARINE:
                    <?php

                    switch ($rok) {
                        case $rok > 7:
                            echo '<span class="text-success font-weight-bold text-success">' . $rok . '</span>';
                            break;
                        case $rok > 2 && $rok <= 7:
                            echo '<span class="text-success font-weight-bold text-warning">' . $rok . '</span>';
                            break;
                        case $rok > 0 && $rok <= 2:
                            echo '<span class="text-success font-weight-bold text-danger">' . $rok . '</span>';
                            break;
                        default:
                            echo '<span class="text-success font-weight-bold text-danger">članarina je istekla</span>';
                    }

                    ?></p>

                <p class="font-weight-bold">IMEJL ADRESA: <?php echo '<span class="text-success font-weight-bold text-light">' . $imejl . '</span>'  ?></p>
                <p class="admin font-weight-bold">VRSTA PROGRAMA: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['tip_programa'] . '</span>'  ?></p>
                <p id="program_odrasli" class="admin font-weight-bold">VRSTA PROGRAMA ZA ODRASLE: <?php echo '<span class="text-success font-weight-bold text-light">' . $program_odrasli . '</span>'  ?></p>
                <p class="admin font-weight-bold">POL: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['pol'] . '</span>'  ?> </p>
                <p class="admin font-weight-bold">VISINA: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['visina'] . ' cm </span>'  ?> </p>
                <p class="admin font-weight-bold">TELESNA MASA: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['tezina'] . ' kg </span>'  ?> </p>
                <p class="admin font-weight-bold">BMI: <?php echo '<span class="text-success font-weight-bold text-light">' . $bmi . '</span>' ?>
                    <?php

                    switch ($bmi) {
                        case $bmi < 18.5:
                            echo  '<span class="text-success font-weight-bold text-warning"> (neuhranjenost)</span>';
                            break;
                        case $bmi < 24.9:
                            echo '<span class="text-success font-weight-bold text-success"> (idealna telesna masa)</span>';
                            break;
                        case $bmi < 29.9:
                            echo '<span class="text-success font-weight-bold text-warning"> (prekomerna masa)</span>';
                            break;
                        case $bmi < 34.9:
                            echo '<span class="text-success font-weight-bold text-warning"> (blaga gojaznost)</span>';
                            break;
                        case $bmi < 39.9:
                            echo '<span class="text-success font-weight-bold text-danger"> (teška gojaznost)</span>';
                            break;

                        default:
                            echo '<span class="text-success font-weight-bold text-danger"> (ekstremna gojaznost)</span>';
                    }

                    ?>

                </p>
                <form action="profile-change.php">
                    <button id="izmena_btn" class="btn-rok btn btn-warning mb-4">IZMENA</button>
                </form>
                <hr>

                <p id="prijava" class="admin font-weight-bold text-light">PRIJAVITE PRISUSTVO NA TRENINGU</p>
                <form action="" method="post">
                    <button name="prijava_btn" class="btn-rok admin btn btn-success mb-4">PRIJAVA</button>
                </form>
                <?php

                if (isset($_POST['prijava_btn'])) {
                    $datum_sada = date('Y-m-d');
                    $dan_sada = date('d');
                    $mesec_sada = date('m');
                    $godina_sada = date('Y');
                    $sql4 = "INSERT INTO posete VALUES (NULL, '$id', '$godina_sada', '$mesec_sada', '$dan_sada', '$datum_sada')";
                    $query4 = mysqli_query($conn, $sql4);
                }
                $mesec_sada = date('m');

                $sql = "SELECT COUNT(id) as posete_mesec FROM posete WHERE id=$id AND mesec=$mesec_sada";
                $query = mysqli_query($conn, $sql);
                $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                $broj_poseta_mesec = $result[0]['posete_mesec'];

                $sql2 = "SELECT COUNT(id) as posete FROM posete WHERE id=$id ";
                $query2 = mysqli_query($conn, $sql2);
                $result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
                $broj_poseta = $result2[0]['posete'];

                $sql3 = "SELECT datum FROM posete WHERE id=$id ORDER BY datum DESC  LIMIT 1";
                $query3 = mysqli_query($conn, $sql3);
                $result3 = mysqli_fetch_assoc($query3);
                $datum_posete = $result3['datum'];


                ?>
                <p class="admin font-weight-bold">POSLEDNJA POSETA:

                    <?php
                    if ($datum_posete == NULL || $datum_posete == '') {
                        echo '<span class="text-success font-weight-bold text-warning">NIJE BILO POSETA</span>';
                    } else
                        echo '<span class="text-success font-weight-bold text-light">' . date_format(date_create($datum_posete), 'd. m. Y.') . '</span>'  ?></p>


                <p class="admin font-weight-bold">UKUPAN BROJ POSETA: <?php echo '<span class="text-success font-weight-bold text-light">' .  $broj_poseta .  '</span>'  ?></p>
                <p class="admin font-weight-bold">BROJ POSETA TEKUĆEG MESECA: <?php echo '<span class="text-success font-weight-bold text-light">' . $broj_poseta_mesec.   '</span>'  ?></p>






            </div>

        </div>


    </div>













    <div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>
</body>

</html>