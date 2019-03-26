<?php


session_start();

echo DIRECTORY_SEPARATOR;
//exit();
$filename = '\vendor\autoload.php';
if (file_exists($filename)) {
    require  __DIR__ . $filename;
}





include 'fbApp.php';



// require_once 'fbApp.php';
file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
		."\n\r####################################".
		"\n\r #####____MAREMMACINGHIALE.IT___#####".
		"\n\r #####							 #####".
		"\n\r #####________BENVENUTO_________#####".
		"\n\r #####							 #####".
		"\n\r ####################################".
		"INIT____FACEBOOK APP MAREMMACINGHIALE____".PHP_EOL, FILE_APPEND);

//use fbApp;

try {



//Facebook PHP SDK



	//Facebook PHP SDK
	global $fb;
    $fbApplication = new fbApp();
    $fbApplication->printGraphVersion();
    
    $GLOBALS['fb'] = $fbApplication->fbApplication;

	



    //INIZIO Facebook login Token

    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['public_profile' ,'email', 'user_likes','manage_pages','pages_show_list','publish_pages']; // optional ,'manage_pages'

    $loginUrl = $helper->getLoginUrl('http://www.maremmacinghiale.it/home.php',$permissions);
    
    file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
    		."#####____FACEBOOK____index.php v2.9___#####".
    		"INIT____FACEBOOK APP MAREMMACINGHIALE____loginUrl:".$loginUrl.PHP_EOL, FILE_APPEND);

    // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.

    //$helper = $fb->getJavaScriptHelper();

    //$helper = $fb->getCanvasHelper();

    //$helper = $fb->getPageTabHelper();

    // Get the \Facebook\GraphNodes\GraphUser object for the current user.

    // If you provided a 'default_access_token', the '{access-token}' is optional.

    $accessToken = $helper->getAccessToken();
    
    file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
    		."#####____FACEBOOK____index.php___#####".
    		"INIT____FACEBOOK APP MAREMMACINGHIALE____accessToken:".$accessToken.PHP_EOL, FILE_APPEND);

    //var_dump($loginUrl);







    if (isset($accessToken)) {

        var_dump($accessToken);

        $response = $fb->get('/Maremma Cinghiale?fields=access_token', $accessToken );

        // Logged in!
        
        file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
        		."#####____FACEBOOK____index.php___#####".
        		"/ Logged in! FACEBOOK APP MAREMMACINGHIALE____accessToken:".$accessToken, FILE_APPEND);
        

        $_SESSION['facebook_access_token'] = (string) $accessToken;

        $response->getBody();

        $me = $response->getGraphUser();

        $page = $response->getGraphPage();

        var_dump($page);

        // Logged in

        echo '<h3>Access Token</h3>'.$accessToken->getValue();

        echo 'Logged in as ' . $me->getName();

        echo 'eMail: ' . $me->getEmail();

        // Gets birthday value, assume Graph return was format MM/DD
        $birthday = $me->getBirthday();

        var_dump($birthday);
// class Facebook\GraphNodes\Birthday ...

        var_dump($birthday->hasDate());
// true

        var_dump($birthday->hasYear());
// false

        var_dump($birthday->format('m/d'));
// 03/21

        // Now you can redirect to another page and use the

        // access token from $_SESSION['facebook_access_token']

        //header("Location: home.php");

    } elseif ($helper->getError()) {

        // The user denied the request

        exit;

    }



    //FINE Facebook login Token



} catch(\Facebook\Exceptions\FacebookResponseException $e) {

    // When Graph returns an error

    echo 'Graph returned an error: ' . $e->getMessage();

    exit;

} catch(\Facebook\Exceptions\FacebookSDKException $e) {

    // When validation fails or other local issues

    echo 'Facebook SDK returned an error: ' . $e->getMessage();

    exit;

}







$timezone = date_default_timezone_get();

//echo "The current server timezone is: " . $timezone.'<br>';

setlocale(LC_TIME, 'ita', 'it_IT');

//echo '|'.implode('|',ini_get_all());

date_default_timezone_set('Europe/Rome');

//print (strftime ("%A.\n"));



$datenow = date('Y-m-d H:i:s');

//echo $datenow.'<br>';

$yearNow=date('Y');

$nextYear=date_format(date_add(date_create_from_format('d-m-Y','01-01-'.$yearNow),new DateInterval('P1Y')),'Y');

//echo  $nextYear;

$monthNow = date('m');

//echo $monthNow;

$gennaio=date_format(date_add(date_create_from_format('d-m-Y','01-12-'.$yearNow),new DateInterval('P1M')),'m');

$febbraio=date_format(date_add(date_create_from_format('d-m-Y','01-01-'.$yearNow),new DateInterval('P1M')),'m');

$marzo=date_format(date_add(date_create_from_format('d-m-Y','01-02-'.$yearNow),new DateInterval('P1M')),'m');

$aprile=date_format(date_add(date_create_from_format('d-m-Y','01-03-'.$yearNow),new DateInterval('P1M')),'m');

$maggio=date_format(date_add(date_create_from_format('d-m-Y','01-04-'.$yearNow),new DateInterval('P1M')),'m');

$giugno=date_format(date_add(date_create_from_format('d-m-Y','01-05-'.$yearNow),new DateInterval('P1M')),'m');

$luglio=date_format(date_add(date_create_from_format('d-m-Y','01-06-'.$yearNow),new DateInterval('P1M')),'m');

