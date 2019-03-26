<?php


//session_start();
//Composer Autoload updated

require __DIR__ . '/vendor/autoload.php';
use Facebook\Facebook;

/*
 * Facebook Class 
 */


final class fbApp{
	
	public $fbApplication;
	public $strGraphVersion='2.9';
// 	const  $conGraphVesrion='2.9';//  $conGraphVesrion="V2.9";
	
	function printGraphVersion(){
	    echo $this->strGraphVersion;
	}


	function __construct() {


		file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
			."#####____FACEBOOK OBJECT REQUEST_INIZIO___#####".PHP_EOL, FILE_APPEND);

		try {

			include_once 'myCryptr.php';
            $app_id = 902548573194215;
            $app_secret = '452e3e249cb8698a04b10d2398b52096';

            $cryptApp_id='R0tHMzc5YkZGRG04SkZSMlgwZmhPdz09';
            $cryptApp_secret = 'b0cyZXpVNnpFR1V6ODFoUVhxK0RTcHBsd2VYamt1MjEvZzlmQS82TmhINTY3Q1htR1pueXZDUFdKZUtHWUJsUA';

            $decryptAapp_id=myCrypt($cryptApp_id,'d');
            $decryptApp_secret = myCrypt($cryptApp_secret,'d');
            //var_dump($decryptAapp_id);
            //var_dump($decryptApp_secret);
			this.$strGraphVersion = 'v2.9';
            $this->fbApplication =	new Facebook([

				'app_id' => $decryptAapp_id,

				'app_secret' => $decryptApp_secret,

				'default_graph_version' => $strGraphVersion,

			]);


			//$GLOBALS['fbApp'] = $this->fbApp;
			/*file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
				."#####____FACEBOOK OBJECT___#####"
				.$this->fbApplication.PHP_EOL, FILE_APPEND);*/
			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
				."#####____FACEBOOK OBJECT REQUEST_FINE___#####"
				.PHP_EOL, FILE_APPEND);
			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
			    ."#####____FACEBOOK OBJECT REQUEST_GraphVersion___#####".$strGraphVersion
			    .PHP_EOL, FILE_APPEND);

		} catch(\Facebook\Exceptions\FacebookResponseException $e) {

			// When Graph returns an error

			echo 'Graph returned an error: ' . $e->getMessage();

			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
				."#####____FACEBOOK OBJECT REQUEST_ERROR___#####".
				"Graph returned an error: " . $e->getMessage().PHP_EOL, FILE_APPEND);


			exit;

		} catch(\Facebook\Exceptions\FacebookSDKException $e) {

			// When validation fails or other local issues

			echo 'Facebook SDK returned an error: ' . $e->getMessage();

			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
				."#####____FACEBOOK OBJECT REQUEST_ERROR___#####".
				"Facebook SDK returned an error: " . $e->getMessage().PHP_EOL, FILE_APPEND);


			exit;

		} catch (Exception $e){

			echo 'Generic error: ' . $e->getMessage();

			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
				."#####____FACEBOOK OBJECT REQUEST_ERROR___#####".
				"Facebook SDK returned an error: " . $e->getMessage().PHP_EOL, FILE_APPEND);


			exit;
		}

	}

	/*
	 *
	 * Costruttore con parametri app_id e app_secret da passare crittografati
	 *
	 *
	 * function __construct($app_id,$app_secret) {
	
	
		file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
				."#####____FACEBOOK OBJECT REQUEST_INIZIO___#####".PHP_EOL, FILE_APPEND);

		try {
			
				$this->fbApplication =	new Facebook([
			
					'app_id' => '902548573194215',
			
					'app_secret' => '452e3e249cb8698a04b10d2398bz52096',
			
					'default_graph_version' => 'v2.8',
			
					]);
			
			
			//$GLOBALS['fbApp'] = $this->fbApp;
			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
					."#####____FACEBOOK OBJECT___#####"
					.print_r($this->fbApplication).PHP_EOL, FILE_APPEND);
			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
					."#####____FACEBOOK OBJECT REQUEST_FINE___#####"
					.PHP_EOL, FILE_APPEND);
			
		} catch(\Facebook\Exceptions\FacebookResponseException $e) {

		    // When Graph returns an error
		
		    echo 'Graph returned an error: ' . $e->getMessage();
		    
		    file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
		    		."#####____FACEBOOK OBJECT REQUEST_ERROR___#####".
		    		"Graph returned an error: " . $e->getMessage().PHP_EOL, FILE_APPEND);
		    
		
		    exit;

		} catch(\Facebook\Exceptions\FacebookSDKException $e) {

    		// When validation fails or other local issues

    		echo 'Facebook SDK returned an error: ' . $e->getMessage();
    		
    		file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
    				."#####____FACEBOOK OBJECT REQUEST_ERROR___#####".
    				"Facebook SDK returned an error: " . $e->getMessage().PHP_EOL, FILE_APPEND);
    		

    		exit;

		} catch (Exception $e){
			
			echo 'Generic error: ' . $e->getMessage();
			
			file_put_contents('logs/log_'.date("j.n.Y").'.txt', date("j-n-Y H:i:s")
					."#####____FACEBOOK OBJECT REQUEST_ERROR___#####".
					"Facebook SDK returned an error: " . $e->getMessage().PHP_EOL, FILE_APPEND);
			
			
			exit;
		}
	
	}*/
	
}
?>