<?php
session_start();
$id = $_SESSION['id'];

if ($id != 1) {
    header('Location: login.php');
}
require 'connection.php';


$sql = "SELECT COUNT(registrovanje) AS novi FROM users WHERE registrovanje > CURRENT_DATE() - 7";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
$novi_nedelja = $result[0]['novi'];

$sql2 = "SELECT COUNT(datum) AS danas FROM posete WHERE datum = CURRENT_DATE()";
$query2 = mysqli_query($conn, $sql2);
$result2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
$posete_danas = $result2[0]['danas'];

$sql3 = "SELECT COUNT(datum) AS mesec FROM posete WHERE datum BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()";
$query3 = mysqli_query($conn, $sql3);
$result3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);
$posete_mesec = $result3[0]['mesec'];

$sql4 = "SELECT COUNT(uplata) AS uplata FROM users WHERE uplata < DATE_SUB(NOW(), INTERVAL 30 DAY)";
$query4 = mysqli_query($conn, $sql4);
$result4 = mysqli_fetch_all($query4, MYSQLI_ASSOC);
$uplate = $result4[0]['uplata'];

$sql5 = "SELECT * FROM users";
$query5 = mysqli_query($conn, $sql5);
$result5 = mysqli_fetch_all($query5, MYSQLI_ASSOC);




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/bootstrap.css">
    <link rel="stylesheet" href="Style/admin_panel.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Script/admin_panel.js"></script>
    <title>admin</title>
</head>

<body>
    <a id="logout_btn" class="btn btn-warning mt-3 ml-4" href="logout.php">ODJAVA</a>


    <div class=" container">

        <div class="row">


            <div class="card col-3 text-light bg-dark text-center mt-3">

                BROJ NOVIH KORISNIKA (7 DANA)
                <?php
                echo '<p class="text-success font-weight-bold">' . $novi_nedelja . '</p>';
                $sql7 = " SELECT * FROM users WHERE registrovanje > CURRENT_DATE() - 7  ";
                $query7 = mysqli_query($conn, $sql7);
                $result7 = mysqli_fetch_all($query7, MYSQLI_ASSOC);
                ?>
                <button id="novi_korisnici_btn" name="novi_korisnici_btn" class="prikazi_btn btn btn-info mb-3">PRIKAŽI</button>

                <div class="table-wrapper">
                    <table id="novi_korisnici_pretraga" class="table table-hover table-bordered table-striped mb-3">

                        <thead class="thead">
                            <tr>
                                <th>ime</th>
                                <th>prezime</th>
                                <th>pol</th>
                                <th>program</th>
                                <th>visina</th>
                                <th>tezina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result7 as $row) {
                                echo '<tr><td>' . $row['ime'] . '</td><td> ' . $row['prezime'] . '</td><td> ' . $row['pol'] . '</td><td> ' . $row['tip_programa'] . '</td><td> ' . $row['visina'] . '</td><td> ' . $row['tezina'] . '</td></tr> ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>



            <div class="card col-3 text-light bg-dark text-center mt-3">

                BROJ POSETA DANAS
                <?php
                echo '<p class="text-success font-weight-bold">' . $posete_danas . '</p>';
                $sql8 = "SELECT users.id, posete.id, users.ime, users.prezime, users.tip_programa, users.program_odrasli, posete.datum  FROM users INNER JOIN posete ON users.id=posete.id WHERE posete.datum = CURRENT_DATE()";
                $query8 = mysqli_query($conn, $sql8);
                $result8 = mysqli_fetch_all($query8, MYSQLI_ASSOC);
                ?>

                <button id="poseta_danas_btn" name="poseta_danas_btn" class="prikazi_btn btn btn-info mb-3">PRIKAŽI</button>

                <div class="table-wrapper">
                    <table id="poseta_danas_pretraga" class="table table-hover table-bordered table-striped mb-3">

                        <thead class="thead">
                            <tr>
                                <th>ime</th>
                                <th>prezime</th>
                                <th>program</th>
                                <th>odrasli</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($result8 as $row) {
                                echo '<tr><td>' . $row['ime'] . '</td><td> ' . $row['prezime'] . '</td><td> ' . $row['tip_programa'] . '</td><td> ' . $row['program_odrasli']  . '</td></tr> ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>



            </div>
            <div class="card col-3 text-light bg-dark text-center mt-3">

                BROJ POSETA (30 DANA)
                <?php
                echo '<p class="text-success font-weight-bold">' . $posete_mesec . '</p>';
                $sql9 = "SELECT users.id, posete.id, users.ime, users.prezime, users.tip_programa, users.program_odrasli, posete.datum  FROM users INNER JOIN posete ON users.id=posete.id WHERE datum BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()";
                $query9 = mysqli_query($conn, $sql9);
                $result9 = mysqli_fetch_all($query9, MYSQLI_ASSOC);
                ?>

                <button id="broj_mesec_btn" class="prikazi_btn btn btn-info mb-3">PRIKAŽI</button>
                <div class="table-wrapper">
                    <table id="broj_mesec_pretraga" class="table table-hover table-bordered table-striped mb-3">

                        <thead class="thead">
                            <tr>
                                <th>ime</th>
                                <th>prezime</th>
                                <th>program</th>
                                <th>odrasli</th>
                                <th>datum posete</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result9 as $row) {
                                echo '<tr><td>' . $row['ime'] . '</td><td> ' . $row['prezime'] . '</td><td> ' . $row['tip_programa'] . '</td><td> ' . $row['program_odrasli'] . '</td><td> ' . date_format(date_create($row["datum"]), "d. m. Y.") . '</td></tr> ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="card col-3 text-light bg-dark text-center mt-3">

                ISTEKLE ČLANARINE
                <?php
                echo '<p class="text-danger font-weight-bold">' . $uplate . '</p>';
                $sql10 = "SELECT * FROM users WHERE uplata < DATE_SUB(NOW(), INTERVAL 30 DAY)";
                $query10 = mysqli_query($conn, $sql10);
                $result10 = mysqli_fetch_all($query10, MYSQLI_ASSOC);

                ?>

                <button id="clanarine_btn" class="btn btn-danger mb-3">PRIKAŽI</button>
                <div class="table-wrapper">
                    <table id="clanarine_pretraga" class="table table-hover table-bordered table-striped mb-3">

                        <thead class="thead">
                            <tr>
                                <th>id</th>
                                <th>ime</th>
                                <th>prezime</th>
                                <th>datum uplate</th>
                                <th>uplatio</th>


                            </tr>
                        </thead>
                        <tbody>


                            <?php
                            foreach ($result10 as $row) :
                                echo '<tr><td>' . $row['id'] . '</td><td> ' . $row['ime'] . '</td><td> ' . $row['prezime'] . '</td><td> ' . date_format(date_create($row["uplata"]), "d. m. Y.") . '</td><td>';

                                ?>
                                <a href="update_uplate.php?id=<?php echo $row['id'] ?>">UPLATA</a>
                            <?php
                                echo '</td></tr> ';

                            endforeach;
                            ?>



                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="row  mt-3">
            <div id="levo" class="col-5">
                <form action="search.php" method="get">
                    <input class="form-control mt-3" type="text" name="pretraga" placeholder="unesi pojam...">
                    <button name="pretraga_btn" type="submit" class="btn btn-primary mt-3 mb-3">PRETRAŽI</button>
                </form>
            </div>



            <div id="desno" class="col-7">


                </tbody>
                </table>
            </div>

        </div>

        <?php
        mysqli_close($conn);
        ?>

    </div>

</body>

</html>