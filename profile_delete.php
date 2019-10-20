<?php 

               
                require 'connection.php';
                /*include 'search.php';
                var_dump($url);*/

                $id = $_GET['id'];
                $sql = "DELETE FROM users WHERE id=$id";
                $query = mysqli_query($conn, $sql);
                
                if ($query) {
                  echo '<script>';
                  echo 'alert("USPESNO STE OBRISALI KORISNIKA");';                 
                  echo 'window.location= "admin_panel.php";';
                  echo '</script>';
                    
                }
                else {
                  
                }
                mysqli_close($conn);
              

?>