<?php

session_start ();

// Composer Autoload updated

require __DIR__ . '/vendor/autoload.php';
// require 'fbApp.php';

if ( is_null ( $_SESSION)  ) {
	// echo "SESSION USER:".$_SESSION['user'];
	header ( "Location: index.php" );
} 

/*
   * elseif (is_null($_SESSION['fb_user'])){
   *
   * echo "SESSION FB_USER:".$_SESSION['fb_user'];
   * header("Location: index.php");
   * }
   */

include_once 'fbApp.php';
include_once 'fbUser.php';
try {

	// Facebook PHP SDK

    $fbApp = new fbApp();
    $fb = $fbApp->fbApplication;
	
	// INIZIO Facebook login Token
	
	// $fb->
	
	$helper = $fb->getRedirectLoginHelper ();
	
	// var_dump($helper);
	
	// $permissions = ['public_profile' ,'email', 'user_likes']; // optional
	
	// $loginUrl = $helper->getLoginUrl('maremmacinghiale.it',$permissions);
	
	// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
	
	// $helper = $fb->getJavaScriptHelper();
	
	// $helper = $fb->getCanvasHelper();
	
	// $helper = $fb->getPageTabHelper();
	
	// Get the \Facebook\GraphNodes\GraphUser object for the current user.
	
	// If you provided a 'default_access_token', thse '{access-token}' is optional.
	
	$accessToken = $helper->getAccessToken (); // $_SESSION['facebook_access_token'];
	file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
			."#####____FACEBOOK____home.php___#####".
			"HOME____FACEBOOK APP MAREMMACINGHIALE____accessToken:".$accessToken.PHP_EOL, FILE_APPEND);
	if (isset($accessToken)) {
		// User authenticated your app!
		// Save the access token to a session and redirect
		$_SESSION['facebook_access_token'] = (string) $accessToken;
		// Log them into your web framework here . . .
		// Redirect here . . .
		//exit;
	} elseif ($helper->getError()) {
		// The user denied the request
		// You could log this data . . .
		var_dump($helper->getError());
		var_dump($helper->getErrorCode());
		var_dump($helper->getErrorReason());
		var_dump($helper->getErrorDescription());
		// You could display a message to the user
		// being all like, "What? You don't like me?"
		exit;
	}
	
	if (! isset ( $accessToken )) {


		if ($helper->getError ()) {
			
			header ( 'HTTP/1.0 401 Unauthorized' );
			
			echo "Error: " . $helper->getError () . "\n";
			
			echo "Error Code: " . $helper->getErrorCode () . "\n";
			
			echo "Error Reason: " . $helper->getErrorReason () . "\n";
			
			echo "Error Description: " . $helper->getErrorDescription () . "\n";
		} else {

			// If they've gotten this far, they shouldn't be here
// 			http_response_code(400);
// 			exit;
			//Ho fatto Login con il metodo tradizionale del sito
			// ma posso prelevare lo user da DB
			// 			--a meno che non provengo gia dalla registrazione del sito
			// 			--quindi posso prendere i dati da Fb anche se si sta registrando ora.
			// header('HTTP/1.0 400 Bad Request');
			
			// header("Location: index.php");
			
			//
			// echo 'Bad request';//TODO DA RIVEDERE L?ACCESS TOKEN DOPO LA REGITSRAZIONE
			
			// Devo rifare la GET da fb usando la SESSION['fb_user_id']
			// Accesso al sito esclusivamente da facebook
			file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Richiesta Dati Utente Facebook senza AccessToken" . PHP_EOL, FILE_APPEND );
//             global $fb_user;
// 			$GLOBALS['fb_user'] = new fbUser ( $fb, $accessToken );
			//var_dump($fb_user);
			
// 			getUserFacebook ( $fb,$accessToken );
			
// 			getUserFacebookPages( $fb,$accessToken );
			
			// echo $fb_user_pages;
			
// 			$fb_user_pagesEncoded = json_encode ( $fb_user->fb_user_pages ); // Array delle pagine Facebook dell'utente

			//exit;



		}
		
		// exit;
	} else {
		
		// $_SESSION['fb_access_token'] = (string) $accessToken;//TODO DA TOGLIERNE UNO
		
		$_SESSION ['facebook_access_token'] = ( string ) $accessToken;
		
		// Logged in
		
		echo '<h3>Logged in Access Token</h3>';
		
		var_dump($accessToken);
		
		// The OAuth 2.0 client handler helps us manage access tokens
		
		$oAuth2Client = $fb->getOAuth2Client ();
		
		// var_dump($oAuth2Client);
		
		// Get the access token metadata from /debug_token
		
		$tokenMetadata = $oAuth2Client->debugToken ( $accessToken );
		
		 echo '<h3>Metadata</h3>';
		
		 var_dump($tokenMetadata);
		
		// Validation (these will throw FacebookSDKException's when they fail)
		$appId = $fb->getApp()->getId();
		
		var_dump("APPID:".$appId);
		
		$tokenMetadata->validateAppId ( $appId ); // Replace {app-id} with your app id
		
		$tokenMetadata->validateExpiration ();
		
		if (! $accessToken->isLongLived ()) {
			
			// Exchanges a short-lived access token for a long-lived one
			
			try {
				
				$accessToken = $oAuth2Client->getLongLivedAccessToken ( $accessToken );
				
				echo '<h3>NEW Long-lived $accessToken </h3>' . $accessToken;
				
				$_SESSION ['facebook_access_token'] = ( string ) $accessToken;
				
// 				var_dump($accessToken);
//                 var_dump($accessToken->isLongLived ());
			} catch ( Facebook\Exceptions\FacebookSDKException $e ) {
				
				echo "<p>Error getting long-lived access token: " . $helper->getMessage () . "</p>\n\n";
			}
		}
		
		// cho $_SESSION['facebook_access_token'];
		
		// User is logged in with a long-lived access token.
		
		// You can redirect them to a members-only page.
		
		// header('Location: https://example.com/members.php');
		
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Richiesta Dati Utente Facebook con AccessToken" . PHP_EOL, FILE_APPEND );
		global  $fb_user;
		$fb_user = new fbUser ( $fb, $accessToken );
		
		// If you know the user ID this access token belongs to, you can validate it here
		
		$tokenMetadata->validateUserId($fb_user->fb_user_id);
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___fb_user_id validation#####" . $fb_user->fb_user_id . PHP_EOL, FILE_APPEND );
		
        //var_dump($fb_user);
		//exit;
		
		

		// getUserFacebook ( $fb,$accessToken );
		
		// getUserFacebookPages( $fb,$accessToken );
		
		// var_dump('$fb_user_pages:'.json_encode($fb_user_pages));
		
		$fb_user_pagesEncoded = json_encode ( $fb_user->fb_user_pages ); // Array delle pagine Facebook dell'utente
		// var_dump($fb_user_pagesEncoded);
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___fb_user_pagesEncoded#####" . $fb_user_pagesEncoded . PHP_EOL, FILE_APPEND );
		
		// PAGE_ID Maremmacinghiale.it 1019169091455466
		// $responsePage = $fb->get('/1019169091455466?fields=access_token,name', $fb->getApp()->getAccessToken() );
		
		// $page = $responsePage->getGraphPage();
		
		// var_dump($page->getFieldNames());
		
		// echo "page filelds:".var_export($responsePage->getFieldNames());
		/*
		 * echo '<h3>PageID</h3>'.$page->getId();
		 *
		 * echo '<h3>PageName</h3>'.$page->getName();
		 *
		 * echo '<h3>PageAccessToken</h3>'.$page->getAccessToken();
		 */
		
		// var_dump($page->getFieldNames());
		// Logged in
		// echo '<h3>Account Access Token</h3>'.$accountsAccessToken;
		// echo '<h3>$responseAccounts Access Token</h3>'.$responseAccounts->getAccessToken();
		
		//echo ("fb_user_pagesEncoded:" . $fb_user_pagesEncoded);
		
		//$hrefAdminUser_modifica = "admin_user.php?modifica" . "&fb_user_name=" . $fb_user->fb_user_name . "&fb_user_first_name=" . $fb_user->fb_user_first_name . "&fb_user_last_name=" . $fb_user->fb_user_last_name . "&fb_user_id=" . $fb_user->fb_user_id . "&fb_user_email=" . $fb_user->fb_user_email . "&fb_user_picture=" . $fb_user->fb_user_picture . "&fb_user_picture_url=" . $fb_user->fb_user_picture_url . "&fb_user_pages=" . $fb_user_pagesEncoded;
		//var_dump($fb_user->fb_user_page);
		//var_dump ( $hrefAdminUser_modifica );



		
	}


	// FINE Facebook login Token


} catch ( \Facebook\Exceptions\FacebookResponseException $e ) {
	
	// When Graph returns an error
	
	echo 'Graph returned an error: ' . $e->getMessage ();
	
	exit ();
} catch ( \Facebook\Exceptions\FacebookSDKException $e ) {
	
	// When validation fails or other local issues
	
	echo 'Facebook SDK returned an error: ' . $e->getMessage ();
	
	exit ();
}