$agosto=date_format(date_add(date_create_from_format('d-m-Y','01-07-'.$yearNow),new DateInterval('P1M')),'m');

$settembre=date_format(date_add(date_create_from_format('d-m-Y','01-08-'.$yearNow),new DateInterval('P1M')),'m');

$ottobre=date_format(date_add(date_create_from_format('d-m-Y','01-09-'.$yearNow),new DateInterval('P1M')),'m');

$novembre=date_format(date_add(date_create_from_format('d-m-Y','01-10-'.$yearNow),new DateInterval('P1M')),'m');

$dicembre=date_format(date_add(date_create_from_format('d-m-Y','01-11-'.$yearNow),new DateInterval('P1M')),'m');

//echo 'gennaio:'.$gennaio;

$mounthNameNow =strftime ('%B');





//for ($i = 1; $i <= 12; 12) {

//    $nextMonth = date_format(date_add(date_create(),new DateInterval('P'.$i.'M')),'m');

//    $i=$i+1;

//    echo $nextMonth;

//}

//New style programming Object orientd style

//$YearInterval = new DateInterval('P1Y');

//

////echo $Year->days; // 0

//

//$Date1 = new DateTime();

//$Date2 = new DateTime();

//$Date2->add( $YearInterval );

//

//$Difference = $Date1->diff( $Date2 );

//echo $Difference->days; // 365





//print (strftime ("%A e in Italiano "));

setlocale (LC_TIME, "it-IT");

//print (strftime ("%A.\n"));



//OPEN CONNECTION

include_once 'php/dbconnect.php';

include_once 'calendar.php';

include_once 'getRegione.php';

include_once 'fbUser.php';


if(isset($_SESSION['user'])!="")

{

 header("Location: home.php");

}

/*login query*/

if(isset($_POST['btn-login']))

{

	file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
			."#####____INIT LOGIN STANDARD____index.php___#####".PHP_EOL, FILE_APPEND);
	
	
    $email = mysqli_real_escape_string($connection,$_POST['email']);

    $upass = mysqli_real_escape_string($connection,$_POST['pass']);
		
		// $res=mysql_query("SELECT * FROM users WHERE email='$email'");
	$sqlUser = "SELECT  users.*,
					squadra.nome as nome_squadra,
					squadra.numero as numero_squadra,
					squadra.url_foto as foto_squadra
					FROM users
					JOIN squadra on squadra.id = users.id_squadra
					WHERE users.email='$email' or  users.username='$email'";
	
	file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
			."#####___SQL LOGIN STANDARD____index.php___sqlUser:#####\r\n".$sqlUser.PHP_EOL, FILE_APPEND);
	
	$res=mysqli_query($connection,$sqlUser);

 	$row=mysqli_fetch_array($res);

	if($row['password']==md5($upass)){
		
		file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
				."#####___ LOGIN STANDARD____index.php___Login effettuata!!!!:#####".PHP_EOL, FILE_APPEND);
	
    	$_SESSION['user'] = $row['username'];

    	$_SESSION['user_id'] = $row['id'];
    	
    	$_SESSION['user_password'] = $row['password'];

    	$_SESSION['user_idatc'] = $row['id_atc'];

    	$_SESSION['user_id_squadra'] = $row['id_squadra'];

    	$_SESSION['user_nome_squadra'] = $row['nome_squadra'];

     	$_SESSION['user_numero_squadra'] = $row['numero_squadra'];
	
    	$_SESSION['user_url_foto_profilo'] = $row['url_foto'];

     	$_SESSION['user_url_foto_squadra'] = $row['foto_squadra'];

    	$_SESSION['user_capocaccia'] = $row['capocaccia'];

    	$_SESSION['user_canaio'] = $row['canaio'];

     	$_SESSION['user_admin_squadra'] = $row['admin_squadra'];

     	$_SESSION['user_admin_page'] = $row['admin_page'];

     	$_SESSION['user_catture_cinghiali'] = $row['catture_cinghiali'];
	
	                                                                  
		header("Location: home.php");
	
	 }else{/*Gestire l'errore di login non avvenuta*/
?>

	<script>
	
	    alert("Password Errata!")
	
	</script>

     <?php
     	file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
     		."#####___ LOGIN STANDARD____index.php___Impossibile effettuare la Login!!!!:#####".PHP_EOL, FILE_APPEND);
 	}
}//End Login Button function


	//Ricerca eventi senza prametri dal menu laterale


    $titolo ='';
    $regione='';
    $provincia ='';
    $atc='';
    $squadra="";

	$dateNow = date('d/m/Y');

	$hourNow = date('H:i:s');

	$data_evento =  date_format(date_add($dateNow,date_interval_create_from_date_string("1+ year")),'d/m/Y');
	var_dump($data_evento);
	echo "DataEvento---------------------------->before button cerca".$data_evento.PHP_EOL;


	$ora_evento = $hourNow;
	echo "OraEvento---------------------------->before button cerca".$ora_evento.PHP_EOL;




//Cerca Evento Function

if(isset($_POST['btn-cerca_evento']))

