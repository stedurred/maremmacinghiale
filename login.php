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

//<!-- Modal in caso di password errata-->

                    if(isset($_POST['btn-login']))
                    {
                        echo '<div class="container">';
                        echo    '<div class="modal fade" id="myModal" role="dialog">';
                        echo        '<div class="modal-dialog modal-sm">';
                        echo            '<div class="modal-content">';
                        echo                '<div class="modal-header">';
                        echo                    '<button type="button" class="close" data-dismiss="modal">&times;</button>';
                        echo                    '<h4 class="modal-title">Errore Login</h4>';
                        echo                '</div>';
                        echo            '<div class="modal-body">';
                        echo                '<div class="alert alert-danger">Password errata!</div>';
                        echo            '</div>';
                        echo           '<div class="modal-footer">';
                        echo               '<button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>';
                        echo           '</div>';
                        echo        '</div>';
                        echo      '</div>';
                        echo    '</div>';
                        echo '</div>';



   echo '<option value = "">Selezionare una Regione</option>';
   while ($regione=mysqli_fetch_assoc($result)) {
      $selectedRegione = ''; // keep selected at nothing
      
      if( $userRegioneId == $regione['id']) // if the value of the dropdownlist is equal to the looped variable
      {
         $selectedRegione = 'selected = "selected"'; // if is equal, set selected = "selected"
      }
      echo '<option value = "' .$regione['id']. '"' . $selectedRegione . '>' .$regione['regione']. '</option>'; // echo the option element to the page using the $selected variable
   }
}
?>