include_once 'php/dbconnect.php';

include_once 'calendar.php';

$timezone = date_default_timezone_get ();

// echo "The current server timezone is: " . $timezone;

date_default_timezone_set ( $timezone );

setlocale ( LC_ALL, "it_IT" );

// Login facebook avvenuta con successo

$SESSION_facebook_access_token = $accessToken;

if (isset ( $SESSION_facebook_access_token )) {
	
	file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Controllo Dati Utente Facebook" . PHP_EOL, FILE_APPEND );
	
	// Accesso da FaceBook con un utente non regitrato
	
	// Controllo se esiste un utente gia regitrato e lo controllo con la mail di Facebook
	/*
	 * --,
	 *
	 * --squadra.nome as nome_squadra,
	 *
	 * --squadra.numero as numero_squadra,
	 *
	 * --regioni.id as id_regione,
	 *
	 * --province.id as id_provincia
	 *
	 * --INNER JOIN squadra on squadra.id = users.id_squadra
	 *
	 * --INNER JOIN atc on atc.id =squadra.id_atc
	 *
	 * --INNER JOIN territorio on territorio.id=atc.id_territorio
	 *
	 * --INNER JOIN province on province.id= territorio.id_provincia
	 *
	 * --INNER JOIN regioni on regioni.id=province.id_regione
	 *
	 */
	$sqlControlloUtente = "SELECT  users.*


                                    FROM users

                                   
                                    WHERE users.email='" . $_COOKIE ['fb_user_email'] . "' or users.fb_user_email='" . $_COOKIE ['fb_user_email'] . "'";
	
	 echo $sqlControlloUtente;
	
	file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Controllo Dati Utente Facebook sqlControlloUtente:\r\n" . $sqlControlloUtente . PHP_EOL, FILE_APPEND );
	
	$res = mysqli_query ( $connection, $sqlControlloUtente );
	
	$row = mysqli_fetch_array ( $res );
	
	// Non controllo la password perchè provengo da facebook
	
	// echo $SESSION_user."\n\n";
	
	if (empty ( $row )) {
		
		echo "Utente Facebook non esistente Insert ";
		
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Controllo Dati Utente Facebook : Utente Facebook non esistente Insert" . PHP_EOL, FILE_APPEND );
		
		/*
		 *
		 * Inserimento Utente Maremmacinghiale.it
		 *
		 */
		
		$datenow = date ( 'Y-m-d H:i:s' );

		$sqlInserimentoUtenteFacebook = "INSERT INTO users(username,email,password,trn_date,url_foto,id_atc,id_squadra,fb_user_id,fb_user_email,fb_user_name,fb_user_first_name, fb_user_last_name,fb_access_token)

                        VALUES('$fb_user->fb_user_name','','','$datenow','','','','$fb_user->fb_user_id','$fb_user->fb_user_email','$fb_user->fb_user_name','$fb_user->fb_user_first_name','$fb_user->fb_user_last_name','$accessToken')";
		
		echo $sqlInserimentoUtenteFacebook;
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Controllo Dati Utente Facebook : Utente Facebook non esistente Insert:\r\n" . $sqlInserimentoUtenteFacebook . PHP_EOL, FILE_APPEND );
		$result = mysqli_query ( $connection, $sqlInserimentoUtenteFacebook );
		
		var_dump ( $fb_user->fb_user_pages );
		
		$fb_user_pagesEncoded = json_encode ( $fb_user->fb_user_pages ); // Array delle pagine Facebook dell'utente
		                                                            // var_dump($fb_user_pagesEncoded);
		                                                            // var_dump($fb_user_pages);
		                                                            // Redirect to register to end registration se indispensabile
		
		$hrefAdminUser_inserisci = "admin_user.php?inserisci" . "&fb_user_name=" . $fb_user->fb_user_name . "&fb_user_first_name=" . $fb_user->fb_user_first_name . "&fb_user_last_name=" . $fb_user->fb_user_last_name . "&fb_user_id=" . $fb_user->fb_user_id . "&fb_user_email=" . $fb_user->fb_user_email . "&fb_user_picture=" . $fb_user->fb_user_picture . "&fb_user_picture_url=" . $fb_user->fb_user_picture_url . "&fb_user_pages=" . $fb_user_pagesEncoded;
		var_dump ( $hrefAdminUser_inserisci );
		
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . $hrefAdminUser_inserisci . PHP_EOL, FILE_APPEND );

		header ( "Location: " . $hrefAdminUser_inserisci );
		exit ();
	} else {
		
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Controllo Dati Utente Facebook : Utente Facebook esistente Inserisco in SESSION" . PHP_EOL, FILE_APPEND );
		
		$_SESSION ['user'] = $row ['username'];
		
		$_SESSION ['user_id'] = $row ['id'];
		
		$_SESSION ['user_idatc'] = $row ['id_atc'];
		
		$_SESSION ['user_id_squadra'] = $row ['id_squadra'];
		
		//$_SESSION ['user_id_regione'] = $row ['id_regione'];
		
		//$_SESSION ['user_id_provincia'] = $row ['id_provincia'];
		
		//$_SESSION ['user_nome_squadra'] = $row ['nome_squadra'];
		
		//$_SESSION ['user_numero_squadra'] = $row ['numero_squadra'];
		
		$_SESSION ['user_url_foto_profilo'] = $row ['url_foto'];
		
		$_SESSION ['user_capocaccia'] = $row ['capocaccia'];
		
		$_SESSION ['user_canaio'] = $row ['canaio'];
		
		$_SESSION ['user_admin_squadra'] = $row ['admin_squadra'];
		
		$_SESSION ['user_admin_page'] = $row ['admin_page'];
		
		$_SESSION ['user_catture_cinghiali'] = $row ['catture_cinghiali'];
		
		$_SESSION ['user_fb_access_token'] = $row ['fb_access_token'];
	}
}

