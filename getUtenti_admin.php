<?php
session_start();
include_once 'php/dbconnect.php';
$id_atc = $_POST['id_atc'];
$id_regione = $_POST['id_regione'];
$id_squadra = $_POST['id_squadra'];
$id_provincia = $_POST['id_provincia'];
$userId = $_POST['id_utente'];
//echo '$userSquadraId'.$userSquadraId;
if(isset($id_atc)){
    $query="SELECT id,id_atc,id_squadra,canaio,capocaccia,username,password,email,trn_date,url_foto FROM users WHERE 1=1  ";
    if (($id_squadra!="")) {
        $query.="AND id_squadra = {$id_squadra}";
    }

/*    if (!empty($id_atc)) {
        $query.=" AND id_atc = {$id_atc}";
    }
*/
   $result = mysqli_query($connection,$query);
   if (!$result) {
       printf("Error: %s\n", mysqli_error($connection));
       exit();
   }
}

         echo '<div>Lista Utenti</div>';
      
         while ($rsUtenti=mysqli_fetch_assoc($result)) {
            $selectedUtente = ''; // keep selected at nothing
            if( $userId == $rsUtenti['id']) // if the value of the dropdownlist is equal to the looped variable
            {
               $selectedUtente = 'selected = "selected"'; // if is equal, set selected = "selected"
            }
             echo "Utente selezionato: ".$selectedUtente."pippo";
             echo "Username: ".$rsUtenti['username'];
             echo "id_squadra: ".$rsUtenti['id_squadra'];
             echo "Password: ".$rsUtenti['password'];
             echo "email: ".$rsUtenti['email'];
             echo "Data ultima modifica: ".$rsUtenti['trn_date'];
             echo "url_foto: ".$rsUtenti['url_foto'].'<br>';

            //echo '<option value = "'.$rsUtenti['id']. '"' . $selectedUtente . '>' .$rsUtenti['nome']. '</option>'; // echo the option element to the page using the $selected variable
      }
      
?>