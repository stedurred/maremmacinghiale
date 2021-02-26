<?php
session_start();
if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
include_once 'php/dbconnect.php';

if(isset($_POST['btn-insert_squadra']))
{
	 $timezone = date_default_timezone_get();
	 echo "The current server timezone is: " . $timezone;
	 date_default_timezone_set($timezone);
	 $datenow = date('Y-m-d H:i:s');
	 
 echo $datenow;
 $sname = mysqli_real_escape_string($connection,$_POST['sname']);
 $snumero = mysqli_real_escape_string($connection,$_POST['snumero']);
 $regione= mysqli_real_escape_string($connection,$_POST['DropDownRegione']);
 $provincia= mysqli_real_escape_string($connection,$_POST['DropDownProvincia']);
 $atc= mysqli_real_escape_string($connection,$_POST['DropDownAtc']);
    $squota_annuale = mysqli_real_escape_string($connection,$_POST['squota_annuale']);
 
 $error_types = array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.');
 
 
 $uploaddir = './uploads/';
 $file      = $_FILES['img_profilo'];
 $name      = $file['name'];
 $tmp_name  = $file['tmp_name'];
 $error     = $file['error'];
 $uploadfile = $uploaddir.basename($name);



 if ($error == UPLOAD_ERR_OK){
      if (move_uploaded_file($tmp_name, $uploadfile)) {
      	 $msg = "Immagine della squadra '".$tmp_name."' aggiornata '".$name."'<br/>\n";
         echo "File valido, successfully uploaded.\n";
      } else {
        $errormsg .= "Could not move uploaded file '".$tmp_name."' to '".$name."'<br/>\n";
      }
 }else{
     $errormsg .= "Upload error on file '".$name."'<br/>\n".$error_types[$error];
 }

    if (isset($_SESSION['user_admin_squadra']) and $_SESSION['user_admin_squadra']=1){
        $sql = "UPDATE squadra SET quota_annuale=".$squota_annuale.", url_foto='".$uploadfile."' WHERE id=".$_SESSION['user_id_squadra'] ;
        //INTO squadra(nome,numero,url_foto,id_atc) VALUES('".$sname."','".$snumero."','".$uploadfile."','".$atc."')";

        $result=mysqli_query($connection,$sql);
    }

}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
        <title>Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana</title>
        <meta name="keywords" content="Maremma Cinghiale Caccia Toscana" />
        <meta name="description" content="Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana � un sito dove si posso trovare le varie squadre di caccia al cinghiale della maremma toscana" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		
		<script type="text/javascript" src="js/28_Days_Later_400.font.js"></script>
		<script type="text/javascript">
		  Cufon.replace("H1");
			Cufon.replace("H2");
			Cufon.replace("H3");
			Cufon.replace("#top_padding a");
			Cufon.replace("#menu a");
		</script>

    </head>
    <body onload="getRegioni()">
    	<div class="container-fluid">
    				<!-- Codice Accettazione Cookie-->
				<script type="text/javascript" src="js/cookiechoices.js"></script>
				<!--consenso all'uso dei cookie-->
				<script>
				document.addEventListener('DOMContentLoaded', function (event) {
				����cookieChoices.showCookieConsentBar('Questo sito fa uso di cookies. Continuando la navigazione se ne autorizza l\'uso.', 'OK', 'Pi� info', 'maremmacinghiale.it/privacy.html');
				});
				</script>
    	<div id="wrap">
    		<div id="content_top"></div>				
			<div id="content_bg_repeat">
				<div id="top_padding">
					<a href="#">MAREMMA CINGHIALE</a>
					<h3><a href="">Caccia al cinghiale nella Maremma Toscana</a></h3>
				</div>
				<div id="menu">
					<ul>
						<li><a href="http:\\www.maremmacinghiale.it" class="active">Home</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="contact_us.php">Contattaci</a></li>
					</ul>
				</div>
					
				<div id="content">

					<div class="col3">
					  
						 	<div class="row">
								<div class="col-md-4 col-xs-2">
									
								</div>
								<div class="col-md-4 col-xs-8">   
									<h2><span class="label label-danger">Inserimento SQUADRA di caccia </span></h2>
								</div>	
								<div class="col-md-4 col-xs-2">
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-2 col-xs-2">
									
								</div>
								<div class="col-md-8 col-xs-8">
									<p class="pad_bot3"><h2><span class="label label-default">Questo modulo permette il salvataggio di una SQUADRA di caccia al cinghiale</span></h2></p>
								
							
									<form method="post" enctype="multipart/form-data">
									
										<div class="row">
											
											<div class="col-md-12 col-xs-12">
											
												<div class="col-md-6 col-xs-6">
												
													<div class="col-md-6 col-xs-6">
														
													</div>
													<div class="col-md-6 col-xs-6">
														<div class="form-group">
															<h1><label class="control-label col-sm-6" for="sname" title="Nome Squadra">Nome Squadra</label></h1>
														</div>
													</div>
													
												</div>                            
											   <div class="col-md-6 col-xs-6">
												  <div class="form-group">
												  	<input type="text" class="form-control" name="sname" placeholder="Nome Squadra" value="<?php echo $_SESSION['user_nome_squadra']?>" required />
												  </div>
											   </div>
											   
											</div>
										</div>
									

										<div class="row">
											
											<div class="col-md-12 col-xs-12">
											
												<div class="col-md-6 col-xs-6">
												
													<div class="col-md-6 col-xs-6">
														
													</div>
													<div class="col-md-6 col-xs-6">													
														<div class="form-group">
															<h1><label class="control-label col-sm-6" for="snumero" title="Numero Squadra">Numero</label></h1>
														</div>
													</div>
												</div>                            
											   <div class="col-md-4 col-xs-6">
												  <div class="form-group">
												  	<input type="text" class="form-control" name="snumero" placeholder="Numero squadra" value="<?php echo $_SESSION['user_numero_squadra']?>" required />
												  </div>
											   </div>
											</div>
										</div>

                                        <div class="row">

                                            <div class="col-md-12 col-xs-12">

                                                <div class="col-md-6 col-xs-6">

                                                    <div class="col-md-6 col-xs-6">

                                                    </div>

                                                    <div class="col-md-6 col-xs-6">

                                                        <div class="form-group">

                                                            <h1><label class="control-label col-sm-6" for="squota_annuale" title="Quota annuale">Quota annuale</label></h1>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-1 col-xs-1">

                                                    <span class="input-group-addon">&euro;</span>

                                                </div>

                                                <div class="col-md-4 col-xs-6">

                                                    <div class="form-group">

                                                        <input type="text" class="form-control" name="squota_annuale" placeholder="Quota annuale" size="6"/>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>


                                        <div class="row">
											
											<div class="col-md-12 col-xs-12">
											
												<div class="col-md-6 col-xs-6">
													<div class="col-md-6 col-xs-6">
															
													</div>
													<div class="col-md-6 col-xs-6">	
														<div class="form-group">
															<h1><label class="control-label col-sm-6" for="img_profilo" title="Immagine Squadra">Immagine Squadra</label></h1>
														</div>
													</div>
												</div>                           
											   <div class="col-md-6 col-xs-6">
												  <div class="form-group">
												  
												  	<!-- MAX_FILE_SIZE deve precedere campo di input del nome file -->
												 	<input type="hidden" name="MAX_FILE_SIZE" value="0" />
												 	<input type="file" class="form-control" name="img_profilo" placeholder="Immagine Squadra" value="<?php echo $_SESSION['user_url_foto_squadra']?>"/>
												  </div>
											   </div>
											</div>
										</div>									

										
										<div class="row">
											
											<div class="col-md-12 col-xs-12">
						
												<div class="col-md-6 col-xs-6">
													<div class="col-md-6 col-xs-6">
															
													</div>
													<div class="col-md-6 col-xs-6">
														 <div class="form-group">
															<h1><label class="control-label col-sm-6" for="DropDownRegione" title="Regione">Regione</label></h1>
														 </div>
													</div>
												</div>
											   <div class="col-md-6 col-xs-6">
												  <div class="form-group">
												  
													 <select name = "DropDownRegione" id="ddregione" class="form-control" value="<?php echo $userRow['userRegioneId']?>" onchange="getProvince(this)" >
														
													 </select>
												  </div>
											   </div> 
											</div>
										 </div>
							  
										<div class="row">
											
											<div class="col-md-12 col-xs-12">
						
												<div class="col-md-6 col-xs-6">
													<div class="col-md-6 col-xs-6">
															
													</div>
													<div class="col-md-6 col-xs-6">
														<div class="form-group"><h1>
															<label class="control-label col-sm-6" for="DropDownProvincia" title="Provincia">Provincia</label></h1>
														</div>
													</div>
											   </div>
											   <div class="col-md-6 col-xs-6">
											   
												  <div class="form-group">
													 <select name = "DropDownProvincia" id="ddprovincia" class="form-control" value="<?php echo $userRow['userProvinciaId']?>"  onchange="getAtc(this)">
														<option value = "" selected = "selected">Selezionare una Provincia</option>
													</select>
												  </div>
											   </div>
											</div>
										</div>
							  
									  <div class="row">
										
										<div class="col-md-12 col-xs-12">
										
											<div class="col-md-6 col-xs-6">
												<div class="col-md-6 col-xs-6">
															
												</div>
												<div class="col-md-6 col-xs-6">
													<div class="form-group">
														<h1><label class="control-label col-sm-6" for="DropDownAtc" title="Ambito territoriale di caccia">A.T.C.</label></h1>
													</div>
												</div>
											</div>
										   <div class="col-md-6 col-xs-6">
										   
											  <div class="form-group">
												 <select name = "DropDownAtc" id="ddatc"  class="form-control"  required value="<?php echo $userRow['userAtcId']?>"  onchange="getSquadre(this)" >
													 <option value="">Selezionare un A.T.C.</option>
												   </select>
											  </div>
										   </div>
									   </div>
									 </div>

									<div class="row">
										
										<div class="col-md-12 col-xs-12">
											<div class="col-md-12 ">
												<div class="form-group"><h1>
													<button class="btn btn-warning btn-lg" type="submit" id="idbtn-insert_squadra" name="btn-insert_squadra" class="form-control">Salva</button>
												</div>
											</div>
										 </div>
									 </div>	
									 
								</form>
						 
						 <?php 
						  if(isset($_POST['btn-insert_squadra'])){
							 if(!isset($errormsg)){
								   print "<h2 class='pad_bot1 pad_top1'><span class='label label-danger'>Squadra inserita con successo</span></h2>";
							 }else print "<h2 class='pad_bot1 pad_top1'><span class='label label-danger'>Errore salvataggio squdara"."\n".$errormsg."</span></h2>";
						 }?>
						 
						</div>	
							<div class="col-md-2 col-xs-2">
							</div>
						</div>
						
					</div><!--col3-->
				</div><!--content-->
			</div><!--content_bg_repeat-->
			<div id="content_bottom"></div>	
		</div><!--wrap-->
	</div><!--container_fluid-->
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

            </script>
    </body>
</html>