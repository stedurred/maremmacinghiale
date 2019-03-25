<?php
session_start();

// Composer Autoload updated

require __DIR__ . '/vendor/autoload.php';

// Facebook PHP SDK

$fb = $GLOBALS['fb'];

if (isset($fb)) {
    
    try {
        
        // INIZIO Facebook login Token
        
        // $fb->get()
        
        $helper = $fb->getRedirectLoginHelper();
        
        // var_dump($helper);
        
        // $permissions = ['public_profile' ,'email', 'user_likes']; // optional
        
        // $loginUrl = $helper->getLoginUrl('http://www.maremmacinghiale.it',$permissions);
        
        // Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
        
        // $helper = $fb->getJavaScriptHelper();
        
        // $helper = $fb->getCanvasHelper();
        
        // $helper = $fb->getPageTabHelper();
        
        // Get the \Facebook\GraphNodes\GraphUser object for the current user.
        
        // If you provided a 'default_access_token', thse '{access-token}' is optional.
        
        $accessToken = $helper->getAccessToken(); // $_SESSION['facebook_access_token'];
        
        if (! isset($accessToken)) {
            
            if ($helper->getError()) {
                
                header('HTTP/1.0 401 Unauthorized');
                
                echo "Error: " . $helper->getError() . "\n";
                
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                
                // header('HTTP/1.0 400 Bad Request');
                
                // echo 'Bad request';//TODO DA RIVEDERE L?ACCESS TOKEN DOPO LA REGITSRAZIONE
            }
            
            // exit;
        } else {
            
            // Logged in
            
            // echo '<h3>Access Token</h3>';
            
            // var_dump($accessToken);
            
            // The OAuth 2.0 client handler helps us manage access tokens
            
            $oAuth2Client = $fb->getOAuth2Client();
            
            // Get the access token metadata from /debug_token
            
            $tokenMetadata = $oAuth2Client->debugToken($accessToken);
            
            // echo '<h3>Metadata</h3>';
            
            // var_dump($tokenMetadata);
            
            // Validation (these will throw FacebookSDKException's when they fail)
            
            $tokenMetadata->validateAppId('902548573194215'); // Replace {app-id} with your app id
                                                                
            // If you know the user ID this access token belongs to, you can validate it here
                                                                
            // $tokenMetadata->validateUserId('123');
            
            $tokenMetadata->validateExpiration();
            
            if (! $accessToken->isLongLived()) {
                
                // Exchanges a short-lived access token for a long-lived one
                
                try {
                    
                    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
                } catch (Facebook\Exceptions\FacebookSDKException $e) {
                    
                    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
                    
                    exit();
                }
                
                echo '<h3>Long-lived</h3>';
                
                var_dump($accessToken);
            }
            
            // cho $_SESSION['facebook_access_token'];
            
            // User is logged in with a long-lived access token.
            
            // You can redirect them to a members-only page.
            
            // header('Location: https://example.com/members.php');
            
            $responseAccounts = $fb->get('/me/accounts', $accessToken);
            
            // echo $responseAccounts->getBody();
            
            $pageAccessToken = $responseAccounts->getAccessToken();
            echo $pageAccessToken;
            
            $responsePage = $fb->get('/1019169091455466?fields=access_token', $pageAccessToken);
            
            $page = $responsePage->getGraphPage();
            
            // var_dump($page->getFieldNames());
            
            // echo "page filelds:".var_export($responsePage->getFieldNames());
            echo '<h3>PageID</h3>' . $page->getId();
            // Logged in
            
            echo '<h3>Page Access Token</h3>' . $page->getAccessToken();
            
            $responsePost = $fb->post('/' . $page->getId() . '/feed', 'message=Prova post Inserimento Evento', $pageAccessToken);
            
            var_dump($responsePost->getBody());
            /*
             * $request = new \Facebook\FacebookRequest(
             * $session,
             * 'POST',
             * '/'.$page->getId().'/feed',
             * array (
             * 'message' => 'This is a test message',
             * )
             * );
             * $response = $request->execute();
             * $graphObject = $response->getGraphObject();
             */
            
            // $graphObject = $responsePost->
        }
    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        
        // When Graph returns an error
        
        echo 'Graph returned an error: ' . $e->getMessage();
        
        exit();
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        
        // When validation fails or other local issues
        
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        
        exit();
    }
}

if (isset($_GET['inserisci'])) 
{
    
    header("Location: inserisci_evento.php");
}

if (isset($_GET['modifica'])) 
{
    // Se lo User in sessione non è admin_squadra o capocaccia
    if (! isset($_SESSION['user'])) {
        
        header("Location: index.php");
    } elseif (($_SESSION['user_admin_squadra'] == 1 or $_SESSION['user_capocaccia'] == 1)) {
        
        if (isset($page)) {
            header("Location: user_evento.php?fb_user_page_name=" . $page->getName());
        } else {
            header("Location: user_evento.php");
        }
    }
}

if (isset($_GET['visualizza'])) 
{
    
    header("Location: calendario_eventi.php");
}

?>