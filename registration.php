<?php
session_start();
?>
<?php

    if(isset($_POST['regBtn'])){
        require "connection.php";
        if (mysqli_connect_errno()) {
            header('Location:neuspela_konekcija.php');
            //echo 'There is a problem with connection: ' . mysqli_connect_error();
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
            $greske=array();

            
            /*funkcije za proveru unetih podataka*/
            function validateTezina($a){
                return $a>0;
            }
            function validateVisina($a){
                return $a>0 && $a<250;
            }
            function validatePassword($a){
                $duzina=strlen($a)>=5;
                $digitCounter=0;
                $upCounter=0;
                for($i=0;$i<strlen($a);$i++){
                    $c=$a[$i];
                    if ($c >= '0' && $c <= '9') {
                        $digitCounter++;
                    }
                    if($c>='A' && $c<='Z'){
                        $upCounter++;
                    }
                }
                return $duzina && ($digitCounter > 0) && ($upCounter > 0);
            }
            function validateKorisnickoIme($a){
                require "connection.php";
                $sql="SELECT * FROM users WHERE korisnicko_ime='$a'";
                $query=mysqli_query($conn, $sql);
                $result=mysqli_fetch_all($query, MYSQLI_ASSOC);
                return count($result)==0;
            }
            function validateEmail($a){
                require "connection.php";
                $sql="SELECT * FROM users WHERE email='$a'";
                $query=mysqli_query($conn, $sql);
                $result=mysqli_fetch_all($query, MYSQLI_ASSOC);
                return count($result)==0;
            }
            function validateRepetedPassword($a,$b){
                return strcmp($a,$b);
            }
            if(validateTezina($tezina)==false){
                $greska="Tezina mora biti pozitivan broj!".'<br>';
                array_push($greske,$greska);
            }
            if(validateVisina($visina)==false){
                $greska="Visina mora biti pozitivna i manja od 250cm!".'<br>';
                array_push($greske,$greska);
            }
            if(validateRepetedPassword($password, $re_password)!=0){
                $greska="Niste lepo ponovili lozinku!".'<br>';
                array_push($greske,$greska);
            }
            if(validatePassword($password)==false){
                $greska="Sifra mora imati makar 5 karaktera, jedno veliko, jedno malo slovo i jednu cifru!".'<br>';
                array_push($greske,$greska);
            }
            if (validateKorisnickoIme($korisnickoIme)==false){
                $greska="Vec imamo korisnika sa istim korisnickim imenom! Unesite novo korisnicko ime!".'<br>';
                array_push($greske,$greska);
            }
            if (validateEmail($email)==false){
                $greska="Vec imamo korisnika sa istom email adresom! Unesite drugu email adresu!".'<br>';
                array_push($greske,$greska);
            }
            
          /*  $filename = 'array.txt';
            $string   = '';

            foreach($greske as $key => $val) {
	        $string .= "$key = $val\n";
            }

            file_put_contents($filename, $string);
*/
            
        if(validateTezina($tezina) && validateVisina($visina) && validatePassword($password) 
         && validateRepetedPassword($password, $re_password)==0 && validateKorisnickoIme($korisnickoIme)
          && validateEmail($email)) {
        /* Formiramo insert upit kojim prosledjene podatke upisujemo u bazu. */
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users VALUES ('$tip_programa','$pol', '$visina', '$tezina', '$ime', '$prezime', '$email', '$korisnickoIme', '$password',  NULL, 'profile_images/trener.png', NULL, '$datum_sada', NULL, NULL )";

        /* Izvrsavamo upit. Rezultat izvrsavanja moze biti true ili false vrednost. */
        $result = mysqli_query($conn, $query);

        if ($result == false) {
            header('Location: neuspela_konekcija.php');
        } else {
            /* Korisnik se uspesno registrovao */
            echo '<script>';
            echo 'alert("Uspesno ste se registrovali!");';
            echo 'window.location= "login.php";';
            echo '</script>';
        }
        }
        else { 
            $_SESSION['greske']=$greske; 
            header('Location:error_handling2.php');
        } /* Zatvaramo konekciju. */
        mysqli_close($conn);
        }
    }           
      else {
        header("location: registration.php");
    }          
?>
