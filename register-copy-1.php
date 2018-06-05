<?php
session_start();
if(isset($_SESSION['user'])&& $_SESSION['user']!=="stedurred")
{
 header("Location: home.php");
}
include_once 'php/dbconnect.php';
$id_regione = $_GET['id_regione'];
echo $id_regione;
/*Codice che inserisce lo User nel DB*/
if(isset($_POST['btn-signup'])){
   
 $timezone = date_default_timezone_get();
 echo "The current server timezone is: " . $timezone;
 date_default_timezone_set($timezone);
 $datenow = date('Y-m-d H:i:s');
 echo $datenow;

 $uname = mysqli_real_escape_string($connection,$_POST['uname']);
 $email = mysqli_real_escape_string($connection,$_POST['email']);
 $upass = md5(mysqli_real_escape_string($connection,$_POST['pass']));
 $regione= mysqli_real_escape_string($connection,$_POST['DropDownRegione']);
 $provincia= mysqli_real_escape_string($connection,$_POST['DropDownProvincia']);
 $atc= mysqli_real_escape_string($connection,$_POST['DropDownAtc']);
 $squadra= mysqli_real_escape_string($connection,$_POST['DropDownSquadre']);
   
 

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



if ($file == null){
 if ($error == UPLOAD_ERR_OK){
 echo "File is valid, and was successfully uploaded.\n";
      if (move_uploaded_file($tmp_name, $uploadfile)) {
          $msg .= "Immagine del profilo '".$tmp_name."' aggiornata '".$name."'<br/>\n";
      } else {
        $errormsg .= "Could not move uploaded file '".$tmp_name."' to '".$name."'<br/>\n";
      }
 }else $errormsg .= "Upload error on file '".$name."'<br/>\n".$error_types[$error];
}


$sql = "INSERT INTO users(username,email,password,trn_date,url_foto,id_atc,id_squadra) VALUES('$uname','$email','$upass','$datenow','$uploadfile','$atc','$squadra')";   
if($_SESSION['user']=='stedurred'){
   $sql = "INSERT INTO users(username,email,password,trn_date,url_foto,id_atc,id_squadra) VALUES('$uname','$email','$upass','$datenow','$uploadfile',$atc,'$squadra') 
   ON DUPLICATE KEY UPDATE username='$uname',password='$upass',trn_date='$datenow',url_foto='$uploadfile',id_atc='$atc',id_squadra='$squadra'";
}
$result=mysqli_query($connection,$sql);

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
				����cookieChoices.showCookieConsentBar('Questo sito fa uso di cookies. Continuando la navigazione se ne autorizza l\'uso.', 'OK', 'Pi� info', 'http://www.maremmacinghiale.it/privacy.html');
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
				<div id="top_padding_login">
                     <form method="post">
                       <table align="right" width="30%" border="0">
                       <tr>
                         <td><input type="text" name="email" placeholder="Username o Email" required /></td></tr>
                       <tr>
                         <td><input type="password" name="pass" placeholder="Password" required /></td></tr>
                       <tr>
                         <td><button type="submit" name="btn-login">Entra</button></td></tr>
                       </table>
                     </form>
                  </div>

      			<div class="col3">
                  <center>
                     <div id="sign_up-form">
                        <form role="form" method="post" enctype="multipart/form-data" >
                        
                        <h2 class="pad_bot1">Registrati a MaremmaCinghiale, GRATIS!</h2>
                        <p class="pad_bot1 color1 pad_top1">Per registrarsi al sito maremmacinghiale.it basta riempire i campi sottostanti</p>
                        <p class="pad_bot3">Questo servizio permette a tutti i cacciatori delle varie squadre di caccia al cinghiale di registrarsi</p>
         				
                           <table width="60%" border="0">
                              <tr>
                                 <td><h1><label for="uname" title="User Name">User Name</label></h1></td>
                                 <td><div class="form-group"><input type="text" class="form-control" name="uname" placeholder="User Name" required /></div></td>
                              </tr>
                              <tr>
                                 <td><h1><label for="email" title="Email">Email</label></h1></td>
                                 <td><div class="form-group"><input type="email" class="form-control" name="email" placeholder="Email" required /></div></td>
                              </tr>
                              <tr>
                                 <td><h1><label for="pass" title="Password">Password</label></h1></td>
                                 <td><div class="form-group"><input type="password" class="form-control" name="pass" placeholder="Password" required /></div></td>
                              </tr>
                              <tr>
                                 <td><h1><label for="img_profilo" title="Immagine del profilo">Immagine del profilo</label></h1></td>
                                 <td><!-- MAX_FILE_SIZE deve precedere campo di input del nome file -->
                                       <input type="hidden" name="MAX_FILE_SIZE" value="0" />
                                     <div class="form-group"> <input type="file" class="form-control" name="img_profilo" placeholder="Immagine del profilo" />
                                    </div></td>
                              </tr>     
                              <tr>
                                 <td><h1><label for="DropDownRegione" title="Regione">Regione</label></h1></td>
                                 <td><div class="form-group">
										<select name = "DropDownRegione" id="ddregione"  class="form-control" onchange="getProvince(this)" onfocus="getProvince(this)">
										   <option value="">Selezionare una Regione</option>
										</select>
                                    </div>
                                    </td>
                                 </tr>   
                                 <tr>
                                    <td><h1><label for="DropDownProvincia" title="Provincia">Provincia</label></h1></td>
                                    <td><div class="form-group">
                                    	<select name = "DropDownProvincia" id="ddprovincia" class="form-control" onchange="getAtc(this)" onfocus="getAtc(this)">
                                          <option value="">Selezionare una Provincia</option>
                                       </select>
                                       </div>
                                     </td>
                                 </tr>
                                 <tr>
                                    <td><h1><label for="DropDownAtc" title="Ambito territoriale di caccia">A.T.C.</label></h1></td>
                                    <td><div class="form-group">
                                    	<select name = "DropDownAtc" id="ddatc"  class="form-control" onchange="getSquadre(this)" required>
                                          <option value="">Selezionare un A.T.C.</option>
                                       </select>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td><h1><label for="DropDownSquadre" title="Squadra cinghiale">Squadra cinghiale</label></h1></td>
                                    <td><div class="form-group"><select name = "DropDownSquadre" id="ddsquadre" class="form-control">
                                          <option value="">Selezionare una Squadra</option>
                                       </select></td>
                                 </tr>
                              <tr>
                                 <td colspan="2" align="middle"><div class="form-group"><button type="submit" name="btn-signup" class="form-control">Registrati</button></div></td>
                              </tr>
                           </table>
                           
                        </form>
                     </div>
                  
                  <?php 
                  if(isset($_POST['btn-signup'])){
                     if(!isset($errormsg)){
                        print "<h2 class='pad_bot1 pad_top1'>Registrazione avvenuta con successo</h2>"."\n".$msg;
                     }else print "<h2 class='pad_bot1 pad_top1'>Errore registrazione</h2>"."\n".$errormsg;
                  }?>
                  </center>
               </div>
      		</div>
				
				<div id="footer_top">
					<div id="footer_column1">
						<h2>Recent posts</h2>
						<div class="footer_text">
							<p><a href="#">Suspendisse rutrum interdum lacinia.</a>
							Suspendisse tempus aliquet elit sit amet pellentesque. Donec iaculis pulvinar mauris, ac vulputate justo pretium quis. </p>
							<br />
							<p><a href="#">Quisque luctus, mi ornare malesuada</a>
							Suspendisse tempus aliquet elit sit amet pellentesque. Donec iaculis pulvinar </p>
						</div>
					</div>
					<div id="footer_column2">
						<h2>Share with Others</h2>
						<div class="footer_text">
							<div class="foot_pad">
		            <div class="link1"><a href="mailto:cacciatori-subscribe@maremmacinghiale.it">Iscriviti alla lista dei cacciatori</a></div>
		            <div class="link2"><a href="http:\\www.facebook.com/maremmacinghiale">MaremmaCinghiale su Facebook</a></div>
		            <div class="link3"><a href="#">RSS Feed</a></div>
		            <div class="link4"><a href="#">Seguici su Twitter</a></div>
		          </div>
						</div>
					</div>
					<div id="footer_column3">
						<h2>Collegamenti importanti</h2>
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

            </script>
    </body>
</html>












