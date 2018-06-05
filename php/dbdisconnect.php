<?php

$db_host_localhost = "localhost";
$db_host_aruba_1 = "62.149.150.175";
$host_name= "www.maremmacinghiale.it";
$host_localhost = "maremmacinghiale.localhost";
$db_user_aruba="Sql930635";
$db_psw_aruba="ivbbu370jo";
$db_name_aruba_1="Sql930635_1";
$db_user_localhost="root";
$db_psw_localhost="";
$db_name_localhost_1="Sql930635_1";
if (!empty($_SERVER)) {
    $SERVER_NAME = $_SERVER['SERVER_NAME'];
    $REQUEST_TIME=$_SERVER['REQUEST_TIME_FLOAT'];
    if(!empty($SERVER_NAME))
        //var_dump($REQUEST_TIME);
        if($host_name==$SERVER_NAME){
            $connection = mysqli_connect($db_host_aruba_1, $db_user_aruba, $db_psw_aruba ,$db_name_aruba_1);
        }elseif($host_localhost==$SERVER_NAME){
            $connection = mysqli_connect($db_host_localhost, $db_user_localhost, $db_psw_localhost ,$db_name_localhost_1);
        }
}

echo mysqli_get_server_info($connection);
mysqli_close($connection);
if(!$connection)
{
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    die('oops connection problem ! --> '.mysqli_connect_error());
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($connection) . PHP_EOL;
/*$db_select = mysqli_select_db($connection,$db_name_aruba_1);

if(!$db_select)
{
     die('oops database selection problem ! --> '.mysql_error());
}*/
?>