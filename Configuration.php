<?php 
class Configuration
{
	// For a full list of configuration parameters refer in wiki page(https://github.com/paypal/sdk-core-php/wiki/Configuring-the-SDK)
	public static function getConfig()
	{
		$config = array(
				// values: 'sandbox' for testing
				//		   'live' for production
				"mode" => 'sandbox',
                'log.LogEnabled' => true,
                'log.FileName' => './PayPal.log',
                'log.LogLevel' => 'FINE'
	
				// These values are defaulted in SDK. If you want to override default values, uncomment it and add your value.
				// "http.ConnectionTimeOut" => "5000",
				// "http.Retry" => "2",
			
		);
		return $config;
	}
	
	// Creates a configuration array containing credentials and other required configuration parameters.
	public static function getAcctAndConfig()
	{

		/*
		 * Credenziale	Firma API
			Nome utente API
			pagamenti_api1.maremmacinghiale.it
			Nascondi
			Password API
			VRP4M5UPHF8QASZQ
			Nascondi
			Firma

			AFcWxV21C7fd0v3bYYYRCpSSRl31ANX.e.ef4obFEYsdBCXeNIswb7lj
			Nascondi
			Data richiesta	24 lug 2016 22:25:05 CEST
		 */
		$config = array(
				// Signature Credential stedurred Personale
				//"acct1.UserName" => "stedurred_api1.hotmail.com",
				//"acct1.Password" => "78CYAQKSHKWJQ7NR",
				//"acct1.Signature" => "Aeoq1jCFVfkqTkk2F586ilhWMVN2AK1hjSMCAKhEWwH60oMpHm-Nfcty",
				// Subject is optional and is required only in case of third party authorization
				//"acct1.Subject" => "",

                // Signature Credential pagamenti@maremmacinghiale Business Live
			    //"acct1.UserName" => "pagamenti_api1.maremmacinghiale.it",
			    //"acct1.Password" => "VRP4M5UPHF8QASZQ",
			    //"acct1.Signature" => "AFcWxV21C7fd0v3bYYYRCpSSRl31ANX.e.ef4obFEYsdBCXeNIswb7lj",

				
				// Signature Credential pagamenti-facilitator_api1.maremmacinghiale.it Business SandBox
			    "acct1.UserName" => "pagamenti-facilitator_api1.maremmacinghiale.it",
			    "acct1.Password" => "NZH4A5V8EEP7MVN2",
			    "acct1.Signature" => "AUxQrHhpoD.8xvOHMqZGc2eX5Ez.Ak2P-SSPnvTdlVVMkhhT3to2td.p",


				// Sample Certificate Credential
				 //"acct1.UserName" => "certuser_biz_api1.paypal.com",
				 //"acct1.Password" => "D6JNKKULHN3G5B8A",
				// Certificate path relative to config folder or absolute path in file system
				 //"acct1.CertPath" => "vendor/paypal/buttonmanager-sdk-php/samples/cert_key.pem",
				// Subject is optional and is required only in case of third party authorization
				//"acct1.Subject" => "",
		
				);
		
		return array_merge($config, self::getConfig());;
	}

}
