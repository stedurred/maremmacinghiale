<?php
const STEDURRED = 'stedurred';
session_start();
if(isset($_SESSION['user']))
{
 header("Location: home.php");
}
include_once 'php/dbconnect.php';
$id_regione = $_GET['id_regione'];
$fb_user_id = $_GET['fb_user_id'];
$fb_user_name = $_GET['fb_user_name'];
$fb_user_first_name = $_GET['fb_user_first_name'];
$fb_user_last_name = $_GET['fb_user_last_name'];
$fb_user_email = $_GET['fb_user_email'];
$fb_user_picture=$_SESSION['fb_user_picture'];
$fb_user_picture_url=$_SESSION['fb_user_picture_url'];
$fb_user_pages=json_decode(urldecode($_GET['fb_user_pages']));
$fb_user_pagesEncoded=urlencode(json_encode($fb_user_pages));
print_r("\n\r_GET['fb_user_pages']:".$_GET['fb_user_pages']);
print_r("\n\rfb_user_pages".$fb_user_pages);
print_r("\n\rfb_user_pagesEncoded".$fb_user_pagesEncoded);


/*Codice che inserisce lo User nel DB*/
if(isset($_POST['btn-signup'])){
    $timezone = date_default_timezone_get();
    //echo "The current server timezone is: " . $timezone;
    date_default_timezone_set($timezone);
    $datenow = date('Y-m-d H:i:s');
    //echo $datenow;

    $uname = mysqli_real_escape_string($connection,$_POST['uname']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $upass = md5(mysqli_real_escape_string($connection,$_POST['pass']));
    $regione= mysqli_real_escape_string($connection,$_POST['DropDownRegione']);
    $provincia= mysqli_real_escape_string($connection,$_POST['DropDownProvincia']);
    $atc= mysqli_real_escape_string($connection,$_POST['DropDownAtc']);
    $squadra= mysqli_real_escape_string($connection,$_POST['DropDownSquadre']);
    $pagina= mysqli_real_escape_string($connection,$_POST['DropDownPagine']);

    $admin_page = isset($pagina);

    //echo $pagina;
	
    $error_types = array(
                            0 => 'There is no error, the file uploaded with success',
                            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
                            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
                            3 => 'The uploaded file was only partially uploaded',
                            4 => 'No file was uploaded',
                            6 => 'Missing a temporary folder',
                            7 => 'Failed to write file to disk.',
                            8 => 'A PHP extension stopped the file upload.',
                            E_USER_WARNING => 'Contattare amministratore del Sito');




    if (!empty($_FILES['img_profilo']['name'])) {
        $uploaddir = './uploads/';
        //echo 'img_profilo';
        $file      = $_FILES['img_profilo'];

        $name      = $file['name'];
        $tmp_name  = $file['tmp_name'];
        //echo $tmp_name;
        $error     = $file['error'];

    }elseif(isset($fb_user_picture)){

       // Immagine del profilo id Facebook
        //echo '$fb_user_picture';
/*        $url = parse_url($fb_user_picture);
        $url_path = $url['path'];
        var_dump($url_path);
        $url_scheme = $url['scheme'];
        var_dump($url_scheme);
        $url_host = $url['host'];
        var_dump($url_host);
        $url_port = $url['port'];
        var_dump($url_port);
        $url_user = $url['user'];
        var_dump($url_user);
        $url_pass = $url['pass'];
        var_dump($url_pass);
        $url_fragment = $url['fragment'];
        var_dump($url_fragment);
        $url_query  = $url['query'];
        var_dump($url_query);
        $query_explode = explode( '&', $url_query );
        $oh =  $query_explode[0];
        var_dump($oh);
        $oe =  $query_explode[1];
        var_dump($oe);

        $explode_url = explode( '?', $url_path );
        var_dump($explode_url);
        //$file = file_get_contents($fb_user_picture);
        //$name = trim(substr( $explode_url[0], strrpos($explode_url[0], '/')),'/');
        $name = $fb_user_picture;*/
        //$file      = file_exists($fb_user_picture);

/*        $ch = curl_init();
        $source = $fb_user_picture;//"https://myapps.gia.edu/ReportCheckPortal/downloadReport.do?reportNo=$row['certNo']&weight=$row['carat']";
        curl_setopt($ch, CURLOPT_URL, $source);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSLVERSION,3);
        $data = curl_exec ($ch);
        curl_close ($ch);
        $destination = $fb_user_picture;
        $file_dest = fopen($destination, "w+");
        fputs($file_dest, $data);
        fclose($file_dest);*/
        $tmp_name  = $fb_user_picture;
    }

    //var_dump($file);
    $uploadfile = $uploaddir.basename($name);


//        if($_SESSION['user']== STEDURRED){
//            $sql = "INSERT INTO users(username,email,password,trn_date,url_foto,id_atc,id_squadra) VALUES('$uname','$email','$upass','$datenow','$uploadfile',$atc,'$squadra')
//                    ON DUPLICATE KEY UPDATE username='$uname',password='$upass',trn_date='$datenow',url_foto='$uploadfile',id_atc='$atc',id_squadra='$squadra'";
//            $result=mysqli_query($connection,$sql);
//
//        }else{
            /*
             * INIZIO Controllo Esistenza Utente Maremmacinghiale.it con email e facabook email
             */
    $sqlControlloUtente = "SELECT users.* FROM users ";

    $sqlWhere="WHERE  email = '$email'";


    if($fb_user_email!=""){
        $sqlWhere="WHERE fb_user_email = '$fb_user_email'";
    }
    $sqlControlloUtente=$sqlControlloUtente.$sqlWhere;
    echo $sqlControlloUtente;
    
    $resultControlloUtente=mysqli_query($connection,$sqlControlloUtente);
    $row=mysqli_fetch_array($resultControlloUtente);
    //var_dump($row);
    //Se esiste gia l'utente

    if (!is_null($row) &&  !empty($row)) {
        //Se e' stato fatto accesso con facebbok e si deve aggiornare lo User
        $facebook_access_token = $_SESSION['facebook_access_token'];

        if (isset($facebook_access_token)) {
            //Update User gia registrato con il metodo tradizionale con  i dati di facebook
            $id_user_registrato =$row['id'];

            $sql = "UPDATE users SET
                            username='$uname',
                            email='$email',
                            password='$upass',
                            trn_date='$datenow',
                            url_foto='$uploadfile',
                            id_atc='$atc',
                            id_squadra='$squadra',
                            admin_page=$admin_page,
                            fb_user_id=$fb_user_id,
                            fb_user_page_id=$pagina,
                            fb_user_email='$fb_user_email',
                            fb_user_name='$fb_user_name',
                            fb_user_first_name='$fb_user_first_name',
                            fb_user_last_name='$fb_user_last_name',
                            fb_access_token='$facebook_access_token'
                            WHERE id=$id_user_registrato";
            
            echo "\n sql:".$sql;
            $result=mysqli_query($connection,$sql);
            
/*            //redirect alla HOME!!!!!!!!!!!!!
            Registrazione Completata*/



            //Carico le variabili di SESSIONE e redirigo alla HOME



            $_SESSION['user'] = $row['username'];

            $_SESSION['user_id'] = $row['id'];

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



            file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s").
            		"#####____FACEBOOK USER register.php___#####".
            		"Location: home.php?fb_user_name=".$fb_user_name.
            							"&fb_user_first_name=".$fb_user_first_name.
            							"&fb_user_last_name=".$fb_user_last_name.
            							"&fb_user_id=".$fb_user_id.
            							"&fb_user_email=".$fb_user_email.
            							"&fb_user_picture=".$fb_user_picture.
            							"&fb_user_picture_url=".$fb_user_picture_url.
            							"&fb_user_pages=".$fb_user_pagesEncoded.PHP_EOL, FILE_APPEND);
            
            header( "Location: home.php?fb_user_name=".$fb_user_name.
            							"&fb_user_first_name=".$fb_user_first_name.
            							"&fb_user_last_name=".$fb_user_last_name.
            							"&fb_user_id=".$fb_user_id.
            							"&fb_user_email=".$fb_user_email.
            							"&fb_user_picture=".$fb_user_picture.
            							"&fb_user_picture_url=".$fb_user_picture_url.
            							"&fb_user_pages=".$fb_user_pagesEncoded );

        }else{
            if($row['username']==$uname){
                $errormsg .= "<br/>\nErrore registrazione Utente: username utilizzata da un altro utente'".$uname."'<br/>\n".$error_types[E_USER_WARNING];
                trigger_error(E_USER_WARNING);
            }
            if($row['email']==$email){
                $errormsg .= "<br/>\nErrore registrazione Utente: email utilizzata da un altro utente'".$email."'<br/>\n".$error_types[E_USER_WARNING];
                trigger_error(E_USER_WARNING);
            }
        }

    }else{
        /*
         * Inserimento Utente  Maremmacinghiale.it
         */
        $sql = "INSERT INTO users(username,email,password,trn_date,url_foto,id_atc,id_squadra,fb_user_id,fb_user_email,fb_user_name,fb_user_first_name, fb_user_last_name)
                VALUES('$uname','$email','$upass','$datenow','$uploadfile','$atc','$squadra','$fb_user_id','$fb_user_email','$fb_user_name','$fb_user_first_name','$fb_user_last_name')";
        $result=mysqli_query($connection,$sql);
        //echo $sql;
        //Upload file immagine del profilo
        if (!isset($fb_user_picture)) {
            if ($error == UPLOAD_ERR_OK) {
                //header("Location: home.php");//
                echo "File is valid, and was successfully uploaded.\n";
                //echo $tmp_name;
                if (move_uploaded_file( $tmp_name, $uploadfile )) {
                    $msg .= "Immagine del profilo '" . $tmp_name . "' aggiornata '" . $name . "'<br/>\n";
                } else {
                    $errormsg .= "Impossibile caricare il file '" . $tmp_name . "' to '" . $name . "'<br/>\n";
                }
            } else $errormsg .= "Errore salvataggio immagine del profilo '" . $name . "'<br/>\n" . $error_types[$error];
        }

    }







}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana</title>
        <meta name="keywords" content="Maremma Cinghiale Caccia Toscana" />
        <meta name="description" content="Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana � un sito dove si posso trovare le varie squadre di caccia al cinghiale della maremma toscana" />
        
   	  
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/28_Days_Later_400.font.js"></script>
        
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
		<!-- My CSS -->
		<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		
		
        <!--<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />-->
        
        <script type="text/javascript">
           Cufon.replace("H1");
           Cufon.replace("H2");
           Cufon.replace("H3");
           Cufon.replace("#top_padding a");
           Cufon.replace("#menu a");
        </script>
    </head>
    <body onload="getRegioni()">
    	<noscript>This page requires JavaScript be available and enabled to function properly</noscript>
		<!-- Codice Accettazione Cookie-->
		<script type="text/javascript" src="js/cookiechoices.js"></script>
		<!--consenso all'uso dei cookie-->
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function (event) {
			cookieChoices.showCookieConsentBar('Questo sito fa uso di cookies. Continuando la navigazione se ne autorizza l\'uso.', 'OK', 'Pi� info', 'maremmacinghiale.it/privacy.html');
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
							<input type="text" class="form-control" placeholder="Ricerca ATC Squadre Eventi">
						</div>
						<button type="submit" class="btn btn-default">Ricerca</button>
					</form>
					<div class="collapse navbar-collapse" id="loginNavbar">
						<ul class="nav navbar-nav navbar-right">
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
            
				    <div id="content">
					    <div class="container">
						<div class="row">
							<div class="col-md-8 col-xs-12">
                                <?php
                                if(isset($_POST['btn-signup'])){
                                    if(!isset($errormsg)){

                                        print "<h2 class='pad_bot1 pad_top1'><span class='label label-default'>Registrazione avvenuta con successo</span></h2>"."\n".$msg;
                                    }else print "<h2 class='pad_bot1 pad_top1'><span class='label label-danger'>Errore registrazione</span></h2>"."\n".$errormsg;
                                }
                                ?>
								<h2 class="pad_bot1"><span class="label label-danger">Registrati a MaremmaCinghiale, GRATIS!</span></h2>
								<p class="pad_bot1 color1 pad_top1"><span class="label label-default">Per registrarsi al sito maremmacinghiale.it basta riempire i campi sottostanti</span></p>
								<p class="pad_bot3"><span class="label label-danger">Questo servizio permette a tutti i cacciatori delle varie squadre di caccia al cinghiale di registrarsi</span></p>

                            </div>


                        </div>
                        <form role="form-horizontal" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h1><label class="control-label col-sm-6" for="uname" title="User Name">User Name</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">

                                            <input type="hidden" class="form-control" name="fb_user_id" placeholder="User Name" required value='<?php echo $fb_user_id ?>'/>
                                            <input type="text" class="form-control" name="uname" placeholder="User Name" required value='<?php echo $fb_user_name ?>'/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h1><label class="control-label col-sm-6" for="email" title="Email">Email</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" value='<?php echo $fb_user_email ?>'required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <h1><label class="control-label col-sm-6" for="pass" title="Password">Password</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass" placeholder="Password" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group"><h1>
                                                <label class="control-label col-sm-6" for="img_profilo" title="Immagine del profilo">Immagine del profilo</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group"><!-- MAX_FILE_SIZE deve precedere campo di input del nome file -->
                                            <input type="hidden" name="MAX_FILE_SIZE" value="0" />
                                            <img src="<?php echo $fb_user_picture ?>"/>
                                            <input type="file" class="form-control" name="img_profilo" placeholder="Immagine del profilo">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group"><h1>
                                                <label class="control-label col-sm-6" for="DropDownRegione" title="Regione">Regione</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <select name = "DropDownRegione" id="ddregione"  class="form-control" onchange="getProvince(this)" onfocus="getProvince(this)">
                                                <option value="">Selezionare una Regione</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group"><h1>
                                                <label class="control-label col-sm-6" for="DropDownProvincia" title="Provincia">Provincia</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <select name = "DropDownProvincia" id="ddprovincia" class="form-control" onchange="getAtc(this)" onfocus="getAtc(this)">
                                                <option value="">Selezionare una Provincia</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group"><h1>
                                                <label class="control-label col-sm-6" for="DropDownAtc" title="Ambito territoriale di caccia">A.T.C.</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <select name = "DropDownAtc" id="ddatc"  class="form-control" onchange="getSquadre(this)" required>
                                                <option value="">Selezionare un A.T.C.</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group"><h1>
                                                <label class="control-label col-sm-6" for="DropDownSquadre" title="Squadra cinghiale">Squadra cinghiale</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <select name = "DropDownSquadre" id="ddsquadre" class="form-control"  ><!-- onchange="getPagine()" -->
                                                <option value="">Selezionare una Squadra</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg">
                                </div>
                                <div class="col-md-8 col-xs-12">

                                    <div class="col-sm-4">
                                        <div class="form-group"><h1>
                                                <label class="control-label col-sm-6" for="DropDownPagine" title="Pagina Facebook Squadra cinghiale">Pagina Facebook Squadra cinghiale</label></h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="hidden" name="fb_user_pages" id="fb_user_pages" class="form-control"  value='<?php echo $fb_user_pagesEncoded ?>'/>
                                            <select name = "DropDownPagine" id="ddpagine" class="form-control">
                                                <option value="">Selezionare la Pagina Facebook della squadra</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2 visible-md visible-lg visible-lg"></div>
                                <div class="col-md-8 col-xs-12">
                                    <div class="col-sm-12">
                                        <div class="form-group"><h1>
                                                <button class="btn btn-warning btn-lg" type="submit" name="btn-signup" class="form-control">Registrati</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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

               function getPagine(){
                   var url = "getPagine.php";
                   var e = document.getElementById("fb_user_pages");
                   //alert(e.value);
                   var requestObj = readyAJAX();
//                    var strIdAtc =select.value;

                   var params = "fb_user_pages="+e.value;
                   //alert(params);

                   requestObj.open("POST",url,true);
                   requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                   requestObj.send(params);
                   requestObj.onreadystatechange = function() {
                       if (requestObj.readyState == 4) {
                           if (requestObj.status == 200) {
                               document.getElementById("ddpagine").innerHTML = requestObj.responseText;
                               //alert(requestObj.responseText);
                           } else {
                               alert(requestObj.statusText);
                           }
                       }
                   }
               }

               //Carico la lista delle pagine alla load della pagina
               getPagine();
            </script>
    </body>
</html>












