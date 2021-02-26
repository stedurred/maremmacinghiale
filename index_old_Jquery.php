<?php
session_start();
include_once 'php/dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
/*login query*/
if(isset($_POST['btn-login']))
{
 $email = mysqli_real_escape_string($connection,$_POST['email']);
 $upass = mysqli_real_escape_string($connection,$_POST['pass']);
 //$res=mysql_query("SELECT * FROM users WHERE email='$email'");
 $res=mysqli_query($connection,"SELECT * FROM users WHERE email='$email' or username='$email'");
 
 
 $row=mysqli_fetch_array($res);
 if($row['password']==md5($upass))
 {
  $_SESSION['user'] = $row['username'];
  $_SESSION['user_id'] = $row['id'];
  $_SESSION['user_idatc'] = $row['id_atc'];
  $_SESSION['user_id_squadra'] = $row['id_squadra'];
  $_SESSION['user_url_foto_profilo'] = $row['url_foto'];
  $_SESSION['user_capocaccia'] = $row['capocaccia'];
  $_SESSION['user_canaio'] = $row['canaio'];
                                                                  
  header("Location: home.php");
 }
 else
 {/*Gestire l'errore di login non avvenuta*/
  ?>
        <script>alert('Password errata!');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana</title>
        <meta name="keywords" content="Maremma Cinghiale Caccia Toscana" />
        <meta name="description" content="Maremma Cinghiale - Caccia al cinghiale nella Maremma Toscana è un sito dove si posso trovare le varie squadre di caccia al cinghiale della maremma toscana" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />

		<script type="text/javascript" src="js/cufon-yui.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
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
	   <link rel='Icon MaremmaCinghiale' href='favicon.ico' type='image/x-icon' />
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
                        <a href="index.php">MAREMMA CINGHIALE</a>
                        <h3><a href="">Caccia al cinghiale nella Maremma Toscana</a></h3>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.php">MaremmaCinghiale.it</a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li><a href="index.php" class="active">Home</a></li>
                                <li><a href="http://www.facebook.com/maremmacinghiale">Facebook</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="contact_us.php">Contattaci</a></li>
                            </ul>
                        </div>
                    </nav>

					<div id="wrapper">
                        <div id="slider-wrapper">
                            <div id="slider" class="nivoSlider">
                                <img src="images/header1.jpg" alt="" />
                                <img src="images/header2.jpg" alt=""/>
                                <img src="images/header3.jpg" alt="" />
                                <img src="images/header4.jpg" alt="" />
                                <img src="images/header5.jpg" alt="" />
                                <img src="images/header6.jpg" alt="" />
                                <img src="images/header7.jpg" alt=""/>
                                <img src="images/header8.jpg" alt="" />
                                <img src="images/header9.jpg" alt="" />
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

						<form method="post" class="navbar-form navbar-left" role="search">
                            <div class="form-group">
							    <input type="text" name="email" placeholder="Username o Email" required />
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" placeholder="Password" required />
                            </div>

                            <button type="submit" name="btn-login"  class="btn btn-default">Entra</button>

                            <a href="register.php">Registrati</a>

						</form>

		<div id="content">
			<div class="col1">
				<h2>Pellentesque facilisis</h2>
				<div class="wrapper pad_bot2">
					<div class="left marg_right1"><a href="#"><img src="images/img1.jpg" alt="" /></a></div>
					<p class="pad_bot1 pad_top1"><span class="color1">Tue, June 17, 2012</span></p>
					<p>Nam libero tempore csoluta nobis eieligendi opto cumque nihil impedit quo.</p>
				</div>
				<div class="wrapper pad_bot2">
					<div class="left marg_right1"><a href="#"><img src="images/img2.jpg" alt="" /></a></div>
					<p class="pad_bot1 pad_top1"><span class="color1">Sun, June 15, 2012</span></p>
					<p>Minus quod maxime placeat facere possimus voluptas assumenda est omnis.</p>
				</div>
				<div class="wrapper">
					<div class="left marg_right1"><a href="#"><img src="images/img3.jpg" alt="" /></a></div>
					<p class="pad_bot1 pad_top1"><span class="color1">Thu, June 23, 2012</span></p>
					<p>Omnis dolor repellendus aut temporibus autem quibus- dam et aut officiis debitis.</p>
				</div>
       		</div>
			<div class="col2">
				<h2 class="pad_bot1">Iscriviti a MaremmaCinghiale, GRATIS!</h2>
				<p class="pad_bot1 color1 pad_top1">Per iscriversi alla lista di cacciatori e simpatizzanti del sito maremmacinghiale.it basta cliccare sul bottone "ISCRIZIONE"</p>
				<p class="pad_bot3">Questo servizio unisce tutti i cacciatori delle varie squadre di caccia al cinghiale</p>
				<div class="wrapper"><a href="mailto:cacciatori-subscribe@maremmacinghiale.it" class="button right">Iscrizione gratuita</a></div>
				<h2 class="pad_bot1 pad_top1">Guida alla sottoscrizione</h2>
				<div class="wrapper">
					<div class="left marg_right1"><img src="images/boar.jpg" alt="" /></div>
					<p class="pad_top1 pad_bot1 color1">Una volta cliccato il bottone "ISCRIZIONE" si aprirà una messaggio di posta da inviare lasciando vuoti i campi</p>
					Il sito invierà un messaggio di sicurezza a cui rispondere per iscriversi alla lista. 
				</div>
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