// Query Controllo Utente di SESSIONE se presente nel DB e lo controllo con $SESSION_user_id

$sql = "SELECT users.*,

          atc.sigla_atc,

          atc.nome_atc,

          squadra.nome as nome_squadra,

          squadra.url_foto as foto_squadra,

          squadra.numero as numero_squadra,

          squadra.catture_cinghiali as catture_cinghiali_squadra,

          cane.nome as nome_cane,

          cane.url_foto as foto_cane

        FROM `users`

          LEFT JOIN squadra ON users.id_squadra = squadra.id

          LEFT JOIN atc ON squadra.id_atc = atc.id

          LEFT JOIN cane ON cane.id_user = users.id

        WHERE users.id='" . $_SESSION ['user_id'] . "'";

// echo "sql:".$sql.PHP_EOL;
file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Query Controllo Utente se presente nel DB e lo controllo con SESSION[user_id]:\r\n" . $sql . PHP_EOL, FILE_APPEND );

$result = mysqli_query ( $connection, $sql );

if (! $result) {
	
	printf ( "Error: %s\n", mysqli_error ( $connection ) );
	
	exit ();
}

$userRow = mysqli_fetch_array ( $result );
//  var_dump($userRow);
 $upass = mysqli_real_escape_string($connection,$_SESSION['user_password']);
