<?php
session_start();

$businessMailSandBox = "pagamenti-facilitator@maremmacinghiale.it";
$businessMailLive = "pagamenti@maremmacinghiale.it";


$idEvento   =   utf8_encode ($_GET['idEvento']);
$titolo 	= 	utf8_encode ($_GET['titolo']);
$data 		= 	utf8_encode ($_GET['data']);
$ora 		= 	utf8_encode ($_GET['ora']);
$importo	=	utf8_encode ($_GET['importo']);
$regione	=	utf8_encode ($_GET['regione']);
$provincia	=	utf8_encode ($_GET['provincia']);
$atc		=	utf8_encode ($_GET['atc']);
$squadra	=	utf8_encode ($_GET['squadra']);
$descrizione =	utf8_encode ($_GET['descrizione']);
$fotoEvento	= 	utf8_encode ($_GET['fotoEvento']);
if(isset($_GET['inserisci']))
{
    
    /*echo "Location: inserisci_prenotazione.php?"." amt=10.00".
 		"&itemName=BottonePayPalPrenotazione".
 		"&returnURL=www.maremmacinghiale.it".
 		"&businessMail=pagamenti@maremmacinghiale.it".
 		"&buttonType=PAYMENT".
 		"&buttonCode=CLEARTEXT";*/
 header("Location: inserisci_prenotazione.php?".
 		"amt=$importo".
 		"&itemName=PrenotazioneEvento:$titolo".
        //"&itemNumber=$idEvento".
 		"&returnURL=www.maremmacinghiale.it/index.php".
        "&cancel_return=www.maremmacinghiale.it/calendario_eventi.php".
 		"&businessMail=$businessMailSandBox".
 		"&buttonType=BUYNOW".
 		"&buttonCode=CLEARTEXT".
        "&idEvento=$idEvento".
 		"&titolo=$titolo".
 		"&data=$data".
 		"&ora=$ora".
 		"&regione=$regione".
 		"&provincia=$provincia".
 		"&atc=$atc".
 		"&squadra=$squadra".
 		"&descrizione=$descrizione".
 		"&fotoEvento=$fotoEvento");
}
if(isset($_GET['visualizza']))
{
    header("Location: calendario_prenotazioni.php");
}

?>