<?php
session_start();
include_once 'php/dbconnect.php';
$id_provincia = $_POST['id_provincia'];
$id_atc = $_POST['id_atc'];
if(isset($id_provincia)){

   $result = mysqli_query($connection,"SELECT atc.id as id,nome_atc 
   	   									FROM atc JOIN territorio ON territorio.id = atc.id_territorio 
   	   									WHERE territorio.id_provincia ='". $id_provincia."'");
   if (!$result) {
       printf("Error: %s\n", mysqli_error($connection));
       exit();
   }
}

         echo '<option value = "">Selezionare un A.T.C.</option>';
         while ($atc=mysqli_fetch_assoc($result)) {
            $selectedAtc= ''; // keep selected at nothing
            if( $id_atc  == $atc['id']) // if the value of the dropdownlist is equal to the looped variable
            {
               $selectedAtc = 'selected = "selected"'; // if is equal, set selected = "selected"
            }
            echo '<option value = "'.$atc['id']. '"' . $selectedAtc . '>' .$atc['nome_atc']. '</option>'; // echo the option element to the page using the $selected variable
         }

//CLOSE CONNECTION
//include_once 'php\dbdisconnect.php';
?>
