<?php
session_start();

if(isset($_GET['inserisci']))
{
    $id_regione = $_GET['id_regione'];
    $fb_user_id = $_GET['fb_user_id'];
    $fb_user_name = $_GET['fb_user_name'];
    $fb_user_first_name = $_GET['fb_user_first_name'];
    $fb_user_last_name = $_GET['fb_user_last_name'];
    $fb_user_email =$_GET['fb_user_email'];
    $fb_user_picture=$_GET['fb_user_picture'];
    $fb_user_picture_url=$_GET['fb_user_picture_url'];
    $fb_user_pages=json_decode($_GET['fb_user_pages']);
    $fb_user_pagesEncoded=urlencode(json_encode($fb_user_pages));
    //urlencode($fb_user_pagesEncoded);
    
    file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
    		."#####____FACEBOOK USER admin_user.php?inserisci___#####".
    		"Location: register.php?&fb_user_name=".$fb_user_name
    								."&fb_user_first_name=".$fb_user_first_name
    								."&fb_user_last_name=".$fb_user_last_name
    								."&fb_user_id=".$fb_user_id
    								."&fb_user_email=".$fb_user_email
    								."&fb_user_picture=".$fb_user_picture
    								."&fb_user_picture_url=".$fb_user_picture_url
    								."&fb_user_pages=".$_GET['fb_user_pages'].PHP_EOL, FILE_APPEND);
    
    print_r("\n\r admin_user.php?inserisci->_GET['fb_user_pages']:".$_GET['fb_user_pages']);
    print_r("\n\r admin_user.php?inserisci->JSON DECODE:".$fb_user_pages);
    print_r("\n\r admin_user.php?inserisci->JSON ENCODED:".$fb_user_pagesEncoded);
 //Registrazione Utente
// exit;
    header("Location: register.php?&fb_user_name=".$fb_user_name
    								."&fb_user_first_name=".$fb_user_first_name
    								."&fb_user_last_name=".$fb_user_last_nameSSS
    								."&fb_user_id=".$fb_user_id
    								."&fb_user_email=".$fb_user_email
    								."&fb_user_picture=".$fb_user_picture
    								."&fb_user_picture_url=".$fb_user_picture_url
    								."&fb_user_pages=".$fb_user_pagesEncoded);
}
if(isset($_GET['modifica']))
{
    //Modifica Profilo User
    $id_regione = $_GET['id_regione'];
    $fb_user_id = $_GET['fb_user_id'];
    $fb_user_name = $_GET['fb_user_name'];
    $fb_user_first_name = $_GET['fb_user_first_name'];
    $fb_user_last_name = $_GET['fb_user_last_name'];
    $fb_user_email =$_GET['fb_user_email'];
    $fb_user_picture=$_GET['fb_user_picture'];
    $fb_user_picture_url=$_GET['fb_user_picture_url'];
    $fb_user_pages=json_decode($_GET['fb_user_pages']);
    $fb_user_pagesEncoded=urlencode(json_encode($fb_user_pages));
    
    file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
    		."#####____FACEBOOK USER admin_user.php?modifica___#####".
    		"Location: user_profile.php?&fb_user_name=".$fb_user_name
    		."&fb_user_first_name=".$fb_user_first_name
    		."&fb_user_last_name=".$fb_user_last_name
    		."&fb_user_id=".$fb_user_id
    		."&fb_user_email=".$fb_user_email
    		."&fb_user_picture=".$fb_user_picture
    		."&fb_user_picture_url=".$fb_user_picture_url
    		."&fb_user_pages=".$fb_user_pagesEncoded.PHP_EOL, FILE_APPEND);
    
    print_r("\n\r admin_user.php?modifica->_GET['fb_user_pages']:".$_GET['fb_user_pages']);
    print_r("\n\r admin_user.php?modifica->JSON DECODE:".$fb_user_pages);
    print_r("\n\r admin_user.php?modifica->JSON ENCODED:".$fb_user_pagesEncoded);
    

// exit;
    header("Location: user_profile.php?&fb_user_name=".$fb_user_name
    		."&fb_user_first_name=".$fb_user_first_name
    		."&fb_user_last_name=".$fb_user_last_name
    		."&fb_user_id=".$fb_user_id
    		."&fb_user_email=".$fb_user_email
    		."&fb_user_picture=".$fb_user_picture
    		."&fb_user_picture_url=".$fb_user_picture_url
    		."&fb_user_pages=".$fb_user_pagesEncoded);
}

if(isset($_GET['admin']))
{
    //Administrator Modifica Profilo
    header("Location: user_admin.php");
}
?>