{

    $timezone = date_default_timezone_get();

    //echo "The current server timezone is: " . $timezone;

    date_default_timezone_set($timezone);

    $datenow = date('Y-m-d H:i:s');


    if(isset($_POST['data_evento'])){

    	//Provengo dal form di ricerca laterale

        $data_evento = mysqli_real_escape_string($connection,$_POST['data_evento']);
        echo "DataEvento---------------------------->isset".$data_evento;
    }else{
        
        $data_evento =  date_format(date_add($data_evento,date_interval_create_from_date_string("1+ year")),"Y-m-d");
        echo "DataEvento---------------------------->NOT isset".$data_evento;
    }

    //echo "data_evento: " . $data_evento;

    if(isset($_POST['ora_evento'])){

        $ora_evento = mysqli_real_escape_string($connection,$_POST['ora_evento']);

    }

    //echo "ora_evento: " . $ora_evento;

    if(isset($_POST['titolo'])){

        $titolo = mysqli_real_escape_string($connection,$_POST['titolo']);

    }else $titolo= mysqli_real_escape_string($connection,$_POST['$titolo']);

    //echo "titolo: " . $titolo;

    if(isset($_POST['regione'])){

        $regione= mysqli_real_escape_string($connection,$_POST['regione']);

    }else $regione= mysqli_real_escape_string($connection,$_POST['DropDownRegione']);

    //echo "regione: " . $regione;

    if(isset($_POST['provincia'])){

        $provincia= mysqli_real_escape_string($connection,$_POST['provincia']);

    }else $provincia= mysqli_real_escape_string($connection,$_POST['DropDownProvincia']);

    //echo "provincia: " . $provincia;

    if(isset($_POST['atc'])){

        $atc= mysqli_real_escape_string($connection,$_POST['atc']);

    }else $atc= mysqli_real_escape_string($connection,$_POST['DropDownAtc']);

    //echo "atc: " . $atc;

    if(isset($_POST['squadra'])){

        $squadra= mysqli_real_escape_string($connection,$_POST['squadra']);

    }else $squadra= mysqli_real_escape_string($connection,$_POST['DropDownSquadre']);

    //echo "squadra: " . $squadra;

    /*    $error_types = array(

            0 => 'There is no error, the file uploaded with success',

            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',

            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',

            3 => 'The uploaded file was only partially uploaded',

            4 => 'No file was uploaded',

            6 => 'Missing a temporary folder',

            7 => 'Failed to write file to disk.',

            8 => 'A PHP extension stopped the file upload.');





         $uploaddir = './uploads/';

         $file      = $_FILES['img_evento'];

         $name      = $file['name'];

         $tmp_name  = $file['tmp_name'];

         $error     = $file['error'];

         $uploadfile = $uploaddir.basename($name);





        if ($file == null){

         if ($error == UPLOAD_ERR_OK){

              if (move_uploaded_file($tmp_name, $uploadfile)) {

                 $msg .= "Immagine dell''evento '".$tmp_name."' aggiornata '".$name."'<br/>\n";

                 echo "File is valid, and was successfully uploaded.\n";

              } else {

                $errormsg .= "Could not move uploaded file '".$tmp_name."' to '".$name."'<br/>\n";

              }

         }else $errormsg .= "Upload error on file '".$name."'<br/>\n".$error_types[$error];

        }*/



    //Log nel Giornale Eventi ricerca

    /*$sql="";

    //$sql = "INSERT INTO evento(titolo,data_evento,url_foto,importo,descrizione,id_squadra) VALUES('$titolo','$data_evento','$uploadfile','$dimporto','$descrizione','$squadra')";

    if($_SESSION['user']=='stedurred'){

        $sql = "INSERT INTO evento(titolo,data_evento,url_foto,importo,descrizione,id_squadra) VALUES('$titolo','$data_evento','$uploadfile','$dimporto','$descrizione','$squadra') ON DUPLICATE KEY UPDATE

			titolo='$titolo',data_evento='$data_evento',url_foto='$uploadfile',importo='$dimporto',descrizione='$descrizione',id_squadra='$squadra'";

    }*/

    //$result=mysqli_query($connection,$sql);



}

//FINE Cerca Evento Function

//CLOSE CONNECTION

