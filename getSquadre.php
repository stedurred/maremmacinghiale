<?php
session_start();
include_once 'php/dbconnect.php';
$id_atc = $_POST['id_atc'];
$userSquadraId = $_POST['id_squadra'];
//echo '$userSquadraId'.$userSquadraId;
if(isset($id_atc)){

   $result = mysqli_query($connection,"SELECT id, nome FROM squadra WHERE id_atc='". $id_atc."'");
   if (!$result) {
       printf("Error: %s\n", mysqli_error($connection));
       exit();
   }
}
         echo '<option value = "">Selezionare una Squadra</option>';
      
         while ($squadra=mysqli_fetch_assoc($result)) {
            $selectedSquadra = ''; // keep selected at nothing
            if( $userSquadraId == $squadra['id']) // if the value of the dropdownlist is equal to the looped variable
            {
               $selectedSquadra = 'selected = "selected"'; // if is equal, set selected = "selected"
            }
            echo '<option value = "'.$squadra['id']. '"' . $selectedSquadra . '>' .$squadra['nome']. '</option>'; // echo the option element to the page using the $selected variable
      }
      
?>