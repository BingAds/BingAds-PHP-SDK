<?php

namespace Microsoft\BingAds\Samples;

require_once "/vendor/autoload.php";


// Specify the Microsoft\BingAds\Auth classes that will be used.

use Microsoft\BingAds\Auth\PasswordAuthentication;
use Microsoft\BingAds\Auth\OAuthDesktopMobileAuthCodeGrant;
use Microsoft\BingAds\Auth\OAuthWebAuthCodeGrant;
use Microsoft\BingAds\Auth\AuthorizationData;
use Microsoft\BingAds\Auth\OAuthTokenRequestException;
use Microsoft\BingAds\Auth\ApiEnvironment;

use Exception;

/** 
 * Defines global settings that you can use for testing your application.
 * Your production implementation may vary, and you should always store sensitive information securely.
 */
final class AuthHelper {

    const DeveloperToken = 'DeveloperTokenGoesHere';
    const ApiEnvironment = ApiEnvironment::Production;
    const UserName = 'UserNameGoesHere';
    const Password = 'PasswordGoesHere';
    const OAuthRefreshTokenPath = 'refresh.txt';
    const ClientId = 'ClientIdGoesHere'; 
    const ClientSecret = 'ClientSecretGoesHere'; 
    const RedirectUri = "https://login.live.com/oauth20_desktop.srf"; 
    
    // Sets the global authorization data instance with PasswordAuthentication.

    static function AuthenticateWithUserName() 
    {
        $authentication = (new PasswordAuthentication())
            ->withUserName(AuthHelper::UserName)
            ->withPassword(AuthHelper::Password);

        $GLOBALS['AuthorizationData'] = (new AuthorizationData())
            ->withAuthentication($authentication)
            ->withDeveloperToken(AuthHelper::DeveloperToken);
    }

    // Sets the global authorization data instance with OAuthDesktopMobileAuthCodeGrant.

    static function AuthenticateWithOAuth() 
    {
        $authentication = (new OAuthDesktopMobileAuthCodeGrant())
            ->withClientId(AuthHelper::ClientId)
            ->withRedirectUri(AuthHelper::RedirectUri);

        $GLOBALS['AuthorizationData'] = (new AuthorizationData())
            ->withAuthentication($authentication)
            ->withDeveloperToken(AuthHelper::DeveloperToken);

        try
        {
            $refreshToken = AuthHelper::ReadOAuthRefreshToken();

            if($refreshToken != null) 
            {
                $GLOBALS['AuthorizationData']->Authentication->RequestOAuthTokensByRefreshToken($refreshToken);
                AuthHelper::WriteOAuthRefreshToken($GLOBALS['AuthorizationData']->Authentication->OAuthTokens->RefreshToken);
            }
            else
            {
                AuthHelper::RequestUserConsent();
            }
            
        }
        catch(OAuthTokenRequestException $e)
        {
            printf("Error: %s\n", $e->Error);
            printf("Description: %s\n", $e->Description);

            AuthHelper::RequestUserConsent();
        }
    }

    static function RequestUserConsent()
    {
        print "You need to provide consent for the application to access your Bing Ads accounts. " .
              "Copy and paste this authorization endpoint into a web browser and sign in with a Microsoft account " . 
              "with access to a Bing Ads account: \n\n" . $GLOBALS['AuthorizationData']->Authentication->GetAuthorizationEndpoint() .
              "\n\nAfter you have granted consent in the web browser for the application to access your Bing Ads accounts, " .
              "please enter the response URI that includes the authorization 'code' parameter: \n\n";
        
        $responseUri = fgets(STDIN);
        print "\n";

        $GLOBALS['AuthorizationData']->Authentication->RequestOAuthTokensByResponseUri(trim($responseUri));
        AuthHelper::WriteOAuthRefreshToken($GLOBALS['AuthorizationData']->Authentication->OAuthTokens->RefreshToken);
    }
    
    static function GetApiEnvironment() 
    {
        return AuthHelper::ApiEnvironment;
    }

    static function ReadOAuthRefreshToken() 
    {
        $refreshToken = null;
        
        if (file_exists(AuthHelper::OAuthRefreshTokenPath) && filesize(AuthHelper::OAuthRefreshTokenPath) > 0) 
        {
            $refreshTokenfile = @\fopen(AuthHelper::OAuthRefreshTokenPath,"r");
            $refreshToken = fread($refreshTokenfile, filesize(AuthHelper::OAuthRefreshTokenPath));
            fclose($refreshTokenfile);
        }

        return $refreshToken;
    }

    static function WriteOAuthRefreshToken($refreshToken) 
    {        
        $refreshTokenfile = @\fopen(AuthHelper::OAuthRefreshTokenPath,"wb");
        if (file_exists(AuthHelper::OAuthRefreshTokenPath))
        {
            fwrite($refreshTokenfile, $refreshToken);
            fclose($refreshTokenfile);
        }

        return;
    }
}
