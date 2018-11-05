<?php

use Facebook\GraphNodes\GraphNode;
global $fb_user;
final class fbUser {
	public $fb_user_name;
	public $fb_user_id;
	public $fb_user_email;
	public $fb_user_first_name;
	public $fb_user_last_name;
	public $fb_user_picture;
	public $fb_user_hometown;
	public $fb_user_birthday;
	public $fb_user_cover;
	public $fb_user_cover_id;
	public $fb_user_cover_source;
	public $fb_user_pages;
	public $fb_user_page;
	public $fb_user_link;
	public $fb_user_gender;
	public $fb_user_locale;
	
	
	function __construct($fb, $accessToken) {
		$this->getUserFacebook ( $fb, $accessToken );
		$this->getUserFacebookPageList ( $fb, $accessToken );
		
		
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER REQUEST_INIZIO___#####" . PHP_EOL, FILE_APPEND );
		
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER PAGES___#####" . json_encode ( $this->fb_user_pages ) . PHP_EOL, FILE_APPEND );
		file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER REQUEST_FINE___#####" . PHP_EOL, FILE_APPEND );
	}
	
	/**
	 *
	 * @param
	 *        	$fb
	 * @param
	 *        	$accessToken
	 */
	function getUserFacebook(Facebook\Facebook  $fb, $accessToken) {
		
		if(isset($accessToken)){
			
		
			if(isset($_SESSION['facebook_access_token'])){
				$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
			}else{
				// Put short-lived access token in session
				$_SESSION['facebook_access_token'] = (string) $accessToken;
		
				// OAuth 2.0 client handler helps to manage access tokens
				$oAuth2Client = $fb->getOAuth2Client();
		
				// Exchanges a short-lived access token for a long-lived one
				$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
				$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		
				// Set default access token to be used in script
				$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
			}
			
			
			
			$response = $fb->get ( '/me?fields=name,id,email,first_name,last_name,picture,birthday,location,hometown,cover,link,gender,locale', $accessToken );
			// var_dump($response);
			
			// Logged in!
			
			// $_SESSION['facebook_access_token'] = (string) $accessToken;
			
			
			// Getting user facebook profile info
			try {
				$profileRequest = $fb->get('/me?fields=name,id,first_name,last_name,email,link,gender,locale,cover,picture');
				$fbUserProfile = $profileRequest->getGraphNode()->asArray();
				
				// Insert or update user data to the database
				$fbUserData = array(
						'oauth_provider'=> 'facebook',
						'oauth_uid'     => $fbUserProfile['id'],
						'first_name'    => $fbUserProfile['first_name'],
						'last_name'     => $fbUserProfile['last_name'],
						'email'         => $fbUserProfile['email'],
						'gender'        => $fbUserProfile['gender'],
						'locale'        => $fbUserProfile['locale'],
						'cover'         => $fbUserProfile['cover']['source'],
						'picture'       => $fbUserProfile['picture']['url'],
						'link'          => $fbUserProfile['link']
				);
				
				// Put user data into session
				$_SESSION['userData'] = $userData;
				
				// Get logout url
				$logoutURL = $helper->getLogoutUrl($accessToken, $redirectURL.'logout.php');
				
			} catch(FacebookResponseException $e) {
				echo 'Graph returned an error: ' . $e->getMessage();
				session_destroy();
				// Redirect user back to app login page
				header("Location: ./");
				exit;
			} catch(FacebookSDKException $e) {
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;
			}
	
			$fb_user = $response->getGraphUser();
			
	
			
			file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER ___#####" . $fb_user . PHP_EOL, FILE_APPEND );
			
			// var_dump ( $this );
			
			// var_dump($fb_user->getFieldNames());
			
			// Gets birthday value, assume Graph return was format MM/DD
			// $birthday = $fb_user->getBirthday();
			
			// var_dump($birthday);
			// class Facebook\GraphNodes\Birthday ...
			
			// var_dump($birthday->format()hasDate());
			// true
			
			// var_dump($birthday->hasYear());
			// false
			
			// var_dump($birthday->format('m/d'));
			// 03/21
			
			// var_dump($fb_user->getLink());
			
			// var_dump($fb_user->getFieldNames());
			// var_dump($fb_user->getName());
	// 		$this->fb_
			$this->fb_user_name = $fb_user->getName ();
			// var_dump($this->fb_user_name);
			$_COOKIE ['fb_user_name'] = $fb_user->getName ();
			
			// var_dump($fb_user->getName());
			
			$this->fb_user_id = $fb_user->getId ();
			$_COOKIE ['fb_user_id'] = $fb_user->getId ();
			// echo 'ID: ' . $fb_user_id.PHP_EOL;
			
			$this->fb_user_email = $fb_user->getEmail ();
			$_COOKIE ['fb_user_email'] = $fb_user->getEmail ();
			// echo 'eMail: ' . $fb_user_email.PHP_EOL;
			
			$this->fb_user_first_name = $fb_user->getFirstName ();
			$_COOKIE ['fb_user_first_name'] = $fb_user->getFirstName ();
			// echo 'Nome: ' . $fb_user_first_name.PHP_EOL;
			
			$this->fb_user_last_name = $fb_user->getLastName ();
			$_COOKIE ['fb_user_last_name'] = $fb_user->getLastName ();
			// echo 'Cognome: ' . $fb_user_last_name.PHP_EOL;
			
			$this->fb_user_picture = $fb_user->getPicture ()->getUrl ();
			$_COOKIE ['fb_user_picture'] = $fb_user->getPicture ()->getUrl ();
			
			$img = file_get_contents ( 'https://graph.facebook.com/' . $this->fb_user_id . '/picture?type=large' );
			$file = dirname ( __file__ ) . '/images/' . $this->fb_user_id . '.jpg';
			file_put_contents ( $file, $img );
			file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER PROFILE PIC___#####" . $file . PHP_EOL, FILE_APPEND );
			
			
			// echo 'Picture Url: ' . $fb_user_picture;
			
			$this->fb_user_hometown = $fb_user->getHometown ();
			$_COOKIE ['b_user_hometown'] = $fb_user->getHometown ();
			// echo 'user_hometown: ' . $fb_user_hometown.PHP_EOL;
			
			$this->fb_user_birthday = $fb_user->getBirthday ();
			$_COOKIE ['fb_user_birthday'] = $fb_user->getBirthday ();
			// $fb_user_cover = new GraphNodeFactory($response);
			
			$this->fb_user_cover = $fb_user->getField ( 'cover' );
			$_COOKIE ['fb_user_cover'] = $fb_user->getField ( 'cover' );
			file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER COVER___#####" . $this->fb_user_cover . PHP_EOL, FILE_APPEND );
			
			$this->fb_user_cover_id = $this->fb_user_cover ["id"];
			$_COOKIE ['fb_user_cover_id'] = $this->fb_user_cover ["id"];
			
			$this->fb_user_cover_source = $this->fb_user_cover ["source"];
			$_COOKIE ['fb_user_cover_source'] = $this->fb_user_cover ["source"];
			
			$this->fb_user_link = $fb_user->getField ( 'link' );
			$_COOKIE ['fb_user_link'] =$fb_user->getField ( 'link' );
			
			$this->fb_user_locale = $fb_user->getField ( 'locale' );
			$_COOKIE ['fb_user_locale'] =$fb_user->getField ( 'locale' );
			
			$this->fb_user_gender = $fb_user->getField ( 'gender' );
			$_COOKIE ['fb_user_gender'] =$fb_user->getField ( 'gender' );
			
			// var_dump ( $this->fb_user_cover_source );
			// echo 'birthday: ' . $fb_user_birthday.PHP_EOL;
			
			// POST con login avvenuta sulla App Pagina Facebook Maremma Cinghiale , ogni volta che un utente si logga sul sito
			/*
			 * $postResponse=$fb->post('/'.$page->getId().'/feed',array("message"=>$fb_user_name." Benvenuto su MaremmaCinghiale.it",
			 * "link"=>"www.maremmacinghiale.it",
			 * "picture"=>$fb_user_picture),$page->getAccessToken());
			 * echo '<h3>Res</h3>'.$postResponse->getBody();
			 */
			
			file_put_contents ( 'logs/log_' . date ( "j.n.Y" ) . '.txt', date ( "j-n-Y H:i:s" ) . "#####____FACEBOOK USER INSERISCO IN SESSION[] I DATI UTENTE#####" . PHP_EOL, FILE_APPEND );
			
			$_SESSION ['fb_user'] = $fb_user;
			
			$_SESSION ['fb_user_id'] = $this->fb_user_id;
			
			$_SESSION ['fb_user_picture'] = $this->fb_user_picture;
			
			$_SESSION ['fb_user_cover_source'] = $this->fb_user_cover_source;
			
			$_SESSION ['fb_user_name'] = $this->fb_user_name;
			
			$_SESSION ['fb_user_email'] = $this->fb_user_email;
			
			$_SESSION ['fb_user_birthday'] = $this->fb_user_birthday;
			
			$_SESSION ['fb_user_first_name'] = $this->fb_user_first_name;
			
			$_SESSION ['fb_user_last_name'] = $this->fb_user_last_name;
			
			$_SESSION ['fb_user_link'] = $this->fb_user_link;
			
			$_SESSION ['fb_user_locale'] = $this->fb_user_locale;
			
			$_SESSION ['fb_user_gender'] = $this->fb_user_gender;
			
		}else{
			// Get login url
			$loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);
		
			// Render facebook login button
			$output = '<a href="'.htmlspecialchars($loginURL).'"><img src="images/fblogin-btn.png"></a>';
		}
		//var_dump($_SESSION);
		
