<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "caccia@maremmacinghiale.it";
 
    $email_subject = "Contact Us";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
        
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        //die();
 
    }

     
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    //$last_name = $_POST['last_name'];  required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
    
    $captcha = $_POST['captcha'];// required captcha

    $result = "";
    $error_captcha = "";
    $error_message = "";
    $error_message_first_name = "";
    $error_message_email_from = "";
    $error_message_comments= "";

 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    session_start();
    if($captcha != $_SESSION['digit']) {
      
      $error_captcha = "il numero digitato non è valido";
      $error_message .= $error_captcha;
      session_destroy();
    }
 
  if(!preg_match($email_exp,$email_from)) {
  
      $error_message_email_from ='La email digitata sembra non essere valida.<br />';
      $error_message .= $error_message_email_from;
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
  
      $error_message_first_name = 'Il nome inserito non è valido.<br />';
      $error_message .= $error_message_first_name;
 
  }
 
  /*if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }*/
 
  if(strlen($comments) < 2) {
  
      $error_message_comments ='Il messaggio inserito sembra non essere valido.<br />';
      $error_message .= $error_message_comments;
 
  }
 
  if(strlen($error_message) > 0) {
 
  //  died($error_message);
  }
 
    $email_message = "Messaggio da un utente di MaremmaCinghiale.it.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    //$email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
    
    $email_message .= "captcha: ".clean_string($captcha)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 

   if(empty($error_message)){
      @mail($email_to, $email_subject, $email_message, $headers);
      $result = 'Operazione avvenuta con successo.<br/>Grazie per averci contattato.';
   }
?>
 
 
 
<!-- include your own success html here -->
 
 
 

 
 
 
<?php
 
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
    <body>
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
					<div id="wrapper">
							<div id="slider-wrapper">        
								<div id="slider" class="nivoSlider">
									<img src="images/header1.jpg" alt="" />
									<img src="images/header2.jpg" alt=""/>
									<img src="images/header3.jpg" alt="" />
									<img src="images/header4.jpg" alt="" />
                           <img src="images/header5.jpg" alt="" />
								</div>        
							</div>
					
					</div>
					
					<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
						<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
						<script type="text/javascript">
						$(window).load(function() {
							$('#slider').nivoSlider();
						});
						</script>
					
					<div id="content">
			<div class="col3">
				<h2>Modulo per richiesta informazioni</h2>
        <form name="contactform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <table width="450px">
            <tr>
              <td valign="top">
                <h2><label for="first_name">Nome *</label></h2></td>
              <td valign="top"><input  type="text" name="first_name" maxlength="50" size="30" value="<?php echo $first_name;?>"><br>
               <span class="error"><?php echo $error_message_first_name;?></span></td></tr>
            <tr>
              <td valign="top"><h2><label for="email">Email *</label></h2></td>
              <td valign="top"><input  type="text" name="email" maxlength="80" size="30" value="<?php echo $email_from;?>"><br>
               <span class="error"><?php echo $error_message_email_from;?></span></td></tr>
            <tr>
              <td valign="top"><h2><label for="telephone">numero telefonico</label></h2></td>
              <td valign="top"><input  type="text" name="telephone" maxlength="30" size="30" value="<?php echo $telephone;?>"></td></tr>
            <tr>
               <td valign="top"><h2><label for="comments">messaggio *</label></h2></td>
               <td valign="top"><textarea  name="comments" maxlength="1000" cols="35" rows="6"></textarea><br>
               <span class="error"><?php echo $error_message_comments;?></span></td></tr>
            <tr>
               <td valign="top"><img src="/captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></td>
               <td valign="top"><input type="text" maxlength="5" name="captcha" size="30"><br>
                  <span class="error"><?php echo $error_captcha;?></span>
                 
                  <span>copia i numeri dell'immagine qui</span></p>
               </td>
              <td valign="top" style="text-align:right">
                <input type="submit" value="INVIA" class="button right">
              </td></tr>
          </table> 
          <h2><span class="error"><?php echo $result;?></span></h2>
        </form>
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
    </body>
</html>
