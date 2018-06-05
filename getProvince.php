<?php
session_start();
include_once 'php/dbconnect.php';
$id_regione = $_POST['id_regione'];
$id_provincia = $_POST['id_provincia'];
if(isset($id_regione)){

   $result = mysqli_query($connection,"SELECT id, nome_provincia FROM province WHERE id_regione='". $id_regione."'");
   if (!$result) {
       printf("Error: %s\n", mysqli_error($connection));
       exit();
   }
}
         echo '<option value = ""  = "selected">Selezionare una Provincia</option>';
         
         while ($provincia=mysqli_fetch_assoc($result)) {
            $selectedProvincia = ''; // keep selected at nothing
            if( $id_provincia == $provincia['id']) // if the value of the dropdownlist is equal to the looped variable
            {
               $selectedProvincia = 'selected = "selected"'; // if is equal, set selected = "selected"
            }
            echo '<option value = "'.$provincia['id']. '"' . $selectedProvincia . '>' .$provincia['nome_provincia']. '</option>'; // echo the option element to the page using the $selected variable
      }
      
?>