<?php
session_start();
$id = $_SESSION['id'];

require 'connection.php';
$sql = "SELECT * FROM users WHERE id= $id";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$tezina = $result['tezina'];
$visina = $result['visina'];
$program = $result['tip_programa'];
$pol = $result['pol'];
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
    <link rel='stylesheet' href="Style/login.css">

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

                <form action="profile-update.php" method="post">

                    <p class="font-weight-bold text-center text-light mt-4">PROMENITE PROFILNU SLIKU</p>
                    <input type="file" class="form-control mt-4" name="myimage">
                    <input class="btn btn-primary mt-2" type="submit" name="submit_image" value="Upload">

            </div>
            <div class="col-8">

                <p class="font-weight-bold display-4 text-center text-dark">DOBRO DOŠLI</p>
                <p class="font-weight-bold text-center">VAŠ PROFIL:</p>
                <p class="font-weight-bold">IME: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['ime'] . '</span>'  ?> </p>
                <p class="font-weight-bold">PREZIME: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['prezime'] . '</span>'  ?></p>
                <p class="font-weight-bold">VAŠ ID: <?php echo '<span class="text-success font-weight-bold text-light">' . $result['id'] . '</span>'  ?></p>
                <p class="font-weight-bold">KORISNIČKO IME:</p> <input type="text" class="form-control" name="korisnicko_ime" value="<?php echo $result['korisnicko_ime'] ?>">


                <p class="font-weight-bold">VRSTA PROGRAMA:</p>
                <?php
                function fja1($a, $x, $y)
                {
                    if ($a == $x) {
                        echo $x;
                    } else echo $y;
                };
                function fja2($a, $x, $y)
                {
                    if ($a == $x) {
                        echo $y;
                    } else echo $x;
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
                <p class="font-weight-bold">IMEJL ADRESA: </p><input type="text" class="form-control" name="Email" value="<?php echo $result['Email'] ?>">


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