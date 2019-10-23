<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/bootstrap.css">
    <link rel="stylesheet" href="Style/search.css">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/search.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="Script/search.js"></script>
    <title>search</title>
</head>

<body>

    <div class="container">

        <a style="font-weight:bold; color:white" href="admin_panel.php">
            <- NAZAD</a> <?php
                            require 'connection.php';
                            $url = $_SERVER['REQUEST_URI'];
                            $pojam = $_GET['pretraga'];
                            $sql = "SELECT * FROM users WHERE ime = '$pojam' OR prezime = '$pojam' OR tip_programa = '$pojam' OR pol = '$pojam' OR ocena = '$pojam' OR program_odrasli = '$pojam'";
                            $query = mysqli_query($conn, $sql);
                            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            ?> <form action="">
                <input type="hidden" name="page_url">
                </form>


                <table id="tabela_pretraga" class="table table-striped table-bordered table-hover mt-3 mb-3">
                    <thead class="thead">
                        <tr>
                            <th>ID</th>
                            <th>IME</th>
                            <th>PREZIME</th>
                            <th>DATUM UPLATE</th>
                            <th>DATUM REGISTROVANJA</th>
                            <th>TIP PROGRAMA</th>
                            <th>PROFIL KORISNIKA</th>
                            <th>BRISANJE KORISNIKA</th>
                            <th>UPLATA</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($result as $row) {
                            $datum_uplate = ($row["uplata"] === NULL ? NULL : date_format(date_create($row["uplata"]), "d. m. Y."));
                            echo '<tr><td>' .  $row['id'] . '</td><td>'  .  $row['ime'] . '</td><td>' .  $row['prezime'] . '</td><td>' . $datum_uplate . '</td><td>' .  date_format(date_create($row["registrovanje"]), "d. m. Y.") . '</td><td>' .  $row['tip_programa'] . '</td><td>';
                            ?>
                            <a href="profile-change_admin?id=<?php echo $row['id'] ?>">PROFIL</a>
                            <?php
                                echo '</td><td>';
                                ?>
                            <a class="delete_link" href="profile_delete.php?id=<?php echo $row['id'] ?>">
                                <p class="btn btn-danger brisanje"> IZBRIŠI</p>
                            </a>

                            <?php
                                echo '</td><td>';
                                ?>
                            <a href="update_uplate.php?id=<?php echo $row['id'] ?>">
                                <p class="btn btn-success"> UPLATA</p>
                            </a>
                        <?php
                            echo '</td></tr> ';
                        }
                        mysqli_close($conn);
                        ?>



    </div>

</body>

</html>