//include_once 'php\dbdisconnect.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

    	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

        

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">







        <title>Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana</title>

        <meta name="keywords" content="Maremma Cinghiale Caccia Toscana" />

        <meta name="description" content="Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana.Prenota un evento e vai a caccia presso le squadre al cinghiale in tutta Italia" />

        <link rel='Icon MaremmaCinghiale' href='favicon.ico' type='image/x-icon' />

        <!-- Latest css/nivo-slider.css -->

        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

		<script type="text/javascript" src="js/cufon-yui.js"></script>



        <!-- jQuery UI library -->

        <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css"></link>



        <!-- Latest Bootstrap compiled and minified CSS -->

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></link>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"  media="screen" />
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.8.0/bootstrap-social.css"></link>
        



        <!-- jQuery-Timepicker-Addon-master min CSS-->

        <link rel="stylesheet" href="jQuery-Timepicker-Addon-master/dist/jquery-ui-timepicker-addon.min.css"></link>



        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>



        <!-- jQueryUI library -->

        <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>



        <!-- jQuery UI IT library -->

        <script type="text/javascript" src="js/datepicker-it.js" ></script>



        <!-- jQuery-Timepicker-Addon-master library -->

        <script src="jQuery-Timepicker-Addon-master/dist/jquery-ui-timepicker-addon.min.js"></script>



        <!-- jQuery-Timepicker-Addon-master library IT library-->

        <script src="jQuery-Timepicker-Addon-master/dist/i18n/jquery-ui-timepicker-it.js"></script>



        <!-- Latest compiled Bootstrap JavaScript -->

        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



        <!-- My CSS -->

        <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />

		

      <script type="text/javascript" src="js/28_Days_Later_400.font.js"></script>

      <script type="text/javascript">

        Cufon.replace("H1");

      	Cufon.replace("H2");

      	Cufon.replace("H3");

      	Cufon.replace("#top_padding a");

      	Cufon.replace("#menu a");

      </script>





        <script>

            $(function() {



//                $.datepicker.regional['it'] = {

//                    closeText: "Chiudi",

//                    prevText: "&#x3C;Prec",

//                    nextText: "Succ&#x3E;",

//                    currentText: "Oggi",

//                    monthNames: [ "Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno",

//                        "Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre" ],

//                    monthNamesShort: [ "Gen","Feb","Mar","Apr","Mag","Giu",

//                        "Lug","Ago","Set","Ott","Nov","Dic" ],

//                    dayNames: [ "Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato" ],

//                    dayNamesShort: [ "Dom","Lun","Mar","Mer","Gio","Ven","Sab" ],

//                    dayNamesMin: [ "Do","Lu","Ma","Me","Gi","Ve","Sa" ],

//                    weekHeader: "Sm",

//                    dateFormat: "dd/mm/yy",

//                    firstDay: 1,

//                    isRTL: false,

//                    showMonthAfterYear: false,

//                    yearSuffix: "" };



                $("#datepicker").datepicker(

                    {



                        inline: true,

                        regional: "it",

                        dateFormat: "dd/mm/yy"

                    }

                );

                $('#timepicker1').timepicker(

                    {

                        regional: "it"

                    }

                );

                // dateFormat: "yy-mm-dd"

                //$("#datepicker").datepicker.setDefaults( $.datepicker.regional['it'] );

                //$("#datepicker").datepicker( "option", "dateFormat", "yy-mm-dd" );

                //datepicker.regional["it"];

                // $.datepicker.regional['it'];



            });

        </script>



    </head>

    <body onload="getRegioni()">
    
		<!-- Fb Root -->
		<div id="fb-root"></div>

    				<!-- Codice Accettazione Cookie-->

				<script type="text/javascript" src="js/cookiechoices.js"></script>

				<!--consenso all'uso dei cookie-->

				<script>

				document.addEventListener('DOMContentLoaded', function (event) {

				cookieChoices.showCookieConsentBar('Questo sito fa uso di cookies. Continuando la navigazione se ne autorizza l\'uso.', 'OK', 'Più info', 'http://www.maremmacinghiale.it/privacy.html');

				});

				</script>

    	<div id="wrap">

    		<div id="content_top"></div>				

				<div id="content_bg_repeat">

                    <div id="top_padding">

                        <a href="index.php">MAREMMA CINGHIALE</a>

                        <h3><a href="">Caccia al cinghiale nella Maremma Toscana</a></h3>

                    </div>

                    <div class="container-fluid">

                        <nav class="navbar navbar-inverse">

                            <div class="navbar-header">

                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#loginNavbar">

                                    <span class="sr-only">Apri men&uacute;</span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                                <a class="navbar-brand" href="index.php">MAREMMA CINGHIALE</a>
                                <?php echo '<a class="btn btn-block btn-social btn-facebook" href="' . htmlspecialchars($loginUrl) . '"><span class="fa fa-facebook"></span> Continua con Facebook</a>';?>
                                
                               
                            </div>





                            <div class="collapse navbar-collapse" id="loginNavbar">

                                <form class="navbar-form navbar-left" role="search">

                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="ATC Squadre Eventi">

                                    </div>

                                    <button type="submit" class="btn btn-default">Ricerca</button>

                                </form>

                                <ul class="nav navbar-nav">

                                    <li class="dropdown">

                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NAVIGA IL SITO <span class="caret"></span></a>

                                        <ul class="dropdown-menu">

                                            <li><a href="index.php" class="active">Home</a></li>

                                            <li><a href="http://www.facebook.com/maremmacinghiale">Pagina Facebook</a></li>

                                            <li><a href="#">Immagini</a></li>

                                            <li><a href="#">Ringraziamenti</a></li>

                                            <li role="separator" class="divider"></li>

                                            <li><a href="contact_us.php">Contattaci</a></li>

                                        </ul>

                                    </li>

                                </ul>

                                <ul class="nav navbar-nav navbar-right">
                                
                                    <li>                             
<!--                                     	<a class="btn btn-block btn-social btn-facebook"> -->
<!-- 										    <span class="fa fa-facebook"></span> Continua con Facebook -->
<!-- 										  </a> -->
							  
