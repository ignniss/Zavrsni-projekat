<?php




    if(isset($_POST['regBtn'])){
        require "connection.php";
        if (mysqli_connect_errno()) {
            echo 'There is problem with connection: ' . mysqli_connect_error();
        } else {

            $tip_programa = mysqli_real_escape_string($conn, $_POST['program']);
            $pol = mysqli_real_escape_string($conn, $_POST['pol']);
            $visina = mysqli_real_escape_string($conn, $_POST['visina']);
            $tezina = mysqli_real_escape_string($conn, $_POST['tezina']);
            $ime = mysqli_real_escape_string($conn, $_POST['ime']);
            $prezime = mysqli_real_escape_string($conn, $_POST['prezime']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $korisnickoIme = mysqli_real_escape_string($conn, $_POST['korisnickoIme']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $re_password = mysqli_real_escape_string($conn, $_POST['re_password']);
            $datum_sada=date('Y-m-d');

            if(strcmp($password, $re_password)!=0){
                echo '<strong>Niste tacno ponovili lozinku!!</strong>';
            }else{
        /* Formiramo insert upit kojim prosledjene podatke upisujemo u bazu. */
        $query = "INSERT INTO users VALUES ('$tip_programa','$pol', '$visina', '$tezina', '$ime', '$prezime', '$email', '$korisnickoIme', '$password', '$re_password', NULL, 'trener.png', NULL, '$datum_sada', NULL, NULL )";

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
            // header("location: login.php");
            echo "<div class='alert alert-dismissible alert-secondary'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";

            echo '<strong>Congrats! You have added a new user!</strong>';
            echo "</div>";
            
        }

        /* Zatvaramo konekciju. */
        mysqli_close($conn);
                    }

            
        }      
    }else {
        header("location: login.php");
    }          
?>