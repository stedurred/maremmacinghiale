<?php//Composer Autoload//require './vendor/autoload.php';//DB Connection startsession_start();include_once 'php/dbconnect.php';// Include Functionsinclude_once ("funzioniPayPal.php");//PayPal INITrequire 'Configuration.php';require_once('./PPBootStrap.php');use PayPal\PayPalAPI\BMCreateButtonReq;use PayPal\PayPalAPI\BMCreateButtonRequestType;use PayPal\PayPalAPI\InstallmentDetailsType;use PayPal\PayPalAPI\OptionDetailsType;use PayPal\Service\PayPalAPIInterfaceServiceService;use PayPal\Core\PPLoggingManager;$businessUrl_SandBox = "https://www.sandbox.paypal.com/cgi-bin/webscr";$businessUrl_Live = "https://www.paypal.com/cgi-bin/webscr";$businessUrl_LiveIPN = "https://ipnpb.paypal.com/cgi-bin/webscr";$businessUrl_SandBoxIPN ="https://ipnpb.sandbox.paypal.com/cgi-bin/webscr";//Write action to txt log$log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")." INIZIO PAGAMENTO".PHP_EOL;file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);//GET PARAMS FROM admin_prenotazione.php OR IPN PayPal $idEvento = $_GET['idEvento'];$titolo = utf8_encode( $_GET['titolo']);$dataEvento = utf8_encode($_GET['data']);$oraEvento = utf8_encode($_GET['ora']);$importo = utf8_encode($_GET['amt']);$regione=utf8_encode ($_GET['regione']);$provincia=utf8_encode ($_GET['provincia']);$atc=utf8_encode ($_GET['atc']);$squadra=utf8_encode ($_GET['squadra']);$descrizione =utf8_encode ($_GET['descrizione']);$fotoEvento=utf8_encode ($_GET['fotoEvento']);$itemName = utf8_encode($_GET['itemName']);$itemNumber=$_GET['itemNumber'];$returnURL = urlencode($_GET['returnURL']);$cancelReturnURL = $_GET['cancel_return'];$businessMail = $_GET['businessMail'];$PPlogger = new PPLoggingManager("");$PPlogger->info("INIZIO PAGAMENTO");//RICEVUTA PAGAMENTO PayPal  INIZIO// PayPal settings$return_url = 'maremmacinghiale.it/home.php';$cancel_url = 'maremmacinghiale.it/home.php';$notify_url = 'maremmacinghiale.it/inserisci_pagamento.php';//Write action to txt log$log .= "POST DATA: txn_id =".$_POST["txn_id"].PHP_EOL;$log .= "POST DATA: txn_type =".$_POST["txn_type"].PHP_EOL;$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$log.PHP_EOL;file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);// Check if paypal request or responseif (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){	//Write action to txt log	$log = "txn_id is NOt Set:".PHP_EOL;		$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$log.PHP_EOL;		file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);			$querystring = '';	// Firstly Append paypal account to querystring	$querystring .= "?business=".urlencode($businessMail)."&amp;amp;amp;";	// Append amount&amp;amp;amp; currency (�) to quersytring so it cannot be edited in html	//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.	$querystring .= "item_name=".urlencode($itemName)."&amp;amp;amp;";	$querystring .= "item_number=".urlencode($itemNumber)."&amp;amp;amp;";	$querystring .= "amount=".urlencode($importo)."&amp;amp;amp;";	//loop for posted values and append to querystring	foreach($_POST as $key => $value){		$value = urlencode(stripslashes($value));		$querystring .= "$key=$value&amp;amp;amp;";	}	// Append paypal return addresses	$querystring .= "return=".urlencode(stripslashes($return_url))."&amp;amp;amp;";	$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&amp;amp;amp;";	$querystring .= "notify_url=".urlencode($notify_url);	// Append querystring with custom field	//$querystring .= "&amp;amp;amp;custom=".USERID;	echo "querystring:".$querystring;	// Redirect to paypal IPN	header('location:'.$businessUrl_SandBoxIPN.$querystring);	exit();} else {	// Response from Paypal	// read the post from PayPal system and add 'cmd'// 	$req = 'cmd=_notify-validate';	// 	foreach ($_POST as $key => $value) {// 		$value = urlencode(stripslashes($value));// // 		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix// 		$req .= "&$key=$value";// 	}//     $log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$req.PHP_EOL;	// assign posted variables to local variables	$data = array();	$data['item_name']          = $_POST['item_name'];	$data['item_number']        = $_POST['item_number'];	$data['payment_status']     = $_POST['payment_status'];	$data['payment_amount']     = $_POST['mc_gross'];	$data['payment_currency']   = $_POST['mc_currency'];	$data['txn_id']             = $_POST['txn_id'];	$data['txn_type']			= $_POST["txn_type"];	$data['receiver_email']     = $_POST['receiver_email'];	$data['payer_email']        = $_POST['payer_email'];	$data['custom']             = $_POST['custom'];	//Write action to txt log	$log .= "cmd=_notify-validate:".PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['item_name'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['item_number'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['payment_status'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['payment_amount'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['payment_currency'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['txn_id'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['receiver_email'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['payer_email'].PHP_EOL;	$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$data['custom'].PHP_EOL;	                            // STEP 1: read POST data    // Reading POSTed data directly from $_POST causes serialization issues with array data in the POST.    // Instead, read raw POST data from the input stream.    $raw_post_data = file_get_contents('php://input');    $raw_post_array = explode('&', $raw_post_data);    $myPost = array();    foreach ($raw_post_array as $keyval) {    	$keyval = explode ('=', $keyval);    	if (count($keyval) == 2)    		$myPost[$keyval[0]] = urldecode($keyval[1]);    }    // read the IPN message sent from PayPal and prepend 'cmd=_notify-validate'    $req = 'cmd=_notify-validate';    if (function_exists('get_magic_quotes_gpc')) {    	$get_magic_quotes_exists = true;    }    foreach ($myPost as $key => $value) {    	if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {    		$value = urlencode(stripslashes($value));    	} else {    		$value = urlencode($value);    	}    	$req .= "&$key=$value";    }            // post back to PayPal system to validate    $header = "POST /cgi-bin/webscr HTTP/1.1\r\n";    $header .= "Host: ".$businessUrl_SandBoxIPN.":443\r\n";    $header .= "Content-Type: application/x-www-form-urlencoded\r\n";    $header .= "Content-Length: " . strlen($req) . "\r\n";    $header .= "Connection: close\r\n\r\n";                $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$header.PHP_EOL;    $url_parsed=parse_url($businessUrl_SandBoxIPN);    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['scheme'].PHP_EOL;    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['host'].PHP_EOL;    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['port'].PHP_EOL;    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['user'].PHP_EOL;    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['pass'].PHP_EOL;    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['path'].PHP_EOL;    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['query'].PHP_EOL;    $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a"). $url_parsed['fragment'].PHP_EOL;    file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);        $log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$req.PHP_EOL;    file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);//     //Codice CURL STEP 2: POST IPN data back to PayPal to validate//     $ch = curl_init($businessUrl_SandBox);//     curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);//     curl_setopt($ch, CURLOPT_POST, 1);//     curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//     curl_setopt($ch, CURLOPT_POSTFIELDS, $req);//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);//     curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));//     // In wamp-like environments that do not come bundled with root authority certificates,//     // please download 'cacert.pem' from "http://curl.haxx.se/docs/caextract.html" and set //     // the directory path of the certificate as shown below://     // curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');//     if( !($res = curl_exec($ch)) ) {//         // error_log("Got " . curl_error($ch) . " when processing IPN data");//         curl_close($ch);        //         $log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."Error response:".curl_error($ch).PHP_EOL;//         file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);//         exit;//     }//     curl_close($ch);//     // STEP 3: Inspect IPN validation result and act accordingly    //     if (strcmp ($res, "VERIFIED") == 0)//     {    	//     	$log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."VERIFIED:".$res.PHP_EOL;//     	file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);//     	// The IPN is verified, process it://     	// check whether the payment_status is Completed//     	// check that txn_id has not been previously processed//     	// check that receiver_email is your Primary PayPal email//     	// check that payment_amount/payment_currency are correct//     	// process the notification    //     	// assign posted variables to local variables//     	$item_name = $_POST['item_name'];//     	$item_number = $_POST['item_number'];//     	$payment_status = $_POST['payment_status'];//     	$payment_amount = $_POST['mc_gross'];//     	$payment_currency = $_POST['mc_currency'];//     	$txn_id = $_POST['txn_id'];//     	$receiver_email = $_POST['receiver_email'];//     	$payer_email = $_POST['payer_email'];    //     	// IPN message values depend upon the type of notification sent.//     	// To loop through the &_POST array and print the NV pairs to the screen://     	foreach($_POST as $key => $value)//     	{//     		echo $key." = ". $value."<br>";//     	}//     					// Used for debugging//     					mail('stedurred@gmail.com', 'PAYPAL POST - VERIFIED RESPONSE',  "VERIFIED");    	//     					//Write action to txt log//     					$log = "valid_txnid:".$data['txn_id'].PHP_EOL;//     					$log.= "valid_txnid".$data['txn_id'].PHP_EOL;//     					$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$log.PHP_EOL;//     					file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);    					//     					// Validate payment (Check unique txnid &amp;amp;amp; correct price)//     					$valid_txnid = check_txnid($data['txn_id'],$connection);//     					$valid_price = check_price($data['payment_amount'], $data['item_number']);    		    	//     					// PAYMENT VALIDATED &amp;amp;amp; VERIFIED!//     					if ($valid_txnid && $valid_price) {    	//     						$orderid = updatePagamenti($data,$connection);    	//     						if ($orderid) {//     							// Payment has been made &amp;amp;amp; successfully inserted into the Database    	//     							//TODO UPDATE DELLA TABELLA PRENOTAZIONE CON STATO "PAGATO" SOLO se ho un utente in sessione//     							//if (isset($_SESSION)) {//     								$id_user=$data['payer_email'];//     								$prenotazioneId = updatePrenotazione($data,$id_user,$connection);//     							//}    	//     						} else {//     							// Error inserting into DB//     							// E-mail admin or alert user//     							mail('stedurred@gmail.com', 'PAYPAL POST - INSERT INTO DB WENT WRONG', print_r($data, true));//     						}//     					} else {//     						// Payment made but data has been changed//     						// E-mail admin or alert user//     						mail('stedurred@gmail.com', 'PAYPAL POST - INVALID TRANSACTION OR PRICE', print_r($data, true));//     					}    //     }//     else if (strcmp ($res, "INVALID") == 0)//     {//     	// IPN invalid, log for manual investigation//     	$log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."INVALID:".$ch.PHP_EOL;//     	file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);    //     }                    //CODICE fsockopen	$fp = fsockopen('ssl://' . $url_parsed['host'], 443, $errno, $errstr, 30);	if (!$fp) {		// HTTP ERROR		//Write action to txt log		$log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."HTTP ERROR:".$errno.PHP_EOL;		$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."HTTP ERROR:".$errstr.PHP_EOL;		file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);	} else {		fputs($fp, $header . $req);				//Write action to txt log		$log  = $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."HTTPS".PHP_EOL;//         $log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$fp.PHP_EOL;		file_put_contents('logs/log_'.date("j.n.Y").'.txt', $log, FILE_APPEND);		while (!feof($fp)) {			$res = fgets ($fp, 1024);			//$res=stream_get_contents($fp, 1024);			file_put_contents('logs/log_'.date("j.n.Y").'.txt','WHILE'.print_r($res, true).PHP_EOL , FILE_APPEND);									if (strcmp(trim($res), "VERIFIED") == 0) {				//Write action to txt log				$log = "valid_txnid: ".$data['txn_id'].PHP_EOL;				$log .= "valid_txnid: ".$data['txn_id'].PHP_EOL;								$log .= "item_name: ".$data['item_name'].PHP_EOL;								$log .= "item_number: ".$data['item_number'].PHP_EOL;								$log .= "payment_status: ".$data['payment_status'].PHP_EOL;								$log .= "payment_amount: ".$data['payment_amount'].PHP_EOL;								$log .= "payment_currency: ".$data['payment_currency'].PHP_EOL;																$log .= "receiver_email: ".$data['receiver_email'].PHP_EOL;								$log .= "payer_email: ".$data['payer_email'].PHP_EOL;								$log .= "custom: ".$data['custom'].PHP_EOL;								$log .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$log.PHP_EOL;				file_put_contents('logs/log_'.date("j.n.Y").'.txt','WHILE'.$log.PHP_EOL , FILE_APPEND);								// Used for debugging				mail('stedurred@gmail.com', 'PAYPAL POST - VERIFIED RESPONSE',  "VERIFIED".$log.PHP_EOL);								// Validate payment (Check unique txnid &amp;amp;amp; correct price)				$valid_txnid = true;//check_txnid($data['txn_id'], $connection);				$valid_price = check_price($data['payment_amount'], $data['item_number'], $connection);								$known_payer = check_payer($data['payer_email']);				//$idPrenotazione = getPrenotazione($data['item_number'],$connection);				//$log .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."txnid valido:".$valid_txnid.PHP_EOL;				//$log .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."price valido:".$valid_price.PHP_EOL;				//file_put_contents('logs/log_'.date("j.n.Y").'.txt',$log.PHP_EOL , FILE_APPEND);								// PAYMENT VALIDATED &amp;amp;amp; VERIFIED!				if ($valid_txnid && $valid_price) {					$orderid = insertPagamenti($data,$connection);					file_put_contents('logs/log_'.date("j.n.Y").'.txt','----------updatePagamenti VALID PRICE'.$orderid.PHP_EOL , FILE_APPEND);						// Payment has been made &amp;amp;amp; successfully inserted into the Database												//TODO UPDATE DELLA TABELLA PRENOTAZIONE CON STATO "PAGATO" SOLO se ho un utente in sessione e la mail del pagamento deve essere uguale						//if (isset($_SESSION)) {												$prenotazioneId = updatePrenotazione($known_payer, $data['item_number'], $connection);										$log .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a")."-------prenotazioneVALID PRICE:".$prenotazioneId.PHP_EOL;																					file_put_contents('logs/log_'.date("j.n.Y").'.txt',$log.PHP_EOL , FILE_APPEND);						//}															} else {										$orderid = insertPagamenti($data, $connection);					file_put_contents('logs/log_'.date("j.n.Y").'.txt','----------insertPagamentiId'.$orderid.PHP_EOL , FILE_APPEND);															//$id_user=$data['payer_email'];					$prenotazioneId = updatePrenotazione($data,$id_user, $connection);										file_put_contents('logs/log_'.date("j.n.Y").'.txt',"-------prenotazioneId:".$prenotazioneId.PHP_EOL , FILE_APPEND);										// Payment made but data has been changed					// E-mail admin or alert user					mail('stedurred@gmail.com', 'PAYPAL POST - INVALID TRANSACTION OR PRICE', print_r($data, true));				}			} else if (strcmp (trim($res), "INVALID") == 0) {				$orderid = insertPagamenti($data, $connection);				file_put_contents('logs/log_'.date("j.n.Y").'.txt','----------insertPagamenti INVALID'.$orderid.PHP_EOL , FILE_APPEND);												//Write action to txt log				$log = "INVALID".PHP_EOL;				$log  .= $_SERVER['SERVER_NAME'].' - '.date("F j, Y, g:i a").$log.PHP_EOL;				// PAYMENT INVALID &amp;amp;amp; INVESTIGATE MANUALY!				// E-mail admin or alert user				// Used for debugging				mail("stedurred@gmail.com", "PAYPAL DEBUGGING", "Invalid Response data =	<pre>".print_r($log, true)."<pre>");			}		}		fclose ($fp);		file_put_contents('logs/log_'.date("j.n.Y").'.txt', "FINE".PHP_EOL, FILE_APPEND);	}}//RICEVUTA PAGAMENTO PayPal  FINE?>