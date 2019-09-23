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
    <!-- <script src='Script/login.js'></script> -->
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
                    <li class="nav-item">
                        <a class="nav-link text-success" href="login.php">login/register</a>
                    </li>
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
                <form class="container" id='formular1'>    
                    <div class="col-sm-12 leva">
                        <div id='omotac'>
                            <h3>PRIJAVI SE</h3>
                        </div>                
                        <input type="text" class="form-control border-success m-2" id="ime" name="ime" placeholder="Korisnicko ime...">                
                        <input type="password" class="form-control border-success m-2" id="password" name="password" placeholder="Lozinka...">
                        <small id="passwordHelp" class="form-text text-muted m-2">Zaboravili ste lozinku? Kliknite <a href="#">ovde</a></small>
                        <button type="button" class="btn btn-success m-2" id='prijava'>PRIJAVI ME</button>
                    </div>
                </form>
            </div>

            <div class="container col-md-5 mt-3 mb-3">
                <form class="container" id='formular2' action="" method="POST">
                    <div class="col-sm-12 desna">
                        <h3>REGISTRUJ SE</h3>
                        <div class="form-group">
                            Pol:
                            <div class="form-check form-check-inline">
                                <input name="pol" id="muski" value="male" type="radio" class="form-check-input" required>
                                <label for="muski" class="form-check-label">muski</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input name="pol" id="zenski" value="female" type="radio" class="form-check-input">
                                <label for="zenski" class="form-check-label">zenski</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type='text' class="form-control m-2" id="visina" name="visina" placeholder="Visina [cm]..." required>    
                                <input type='text' class="form-control m-2" id="tezina" name="tezina" placeholder="Tezina [kg]..." required>
                            </div>
                        </div>
                        <input type="text" class="form-control m-2" id="ime2" name="ime" placeholder="Ime...">
                        <input type="text" class="form-control m-2" id="prezime" name="prezime" placeholder="Prezime..." required>
                        <input type="email" class="form-control m-2" id="email2" name="email" placeholder="Email..." required>  
                        <input type="text" class="form-control m-2" id="korisnickoIme" name="korisnickoIme" placeholder="Korisnicko ime..." required>              
                        <input type="password" class="form-control m-2" id="password2" name="password" placeholder="Lozinka..." required>
                        <input type="password" class="form-control m-2" id="re_password" name="re_password" placeholder="Ponovljena lozinka..." required>
                        <button type="button" class="btn btn-light m-2" id='' name='regBtn'><span>REGISTRUJ ME</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php




    if(isset($_POST['regBtn'])){
        $conn = mysqli_connect('localhost', 'root', '', 'ozongym');

        if (mysqli_connect_errno()) {
            echo 'There is problem with connection: ' . mysqli_connect_error();
        } else {

            $pol = mysqli_real_escape_string($conn, $_POST['pol']);
            $visina = mysqli_real_escape_string($conn, $_POST['visina']);
            $tezina = mysqli_real_escape_string($conn, $_POST['tezina']);
            $ime = mysqli_real_escape_string($conn, $_POST['ime']);
            $prezime = mysqli_real_escape_string($conn, $_POST['prezime']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $korisnickoIme = mysqli_real_escape_string($conn, $_POST['korisnickoIme']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $re_password = mysqli_real_escape_string($conn, $_POST['re_password']);

            /* Formiramo insert upit kojim prosledjene podatke upisujemo u bazu. */
            $query = "INSERT INTO users (pol, visina, tezina, ime, prezime, Email, korisnicko ime, sifra, ponovljena sifra) 
            VALUES ('$pol', $visina, $tezina, '$ime', '$prezime', '$email', '$korisnickoIme', '$password', '$re_password')";

            /* Izvrsavamo upit. Rezultat izvrsavanja moze biti true ili false vrednost. */
            $result = mysqli_query($conn, $query);

            if ($result == false) {
                /* Ako je rezultat false, doslo je do greske. */
                echo "<div class='alert alert-dismissible alert-danger'>";
                echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

                echo "<strong>Error with the query: </strong> " . mysqli_error($conn);
                echo "<br>";
                echo "<strong>Please try later! </strong>";
                echo "</div>";
            } else {
                /* Ako je rezultat true, unos je uspesan. */
                echo "<div class='alert alert-dismissible alert-secondary'>";
                echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

                echo '<strong>Congrats! You have added a new user!</strong>';
                echo "</div>";
            }

            /* Zatvaramo konekciju. */
            mysqli_close($conn);
        }       
    }       
?>

    <div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>
</body>

</html>

