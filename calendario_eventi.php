<?php
session_start();
if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
include_once 'php/dbconnect.php';
include_once 'calendar.php';
setlocale (LC_ALL, "it_IT");
//echo '|'.implode('|',ini_get_all());
date_default_timezone_set('Europe/Rome');
//print (strftime ("%A.\n"));
$datenow = date('Y-m-d H:i:s');
//echo $datenow.'<br>';
date_default_timezone_set('Europe/Rome');
$timezone = date_default_timezone_get();
//echo "The current server timezone is: " . $timezone.'<br>';
$mounthNow = date('m');
//print (strftime ("%A e in Italiano "));
setlocale (LC_TIME, "it-IT");
//print (strftime ("%A.\n"));
$mounthNameNow =strftime ('%B');
$yearNow=date('Y');


/*print_r(mb_list_encodings());

echo 'Mese Numero:'.$mounthNow.'<br>';
echo 'Mese:'.$mounthNameNow.'<br>';
echo 'Anno:'.$yearNow.'<br>';
				printf("Initial character set: %s\n", mysqli_character_set_name($connection));

				 
				if (!mysqli_set_charset($connection, "utf8")) {
					printf("Error loading character set utf8: %s\n", mysqli_error($connection));
					exit();
				} else {
					printf("Current character set: %s\n", mysqli_character_set_name($connection));
				}     */



//Paypal cancel_return_token
if (isset($_GET['token'])) {
    //https://www.paypal.com/webapps/www.maremmacinghiale.it/admin_prenotazione.php?inserisci&token=1EY20170Y99084608
    $token= $_GET['token'];
    echo "ACCESS_TOKEN:".$token;
}
if(isset($_POST['btn-cerca_evento']))
{
	 $timezone = date_default_timezone_get();
	 echo "The current server timezone is: " . $timezone;
	 date_default_timezone_set($timezone);
	 $datenow = date('Y-m-d H:i:s');


	 if(isset($_POST['data_evento']) && !empty($_POST['data_evento'])){
        $data_evento = mysqli_real_escape_string($connection,$_POST['data_evento']);
        echo "Data Evento isset: " . $data_evento.PHP_EOL;
    }else{
        $data_evento = time();// mysqli_real_escape_string($connection,$_POST['data_evento']);
        echo "Data Evento not set: " . $data_evento.PHP_EOL;
        
        file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
            ."____FACEBOOK APP MAREMMACINGHIALE____calendario_eventi.php->btn-cerca_evento->data_evento:".$data_evento.PHP_EOL, FILE_APPEND);
    }

    if(isset($_POST['ora_evento'])){
        $ora_evento = mysqli_real_escape_string($connection,$_POST['ora_evento']);
    }else $ora_evento =time();// mysqli_real_escape_string($connection,$_POST['ora_evento']);

    if(isset($_POST['titolo'])){
        $titolo = mysqli_real_escape_string($connection,$_POST['titolo']);
    }else $titolo= mysqli_real_escape_string($connection,$_POST['$titolo']);

    if(isset($_POST['regione'])){
        $regione= mysqli_real_escape_string($connection,$_POST['regione']);
    }else $regione= mysqli_real_escape_string($connection,$_POST['DropDownRegione']);

    if(isset($_POST['provincia'])){
        $provincia= mysqli_real_escape_string($connection,$_POST['provincia']);
    }else $provincia= mysqli_real_escape_string($connection,$_POST['DropDownProvincia']);

    if(isset($_POST['atc'])){
        $atc= mysqli_real_escape_string($connection,$_POST['atc']);
    }else $atc= mysqli_real_escape_string($connection,$_POST['DropDownAtc']);

    if(isset($_POST['squadra'])){
        $squadra= mysqli_real_escape_string($connection,$_POST['squadra']);
    }else $squadra= mysqli_real_escape_string($connection,$_POST['DropDownSquadre']);

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
    //$sql="";
	//$sql = "INSERT INTO evento(titolo,data_evento,url_foto,importo,descrizione,id_squadra) VALUES('$titolo','$data_evento','$uploadfile','$dimporto','$descrizione','$squadra')";
	/*if($_SESSION['user']=='stedurred'){
	   $sql = "INSERT INTO evento(titolo,data_evento,url_foto,importo,descrizione,id_squadra) VALUES('$titolo','$data_evento','$uploadfile','$dimporto','$descrizione','$squadra') ON DUPLICATE KEY UPDATE 
			titolo='$titolo',data_evento='$data_evento',url_foto='$uploadfile',importo='$dimporto',descrizione='$descrizione',id_squadra='$squadra'";
	}*/
	//$result=mysqli_query($connection,$sql);

}

