<?php
session_start();
include_once 'php/dbconnect.php';


$userRegioneId = $_POST['id_regione'];
//echo($_POST['DropDownRegione']);
//echo($userRegioneId);
//if(isset($id_regione)){
   $result = mysqli_query($connection,"SELECT * FROM regioni");
   if (!$result) {
       printf("Error: %s\n", mysqli_error($connection));
       exit();
   }

   echo '<option value = "">Selezionare una Regione</option>';
   while ($regione=mysqli_fetch_assoc($result)) {
      $selectedRegione = ''; // keep selected at nothing
      
      if( $userRegioneId == $regione['id']) // if the value of the dropdownlist is equal to the looped variable
      {
         $selectedRegione = 'selected = "selected"'; // if is equal, set selected = "selected"
      }
      echo '<option value = "' .$regione['id']. '"' . $selectedRegione . '>' .$regione['regione']. '</option>'; // echo the option element to the page using the $selected variable
   }
//}      
?>