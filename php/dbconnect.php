<?php

//global $connection;

$db_host_localhost = "localhost";

$db_host_aruba_1 = "62.149.150.175";

$db_host_hostinger_1 = "mysql.hostinger.it";

$host_name= "www.maremmacinghiale.it";

$host_localhost = "localhost";

//$db_user_aruba="Sql930635";

$db_user_hostinger="u483560912_stedu";

//$db_psw_aruba="ivbbu370jo";

$db_psw_hostinger="redhead220376";

//$db_name_aruba_1="Sql930635_1";

$db_name_hostinger="u483560912_1";

$db_user_localhost="root";

$db_psw_localhost="";

$db_name_localhost_1="u483560912_1";
//$db_name_localhost_1="u900672609_1";

if (!empty($_SERVER)) {

    $SERVER_NAME = $_SERVER['SERVER_NAME'];

    $REQUEST_TIME=$_SERVER['REQUEST_TIME_FLOAT'];

    if(!empty($SERVER_NAME))

        //var_dump($REQUEST_TIME);
        var_dump("NO_WWW_Server Name:".$SERVER_NAME);
    
//         var_dump("Host Name:".$host_localhost);

        
        if($host_localhost==$SERVER_NAME){

            $connection = mysqli_connect($db_host_localhost, $db_user_localhost, $db_psw_localhost ,$db_name_localhost_1);

        }else{
            
            $connection = mysqli_connect($db_host_hostinger_1, $db_user_hostinger, $db_psw_hostinger ,$db_name_hostinger);
            
        }

}





if(!$connection)

{

    echo "Error: Unable to connect to MySQL." . PHP_EOL;

    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;

    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;

    exit;

    die('oops connection problem ! --> '.mysqli_connect_error());

}else{

    echo "Connessione avvenuta con successo Indirizzo IP: " .mysqli_get_host_info($connection);

    echo "Protocollo: " .mysqli_get_proto_info($connection);

    echo "</br>Connessione avvenuta con successo al server MySql: " .mysqli_get_server_info($connection);

    echo "</br>Versione del server MySql: " .mysqli_get_server_version($connection);

    echo "</br>Versione del client version MySql: " .mysqli_get_client_version($connection);

    echo "</br>Versione del client info MySql: " .mysqli_get_client_info();

    echo "</br>Character set: " .mysqli_character_set_name($connection).PHP_EOL;



}





echo "Success: A proper connection to MySQL was made! The MaremmaCinghiale database is great." . PHP_EOL;

echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;

if($host_localhost==$SERVER_NAME){
    
    $db_select = mysqli_select_db($connection,$db_name_localhost_1);
}else{

    $db_select = mysqli_select_db($connection,$db_name_hostinger);
}


if(!$db_select)

{

     die('oops database selection problem ! --> '.mysqli_error());

}

// ?>
