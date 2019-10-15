<?php
session_start();
$id = $_SESSION['id'];

require 'connection.php';
$sql = "SELECT * FROM users WHERE id= $id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$program = $result['tip_programa'];
$pol = $result['pol'];
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
$imejl = $result['Email'];
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
    <title>Login</title>
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
        <div class="row">
            <div class="col-4">
            <p class="font-weight-bold text-center mt-4">IZABERITE PROFILNU SLIKU</p>
                <?php
                if (isset($_POST['slika_btn'])) {
                    $slika = $_FILES['slika'];
                    $putanja = "profile_images/" .basename($slika['name']);
                    $sql = "UPDATE users SET slike = '$putanja' WHERE id = '$id'";
                    $query = mysqli_query($conn, $sql);
                    move_uploaded_file($slika['tmp_name'], $putanja);
                }

                ?>

                <form method="post" action="" enctype="multipart/form-data">
                    <input class="btn btn-secondary mt-3" type="file" name="slika">
                    <input class="btn btn-info mt-3" type="submit" name="slika_btn" value="Upload">
                </form>

            </div>
            <div class="col-8">
                <p id="dobrodosli" class="font-weight-bold display-4 text-center text-light">PROFIL KORISNIKA</p>

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
                <p class="admin font-weight-bold">BROJ DANA DO ISTEKA ČLANARINE:
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


                <form action="profile-update.php" method="post">

                    <p class="font-weight-bold">IMEJL ADRESA:</p> <input type="email" class="form-control" name="email" value="<?php echo $result['Email'] ?>">

                    <p class="font-weight-bold">VRSTA PROGRAMA:</p>
                    <?php
                    function fja1($a, $x, $y)
                    {
                        if ($a == $x) {
                            echo trim($x);
                        } else echo trim($y);
                    };
                    function fja2($a, $x, $y)
                    {
                        if ($a == $x) {
                            echo trim($y);
                        } else echo trim($x);
                    };


                    ?>

                    <select class="form-control" name="program" id="">
                        <option value="
                        <?php
                        fja1($GLOBALS['program'], 'deca', 'odrasli');
                        ?>
                        ">
                            <?php
                            fja1($GLOBALS['program'], 'deca', 'odrasli');
                            ?>
                        </option>
                        <option value="
                        <?php
                        fja2($GLOBALS['program'], 'deca', 'odrasli');
                        ?>
                        ">
                            <?php
                            fja2($GLOBALS['program'], 'deca', 'odrasli');
                            ?>
                        </option>

                    </select>
                    <p class="font-weight-bold">PROGRAM ZA ODRASLE: </p>
                    <select name="program_odrasli" id="program_odrasli" class='form-control'>
                        <option value="cross training">cross training</option>
                        <option value="cross conditioning">cross conditioning</option>
                        <option value="cross box">cross box</option>
                        <option value="zumba">zumba</option>
                        <option value="pilates">pilates</option>
                        <option value="joga">joga</option>

                    </select>

                    <p class="font-weight-bold">POL: </p>
                    <select class="form-control" name="pol" id="">
                        <option value="
                        <?php
                        fja1($GLOBALS['pol'], 'muški', 'ženski');
                        ?>
                        ">
                            <?php
                            fja1($GLOBALS['pol'], 'muški', 'ženski');
                            ?>
                        </option>
                        <option value="
                        <?php
                        fja2($GLOBALS['pol'], 'muški', 'ženski');
                        ?>
                        ">
                            <?php
                            fja2($GLOBALS['pol'], 'muški', 'ženski');
                            ?>
                        </option>

                    </select>
                    <p class="font-weight-bold">VISINA:</p> <input type="text" class="form-control" name="visina" value="<?php echo $result['visina'] ?>">
                    <p class="font-weight-bold">TELESNA MASA: </p><input type="text" class="form-control" name="tezina" value="<?php echo $result['tezina'] ?>">

                    <?php
                    mysqli_close($conn);
                    ?>
                    <button type="submit " class="btn btn-success mb-4 mt-3">SAČUVAJ</button>
                </form>



            </div>










        </div>
    </div>

    <div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>
</body>

</html>