?>                                      
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana</title>
        <meta name="keywords" content="Maremma Cinghiale Caccia Toscana" />
        <meta name="description" content="Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana un sito dove si possono trovare le varie squadre di caccia al cinghiale della maremma toscana" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/cufon-yui.js"></script>
		 

        <script type="text/javascript" src="js/28_Days_Later_400.font.js"></script>

        <!-- jQuery UI library -->
        <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery-Timepicker-Addon-master min CSS-->
        <link rel="stylesheet" href="jQuery-Timepicker-Addon-master/dist/jquery-ui-timepicker-addon.min.css">


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


		 <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
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
    
        <div class="container">
            <!-- Codice Accettazione Cookie-->
            <script type="text/javascript" src="js/cookiechoices.js"></script>
            <!--consenso all'uso dei cookie-->
            <script>
            document.addEventListener('DOMContentLoaded', function (event) {
                    cookieChoices.showCookieConsentBar('Questo sito fa uso di cookies. Continuando la navigazione se ne autorizza l\'uso.', 'OK', 'Piu info', 'http://www.maremmacinghiale.it/privacy.html');
            });
            </script>


            <div id="wrap">
                <div id="content_top"></div>
                    <div id="content_bg_repeat">
                        <div id="top_padding">
                            <a href="#">MAREMMA CINGHIALE</a>
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
	                            </div>
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
	                            <form class="navbar-form navbar-left" role="search">
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="ATC Squadre Eventi">
	                                </div>
	                                <button type="submit" class="btn btn-default">Ricerca</button>
	                            </form>
	                            <div class="collapse navbar-collapse" id="loginNavbar">
	                                <ul class="nav navbar-nav navbar-right">
	                                	<?php if(isset($_SESSION['user'])){?>
	                                	<!-- Utente loggato -->
		                                <li class="dropdown">
		                                    <p class="navbar-text">Profilo di</p>
		                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['user']?><span class="caret"></span></a>
		                                    <ul class="dropdown-menu">
		                                        <li>
		                                            <?php echo '<img style="max-width:160px;" src="'.$_SESSION['user_url_foto_profilo'].'" >'?><br/>
		                                            <a href="logout.php?logout"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Sign Out</a>
		                                        </li>
		                                    </ul>
		                                </li>
		                                <?php } else {?>
	                                	<!-- Utente non loggato -->
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
	 								<?php }?>
	                                </ul>
	                            </div>
	                        </nav>
                        	<div id="content">
                            
                                <div class="row">
                                    <div class="col-md-4 col-xs-2">

                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <h2 class="pad_bot1"><span class="label label-danger">Prenotazione Evento</span></h2>
                                    </div>
                                    <div class="col-md-2 col-xs-6">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 ">
                                        <p class="pad_bot1 color1 pad_top1"><h1>Riempire i campi sottostanti</h1></p>
                                    </div>
                                    <div class="col-md-8 ">
                                        <p class="pad_bot3"><h1>Questo modulo permette la ricerca di un Evento di caccia al cinghiale</h1></p>
                                    </div>
                                    <div class="col-md-2 ">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-10 col-xs-12">

                                                    <div class="col-md-5 col-xs-6">
                                                        <div class="form-group">
                                                            <h1><label class="control-label col-sm-6" for="titolo" title="Titolo evento">Ricerca evento per nome</label></h1>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xs-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="titolo" placeholder="Nome evento" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-10 col-xs-12">

                                                    <div class="col-md-5 col-xs-6">
                                                        <div class="form-group">
                                                            <h1><label class="control-label col-sm-6" for="data_evento" title="Data Evento">Data Evento</label></h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-4">
                                                        <div class="form-group">

                                                                <input type="text" id="datepicker" class="form-control" name="data_evento" placeholder="Data evento" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-xs-2">
                                                        <div class="form-group">

                                                                <input type='text' id='timepicker1' class="form-control" name="ora_evento" placeholder="Ora evento"/>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-10 col-xs-12">

                                                    <div class="col-md-5 col-xs-6">
                                                        <div class="form-group">
                                                            <h1><label class="control-label col-sm-6" for="DropDownRegione" title="Regione">Regione</label></h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xs-6">
                                                        <div class="form-group">
                                                            <select name = "DropDownRegione" id="ddregione"  class="form-control" onchange="getProvince(this)" onfocus="getProvince(this)">
                                                                <option value="">Selezionare una Regione</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-10 col-xs-12">

                                                    <div class="col-md-5 col-xs-6">
                                                        <div class="form-group">
                                                            <h1><label class="control-label col-sm-6" for="DropDownProvincia" title="Provincia">Provincia</label></h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xs-6">
                                                        <div class="form-group">
                                                            <select name = "DropDownProvincia" id="ddprovincia"  class="form-control" onchange="getAtc(this)" onfocus="getAtc(this)">
                                                                <option value="">Selezionare una Provincia</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-10 col-xs-12">

                                                    <div class="col-md-5 col-xs-6">
                                                        <div class="form-group">
                                                            <h1><label class="control-label col-sm-6" for="DropDownAtc" title="Ambito territoriale di caccia">A.T.C.</label></h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xs-6">
                                                        <div class="form-group">
                                                            <select name = "DropDownAtc" id="ddatc"  class="form-control" onchange="getSquadre(this)">
                                                                <option value="">Selezionare un A.T.C.</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-10 col-xs-12">

                                                    <div class="col-md-5 col-xs-6">
                                                        <div class="form-group">
                                                            <h1><label class="control-label col-sm-6" for="DropDownSquadre" title="Squadra cinghiale">Squadra cinghiale</label></h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xs-6">
                                                        <div class="form-group">
                                                            <select name = "DropDownSquadre" id="ddsquadre"  class="form-control">
                                                                <option value="">Selezionare una Squadra</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">

                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-12 col-xs-12">
                                                    <div class="col-md-5">

                                                    </div>
                                                    <div class="col-md-2 col-xs-12">
                                                        <div class="form-group">
                                                            <button type="submit" id="buttonCercaEvento" name="btn-cerca_evento" class="btn btn-danger"><h2>Cerca Eventi</h2></button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">

                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row">

                                                <div class="col-md-12 col-xs-12">
                                                    <?php
                                                    if(isset($_POST['btn-cerca_evento'])){
                                                        if(!isset($errormsg)){
                                                            print "<div class='alert alert-success' role='alert'><h2 class='pad_bot1 pad_top1'>Risultato Ricerca Evento</h2></div>";
                                                        }else print "<div class='alert alert-danger' role='alert'><h2 class='pad_bot1 pad_top1'>Errore ricerca "."\n".$errormsg.'</h2></div>';


                                                        echo draw_calendar_ricerca_eventi($titolo,$data_evento,$ora_evento,$regione,$provincia,$atc,$squadra,$mounthNow,$yearNow,$connection);
                                                    }?>

                                                </div>

                                            </div>


                                            <input type="hidden" class="form-control" name="user_id" value="<?php echo $_SESSION['user_id'] ?>"/>
                                        </form>


                                </div>
                                </div>

                                <div id="footer_bot">
                                    <p>Copyright  2015. <!-- Do not remove -->Design by <a href="mailto:caccia@maremmacinghiale.it" title="contatto Stefano Durante">Stefano Durante</a><!-- end --></p>
                                    <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
                                </div>
                            </div>
                        </div>
                
                <div id="content_bottom"></div>
            </div>
        <script type="text/javascript">
            //Codice cambio Regione richiesta province
            
            function readyAJAX() { 
               try {return new XMLHttpRequest();} catch(e) {
                   try {return new ActiveXObject("Msxml2.XMLHTTP");} catch(e) { 
                        try {return new ActiveXObject("Microsoft.XMLHTTP");} catch(e) { 
                                    return "A newer browser is needed."; 
                                    } 
                              } 
                        } 
                   } 

               function getRegioni(){
                  var url = "getRegioni.php"; 
                  //var e = document.getElementById("ddregione");
                  var requestObj = readyAJAX(); 
                  //var strIdRegione =select.value;
                  
                  //var params = "id_regione="+encodeURIComponent(strIdRegione); 
                  requestObj.open("POST",url,true); 
                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                  requestObj.send(); 
                  requestObj.onreadystatechange = function() {
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

               function getProvince(select){
                  var url = "getProvince.php";
                  var e = document.getElementById("ddregione");
                  var requestObj = readyAJAX(); 
                  var strIdRegione =select.value;
                  
                  var params = "id_regione="+encodeURIComponent(strIdRegione); 
                  requestObj.open("POST",url,true); 
                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                  requestObj.send(params); 
                  requestObj.onreadystatechange = function() {
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