<?php

namespace Microsoft\BingAds\Samples\V11;

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/CustomerManagementExampleHelper.php";

// Specify the Microsoft\BingAds\Auth classes that will be used.

use Microsoft\BingAds\Auth\OAuthDesktopMobileAuthCodeGrant;
use Microsoft\BingAds\Auth\OAuthWebAuthCodeGrant;
use Microsoft\BingAds\Auth\AuthorizationData;
use Microsoft\BingAds\Auth\OAuthTokenRequestException;
use Microsoft\BingAds\Auth\ApiEnvironment;
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples\V11 classes that will be used.
use Microsoft\BingAds\Samples\V11\CustomerManagementExampleHelper;

// Specify the Microsoft\BingAds\V11\CampaignManagement classes that will be used.
use Microsoft\BingAds\V11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\V11\CampaignManagement\CampaignType;

// Specify the Microsoft\BingAds\V11\CustomerManagement classes that will be used.

use Microsoft\BingAds\V11\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\V11\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\V11\CustomerManagement\Paging;
use Microsoft\BingAds\V11\CustomerManagement\Predicate;
use Microsoft\BingAds\V11\CustomerManagement\PredicateOperator;

use Exception;

/** 
 * Defines global settings that you can use for testing your application.
 * Your production implementation may vary, and you should always store sensitive information securely.
 */
final class AuthHelper {

    const DeveloperToken = 'BBD37VB98'; // For sandbox use BBD37VB98
    const ApiEnvironment = ApiEnvironment::Sandbox;
    const OAuthRefreshTokenPath = 'refresh.txt';
    const ClientId = 'ClientIdGoesHere'; 
    const ClientSecret = 'ClientSecretGoesHere'; 

    const CampaignTypes = 
        CampaignType::SearchAndContent . ' ' . 
        CampaignType::Shopping . ' ' . 
        CampaignType::DynamicSearchAds;

    const AllTargetCampaignCriterionTypes = 
        CampaignCriterionType::Age . ' ' . 
        CampaignCriterionType::DayTime . ' ' . 
        CampaignCriterionType::Device . ' ' . 
        CampaignCriterionType::Gender . ' ' . 
        CampaignCriterionType::Location . ' ' . 
        CampaignCriterionType::LocationIntent . ' ' . 
        CampaignCriterionType::Radius;

    const AllTargetAdGroupCriterionTypes = 
        AdGroupCriterionType::Age . ' ' . 
        AdGroupCriterionType::DayTime . ' ' . 
        AdGroupCriterionType::Device . ' ' . 
        AdGroupCriterionType::Gender . ' ' . 
        AdGroupCriterionType::Location . ' ' . 
        AdGroupCriterionType::LocationIntent . ' ' . 
        AdGroupCriterionType::Radius;
    
    static function Authenticate() 
    {   
        // Authenticate for Bing Ads services with a Microsoft Account, 
        // instead of providing the Bing Ads username and password set. 
        AuthHelper::AuthenticateWithOAuth();
    
        $GLOBALS['CustomerManagementProxy'] = new ServiceClient(
            ServiceClientType::CustomerManagementVersion11, 
            $GLOBALS['AuthorizationData'], 
            AuthHelper::GetApiEnvironment());
            
        // Set to an empty user identifier to get the current authenticated Bing Ads user,
        // and then search for all accounts the user may access.
        $user = CustomerManagementExampleHelper::GetUser(null)->User;
        $accounts = AuthHelper::SearchAccountsByUserId($user->Id)->Accounts;
    
        // For this example we'll use the first account.
        $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
        $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;
    }

    static function SearchAccountsByUserId($userId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CustomerManagementProxy']; 
    
        // Specify the page index and number of account results per page.

        $pageInfo = new Paging();
        $pageInfo->Index = 0;    // The first page
        $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

        $predicate = new Predicate();
        $predicate->Field = "UserId";
        $predicate->Operator = PredicateOperator::Equals;
        $predicate->Value = $userId; 

        $request = new SearchAccountsRequest();
        $request->Ordering = null;
        $request->PageInfo = $pageInfo;
        $request->Predicates = array($predicate);

        return $GLOBALS['Proxy']->GetService()->SearchAccounts($request);
    }
    
    // Sets the global authorization data instance with OAuthDesktopMobileAuthCodeGrant.

    static function AuthenticateWithOAuth() 
    {
        $authentication = (new OAuthDesktopMobileAuthCodeGrant())
            ->withEnvironment(AuthHelper::ApiEnvironment)
            ->withClientId(AuthHelper::ClientId);

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