if ($userRow ['password'] == md5 ( $upass ))

{
	
	file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER home.php___#####" . "Query Controllo Utente se presente nel DB Inserisco in SESSION:\r\n" . PHP_EOL, FILE_APPEND );
	
	$_SESSION ['user'] = $userRow ['username'];
	
	$_SESSION ['user_id'] = $userRow ['id'];
	
	$_SESSION ['user_idatc'] = $userRow ['id_atc'];
	
	$_SESSION ['user_id_squadra'] = $userRow ['id_squadra'];
	
	$_SESSION ['user_nome_squadra'] = $userRow ['nome_squadra'];
	
	$_SESSION ['user_numero_squadra'] = $userRow ['numero_squadra'];
	
	$_SESSION ['user_url_foto_profilo'] = $userRow ['url_foto'];
	
	$_SESSION ['user_url_foto_squadra'] = $userRow ['foto_squadra'];
	
	$_SESSION ['user_capocaccia'] = $userRow ['capocaccia'];
	
	$_SESSION ['user_canaio'] = $userRow ['canaio'];
	
	$_SESSION ['user_admin_squadra'] = $userRow ['admin_squadra'];
	
	$_SESSION ['user_admin_page'] = $userRow ['admin_page'];
	
	$_SESSION ['user_catture_cinghiali'] = $userRow ['catture_cinghiali'];
}
//Ricerca eventi senza prametri dal menu laterale


$titolo ='';
$regione='';
$provincia ='';
$atc='';
$squadra="";

