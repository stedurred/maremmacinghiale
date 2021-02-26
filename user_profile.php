<?php
const STEDURRED = 'stedurred';
session_start();
if(!isset($_SESSION['user']))
{
 header("Location: index.php");
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

// var_dump($fb_user_pages);
// var_dump($fb_user_pagesEncoded);

/*Codice che modifica lo User nel DB*/
if(isset($_POST['btn-signup'])){
   
	$timezone = date_default_timezone_get ();
	echo "The current server timezone is: " . $timezone;
	date_default_timezone_set ( $timezone );
	$datenow = date ( 'Y-m-d H:i:s' );
	echo $datenow;
	
	$uname = mysqli_real_escape_string ( $connection, $_POST ['uname'] );
	$email = mysqli_real_escape_string ( $connection, $_POST ['email'] );
	$upass = md5 ( mysqli_real_escape_string ( $connection, $_POST ['pass'] ) );
	$regione = mysqli_real_escape_string ( $connection, $_POST ['DropDownRegione'] );
	$provincia = mysqli_real_escape_string ( $connection, $_POST ['DropDownProvincia'] );
	$atc = mysqli_real_escape_string ( $connection, $_POST ['DropDownAtc'] );
	$squadra = mysqli_real_escape_string ( $connection, $_POST ['DropDownSquadre'] );
	$pagina= mysqli_real_escape_string($connection,$_POST['DropDownPagine']);

	$admin_page = isset($pagina);

	echo $admin_page;
 

 	$error_types = array (
			0 => 'There is no error, the file uploaded with success',
			1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
			2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
			3 => 'The uploaded file was only partially uploaded',
			4 => 'No file was uploaded',
			6 => 'Missing a temporary folder',
			7 => 'Failed to write file to disk.',
			8 => 'A PHP extension stopped the file upload.' 
	);

    if(isset( $_FILES['img_profilo'])) {
        $uploaddir = './uploads/';
        $file = $_FILES['img_profilo'];
        $name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $error = $file['error'];
        $uploadfile = $uploaddir . basename($name);


        echo $tmp_name;

        if ($error == UPLOAD_ERR_OK) {
            echo "File is valid, and was successfully uploaded.\n";
            if (move_uploaded_file($tmp_name, $uploadfile)) {
                $msg .= "Immagine del profilo '" . $tmp_name . "' aggiornata '" . $name . "'<br/>\n";
            } else {
                $errormsg .= "Could not move uploaded file '" . $tmp_name . "' to '" . $name . "'<br/>\n";
            }
        } else $errormsg .= "Upload error on file '" . $name . "'<br/>\n" . $error_types[$error];

    }



    $sql = "UPDATE users SET username='".$uname."',password='".$upass."',trn_date='".$datenow."',url_foto='".$uploadfile."',id_atc='".$atc."',id_squadra='".$squadra."',admin_page='".$admin_page."' WHERE id='".$_SESSION['user_id']."'";
    echo $sql;
    if($_SESSION['user']=='stedurred'){
       $sql = "UPDATE users SET username='$uname',password='$upass',trn_date='$datenow',url_foto='$uploadfile',id_atc='$atc',id_squadra='$squadra',admin_page='.$admin_page.'  WHERE id='".$_SESSION['user_id']."'
       ON DUPLICATE KEY UPDATE id='".$_SESSION['user_id']."', username='$uname',password='$upass',trn_date='$datenow',url_foto='$uploadfile',id_atc='$atc',id_squadra='$squadra',admin_page='.$admin_page.'";
    }

    $result=mysqli_query($connection,$sql);
//In caso di cambio immagine del profilo sovrascivrere la variabile di SESSIONE

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
}
/*
SELECT users.id as userId, users.email as userEmail, squadra.id as userSquadraId, atc.id as userAtcId, province.id as userProvinciaId, territorio.id as userTerritorioId, regioni.id as userRegioneId FROM users
JOIN squadra ON squadra.id=users.id_squadra
JOIN atc ON atc.id=users.id_atc
JOIN territorio ON territorio.id=atc.id_territorio
JOIN province ON province.id=territorio.id_provincia
JOIN regioni ON regioni.id=province.id_regione
WHERE users.id = $_SESSION['user']


*/
echo "\n\r_SESSION['user_id']:".($_SESSION['user_id']);
echo "\n\r_fb_user_id:".$fb_user_id;
$sql="SELECT users.*, squadra.id as userSquadraId, atc.id as userAtcId, province.id as userProvinciaId, territorio.id as userTerritorioId, regioni.id as userRegioneId FROM users
	JOIN squadra ON squadra.id=users.id_squadra
	JOIN atc ON atc.id=users.id_atc
	JOIN territorio ON territorio.id=atc.id_territorio
	JOIN province ON province.id=territorio.id_provincia
	JOIN regioni ON regioni.id=province.id_regione
	WHERE users.id ='".$_SESSION['user_id']."' OR users.fb_user_id='".$fb_user_id."'";
echo $sql;
$result = mysqli_query($connection,$sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($connection));
    exit();
}
$userRow=mysqli_fetch_array($result);

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
		<!-- Codice Accettazione Cookie -->
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

				<nav class="navbar navbar-inverse">
				   <div class="container-fluid">
					 <div class="navbar-header">
					   <a class="navbar-brand" href="http:\\www.maremmacinghiale.it">MaremmaCinghiale.it</a>
					 </div>
					 <ul class="nav navbar-nav">
							<li><a href="http:\\www.maremmacinghiale.it" class="active">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="contact_us.php">Contattaci</a></li>
					 </ul>
				   </div>
				</nav> 
            
				<div id="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-2 col-xs-2">
							</div>
							<div class="col-md-6 col-xs-6">
								<h2 class="pad_bot1"><span class="label label-danger">Modifica Profilo</span></h2></div>
							<div class="col-md-4 col-xs-6">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6 ">	
								<p class="pad_bot1 color1 pad_top1"><span class="label label-default">Per registrarsi al sito maremmacinghiale.it basta riempire i campi sottostanti</span></p>
							</div>
							<div class="col-md-6 ">
								<p class="pad_bot3"><span class="label label-danger">Questo servizio permette a tutti i cacciatori delle varie squadre di caccia al cinghiale di registrarsi</span></p></div>
							</div>
						</div>		
						
						<div class="row">
							<div class="col-md-12">
								<form role="form-horizontal" method="post" enctype="multipart/form-data">
									<input type="hidden" class="form-control" name="user_id" value="<?php echo $userRow['id'] ?>"/>     
									
									<div class="row">

										<div class="col-md-10 col-xs-12">
										
											<div class="col-md-6 col-xs-6">
												<div class="form-group">
													<h1><label class="control-label col-md-6" for="uname" title="User Name">User Name</label></h1>
												</div>
											</div>                            
										   <div class="col-md-6 col-xs-6">
											  <div class="form-group">
												<input type="text" class="form-control" name="uname" placeholder="User Name" disabled="disabled" value="<?php echo $userRow['username'] ?>" required />
											  </div>
										   </div>
										</div>
									</div>
			
									<div class="row">

										<div class="col-md-10 col-xs-12">
											
											<div class="col-md-6">
												<div class="form-group">
													<h1><label class="control-label col-sm-6" for="email" title="Email">Email</label></h1>
											   </div>
										   </div>
										   <div class="col-md-6">
											   <div class="form-group">
													<input type="email" class="form-control" name="email" placeholder="Email" required value="<?php echo $userRow['email']?>"/>
											   </div>
										   </div>
										</div>
									</div>
							  
									<div class="row">

										<div class="col-md-10 col-xs-12">
										
											<div class="col-md-6">           
												<div class="form-group">
													<h1><label class="control-label col-sm-6" for="pass" title="Password">Password</label></h1>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="password" class="form-control" name="pass" placeholder="Password" required />
												</div>
										   </div>
										</div>
									</div>
			
				  
									<div class="row">

										<div class="col-md-12 col-xs-12">
											
											<div class="col-md-6">
												<div class="form-group">
													<h1>
													<label class="control-label col-sm-6" for="img_profilo" title="Immagine del profilo">Immagine del profilo</label></h1>
												</div>
											</div>
											<div class="col-md-4">
												<?php echo '<img src="'.$userRow['url_foto'].'" style="max-width:260px; >'?>
											</div>
											<div class="col-md-2">
											   <div class="form-group">
											   		<!-- MAX_FILE_SIZE deve precedere campo di input del nome file -->
													<input type="hidden" name="MAX_FILE_SIZE" value="0" />
													<input type="file" class="form-control" name="img_profilo" placeholder="Immagine del profilo" />
											   </div>
											</div>
										</div>
									</div>
							  
									<div class="row">

										<div class="col-md-10 col-xs-12">
					
											<div class="col-md-6">
												 <div class="form-group"><h1>
													<label class="control-label col-sm-6" for="DropDownRegione" title="Regione">Regione</label></h1>
												 </div>
											</div>
										   <div class="col-md-6">
											  <div class="form-group">
											  
												 <select name = "DropDownRegione" id="ddregione" class="form-control" value="<?php echo $userRow['userRegioneId']?>"onblur="getProvince(this)"  onchange="getProvince(this)" >
													
												 </select>
											  </div>
										   </div> 
										</div>
									 </div>
							  
									<div class="row">

										<div class="col-md-10 col-xs-12">
					
											<div class="col-md-6">
												 <div class="form-group"><h1>
													<label class="control-label col-sm-6" for="DropDownProvincia" title="Provincia">Provincia</label></h1>
												 </div>
										   </div>
										   <div class="col-md-6">
										   
											  <div class="form-group">
												 <select name = "DropDownProvincia" id="ddprovincia" class="form-control" value="<?php echo $userRow['userProvinciaId']?>" onblur="getAtc(this)" onchange="getAtc(this)">
													
												</select>
											  </div>
										   </div>
										</div>
									</div>
							  
									  <div class="row">

										<div class="col-md-10 col-xs-12">
										
											<div class="col-md-6">
												<div class="form-group"><h1>
												  <label class="control-label col-sm-6" for="DropDownAtc" title="Ambito territoriale di caccia">A.T.C.</label></h1>
												</div>
											</div>
										   <div class="col-md-6">
										   
											  <div class="form-group">
												 <select name = "DropDownAtc" id="ddatc"  class="form-control"  required value="<?php echo $userRow['userAtcId']?>" onblur="getSquadre(this)"  onchange="getSquadre(this)" >
													 <option value="">Selezionare un A.T.C.</option>
												   </select>
											  </div>
										   </div>
									   </div>
									 </div>
							  
								<div class="row">

									<div class="col-md-10 col-xs-12">
				
										<div class="col-md-6">
											<div class="form-group"><h1>
												<label class="control-label col-md-6" for="DropDownSquadre" title="Squadra cinghiale">Squadra cinghiale</label></h1>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<select name = "DropDownSquadre" id="ddsquadre" class="form-control" value="<?php echo $userRow['userSquadraId']?>" ><!-- onchange="getPagine(this)" -->
												</select>
											</div>
										</div>
									</div>
								</div>


                                <div class="row">

									<div class="col-md-10 col-xs-12">
				
										<div class="col-md-6">
											<div class="form-group"><h1>
                                                    <label class="control-label col-sm-6" for="DropDownPagine" title="Pagina Facebook Squadra cinghiale">Pagina della Squadra</label></h1>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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

									<div class="col-md-10 col-xs-12">
										<div class="col-md-10">
											<div class="form-group"><h1>
												 <button class="btn btn-warning btn-lg" type="submit" id="idbtn-signup" name="btn-signup" class="form-control">Modifica</button>
											</div>
										</div>
									 </div>
								 </div>
								 
							</form> 
						</div>
					</div>	 
					</div><!--ContainerFluid-->
					<?php 
						if(isset($_POST['btn-signup'])){
						 if(!isset($errormsg)){
							print "<h2 class='pad_bot1 pad_top1'><span class='label label-default'>Modifica avvenuta con successo</span></h2>"."\n".$msg;
						 }else print "<h2 class='pad_bot1 pad_top1'><span class='label label-danger'>Errore modifca</span></h2>"."\n".$errormsg;
						}?>
				</div><!--content-->
			<div id="content_bottom"></div>	
		</div><!--content_bg_repeat--> 
	</div><!--wrap--> 
	
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
                  var strIdRegione = "<?php echo $userRow['userRegioneId']?>";
                  //alert(strIdRegione);
                  var params = "id_regione="+encodeURIComponent(strIdRegione); 
                  requestObj.open("POST",url,true); 
                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                  requestObj.send(params); 
                  requestObj.onreadystatechange = function() {
                     if (requestObj.readyState == 4) {
                        if (requestObj.status == 200) {
                              document.getElementById("ddregione").innerHTML = requestObj.responseText;
                              document.getElementById("ddregione").focus();
                              //alert(requestObj.responseText);
                        } else {
                           alert(requestObj.statusText);
                        }
                     }
                  }
               }

               function getProvince(select){
                  var url = "getProvince.php";
                  var strIdProvincia = "<?php echo $userRow['userProvinciaId']?>";
                  var e = document.getElementById("ddregione");
                  var requestObj = readyAJAX(); 
                  var strIdRegione =select.value;
                  //alert('userProvincia: 'IdstrIdRegione);
                  var params = "id_regione="+encodeURIComponent(strIdRegione)+"&id_provincia="+encodeURIComponent(strIdProvincia); 
                  requestObj.open("POST",url,true); 
                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                  requestObj.send(params); 
                  requestObj.onreadystatechange = function() {
                     if (requestObj.readyState == 4) {
                        if (requestObj.status == 200) {
                              document.getElementById("ddprovincia").innerHTML = requestObj.responseText;
                              document.getElementById("ddprovincia").focus();
                              //alert(requestObj.responseText);
                        } else {
                           alert(requestObj.statusText);
                        }
                     }
                  }
               }
               
               function getAtc(select){
                  var url = "getAtc.php"; 
                  var strIdAtc = "<?php echo $userRow['userAtcId']?>";
                  var e = document.getElementById("ddprovincia");
                  var requestObj = readyAJAX(); 
                  var strIdProvincia =select.value;
                  //alert('userProvincia: 'IdstrIdRegione);
                  var params = "id_provincia="+encodeURIComponent(strIdProvincia)+"&id_atc="+encodeURIComponent(strIdAtc); 
                 
                  requestObj.open("POST",url,true); 
                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                  requestObj.send(params); 
                  requestObj.onreadystatechange = function() {
                     if (requestObj.readyState == 4) {
                        if (requestObj.status == 200) {
                              document.getElementById("ddatc").innerHTML = requestObj.responseText;
                              document.getElementById("ddatc").focus();
                              //alert(requestObj.responseText);
                        } else {
                           alert(requestObj.statusText);
                        }
                     }
                  }
               }
               
               function getSquadre(select){
                  var url = "getSquadre.php"; 
                  var strIdSquadra = "<?php echo $userRow['userSquadraId']?>";
                  
                  var e = document.getElementById("ddatc");
                  var requestObj = readyAJAX(); 
                  var strIdAtc =select.value;
                  
                  var params = "id_atc="+encodeURIComponent(strIdAtc)+"&id_squadra="+encodeURIComponent(strIdSquadra); 
                 
                  requestObj.open("POST",url,true); 
                  requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                  requestObj.send(params); 
                  requestObj.onreadystatechange = function() {
                     if (requestObj.readyState == 4) {
                        if (requestObj.status == 200) {
                              document.getElementById("ddsquadre").innerHTML = requestObj.responseText;
                              document.getElementById("idbtn-signup").focus();
                              
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
//                 var strIdAtc =select.value;

                var params = "fb_user_pages="+e.value;
                //alert(params);

                requestObj.open("POST",url,true);
                requestObj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                requestObj.send(params);
                requestObj.onreadystatechange = function() {
                    if (requestObj.readyState == 4) {
                        if (requestObj.status == 200) {
                            document.getElementById("ddpagine").innerHTML = requestObj.responseText;
                            alert(requestObj.responseText);
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












