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

    <div id="mainD">
        <div class="row">
            <div class="container col-md-5">
                <form class="container" id='formular1' action="log.php" method="POST">
                    <div class="col-sm-12 leva">
                        <div id='omotac'>
                            <h3>PRIJAVI SE</h3>
                        </div>
                        <input type="text" class="form-control border-success m-2" id="korisnicko" name="korisnicko"
                            placeholder="Korisnicko ime...">
                        <input type="password" class="form-control border-success m-2" id="pass" name="pass"
                            placeholder="Lozinka...">
                        <small id="passwordHelp" class="form-text text-muted m-2">Zaboravili ste lozinku? Kliknite <a
                                href="#">ovde</a></small>
                        <button type="submit" class="btn btn-success m-2" id='prijava' name='btnLog'>PRIJAVI ME</button>
                    </div>
                </form>
            </div>

            <div class="container col-md-5 mt-3 mb-3">
                <form class="container" id='formular2' action="registration.php" method="POST">
                    <div class="col-sm-12 desna">
                        <h3>REGISTRUJ SE</h3>
                        <div class="form-group">
                            Program:
                            <div class="form-check form-check-inline">
                                <input name="program" id="odrasli" value="odrasli" type="radio" class="form-check-input"
                                    required>
                                <label for="odrasli" class="form-check-label">odrasli</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input name="program" id="deca" value="deca" type="radio" class="form-check-input"
                                    required>
                                <label for="deca" class="form-check-label">deca</label>
                            </div>
                        </div>

                        <div class="form-group">


                            Pol:
                            <div class="form-check form-check-inline">
                                <input name="pol" id="muski" value="muški" type="radio" class="form-check-input"
                                    required>
                                <label for="muski" class="form-check-label">muski</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input name="pol" id="zenski" value="ženski" type="radio" class="form-check-input">
                                <label for="zenski" class="form-check-label">zenski</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type='text' class="form-control m-2" id="visina" name="visina"
                                    placeholder="Visina [cm]..." required>
                                <input type='text' class="form-control m-2" id="tezina" name="tezina"
                                    placeholder="Tezina [kg]..." required>
                            </div>
                        </div>
                        <input type="text" class="form-control m-2" id="ime2" name="ime" placeholder="Ime..." required>
                        <input type="text" class="form-control m-2" id="prezime" name="prezime" placeholder="Prezime..."
                            required>
                        <input type="email" class="form-control m-2" id="email2" name="email" placeholder="Email..."
                            required>
                        <input type="text" class="form-control m-2" id="korisnickoIme" name="korisnickoIme"
                            placeholder="Korisnicko ime..." required>
                        <input type="password" class="form-control m-2" id="password2" name="password"
                            placeholder="Lozinka..." required>
                        <small class="form-text text-muted m-2">Sifra mora sadrzati min 5 karaktera (1 veliko slovo, 1 malo, 1 cifru...)</small>
                        <input type="password" class="form-control m-2" id="re_password" name="re_password"
                            placeholder="Ponovljena lozinka..." required>
                        <button type="submit" class="btn btn-light m-2" id='' name='regBtn'><span>REGISTRUJ
                                ME</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>
</body>

</html>