<!-- 										  <a class="btn btn-social-icon btn-twitter"> -->
<!-- 										    <span class="fa fa-facebook"></span> -->
<!-- 										  </a> -->
                                    
                                    </li>

                                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registrati</a></li>

                                    <li class="dropup">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                                            <span class="glyphicon glyphicon-log-in"></span> Login<span class="caret"></span></a>

                                        <ul class="dropdown-menu">

                                            <li>

                                                <form method="post" class="navbar-form navbar-left" role="search">

                                                    <div class="row">



                                                        <div class="col-md-6">

                                                            <div class="form-group">

                                                                <input type="text" name="email" class="form-control" placeholder="Username" required />

                                                            </div>

                                                        </div>



                                                    </div>



                                                    <div class="row">



                                                        <div class="col-md-6">

                                                            <div class="form-group">

                                                                <input type="password" name="pass" class="form-control" placeholder="Password" required />

                                                            </div>

                                                        </div>



                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-3">

                                                        </div>

                                                        <div class="col-md-6">

                                                            <button type="submit" name="btn-login"  class="btn btn-default">Entra</button>

                                                        </div>

                                                        <div class="col-md-3">

                                                        </div>

                                                    </div>

                                                </form>

                                            </li>

                                        </ul>

                                    </li>



                                </ul>

                            </div>

                        </nav>




						
                        <div id="wrapper">   
                          

                            <div id="slider-wrapper">

                                <div id="slider" class="nivoSlider">

                                    <img src="images/header1.jpg" alt="Maremmacinghiale.it" />

                                    <img src="images/header2.jpg" alt=""/>

                                    <img src="images/header3.jpg" alt="" />

                                    <img src="images/header4.jpg" alt="" />

                                    <img src="images/header5.jpg" alt="" />

                                    <img src="images/header6.jpg" alt="" />

                                    <img src="images/header7.jpg" alt=""/>

                                    <img src="images/header8.jpg" alt="" />

                                    <img src="images/header9.jpg" alt="" />

                                    <img src="images/header10.jpg" alt="" />

                                </div>

                            </div>

                        </div>



                        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>



                        <script type="text/javascript">

                            $(window).load(function() {

                                $('#slider').nivoSlider({

                                    effect:'fade'

                                });

                            });

                        </script>
						
						
						
                            






                        <div id="content">

                            <div class="col1">



                                <h2>Ricerca eventi</h2>

									<form method="post" enctype="multipart/form-data">



                                            <div class="row">



                                                <div class="col-md-10 col-xs-12">







                                                        <div class="form-group">

                                                            <input type="text" class="form-control" name="titolo" placeholder="Nome" value="" />

                                                        </div>



                                                </div>



                                            </div>



                                            <div class="row">



                                                <div class="col-md-10 col-xs-12">



                                                    <div class="col-md-7 col-xs-6">

                                                        <div class="form-group">



                                                                <input type="text" id="datepicker" class="form-control" name="data_evento" placeholder="Data" alt="Data" required />



                                                        </div>

                                                    </div>

                                                    <div class="col-md-5 col-xs-6">

                                                        <div class="form-group">



                                                                <input type='text' id='timepicker1' class="form-control" name="ora_evento" placeholder="Ora" alt="Ora"/>



                                                        </div>

                                                    </div>

                                                </div>



                                            </div>



                                            <div class="row">



                                                <div class="col-md-10 col-xs-12">







                                                        <div class="form-group">

                                                            <select name = "DropDownRegione" id="ddregione"  class="form-control" required  onchange="getProvince(this)" onfocus="getProvince(this)">

                                                                <option value="">Regione</option>



                                                            </select>

                                                        </div>



                                                </div>



                                            </div>



                                            <div class="row">



                                                <div class="col-md-10 col-xs-12">







                                                        <div class="form-group">

                                                            <select name = "DropDownProvincia" id="ddprovincia"  class="form-control" required onchange="getAtc(this)" onfocus="getAtc(this)">

                                                                <option value="">Provincia</option>

                                                            </select>

                                                        </div>



                                                </div>



                                            </div>



                                            <div class="row">



                                                <div class="col-md-10 col-xs-12">







                                                        <div class="form-group">

                                                            <select name = "DropDownAtc" id="ddatc"  class="form-control" required onchange="getSquadre(this)">

                                                                <option value="">A.T.C.</option>

                                                            </select>

                                                        </div>



                                                </div>



                                            </div>



                                            <div class="row">



                                                <div class="col-md-10 col-xs-12">







                                                    <div class="form-group">

                                                            <select name = "DropDownSquadre" id="ddsquadre"  class="form-control" >

                                                                <option value="">Squadra</option>





                                                            </select>

                                                        </div>



                                                </div>



                                            </div>



                                            <div class="row">



                                                <div class="col-md-12 col-xs-12">



                                                    <div class="col-md-2 col-xs-12">

                                                        <div class="form-group">

                                                            <button type="submit" id="buttonCercaEvento" name="btn-cerca_evento" class="btn btn-danger"><h2>Cerca Eventi</h2></button>

                                                        </div>

                                                    </div>



                                                </div>

                                            </div>





                                            <input type="hidden" class="form-control" name="user_id" value="<?php echo $_SESSION['user_id'] ?>"/>

                                        </form>



                                <div class="dropdown">

                                    <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">



                                        <h2>Stagione 2018<span class="glyphicon glyphicon-minus"></span>2019</h2>

                                        <span class="caret"></span>

                                    </button>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                                        <li><a  href="javascript:getIndex_events('<?php echo $settembre;?>','<?php echo $yearNow;?>')">Settembre<span aria-hidden="true">&nbsp;&rarr;</span></a></li>

                                        <li><a  href="javascript:getIndex_events('<?php echo $ottobre;?>','<?php echo   $yearNow;?>')">Ottobe<span aria-hidden="true">&nbsp;&rarr;</span></a></li>

                                        <li><a  href="javascript:getIndex_events('<?php echo $novembre;?>','<?php echo  $yearNow;?>')">Novembre<span aria-hidden="true">&nbsp;&rarr;</span></a></li>

                                        <li><a  href="javascript:getIndex_events('<?php echo $dicembre;?>','<?php echo  $yearNow;?>')">Dicembre<span aria-hidden="true">&nbsp;&rarr;</span></a></li>

                                        <li><a  href="javascript:getIndex_events('<?php echo $gennaio;?>','<?php echo   $nextYear;?>')">Gennaio<span aria-hidden="true">&nbsp;&rarr;</span></a></li>

                                        <!--<li><a  href="javascript:getIndex_events('<?php echo $febbraio;?>','<?php echo  $nextYear;?>')">Febbraio<span aria-hidden="true">&nbsp;&rarr;</span></li>-->

                                        <!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $marzo;?>//','<?php //echo     $yearNow;?>//')">Marzo<span aria-hidden="true">&nbsp;&rarr;</span></a></button></li>-->

                                        <!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $aprile;?>//','<?php //echo    $yearNow;?>//')">Aprile<span aria-hidden="true">&nbsp;&rarr;</span></a></button></li>-->

                                        <!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $maggio;?>//','<?php //echo    $yearNow;?>//')">Maggio<span aria-hidden="true">&nbsp;&rarr;</span></a></button></li>-->

                                        <!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $giugno;?>//','<?php //echo    $yearNow;?>//')">Giugno<span aria-hidden="true">&nbsp;&rarr;</span></a></button></li>-->

                                        <!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $luglio;?>//','<?php //echo    $yearNow;?>//')">Luglio<span aria-hidden="true">&nbsp;&rarr;</span></a></button></li>-->

                                        <!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $agosto;?>//','<?php //echo    $yearNow;?>//')">Agosto<span aria-hidden="true">&nbsp;&rarr;</span></a></button></li>-->

                                        <!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $settembre;?>//','<?php //echo $yearNow;?>//')">Setembre<span aria-hidden="true">&nbsp;&rarr;</span></a></button></li>-->





                                    </ul>

                                </div>



                                <div  class="btn-toolbar" role="toolbar" aria-label="Calendaro venatorio">



                                    <div  class="btn-group-vertical" role="group" aria-label="Eventi 2019">



