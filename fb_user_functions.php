<?php

 $fb_user;
 $fb_user_name;
 $fb_user_id;
 $fb_user_email;
 $fb_user_first_name;
 $fb_user_last_name;
 $fb_user_picture;
 $fb_user_hometown;
 $fb_user_birthday;
 $fb_user_cover;
 $fb_user_cover_id;
 $fb_user_cover_source;


/**
 * @param $fb
 * @param $accessToken
 */
	
function getUserFacebook($fb,$accessToken) {
	$response = $fb->get('/me?fields=name,id,email,first_name,last_name,picture,birthday,location,hometown,cover', $accessToken );
	//var_dump($response);
	
	// Logged in!

	//$_SESSION['facebook_access_token'] = (string) $accessToken;


	$fb_user = $response->getGraphUser();




	//var_dump($fb_user);
	

	//var_dump($fb_user->getFieldNames());
	
	// Gets birthday value, assume Graph return was format MM/DD
	//$birthday = $fb_user->getBirthday();
	
	//var_dump($birthday);
	// class Facebook\GraphNodes\Birthday ...
	
	//var_dump($birthday->format()hasDate());
	// true
	
	//var_dump($birthday->hasYear());
	// false
	
	//var_dump($birthday->format('m/d'));
	// 03/21
	
	
	//var_dump($fb_user->getLink());
	
	//var_dump($fb_user->getFieldNames());

	$fb_user_name = $fb_user->getName();
		

	$fb_user_id= $fb_user->getId();
	
	//echo 'ID: ' . $fb_user_id.PHP_EOL;

	$fb_user_email = $fb_user->getEmail();
	
	//echo 'eMail: ' . $fb_user_email.PHP_EOL;

	$fb_user_first_name = $fb_user->getFirstName();
	
	//echo 'Nome: ' . $fb_user_first_name.PHP_EOL;

	$fb_user_last_name = $fb_user->getLastName();
	
	//echo 'Cognome: ' . $fb_user_last_name.PHP_EOL;

	$fb_user_picture = $fb_user->getPicture()->getUrl();
	
	//echo 'Picture Url: ' . $fb_user_picture;

	$fb_user_hometown = $fb_user->getHometown();
	
	//echo 'user_hometown: ' . $fb_user_hometown.PHP_EOL;

	$fb_user_birthday = $fb_user->getBirthday();
	
	//$fb_user_cover = new GraphNodeFactory($response);

	$fb_user_cover = $fb_user->getField('cover');
	

	$fb_user_cover_id =  $fb_user_cover["id"];
	

	$fb_user_cover_source = $fb_user_cover["source"];
	
	//var_dump($fb_user_cover_id);
	//echo 'birthday: ' . $fb_user_birthday.PHP_EOL;
	
	//POST con login avvenuta sulla Pagina Facebook Maremma Cinghiale , ogni volta che un utente si logga sul sito
	/*        $postResponse=$fb->post('/'.$page->getId().'/feed',array("message"=>$fb_user_name." Benvenuto su MaremmaCinghiale.it",
	 "link"=>"www.maremmacinghiale.it",
	 "picture"=>$fb_user_picture),$page->getAccessToken());
	echo '<h3>Res</h3>'.$postResponse->getBody();*/
	$_SESSION['fb_user'] = $fb_user;
	
	$_SESSION['fb_user_id'] = $fb_user_id;
	
	$_SESSION['fb_user_picture']= $fb_user_picture;
	
	$_SESSION['fb_user_cover_source']= $fb_user_cover_source;
	
	$_SESSION['fb_user_name']= $fb_user_name;
	
	$_SESSION['fb_user_email'] = $fb_user_email;
	
	$_SESSION['fb_user_birthday'] = $fb_user_birthday;
	
	$_SESSION['fb_user_first_name'] = $fb_user_first_name;
	
	$_SESSION['fb_user_last_name'] = $fb_user_last_name;
	
	//var_dump($_SESSION);

	return $fb_user;
}




/**
 * @param fb
 * @param accessToken
 */
	
function getUserFacebookPages($fb,$accessToken) {
	//var_dump($accessToken);
	$responseAccounts = $fb->get('/me/accounts', $accessToken );
	//var_dump($responseAccounts->getDecodedBody());
	//var_dump($responseAccounts->getBody());
	$responseAccounts->getGraphEdge();
	//$page = $responseAccounts->getGraphPage();

	$accountsAccessToken = $responseAccounts->getAccessToken();
	//echo $accountsAccessToken;


	$pagesEdge = $responseAccounts->getGraphEdge();
	// Only grab 5 pages
	$maxPages = 5;
	$pageCount = 0;
	global $fb_user_pages;
	$fb_user_pages=array();
	do {


		foreach ($pagesEdge as $page) {
			//var_dump($page->asArray());

			$user_page_id = $page['id'];

			//var_dump($user_page_id);
			$responsePage = $fb->get($user_page_id, $accountsAccessToken );
			//var_dump($responsePage);
			$graphNode = $responsePage->getGraphNode();
			//var_dump($graphNode['name']);
			array_push($fb_user_pages,['id'=>$graphNode['id'] ,'name'=>$graphNode['name']]);
			//$fb_user_pages[$pageCount]=[$graphNode['id'] =>$graphNode['name']];

			echo 'Page '.$pageCount.': "' .$fb_user_pages[$pageCount]['name'] .'"'. "\n\n";


			/*do {
			 echo '<p>Likes:</p>' . "\n\n";
			 //var_dump($likes->asArray());
			 $responsePage = $fb->get($page['id'], $fb->getApp()->getAccessToken() );
			 var_dump($responsePage);


			 } while ($fb->next($user_page_id));*/
			$pageCount++;
		}

	} while ($fb->next($pagesEdge));
	
	//echo $fb_user_pages;
	return $fb_user_pages;
}
?>