$dateNow = date('d/m/Y');

$hourNow = date('H:i:s');

$data_evento = $dateNow;

//echo "data_evento: " . $data_evento;

$ora_evento = $hourNow;
$yearNow=date('Y');
$monthNow = date('m');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana</title>

<meta name="keywords" content="Maremma Cinghiale Caccia Toscana" />

<meta name="description"
	content="Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana. un sito dove si posso trovare le varie squadre di caccia al cinghiale italiane" />

    <link rel='Icon MaremmaCinghiale' href='favicon.ico' type='image/x-icon' />
    
    <script type="text/javascript" src="js/common_functions.js"></script>

    <!-- Latest css/nivo-slider.css -->

    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

    <script type="text/javascript" src="js/cufon-yui.js"></script>



    <!-- jQuery UI library -->

    <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css"></link>



    <!-- Latest Bootstrap compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></link>

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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!--My JS -->
    <script type="text/javascript" src="js/ricercaEventiObjects.js"></script>

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

	<!-- Codice Accettazione Cookie-->

	<script type="text/javascript" src="js/cookiechoices.js"></script>

	<!--consenso all'uso dei cookie-->

	<script>

				document.addEventListener('DOMContentLoaded', function (event) {

						cookieChoices.showCookieConsentBar('Questo sito fa uso di cookies. Continuando la navigazione se ne autorizza l\'uso.', 'OK', 'Più info', 'maremmacinghiale.it/privacy.html');

				});

				</script>

	<div id="wrap">

		<div id="content_top"></div>

		<div id="content_bg_repeat">

			<div id="top_padding">

				<a href="#">MAREMMA CINGHIALE</a>

				<h3>
					<a href="index.php">Caccia al cinghiale nella Maremma Toscana</a>
				</h3>

			</div>



			<!-- <div id="menu">

					<ul>

						<li><a href="index.php" class="active">Home</a></li>

						<li><a href="#">Blog</a></li>

						<li><a href="#">Gallery</a></li>

						<li><a href="#">About Us</a></li>

						<li><a href="contact_us.php">Contattaci</a></li>

					</ul>

				</div> -->



			<nav class="navbar navbar-inverse">

			<div class="container-fluid">

				<div class="navbar-header top_padding">

					<h3>
						<a href="index.php">MAREMMA CINGHIALE</a>
					</h3>
					<!-- class="navbar-brand"  -->



					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#loginNavbar">

						<span class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>

					</button>

				</div>



				<div class="collapse navbar-collapse" id="loginNavbar" style="background: url(<?php echo $_SESSION['fb_user_cover_source']; ?> ) no-repeat center; width:100%; height: 300px; background-size:auto; !important;">

					<ul class="nav navbar-nav navbar-left">

						<li><a href="index.php" class="active">Home</a></li>

						<li><a href="http://www.facebook.com/maremmacinghiale">Facebook</a></li>

						<li><a href="#">Galleria</a></li>

						<li><a href="#">About Us</a></li>

						<li><a href="contact_us.php">Contattaci</a></li>

					</ul>

					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">

							<p class="navbar-text">Profilo di</p>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                                <?php if (isset($_SESSION['fb_user_name'])){
                                                echo $userRow['username'].'('.$_SESSION['fb_user_name'].')';
                                        }else{
                                                echo $userRow['username'];
                                        }?>
                                <span class="caret"></span></a>



							<ul class="dropdown-menu">



								<li>

                                            <?php echo '<img style="max-width:160px;" src="'.$userRow['url_foto'].'" >'?><br />

                                            <?php if (isset($_SESSION['fb_user_picture']))echo '<img style="max-width:160px;" src="'.$_SESSION['fb_user_picture'].'" >'?><br />

									<a href="logout.php?logout"><span
										class="glyphicon glyphicon-log-in"></span>&nbsp;Sign Out</a>

								</li>

							</ul>

						</li>



					</ul>

				</div>

			</div>

			</nav>



			<div id="wrapper">

				<div id="slider-wrapper">

					<div id="slider" class="nivoSlider">

						<?php if(isset($_SESSION['fb_user_cover_source']))echo '<img src="'.$_SESSION['fb_user_cover_source'].' "alt="" />';?>
                        <img src="images/header1.jpg" alt="" />
                        <img src="images/header2.jpg" alt="" />
                        <img src="images/header3.jpg" alt="" />
                        <img src="images/header4.jpg" alt="" />
                        <img src="images/header5.jpg" alt="" />
                        <img src="images/header6.jpg" alt="" />
                        <img src="images/header7.jpg" alt="" />
                        <img src="images/header8.jpg" alt="" />
                        <img src="images/header9.jpg" alt="" />

					</div>

				</div>



			</div>





			<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>

			<script type="text/javascript">

					$(window).load(function() {

						$('#slider').nivoSlider(

							{

								effect:'fade',

                                //effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown'

                                slices: 15,                     // For slice animations

                                boxCols: 8,                     // For box animations

                                boxRows: 4,                     // For box animations

                                animSpeed: 500,                 // Slide transition speed

                                pauseTime: 6000,                 // How long each slide will show

                                startSlide: 0,                     // Set starting Slide (0 index)

                                directionNav: true,             // Next e Prev navigation

                                controlNav: true,                 // 1,2,3... navigation

                                controlNavThumbs: false,         // Use thumbnails for Control Nav

                                pauseOnHover: true,             // Stop animation while hovering

                                manualAdvance: false,             // Force manual transitions

                                prevText: 'Prev',                 // Prev directionNav text

                                nextText: 'Next',                 // Next directionNav text

                                randomStart: false,             // Start on a random slide

                                beforeChange: function(){},     // Triggers before a slide transition

                                afterChange: function(){},         // Triggers after a slide transition

                                slideshowEnd: function(){},     // Triggers after all slides have been shown

                                lastSlide: function(){},         // Triggers when last slide is shown

                                afterLoad: function(){}         // Triggers when slider has loaded

							});

					});

					</script>



			<div id="content">

				<div class="col1">
					<?php include_once 'ricerca_eventi_menu_sx.php'?>
					<h2><?php echo $userRow['username']?></h2>
					<h2><?php if (isset($fb_user_name))echo $fb_user_name?></h2>

					<div class="wrapper pad_bot2">

						<div class="left marg_right1">
						
						<?php echo '<img src="'.$userRow['url_foto'].'" >'?> &nbsp;<br />
                        <?php if(isset($_SESSION['fb_user_picture'])) {
                                echo '<img src="' . $_SESSION['fb_user_picture'] . '" >';
                                }
                        ?>&nbsp;<br />

						<?php echo '<input type="hidden" value="'.$userRow['id'].'"'?> &nbsp;<br />

						</div>

					<?php

