<?php
session_start();
include_once 'php/dbconnect.php';
$fb_user_pages = json_decode($_POST['fb_user_pages']);

file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")."#####____FACEBOOK USER getPagine.php___fbUser:#####"
    .$GLOBALS['fb_user'] .PHP_EOL, FILE_APPEND);

//$fb_user_pages = json_decode($GLOBALS['fb_user']->fb_user_pages);

//var_dump($GLOBALS['fb_user']->fb_user_pages);
//$fb_user_pages=json_decode($_GET['fb_user_pages']);
$fb_user_pagesEncoded=json_encode($fb_user_pages);

// var_dump($fb_user_pagesEncoded);
file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")."#####____FACEBOOK USER getPagine.php___#####".$fb_user_pagesEncoded.PHP_EOL, FILE_APPEND);

//echo '$userSquadraId'.$userSquadraId;


/*echo '<option value = "">Selezionare una Pagina</option>';

foreach  ($fb_user_pages as $page) {
       $selectedPagina = ''; // keep selected at nothing
       if( $userSquadraId == $page[0]->id
       ) // if the value of the dropdownlist is equal to the looped variable
       {
          $selectedPagina = 'selected = "selected"'; // if is equal, set selected = "selected"
       }
       echo '<option value = "'.$page[0]->id. '"' . $selectedPagina . '>' .$page[0]->name. '</option>'; // echo the option element to the page using the $selected variable
 }*/
if(isset($fb_user_pages)){

    file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")."#####____FACEBOOK USER getPagine.php___#####".$fb_user_pages.PHP_EOL, FILE_APPEND);


    //$result = mysqli_query($connection,"SELECT id, nome FROM squadra WHERE id_atc='". $fb_user_pages."'");
  /* if (!$result) {
       printf("Error: %s\n", mysqli_error($connection));
       exit();
   }*/

    echo '<option value = "">Selezionare una Pagina</option>';
    //exit;
/*    if (is_array($fb_user_pages)){
        echo '<option value = "">UN ARRAY</option>';
    }
    if (is_object($fb_user_pages)){
        echo '<option value = "">UN OBJECT</option>';
    }*/
        foreach  ($fb_user_pages as $page) {
        	//echo $page;
            $selectedPagina = ''; // keep selected at nothing
            if( $userSquadraId == $page->id) // if the value of the dropdownlist is equal to the looped variable
            {
               $selectedPagina = 'selected = "selected"'; // if is equal, set selected = "selected"
            }
            echo '<option value = "'.$page->id. '"' . $selectedPagina . '>' .urldecode($page->name). '</option>'; // echo the option element to the page using the $selected variable
      }
}
?>