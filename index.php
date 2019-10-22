<?php
session_start();
$sesija = 0;
if($_SESSION != NULL)
$sesija = 1;
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
    <link rel="stylesheet" href="Style/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

    <script>
    $(function()
    
{   
    var sesija = '<?php echo $sesija; ?>';
    function timeChecker()
    {    

        setInterval(function()
        {
            var storedTimeStamp = sessionStorage.getItem("lastTimeStamp");
            timeCompare(storedTimeStamp); 
        }, 3000);
    }

    function timeCompare(timeString)
    {
        var currentTime = new Date();
        var pastTime    = new Date(timeString);
        var timeDiff    = currentTime - pastTime;
        var secPast     = Math.floor((timeDiff/1000)); 

        if(timeDiff > 15000){
            sessionStorage.removeItem("lastTimeStamp");
            window.location = "logout.php";
            return false;
        }else{
            console.log(currentTime +"-"+ pastTime+"="+secPast+" sec past");
        }

    }

    $(document).mousemove(function()
    {

        var timeStamp = new  Date();
        sessionStorage.setItem("lastTimeStamp", timeStamp);
    });

    $(document).keydown(function()
    {

        var timeStamp = new  Date();
        sessionStorage.setItem("lastTimeStamp", timeStamp);
    });

    $(document).mousedown(function()
    {

        var timeStamp = new  Date();
        sessionStorage.setItem("lastTimeStamp", timeStamp);
    });

 console.log(sesija);
 if(sesija == 1){
        timeChecker();
 }

    
    
});
    </script>



    <title>Naslovna strana</title>
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
                        <a class="nav-link text-success" href="index.php">Home</a>
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
                        <a class="nav-link" href="gallery.php">gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">contact us</a>
                    </li>
                    <?php if (isset($_SESSION['id'])) :  ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">logout</a>
                        </li>
                    <?php else : ?>
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

    <div id="mainDivH">
        <form action="" method="post">
            <button name="baza_btn" class="btn btn-success mt-5 ml-5" type="submit">KREIRAJ BAZU</button>
        </form>
        <form action="" method="post">
            <button name="tabele_btn" class="btn btn-primary mt-2 ml-5" type="submit">KREIRAJ TABELE</button>
        </form>
        <form action="" method="post">
            <button name="unos_btn" class="btn btn-secondary mt-2 ml-5" type="submit">KREIRAJ UNOSE</button>
        </form>


        <?php


        if (isset($_POST['baza_btn'])) {
            $conn1 = mysqli_connect('localhost', 'root', '');
            $sql1 = "CREATE DATABASE ozongym";
            $query1 = mysqli_query($conn1, $sql1);
        }
        if (isset($_POST['tabele_btn'])) {

            $conn2 = mysqli_connect('localhost', 'root', '', 'ozongym');
            $sql2 = "CREATE TABLE users (
tip_programa varchar(30),
pol varchar (30),
visina int(3),
tezina int (3),
ime varchar (50),
prezime varchar (50),
email varchar (50),
korisnicko_ime varchar (50),
sifra text (500),
id int(11) NOT NULL AUTO_INCREMENT,
slike varchar (50),
uplata date,
registrovanje date,
ocena int(1),
program_odrasli varchar (50),
PRIMARY KEY (id) )";
            $query2 = mysqli_query($conn2, $sql2);

            $sql3 = "CREATE TABLE uplate (
    id_uplate int (11) NOT NULL AUTO_INCREMENT,
    id_korisnika int (11),
    datum_uplate date,
    PRIMARY KEY (id_uplate))";


            $query3 = mysqli_query($conn2, $sql3);

            $sql4 = "CREATE TABLE posete (
    id_posete int (11) NOT NULL AUTO_INCREMENT,
    id int (11),
    godina int (4),
    mesec int (2),
    dan int (2),
    datum date,
    PRIMARY KEY (ID_posete))";

            $query4 = mysqli_query($conn2, $sql4);
        }

        if (isset($_POST['unos_btn'])) {
            $conn2 =  mysqli_connect('localhost', 'root', '', 'ozongym');
            $sql5 = "INSERT INTO users VALUES 
            ('odrasli', 'muški', 185, 76, 'Petar', 'Petrovic', 'pera@pera.com', 'pera', 'pera', NULL, 'profile_images/trener.png', DATE '2019-10-01', DATE '2019-08-04', NULL, NULL),
            ('odrasli', 'muški', 155, 45, 'Jovan', 'Jovanovic', 'jova@jova.com', 'jova', 'jova', NULL, 'profile_images/trener.png', DATE '2019-10-05', DATE '2018-08-04', NULL, NULL),
            ('deca', 'muški', 165, 56, 'Milan', 'Milanovic', 'mile@mile.com', 'mile', 'mile', NULL, 'profile_images/trener.png', DATE '2019-08-05', DATE '2017-08-04', NULL, NULL),
            ('odrasli', 'ženski', 165, 76, 'Jela', 'Jelic', 'jela@jela.com', 'jela', 'jela', NULL, 'profile_images/trener.png', DATE '2019-10-05', DATE '2017-05-04', NULL, NULL),
            ('deca', 'ženski', 170, 56, 'Mila', 'Milic', 'mila@mila.com', 'mila', 'mila', NULL, 'profile_images/trener.png', DATE '2019-05-05', DATE '2015-12-04', NULL, NULL),
            ('odrasli', 'muški', 200, 100, 'Sima', 'Simic', 'sima@sima.com', 'sima', 'sima', NULL, 'profile_images/trener.png', DATE '2019-10-05', DATE '2017-05-04', NULL, NULL),
            ('odrasli', 'ženski', 155, 46, 'Mina', 'Minic', 'mina@mina.com', 'mina', 'mina', NULL, 'profile_images/trener.png', DATE '2019-06-05', DATE '2019-10-28', NULL, NULL),
            ('odrasli', 'ženski', 185, 66, 'Stana', 'Stanic', 'stana@stana.com', 'stana', 'stana', NULL, 'profile_images/trener.png', DATE '2019-10-05', DATE '2019-10-30', NULL, NULL),
            ('odrasli', 'ženski', 165, 66, 'Nina', 'Ninic', 'mina@mina.com', 'nina', 'nina', NULL, 'profile_images/trener.png', DATE '2019-08-05', DATE '2013-11-30', NULL, NULL)
            
            
            
            ";

            $query5 = mysqli_query($conn2, $sql5);
        }


        ?>
        <h1 id="naslov"> </h1>
    </div>

    <script>
        $(document).ready(() => {

            var text = "WELLCOME TO OZON CROSS GYM";
            var delay = 100;
            var naslov = $("#naslov");

            var addTextByDelay = function(text, naslov, delay) {
                if (!naslov) {
                    naslov = $("body");
                }
                if (!delay) {
                    delay = 100;
                }
                if (text.length > 0) {
                    //append first character 
                    naslov.append(text[0]);
                    setTimeout(
                        () => {
                            //Slice text by 1 character and call function again                
                            addTextByDelay(text.slice(1), naslov, delay);
                        }, delay
                    );
                }
            }

            addTextByDelay(text, naslov, delay);







        });
    </script>

    <div id="footer" class="bg-dark">
        <h2>REKLAME</h2>
    </div>








</body>

</html>