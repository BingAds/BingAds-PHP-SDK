<?php
namespace Microsoft\BingAds\Samples;

require_once "./vendor/autoload.php";

include "WebAuthHelper.php";

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\AuthorizationData;
use Microsoft\BingAds\Auth\OAuthTokenRequestException;
use Microsoft\BingAds\Auth\OAuthWebAuthCodeGrant;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\WebAuthHelper;

use Exception;

try 
{
    session_start();

    if(!isset($_SESSION['AuthorizationData']) || !isset($_SESSION['AuthorizationData']->Authentication))
    {
        // Prepare the OAuth object for use with the authorization code grant flow. 
        // It is recommended that you specify a non guessable 'state' request parameter to help prevent
        // cross site request forgery (CSRF). 
        $authentication = (new OAuthWebAuthCodeGrant())
            ->withClientId(WebAuthHelper::ClientId)
            ->withClientSecret(WebAuthHelper::ClientSecret)
            ->withRedirectUri('https://' . $_SERVER['HTTP_HOST'] . WebAuthHelper::RedirectUri)
            ->withState(rand(0,999999999)); 

        // Assign this authentication instance to the global authorization_data. 

        $_SESSION['AuthorizationData'] = (new AuthorizationData())
            ->withAuthentication($authentication)
            ->withDeveloperToken(WebAuthHelper::DeveloperToken);

        $_SESSION['state'] = $_SESSION['AuthorizationData']->Authentication->State;
        
        // The user needs to provide consent for the application to access their Microsoft Advertising accounts.
        header('Location: '. $_SESSION['AuthorizationData']->Authentication->GetAuthorizationEndpoint());
    }
    
    // If the current HTTP request is a callback from the Microsoft Account authorization server,
    // use the current request url containing authorization code to request new access and refresh tokens
    if(isset($_GET['code']))
    {   
        // Verify whether the 'state' value is the same random value we created
        // when the authorization request was initiated.
        if ($_GET['state'] != $_SESSION['state'])
        {
            throw new Exception(sprintf(
                "The OAuth response state (%s) does not match the client request state (%s)", 
                $_GET['state'], 
                $_SESSION['state']));
        }   
        
        $_SESSION['AuthorizationData']->Authentication->RequestOAuthTokensByResponseUri(
            $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                
        header('Location: '. '/CallBingAdsServices.php');
    }
}
catch(OAuthTokenRequestException $e)
{
    // The user could not be authenticated or the grant is expired. 
    // The user must first sign in and if needed grant the client application access to the requested scope.
    print $e;
}
catch(Exception $e)
{
    print $e;
}   