		return $fb_user;
	}
	
	/**
	 *
	 * @param
	 *        	fb
	 * @param
	 *        	accessToken
	 */
	function getUserFacebookPageList($fb, $accessToken) {
		// var_dump($accessToken);
		$responseAccounts = $fb->get ( '/me/accounts', $accessToken );
		// var_dump($responseAccounts->getDecodedBody());
		// var_dump($responseAccounts->getBody());
		$responseAccounts->getGraphEdge ();
		// $page = $responseAccounts->getGraphPage();
		
		$accountsAccessToken = $responseAccounts->getAccessToken ();
		// echo $accountsAccessToken;
		
		$pagesEdge = $responseAccounts->getGraphEdge ();
		// Only grab 5 pages
		$maxPages = 5;
		$pageCount = 0;
		
		$this->fb_user_pages = array ();
		$this->fb_user_page = array ();
		do {
			
			foreach ( $pagesEdge as $page ) {
				// var_dump($page->asArray());
				
				$user_page_id = $page ['id'];
				
				// var_dump($user_page_id);
				$responsePage = $fb->get ( $user_page_id.'?fields=access_token,category,website,id,cover,page_token,picture', $accountsAccessToken );
				// var_dump($responsePage);
				$graphNode = $responsePage->getGraphNode ();
				// var_dump($graphNode['name']);
				$pageId = $graphNode ['id'];
				$pageNameEncoded = urlencode ( $graphNode ['name'] );
				array_push ( $this->fb_user_pages, [ 
					'id' => $pageId,
					'name' => $pageNameEncoded
				] );
				// $fb_user_pages[$pageCount]=[$graphNode['id'] =>$graphNode['name']];
				
/*				echo 'Page ' . $pageCount . ': "'
					.'id'. $this->fb_user_pages [$pageCount] ['id'] . '"' . "\n\n"
					.'name'. $this->fb_user_pages [$pageCount] ['name'] . '"' . "\n\n";*/
				
				array_push ( $this->fb_user_page, $this->getUserFacebookPage($fb, $pageId, $accountsAccessToken) );
				/*
				 * do {
				 * echo '<p>Likes:</p>' . "\n\n";
				 * //var_dump($likes->asArray());
				 * $responsePage = $fb->get($page['id'], $fb->getApp()->getAccessToken() );
				 * var_dump($responsePage);
				 *
				 *
				 * } while ($fb->next($user_page_id));
				 */
				$pageCount ++;
			}
		} while ( $fb->next ( $pagesEdge ) );
		
		// echo $fb_user_pages;
		return $this->fb_user_pages;
	}
	
	/**
	 *
	 * @param
	 *        	fb
	 * @param
	 *        	accessToken
	 */
	public function getUserFacebookPage($fb, $idPage, $accessToken) {
		// var_dump($accessToken);
		$response = $fb->get ( '/'.$idPage.'?fields=access_token,category,website,id,cover,page_token,picture', $accessToken );



		$accountsAccessToken = $response->getAccessToken ();
		// echo $accountsAccessToken;
		$graphNode = $response->getGraphNode ();
		return $graphNode;
		// var_dump($graphNode['name']);
		$pageId = $graphNode ['id'];
		$pageNameEncoded = urlencode ( $graphNode ['name'] );
		$pagesEdge = $response->getGraphEdge ();
		// Only grab 5 pages
		$maxPages = 5;
		$pageCount = 0;
		$this->fb_user_page = $pagesEdge;
		
// 		$this->fb_user_pages = array ();
// 		do {
			
// 			foreach ( $pagesEdge as $page ) {
// 				// var_dump($page->asArray());
				
// 				$user_page_id = $page ['id'];
				
// 				// var_dump($user_page_id);
// 				$responsePage = $fb->get ( $user_page_id, $accountsAccessToken );
// 				// var_dump($responsePage);
// 				$graphNode = $responsePage->getGraphNode ();
// 				// var_dump($graphNode['name']);
// 				$pageId = $graphNode ['id'];
// 				$pageNameEncoded = urlencode ( $graphNode ['name'] );
// 				array_push ( $this->fb_user_pages, [ 
// 						'id' => $pageId,
// 						'name' => $pageNameEncoded 
// 				] );
// 				// $fb_user_pages[$pageCount]=[$graphNode['id'] =>$graphNode['name']];
				
// 				echo 'Page ' . $pageCount . ': "' . $this->fb_user_pages [$pageCount] ['name'] . '"' . "\n\n";
				
// 				/*
// 				 * do {
// 				 * echo '<p>Likes:</p>' . "\n\n";
// 				 * //var_dump($likes->asArray());
// 				 * $responsePage = $fb->get($page['id'], $fb->getApp()->getAccessToken() );
// 				 * var_dump($responsePage);
// 				 *
// 				 *
// 				 * } while ($fb->next($user_page_id));
// 				 */
// 				$pageCount ++;
// 			}
// 		} while ( $fb->next ( $pagesEdge ) );
		
		// echo $fb_user_pages;
		return $this->fb_user_page;
	}


	/**
	 *
	 * @param fb
	 * @param accessToken
	 */
	public function getUserPhotos($fb, $accessToken) {
		// var_dump($accessToken);
		$response = $fb->get ( '/me?fields=photos.limit(10){picture,from,images,link,created_time,likes}', $accessToken );



		$accountsAccessToken = $response->getAccessToken ();
		// echo $accountsAccessToken;
		$graphNode = $response->getGraphNode ();
		return $graphNode;
		// var_dump($graphNode['name']);
		$pageId = $graphNode ['id'];
		$pageNameEncoded = urlencode ( $graphNode ['name'] );
		$pagesEdge = $response->getGraphEdge ();
		// Only grab 5 pages
		$maxPages = 5;
		$pageCount = 0;
		$this->fb_user_page = $pagesEdge;

// 		$this->fb_user_pages = array ();
// 		do {

// 			foreach ( $pagesEdge as $page ) {
// 				// var_dump($page->asArray());

// 				$user_page_id = $page ['id'];

// 				// var_dump($user_page_id);
// 				$responsePage = $fb->get ( $user_page_id, $accountsAccessToken );
// 				// var_dump($responsePage);
// 				$graphNode = $responsePage->getGraphNode ();
// 				// var_dump($graphNode['name']);
// 				$pageId = $graphNode ['id'];
// 				$pageNameEncoded = urlencode ( $graphNode ['name'] );
// 				array_push ( $this->fb_user_pages, [
// 						'id' => $pageId,
// 						'name' => $pageNameEncoded
// 				] );
// 				// $fb_user_pages[$pageCount]=[$graphNode['id'] =>$graphNode['name']];

// 				echo 'Page ' . $pageCount . ': "' . $this->fb_user_pages [$pageCount] ['name'] . '"' . "\n\n";

// 				/*
// 				 * do {
// 				 * echo '<p>Likes:</p>' . "\n\n";
// 				 * //var_dump($likes->asArray());
// 				 * $responsePage = $fb->get($page['id'], $fb->getApp()->getAccessToken() );
// 				 * var_dump($responsePage);
// 				 *
// 				 *
// 				 * } while ($fb->next($user_page_id));
// 				 */
// 				$pageCount ++;
// 			}
// 		} while ( $fb->next ( $pagesEdge ) );

		// echo $fb_user_pages;
		return $this->fb_user_page;
	}



}

?>