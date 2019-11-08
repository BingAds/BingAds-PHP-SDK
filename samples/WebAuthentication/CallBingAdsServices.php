<?php
namespace Microsoft\BingAds\Samples;

require_once "./vendor/autoload.php";

include "WebAuthHelper.php";

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\AuthorizationData;
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\V13\CustomerManagement classes that will be used.
use Microsoft\BingAds\V13\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\V13\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\V13\CustomerManagement\Paging;
use Microsoft\BingAds\V13\CustomerManagement\Predicate;
use Microsoft\BingAds\V13\CustomerManagement\PredicateOperator;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\WebAuthHelper;

use Exception;

session_start();

// If there is no user authenticated, go back to the site index.

if(!isset($_SESSION['AuthorizationData']) || 
!isset($_SESSION['AuthorizationData']->Authentication) || 
!isset($_SESSION['AuthorizationData']->Authentication->OAuthTokens)
)
{
    header('Location: '. 'https://' . $_SERVER['HTTP_HOST']);
}
else {
    // If a refresh token is already present, use it to request new access and refresh tokens.
    // You should store refresh tokens securely i.e. not in session as shown in this demo.

    $refreshToken = $_SESSION['AuthorizationData']->Authentication->OAuthTokens->RefreshToken;
    if($refreshToken != null)
    {
        $_SESSION['AuthorizationData']->Authentication->RequestOAuthTokensByRefreshToken($refreshToken);
    }

    printf("Access token: %s<br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->AccessToken);
    printf("Refresh token: %s<br/>", $_SESSION['AuthorizationData']->Authentication->OAuthTokens->RefreshToken);

    $GLOBALS['CustomerManagementProxy'] = new ServiceClient(
        ServiceClientType::CustomerManagementVersion13, 
        $_SESSION['AuthorizationData'], 
        WebAuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Microsoft Advertising user, and then search for all accounts the user can access.

    $getUserRequest = new GetUserRequest();
    $getUserRequest->UserId = null;

    $user = $GLOBALS['CustomerManagementProxy']->GetService()->GetUser($getUserRequest)->User;

    // Search for the Microsoft Advertising accounts that the user can access.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 1000;   // The first 1,000 accounts for this page of results    
    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $user->Id; 

    $searchAccountsRequest = new SearchAccountsRequest();
    $searchAccountsRequest->Predicates = array($predicate);
    $searchAccountsRequest->Ordering = null;
    $searchAccountsRequest->PageInfo = $pageInfo;

    $accounts = $GLOBALS['CustomerManagementProxy']->GetService()->SearchAccounts($searchAccountsRequest)->Accounts;

    print "-----<br/>Accounts the user can access:<br/>";
    foreach ($accounts->AdvertiserAccount as $account)
    {
        printf("Account Name: %s<br/>", $account->Name);
    }
}

session_unset();

?>