<!--                                        <button type="button" class="btn btn-default btn-sm" aria-label="Gennaio label" onclick="getIndex_events('<?php //echo $gennaio;?>//','<?php //echo   $yearNow;?>//')">Gennaio<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default btn-sm" onclick="getIndex_events('<?php //echo $febbraio;?>//','<?php //echo  $yearNow;?>//')">Febbraio<span aria-hidden="true">&nbsp;&rarr;</span></button>-->

<!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $marzo;?>//','<?php //echo     $yearNow;?>//')">Marzo<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $aprile;?>//','<?php //echo    $yearNow;?>//')">Aprile<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $maggio;?>//','<?php //echo    $yearNow;?>//')">Maggio<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $giugno;?>//','<?php //echo    $yearNow;?>//')">Giugno<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $luglio;?>//','<?php //echo    $yearNow;?>//')">Luglio<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $agosto;?>//','<?php //echo    $yearNow;?>//')">Agosto<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default" onclick="getIndex_events('<?php //echo $settembre;?>//','<?php //echo $yearNow;?>//')">Setembre<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default btn-sm" onclick="getIndex_events('<?php //echo $ottobre;?>//','<?php //echo   $yearNow;?>//')">Ottobe<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default btn-sm" onclick="getIndex_events('<?php //echo $novembre;?>//','<?php //echo  $yearNow;?>//')">Novembre<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->

