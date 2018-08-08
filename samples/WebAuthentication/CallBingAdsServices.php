<?php
namespace Microsoft\BingAds\Samples;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "./vendor/autoload.php";

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\AuthorizationData;
use Microsoft\BingAds\Auth\OAuthWebAuthCodeGrant;

session_start();

// If there is no user authenticated, go back to the site index.

if(!isset($_SESSION['AuthorizationData']) || 
   !isset($_SESSION['AuthorizationData']->Authentication) || 
   !isset($_SESSION['AuthorizationData']->Authentication->OAuthTokens)
)
{
    header('Location: '. 'https://' . $_SERVER['HTTP_HOST']);
}

printf("Access token: %s<br/><br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->AccessToken);
printf("Refresh token: %s<br/><br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->RefreshToken);

// If a refresh token is already present, use it to request new access and refresh tokens.
// You should store refresh tokens securely i.e. not in session as shown in this demo.

$refreshToken = $_SESSION['AuthorizationData']->Authentication->OAuthTokens->RefreshToken;
if($refreshToken != null)
{
    $_SESSION['AuthorizationData']->Authentication->RequestOAuthTokensByRefreshToken($refreshToken);
}

printf("Access token: %s<br/><br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->AccessToken);
printf("Refresh token: %s<br/><br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->RefreshToken);

session_unset();

?>