// 					echo "######################################################SESSION: \n".print_r($_SESSION );
					if (isset($_SESSION ['user'])  ) 

					{
					    if($_SESSION ['user']='stedurred'||$_SESSION ['user']='Stefano Durante'){
					        echo '<a href="admin_squadra.php?inserisci">Modifica/Inserisci Squadre</a><br/>';
					    }
						
						echo '<a href="admin_user.php?admin">Modifica Utente</a><br/>';
						
						echo '<a href="admin_evento.php?inserisci">Inserisci Evento</a>';
					}
					?> &nbsp;<br /> <a href="logout.php?logout">Sign Out</a>

						<p class="pad_bot1 pad_top1">
							<span class="color1">Registrato il<?php echo date_format(date_create($userRow['trn_date']),"d/m/Y");?></span>
						</p>

						<p class="pad_bot1 pad_top1">
							<span class="color1">Residenza Venatoria <?php echo $userRow['nome_atc']?></span>
						</p>

						<div class="left marg_right1" style="max-width: 160px;">

							<p class="pad_bot1 pad_top1">
								<h2>Squadra</h2>
								<span class="color1">  <?php echo $userRow['nome_squadra']?></span>

								<img src="<?php echo $userRow['foto_squadra']?>" /> &nbsp;<br />
							</p>
						</div>

						<p class="pad_bot1 pad_top1">
							<span class="color1"><?php ($userRow['capocaccia'] ==1) ? print 'Capocaccia': print '' ?></span>
						</p>

						<p class="pad_bot1 pad_top1">
							<span class="color1"><?php ($userRow['admin_squadra'] ==1) ? print 'Puo modificare i dati della squadra e creare eventi ': print ''.$userRow{'admin_squadra'} ?></span>
						</p>

						<p class="pad_bot1 pad_top1">
							<span class="color1"><?php ($userRow['canaio'] ==1) ?  print 'Canaio' : print ''?></span>
						</p>

					</div>

					<div class="wrapper pad_bot2">

						<div class="left marg_right1" style="max-width: 160px;">
							<h2><?php echo $userRow['username']?></h2>

							<a href='<?php echo $hrefAdminUser_modifica?>'>
								<img src="<?php echo $userRow['url_foto']?>"
								alt="Immagine del profilo" /> &nbsp;
							</a>

						<?php $userRow['nome_cane']=='' ? print '' : print '<p><span class="color1">Nome: '.$userRow['nome_cane'].' &nbsp;</p>';?>

						<?php $userRow['foto_cane']=='' ? print '' : print '<p><span class="color1"><img src="'.$userRow['foto_cane'].'" >&nbsp;</p>';?>

					</div>

						<p class="pad_bot1 pad_top1">
							<span class="color1">Registrato il:&nbsp;</span><?php echo date_format(date_create($userRow['trn_date']),"d/m/Y");?></p>

						<p>
							<span class="color1">Residenza Venatoria:&nbsp;<?php echo $userRow['nome_atc']?></span>&nbsp;
						</p>

						<p>
							<span class="color1">Catture cinghiali:&nbsp;<?php echo $userRow['catture_cinghiali']?></span>
						</p>


                    <?php if ($userRow['admin_squadra'] ==true or $userRow['capocaccia']==true)  {?>
                        <p>
							<span class="color1"><a href="admin_squadra.php?modifica">Modifica
									Squadra</a>&nbsp;
						
						</p>
                    <?php }?>

					<p>
							<a href="logout.php?logout">Sign Out</a>&nbsp;
						</p>

					</div>

					<div class="wrapper">

						<div class="left marg_right1" style="max-width: 160px;">
						
							<p class="pad_bot1 pad_top1">
								<h2>Squadra</h2>
								<a href="admin_squadra.php?modifica"><?php echo '<img src="'.$userRow['foto_squadra'].'" >'?></a>
							</p>
						</div>

						<p class="pad_bot1 pad_top1">
							<span class="color1">Squadra al cinghiale</span>
						</p>

						<p>
							<span class="color1">Nome:&nbsp;<?php echo $userRow['nome_squadra']?></span>
						</p>

						<p>
							<span class="color1">Numero:&nbsp; </span><?php echo $userRow['numero_squadra']?></p>

						<p>
							<span class="color1">Catture totali squadra:&nbsp; </span><?php echo $userRow['catture_cinghiali_squadra']?></p>

                    <?php if ($userRow['admin_squadra'] ==1 or $userRow['capocaccia']==1)  {?>
                        <p>
							<span class="color1"><a href="admin_evento.php?modifica">Crea e
									modifica Eventi</a></span>
						</p>
                    <?php }?>

					<p>
							<span class="color1"><a href="admin_evento.php?visualizza">Prenotazione
									eventi di caccia</a></span>
						</p>

					</div>

				</div>

				<div class="col2">

					<?php

					if(isset($_POST['btn-cerca_evento'])){



						//Ricerca con parametri da men� a sinistra

						if(!isset($errormsg)){

							print "<div class='alert alert-success' role='alert'><h2 class='pad_bot1 pad_top1'>Risultato Ricerca Evento</h2></div>";

						}else print "<div class='alert alert-danger' role='alert'><h2 class='pad_bot1 pad_top1'>Errore ricerca "."\n".$errormsg.'</h2></div>';





						echo draw_calendar_ricerca_eventi($titolo,$data_evento,$ora_evento,$regione,$provincia,$atc,$squadra,$monthNow,$yearNow,$connection);

					}else {

						print "<div class='alert alert-success' role='alert'><h2 class='pad_bot1 pad_top1'>Eventi in programma</h2></div>";

						//Eventi proposti all'apertura della pagina

						echo draw_calendar_ricerca_eventi($titolo,$data_evento,$ora_evento,$regione,$provincia,$atc,$squadra,$monthNow,$yearNow,$connection);

					}

					?>


					<h2 class="pad_bot1">Iscriviti a MaremmaCinghiale GRATIS!</h2>

					<p class="pad_bot1 color1 pad_top1">Per iscriversi alla lista di
						cacciatori e simpatizzanti del sito maremmacinghiale.it basta
						cliccare sul bottone "ISCRIZIONE"</p>

					<p class="pad_bot3">Questo servizio unisce tutti i cacciatori delle
						varie squadre di caccia al cinghiale</p>

					<div class="wrapper">
						<a href="mailto:cacciatori-subscribe@maremmacinghiale.it"
							class="button right">Iscrizione gratuita</a>
					</div>

					<h2 class="pad_bot1 pad_top1">Guida alla sottoscrizione</h2>

					<div class="wrapper">

						<div class="left marg_right1">
							<img src="images/boar.jpg" alt="" />
						</div>

						<p class="pad_top1 pad_bot1 color1">Una volta cliccato il bottone
							"ISCRIZIONE" si apre un messaggio di posta da inviare lasciando
							vuoti i campi</p>

						Il sito invia un messaggio di sicurezza a cui rispondere per
						iscriversi alla lista.

					</div>

					<!--Facebook Comment plug-in-->

					<div class="fb-comments"
						data-href="https://www.facebook.com/maremmacinghiale/"
						data-numposts="5" data-colorscheme="dark"></div>

					<!--Facebook Comment plug-in-->

				</div>





			</div>

			<!--Facebook App ID-->

			<script>

					  window.fbAsyncInit = function() {

					  FB.init({

						  appId      : '902548573194215',

						  xfbml      : true,

						  version    : 'v2.9'

					  });

				  };

		        </script>

			<!--Facebook App ID-->

			<div id="fb-root"></div>

			<!--Facebook App -->

			<script>(function(d, s, id) {

						var js, fjs = d.getElementsByTagName(s)[0];

						if (d.getElementById(id)) return;

		  				js = d.createElement(s); js.id = id;

		  				js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.9&appId=902548573194215";

		  				fjs.parentNode.insertBefore(js, fjs);

						}(document, 'script', 'facebook-jssdk'));
			</script>

			<!--Facebook App -->



			<div id="footer_top">

				<div id="footer_column1">

					<!--Facebook App ID-->

					<script>

                            window.fbAsyncInit = function() {

                                FB.init({

                                    appId      : '902548573194215',

                                    xfbml      : true,

                                    version    : 'v2.9'

                                });

                            };

                        </script>

					<!--Facebook App ID-->

					<div id="fb-root"></div>

					<!--Facebook App -->




					<script>(function(d, s, id) {

                                var js, fjs = d.getElementsByTagName(s)[0];

                                if (d.getElementById(id)) return;

                                js = d.createElement(s); js.id = id;

                                js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5&appId=902548573194215";

                                fjs.parentNode.insertBefore(js, fjs);

                            }(document, 'script', 'facebook-jssdk'));</script>

					<!--Facebook App -->

					<h2>Facebook Like</h2>

					<div class="footer_text fb-page"
						data-href="https://www.facebook.com/maremmacinghiale"
						data-small-header="false" data-adapt-container-width="true"
						data-hide-cover="false" data-show-facepile="false">

						<div class="fb-xfbml-parse-ignore">

							<blockquote cite="https://www.facebook.com/maremmacinghiale">

								<a href="https://www.facebook.com/maremmacinghiale">Maremma Cinghiale</a>

							</blockquote>

						</div>

					</div>

					<!--Facebook like -->

					<div class="fb-like" data-share="true" data-width="150"
						data-show-faces="false"></div>

					<!--Facebook like -->

				</div>

				<div id="footer_column2">

					<h2>Social</h2>

					<div class="footer_text">

						<div class="foot_pad">

							<div class="link1">
								<a href="mailto:cacciatori-subscribe@maremmacinghiale.it">Iscriviti
									alla lista dei cacciatori</a>
							</div>

							<div class="link2">
								<a href="http:\\www.facebook.com/maremmacinghiale">MaremmaCinghiale
									su Facebook</a>
							</div>

							<div class="link3">
								<a href="#">RSS Feed</a>
							</div>

							<div class="link4">
								<a href="#">Seguici su Twitter</a>
							</div>

						</div>

					</div>

				</div>

				<div id="footer_column3">

					<h2>Collegamenti</h2>

					<div class="footer_text">

						<div class="foot_pad">

							<ul class="ls">

								<li><a href="#">Lorem ipsum dolor</a></li>

								<li><a href="#">Maecenas in turpis </a></li>

								<li><a href="#">Morbi fringilla libero</a></li>

								<li><a href="#">In venenatis metus vel </a></li>

								<li><a href="#">Donec cursus quam ac </a></li>

							</ul>

						</div>

					</div>

				</div>

				<div class="clear"></div>

			</div>

			<div id="footer_bot">

				<p>
					Copyright 2015.
					<!-- Do not remove -->
					Design by <a href="mailto:caccia@maremmacinghiale.it"
						title="contatto Stefano Durante">Stefano Durante</a>
					<!-- end -->
				</p>

				<p>
					<a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a>
				</p>

			</div>



		</div>

		<div id="content_bottom"></div>

	</div>

</body>

</html>