<!--                                        <button type="button" class="btn btn-default btn-sm" onclick="getIndex_events('<?php //echo $dicembre;?>//','<?php //echo  $yearNow;?>//')">Dicembre<span aria-hidden="true">&nbsp;&rarr;</span></a></button>-->



                                    </div>

                                </div>

                                <div class="wrapper pad_bot2">



                                    <div class="left marg_right1"><a href="#" class="thumbnail"><img src="images/img1.jpg" alt="" class="img-rounded"/></a></div>

                                    <p class="pad_bot1 pad_top1"><span class="color1">27, Febbraio 2016</span></p>

                                    <p>Pagina principale del sito:qui &egrave; possibile cercare gli eventi in programma sul calendario venatorio</p>

                                </div>

                                <div class="wrapper pad_bot2">

                                    <div class="left marg_right1"><a href="#" class="thumbnail"><img src="images/img2.jpg" alt="" class="img-rounded" /></a></div>

                                    <p class="pad_bot1 pad_top1"><span class="color1">15, Gennaio 2016</span></p>

                                    <p>Inserita possibilit&agrave; di prenotazione di un evento di caccia in una squadra a scelta</p>

                                </div>

                                <div class="wrapper">



                                    <div class="left marg_right1"><a href="#" class="thumbnail"><img src="images/img3.jpg" alt="" class="img-rounded"/></a></div>

                                    <p class="pad_bot1 pad_top1"><span class="color1">23, Dicembre 2015</span></p>

                                    <p>Appare su Internet il sito <a href="index.php">Maremmacinghiale.it</a></p>

                                </div>

                            </div>

                            <div class="col2" id="col2">

                                <div class="row">

                                    <div class="col-md-12 col-xs-12">

                                    	<h2>Portale dedicato alla caccia al cinghiale in Italia</h2>

                                    	<h2 class="pad_bot1">Ricerca gli Eventi qui a sinistra, con Nome*Data*Provincia*ATC*Squadra.</h2>

                                    	<p class="pad_bot1 color1 pad_top1">Prenota un evento di caccia ad un prezzo speciale, in promozione solo per Te!</p>

                                    	<p class="pad_bot3">Servizi aggiuntivi offerti:</p>

		                                	<ul>

												<li>Ristoro con prodotti tipici locali presso la casa di caccia.</li>

		                                		<li>Trasporto presso la zona di caccia con Jeep o Pick-Up.</li>

		                                		<li>Prenotazione alloggio nelle strutture di accoglienza per i cacciatori e familiari</li>

		                                	</ul>

		                                <p class="pad_bot1 color1 pad_top1">Lo staff di maremmacinghiale &copy; augura a tutti i cacciatori buon divertimento.</p>

                                        <?php

                                        if(isset($_POST['btn-cerca_evento'])){

                                        	

                                        	//Ricerca con parametri da men� a sinistra

                                            if(!isset($errormsg)){

                                                print "<div class='alert alert-success' role='alert'><h2 class='pad_bot1 pad_top1'>Risultato Ricerca Evento</h2></div>";

                                            }else print "<div class='alert alert-danger' role='alert'><h2 class='pad_bot1 pad_top1'>Errore ricerca "."\n".$errormsg.'</h2></div>';





                                            echo draw_calendar_ricerca_eventi($titolo,$data_evento,$ora_evento,$regione,$provincia,$atc,$squadra,$monthNow,$yearNow,$connection);

                                        }else{

                                        	print "<div class='alert alert-success' role='alert'><h2 class='pad_bot1 pad_top1'>Eventi in programma</h2></div>";

                                        	//Eventi proposti all'apertura della pagina
                                        	
                                        	

                                        	echo draw_calendar_ricerca_eventi($titolo,$data_evento,$ora_evento,$regione,$provincia,$atc,$squadra,$monthNow,$yearNow,$connection);

                                        }

                                        ?>



                                        <h2 class="pad_bot1">Iscriviti a MaremmaCinghiale, GRATIS!</h2>

                                        <p class="pad_bot1 color1 pad_top1">Per iscriversi alla lista di cacciatori e simpatizzanti del sito maremmacinghiale.it basta cliccare sul bottone "ISCRIZIONE"</p>

                                        <p class="pad_bot3">Questo servizio unisce tutti i cacciatori delle varie squadre di caccia al cinghiale</p>

                                        <div class="wrapper"><a href="mailto:cacciatori-subscribe@maremmacinghiale.it" class="button right">Iscrizione gratuita</a></div>

                                        <h2 class="pad_bot1 pad_top1">Guida alla sottoscrizione</h2>

		                                <div class="wrapper">

		                                    <div class="left marg_right1"><img src="images/boar.jpg" alt="" /></div>

		                                    <p class="pad_top1 pad_bot1 color1">Una volta cliccato il bottone "ISCRIZIONE" si aprir&aacute;�un messaggio di posta da inviare lasciando vuoti i campi

		                                    Il sito invier&aacute;�un messaggio di sicurezza a cui rispondere per iscriversi alla lista.</p>

		                                </div>

                                	</div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div id="footer_top">

                        <div id="footer_column1">

                            <!--Facebook App ID-->

                            <script>

                                window.fbAsyncInit = function() {

                                    FB.init({

                                        appId      : '902548573194215',

                                        xfbml      : true,

                                        version    : 'v2.5'

                                    });

                                };

                            </script>



                            <!-- Entra con Facebook Button Loading-->
                            <script>
							var finished_rendering = function() {
							console.log("finished rendering plugins");
							var spinner = document.getElementById("spinner");
							spinner.removeAttribute("style");
							spinner.removeChild(spinner.childNodes[0]);
							}
							FB.Event.subscribe('xfbml.render', finished_rendering);
							</script>
                            
                            <!-- Entra con Facebook Button -->
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.11&appId=902548573194215';
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>

                            <!--Facebook App -->

                            <script>(function(d, s, id) {

                                    var js, fjs = d.getElementsByTagName(s)[0];

                                    if (d.getElementById(id)) return;

                                    js = d.createElement(s); js.id = id;
//902548573194215
                                    js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5&appId=902548573194215";

                                    fjs.parentNode.insertBefore(js, fjs);

                                }(document, 'script', 'facebook-jssdk'));</script>

                            <!--Facebook App -->

                            <h2>Facebook Like</h2>

                            <div class="footer_text fb-page"

                                 data-href="https://www.facebook.com/maremmacinghiale"

                                 data-small-header="false"

                                 data-adapt-container-width="true"

                                 data-hide-cover="false"

                                 data-show-facepile="false">

                                <div class="fb-xfbml-parse-ignore">

                                    <blockquote cite="https://www.facebook.com/maremmacinghiale">

                                        <a href="https://www.facebook.com/maremmacinghiale">Maremma Cinghiale</a>

                                    </blockquote>

                                </div>

                            </div>

                            <!--Facebook like -->

                            <div

                                class="fb-like"

                                data-share="true"

                                data-width="150"

                                data-show-faces="false">

                            </div>

                            <!--Facebook like -->

                        </div>

                        <div id="footer_column2">

                            <h2>Social</h2>

                            <div class="footer_text">

                                <div class="foot_pad">

                                <div class="link1"><a href="mailto:cacciatori-subscribe@maremmacinghiale.it">Iscriviti alla lista dei cacciatori</a></div>

                                <div class="link2"><a href="http:\\www.facebook.com/maremmacinghiale" target="_blank">MaremmaCinghiale su Facebook</a></div>

                                <div class="link3"><a href="#">RSS Feed</a></div>

                                <div class="link4"><a href="#">Seguici su Twitter</a></div>

                              </div>

                            </div>

                        </div>

                        <div id="footer_column3">

                            <h2>Collegamenti</h2>

                            <div class="footer_text">

                                <div class="foot_pad">

                                    <ul class="ls">

                                        <li><a href="http://www.comitatodirettiva477.it/" target="_blank">Comitato direttiva 477</a></li>

                                        <li><a href="http://www.armietiro.it/" target="_blank">Armi e Tiro </a></li>

                                        <li><a href="http://www.caffeditrice.com/" target="_blank">Riviste dedicate</a></li>

                                        <li><a href="#">Prova 2</a></li>

                                        <li><a href="#">Prova 1 </a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                        <div class="clear"></div>

                    </div>

                    <div id="footer_bot">

                        <p>Copyright  2015. <!-- Do not remove -->Design by <a href="mailto:caccia@maremmacinghiale.it" title="contatto Stefano Durante">Stefano Durante</a><!-- end --></p>

                        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>

                    </div>

				</div>

				<div id="content_bottom">

				</div>

		</div>

	<script>

        function readyAJAX() {

            try {return new XMLHttpRequest();} catch(e) {

                try {return new ActiveXObject("Msxml2.XMLHTTP");} catch(e) {

                    try {return new ActiveXObject("Microsoft.XMLHTTP");} catch(e) {

                        return "A newer browser is needed.";

                    }

                }

            }

        }



        function getIndex_events(mese, anno){

            var url = "index_events.php";

            //var e = document.getElementById("ddatc");

            var requestObj = readyAJAX();

            //var strIdAtc =select.value;



            var params = "month="+encodeURIComponent(mese)+"&year="+encodeURIComponent(anno);

            //alert(params);

            requestObj.open("POST",url,true);

            requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            requestObj.send(params);

            requestObj.onreadystatechange = function() {

                if (requestObj.readyState == 4) {

                    if (requestObj.status == 200) {

                        document.getElementById("col2").innerHTML = requestObj.responseText;

                        //alert(requestObj.responseText);

                    } else {

                        alert(requestObj.statusText);

                    }

                }

            }

        }





        function getRegioni() {

            var url = "getRegioni.php";

            //var e = document.getElementById("ddregione");

            var requestObj = readyAJAX();

            //var strIdRegione =select.value;



            //var params = "id_regione="+encodeURIComponent(strIdRegione);

            requestObj.open("POST", url, true);

            requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            requestObj.send();

            requestObj.onreadystatechange = function () {

                if (requestObj.readyState == 4) {

                    if (requestObj.status == 200) {

                        document.getElementById("ddregione").innerHTML = requestObj.responseText;

                        //alert(requestObj.responseText);

                    } else {

                        alert(requestObj.statusText);

                    }

                }

            }

        }



        function getProvince(select) {

            var url = "getProvince.php";

            var e = document.getElementById("ddregione");

            var requestObj = readyAJAX();

            var strIdRegione = select.value;



            var params = "id_regione=" + encodeURIComponent(strIdRegione);

            requestObj.open("POST", url, true);

            requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            requestObj.send(params);

            requestObj.onreadystatechange = function () {

                if (requestObj.readyState == 4) {

                    if (requestObj.status == 200) {

                        document.getElementById("ddprovincia").innerHTML = requestObj.responseText;

                        //alert(requestObj.responseText);

                    } else {

                        alert(requestObj.statusText);

                    }

                }

            }

        }

               

               function getAtc(select){

                  var url = "getAtc.php"; 

                  var e = document.getElementById("ddprovincia");

                  var requestObj = readyAJAX(); 

                  var strIdProvincia =select.value;

                  

                  var params = "id_provincia="+encodeURIComponent(strIdProvincia); 

                 

                  requestObj.open("POST",url,true); 

                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 

                  requestObj.send(params); 

                  requestObj.onreadystatechange = function() {

                     if (requestObj.readyState == 4) {

                        if (requestObj.status == 200) {

                              document.getElementById("ddatc").innerHTML = requestObj.responseText;

                              //alert(requestObj.responseText);

                        } else {

                           alert(requestObj.statusText);

                        }

                     }

                  }

               }

	

	               

               function getSquadre(select){

                  var url = "getSquadre.php"; 

                  var e = document.getElementById("ddatc");

                  var requestObj = readyAJAX();

                   var strIdAtc =select.value;

                  //alert(strIdAtc);

                  var params = "id_atc="+encodeURIComponent(strIdAtc); 

                 

                  requestObj.open("POST",url,true); 

                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 

                  requestObj.send(params); 

                  requestObj.onreadystatechange = function() {

                     if (requestObj.readyState == 4) {

                        if (requestObj.status == 200) {

                              document.getElementById("ddsquadre").innerHTML = requestObj.responseText;

                              //alert(requestObj.responseText);

                        } else {

                           alert(requestObj.statusText);

                        }

                     }

                  }

               }

	

	

	            function setDataEvento(select){

	                var strDataSelezionata =select.value;

	                var dataEventoImputText = document.getElementById("data_evento").value=strDataSelezionata;

	            }



            </script>

    </body>

</html>
